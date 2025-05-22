<?php
session_start();
if (!isset($_SESSION['guerriers'])) $_SESSION['guerriers'] = [];

class Guerrier {
    public $nom, $degats = 0;
    public function __construct($n) { $this->nom = $n; }
    public function frapper($cible) { 
        $cible->degats += 5; 
        return $cible->degats >= 100;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['creer'])) {
        $nom = trim($_POST['nom']);
        $existe = false;
        foreach ($_SESSION['guerriers'] as $g) if (strtolower($g->nom) === strtolower($nom)) $existe = true;
        if (!$existe && $nom != '') $_SESSION['guerriers'][] = new Guerrier($nom);
    }
    
    if (isset($_POST['frapper'])) {
        foreach ($_SESSION['guerriers'] as $i => $g) {
            if ($g->nom === $_POST['attaquant']) $a = $g;
            if ($g->nom === $_POST['cible']) { $c = $g; $ci = $i; }
        }
        if ($a && $c) {
            if ($a->frapper($c)) { echo $c->nom." mort! "; unset($_SESSION['guerriers'][$ci]); }
            else echo $a->nom." frappe ".$c->nom." (".$c->degats." dégâts) ";
        }
    }
}
?>

<form method="post">
    Nom: <input type="text" name="nom">
    <input type="submit" name="creer" value="Créer">
</form>

<?php if (!empty($_SESSION['guerriers'])): ?>
    <form method="post">
        Attaquant: <select name="attaquant">
            <?php foreach ($_SESSION['guerriers'] as $g): ?>
                <option value="<?= $g->nom ?>"><?= $g->nom ?></option>
            <?php endforeach; ?>
        </select>
        Cible: <select name="cible">
            <?php foreach ($_SESSION['guerriers'] as $g): ?>
                <option value="<?= $g->nom ?>"><?= $g->nom ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="frapper" value="Frapper">
    </form>
    <ul>
        <?php foreach ($_SESSION['guerriers'] as $g): ?>
            <li><?= $g->nom ?> (<?= $g->degats ?> dégâts)</li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>