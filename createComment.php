<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php"); 

    $comment_id= $_POST['comment_id'];
    $task_id= $_POST['task_id'];
    $comment= $_POST['comment'];
    $comment_create_by_id= $_POST['comment_create_by_id'];
    $comment_create_by= $_POST['comment_create_by'];
    $comment_create_date= $_POST['comment_create_date'];
    $comment_created_timestamp= $_POST['comment_created_timestamp'];
    $comment_status= $_POST['comment_status'];
    $comment_edit_by= $_POST['comment_edit_by'];
    $comment_edit_by_id= $_POST['comment_edit_by_id'];
    $comment_edit_by_date= $_POST['comment_edit_by_date'];
    $comment_edit_by_timestamp= $_POST['comment_edit_by_timestamp'];
    $comment_delete_by= $_POST['comment_delete_by'];
    $comment_delete_by_id= $_POST['comment_delete_by_id'];
    $comment_delete_by_date= $_POST['comment_delete_by_date'];
    $comment_delete_by_timestamp= $_POST['comment_delete_by_timestamp'];
    $comment_attachment= $_POST['comment_attachment'];

$query = "SELECT * FROM comment";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

// create task
 $query = "INSERT INTO comment(
comment_id,
task_id,
comment,
comment_create_by_id,
comment_create_by,
comment_create_date,
comment_created_timestamp,
comment_status,
comment_edit_by,
comment_edit_by_id,
comment_edit_by_date,
comment_edit_by_timestamp,
comment_delete_by,
comment_delete_by_id,
comment_delete_by_date,
comment_delete_by_timestamp,
comment_attachment
 ) VALUES (
'$comment_id',
'$task_id',
'$comment',
'$comment_create_by_id',
'$comment_create_by',
'$comment_create_date',
'$comment_created_timestamp',
'$comment_status',
'$comment_edit_by',
'$comment_edit_by_id',
'$comment_edit_by_date',
'$comment_edit_by_timestamp',
'$comment_delete_by',
'$comment_delete_by_id',
'$comment_delete_by_date',
'$comment_delete_by_timestamp',
'$comment_attachment'
 )";

$res = mysqli_query($con,$query);	
	if ($res){
	echo json_encode("true");
	}else{
	echo json_encode("false");
	}

	//if (mysqli_query($con, $query)) {
 	//		echo "New record created successfully";
	//		} else {
  	//	echo "Error: " . $query. "<br>" . mysqli_error($con);
	// }


?>