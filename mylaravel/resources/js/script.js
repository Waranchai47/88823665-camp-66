function editTask(id) {
    alert(`Edit task with ID: ${id}`);
    // Implement your edit logic here (e.g., open a modal with a form)
}

function deleteTask(id) {
    if (confirm(`Are you sure you want to delete task with ID: ${id}?`)) {
        alert(`Task with ID: ${id} deleted.`);
        // Implement your delete logic here (e.g., send a request to the server)
    }
}