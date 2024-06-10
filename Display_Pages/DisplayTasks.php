
<div class="DisplayTasks">

<table border=2 cellspacing=15 cellpadding=5>
    <tr>
    <th>Num</th>
    <th>Domain</th>
    <th>Task</th>
    <th>Listed Date</th>
    <th>Required Date</th>
    </tr>

<?php

require "Actions/connection.php";

$sql = "SELECT Num,Domain,Task,DateListed,DateRequired FROM task ORDER BY DateRequired";

$tasks = $conn->query($sql);


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
?>
    </table>
    <style>
    @media (min-width:1200px){
        #FormDel input,#FormFin input{
        width: 30%;
        height: 20px;
        font-size: 14px;
    }}
    @media (min-width:1000px) and (max-width:1200px){
        #FormDel input,#FormFin input{
        width: 30%;
        height: 20px;
        font-size: 14px;
    }}
    @media (min-width:800px) and (max-width:1000px){
        #FormDel input,#FormFin input{
            width: 25%;
            height: 20px;
            font-size: 12px;
    }
        #FormDel input[value],#FormFin input[value]{
            
    }}
    @media (min-width:600px) and (max-width:800px){
        #FormDel input,#FormFin input{
            width: 25%;
            height: 20px;
            font-size: 13px;
    }
    #FormDel input[value],#FormFin input[value]{
            height: 25px;
    }}
    @media (min-width:300px) and (max-width:600px){
        table{
            border : 1px black solid;
            border-spacing: 0px;
    }}
    @media (max-width:300px){}
    
    
    #FormDel input,#FormFin input{
        display: inline-block;
        text-align: center;
    }
    #FormDel input[value],#FormFin input[value]{
        cursor: pointer;
    }
    </style>

    <form id="FormFin" action="Actions/FinishTask.php" method="get">
        <p>Copy the Num of task you did complete and paste it down here</p>
        <input type="Number" name="Num" placeholder="Finished Task" required />
        <input type="submit" value="Done">
    </form>
    <form id="FormDel" action="Actions/DeleteTask.php" method="get">
        <p>Copy the Num of task you wanna delete and paste it down here</p>
        <input type="Number" name="Num" placeholder="Task To Delete" required />
        <input type="submit" value="Delete">
    </form>

</div>

