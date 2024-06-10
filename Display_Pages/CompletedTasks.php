<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed Tasks</title>
    <style>
    .CompletedTasks{
        margin-top:5%;
        text-align:center;
    }
    table{
        width: 90%;
        margin-left:5%;
    }
    th,td{
        width: 20%;
        height: 30px;
        font-size:15px;
    }
    </style>
</head>
<body>
    <div class="CompletedTasks">
    <h1>Completed Tasks</h1>
    <?php

require "../Actions/connection.php";

$sql = "SELECT Num,Domain,Task,DateListed,DateRequired FROM completed_task ORDER BY Num";

$tasks = $conn->query($sql);

echo "
    <table border=2 cellspacing=15 cellpadding=5>
    <tr>
    <th>Num</th>
    <th>Domain</th>
    <th>Task</th>
    <th>Listed Date</th>
    <th>Required Date</th>
    </tr>
";
while($task = $tasks->fetch_assoc()){
    echo 
    "<tr>
    <td>".$task['Num']."</td>
    <td>".$task['Domain']."</td>
    <td>".$task['Task']."</td>
    <td>".$task['DateListed']."</td>
    <td>".$task['DateRequired']."</td>
    </tr>";
}
    echo "</table>";
?>
    </div>

</body>
</html>