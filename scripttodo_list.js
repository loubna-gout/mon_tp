document.addEventListener('DOMContentLoaded', function() {
    const taskForm = document.getElementById('task-form');
    const taskInput = document.getElementById('task-input');
    const taskList = document.getElementById('task-list');

    // Ajouter une nouvelle tâche
    taskForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const taskText = taskInput.value.trim();
        
        if (taskText !== '') {
            addTask(taskText);
            taskInput.value = '';
            taskInput.focus();
        }
    });

    // Fonction pour ajouter une tâche
    function addTask(taskText) {
        const taskItem = document.createElement('li');
        taskItem.className = 'task-item';
        
        taskItem.innerHTML = `
            <span class="task-text">${taskText}</span>
            <div class="task-actions">
                <button class="complete-btn">Terminer</button>
                <button class="delete-btn">Supprimer</button>
            </div>
        `;
        
        taskList.appendChild(taskItem);
        
        // Ajouter les événements pour les boutons
        const completeBtn = taskItem.querySelector('.complete-btn');
        const deleteBtn = taskItem.querySelector('.delete-btn');
        
        completeBtn.addEventListener('click', function() {
            taskItem.classList.toggle('completed');
            completeBtn.textContent = taskItem.classList.contains('completed') ? 'Annuler' : 'Terminer';
        });
        
        deleteBtn.addEventListener('click', function() {
            taskItem.remove();
        });
    }
});