<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

 $task_id  = $_POST['task_id'];
 $watch_list  = $_POST['watch_list'];

$query = "SELECT * FROM task WHERE task_id='$task_id'";  
 
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

    if ($data[0] >= 1) {
        $query = "UPDATE task SET  
        watch_list = '$watch_list'
        WHERE task_id='$task_id'";
                $res = mysqli_query($con, $query);
        
                if ($res) {
                    echo json_encode("true");
                } else {
                    echo json_encode("false");
                }
            } else {
                echo json_encode("false");
            }
 

