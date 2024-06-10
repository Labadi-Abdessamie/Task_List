<?php
date_default_timezone_set('Africa/Algiers');
require "connection.php";
if(isset($_GET['Domain']) && !empty($_GET['Domain'])){
    $domain=$_GET['Domain'];
}
if(isset($_GET['Task']) && !empty($_GET['Task'])){
    $task=$_GET['Task'];
}
if(isset($_GET['DateListed'])){
    if(empty($_GET['DateListed'])){
        $datelisted=date("Y-m-j"); 
    }
    else{
        $datelisted=$_GET['DateListed'];
    }
}
if(isset($_GET['DateRequired']) && !empty($_GET['DateRequired'])){
    $daterequired=$_GET['DateRequired'];
}

$sql ="INSERT INTO task(Domain,Task,DateListed,DateRequired) VALUES ('$domain','$task','$datelisted','$daterequired')";

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