<?php
require "connection.php";

if(isset($_GET['Num']) && !empty($_GET['Num'])){
    $task=$_GET['Num'];
}

$sql="SELECT Num,Domain,Task,DateListed,DateRequired FROM task WHERE Num='$task'";
$FinishedTask=$conn->query($sql);
$task = $FinishedTask->fetch_array(MYSQLI_NUM);

$sql="INSERT INTO completed_task(Num,Domain,Task,DateListed,DateRequired) VALUES ('$task[0]','$task[1]','$task[2]','$task[3]','$task[4]')";

if($conn->query($sql)!==TRUE){
    echo '<script>alert("ERROR")</script>';
}

$sql ="DELETE FROM task Where Num = '$task[0]' ";

if($conn->query($sql)!==TRUE){
    echo '<script>alert("ERROR")</script>';
}

echo '
<script type="text/javascript"> 
window.location.replace("http://localhost:1234/ToDoList/index.php");
</script>
' 

?>