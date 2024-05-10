<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Task Category: <?php echo ucfirst($_GET['category']); ?></h1>
    </header>
    <main>
        <!-- Display tasks here -->
        <ul id="taskList">
            <!-- Tasks will be displayed dynamically using JavaScript -->
        </ul>
        <form id="addTaskForm">
            <input type="text" id="taskInput" placeholder="Add a new task" required>
            <button type="submit">Add Task</button>
        </form>
    </main>
    <footer>
        <p><a href="index.php">Go back to Home</a></p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
