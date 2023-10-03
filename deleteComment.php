<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php");

$comment_id  = $_POST['comment_id'];
$comment_delete_by = $_POST['comment_delete_by'];
$comment_delete_by_id = $_POST['comment_delete_by_id'];
$comment_delete_by_date= $_POST['comment_delete_by_date'];
$comment_delete_by_timestamp = $_POST['comment_delete_by_timestamp'];;

$query = "SELECT * FROM comment WHERE comment_id='$comment_id'";  
 
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);
 

    if ($data[0] >= 1) {
        $query = "UPDATE comment SET  
        comment_id = '$comment_id',
	comment_status = '0',
        comment_delete_by = '$comment_delete_by',
        comment_delete_by_id = '$comment_delete_by_id',
        comment_delete_by_date = '$comment_delete_by_date',
        comment_delete_by_timestamp = '$comment_delete_by_timestamp'
        
        WHERE comment_id='$comment_id'";
        
                $res = mysqli_query($con, $query);
        
                if ($res) {
                    echo json_encode("true");
                } else {
                    echo json_encode("false");
                }
            } else {
                echo json_encode("false");
            }

