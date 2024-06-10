<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>To Do List</title>
</head>
<body>

    <div id="Content">
        <h1>Create Task</h1>
    <form id="FormAdd" action="Actions/AddTask.php" method="get">
        <input type="text" name="Domain" placeholder="Domain" required />
        <input type="text" name="Task" placeholder="Task" required />
        <input type="date" name="DateListed" >
        <input type="date" name="DateRequired"required />
        <input type="submit" value="Ajouter">
    </form>
    
    <form id="CompButton" action="Display_Pages/CompletedTasks.php" method="get">
        <input type="submit" value="See The Completed Tasks">
    </form>
    </div>

    <div class="Tasks">
    <h1>Current Tasks</h1>
    <?php
    include "Display_Pages/DisplayTasks.php";
    ?>
    </div>
    <p id="HideThis">Please Make Your Browser Larger !!!<p>
</body>
</html>