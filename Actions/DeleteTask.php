<?php
require "connection.php";

if(isset($_GET['Num']) && !empty($_GET['Num'])){
    $task=$_GET['Num'];
}

$sql ="DELETE FROM task Where Num = '$task' ";

if($conn->query($sql)===TRUE){

}
else{
    echo '<script>alert("ERROR")</script>';    
}

echo '
<script type="text/javascript"> 
window.location.replace("http://localhost:1234/ToDoList/index.php");
</script>
' 

?>