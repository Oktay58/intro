document.addEventListener("DOMContentLoaded", function () {
    const taskInput = document.getElementById("taskInput");
    const addTaskButton = document.getElementById("addTask");
    const taskList = document.getElementById("taskList");
    const tasks = [];

    // Function to update the task list
    function updateTaskList() {
        taskList.innerHTML = "";
        for (let i = 0; i < tasks.length; i++) {
            const taskItem = document.createElement("li");
            taskItem.textContent = tasks[i];
            taskList.appendChild(taskItem);
        }
    }

    // Function to add a new task
    function addTask() {
        const taskText = taskInput.value.trim();
        if (taskText !== "") {
            tasks.push(taskText);
            taskInput.value = "";
            updateTaskList();
        }
    }

    // Event listener for the "Add Task" button
    addTaskButton.addEventListener("click", addTask);

    // Event listener for pressing Enter key in the input field
    taskInput.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            addTask();
        }
    });
});