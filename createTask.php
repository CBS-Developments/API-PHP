
<?php 
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php"); 

    $task_id= $_POST['task_id'];
    $main_task_id = $_POST['main_task_id'];
    $task_title= $_POST['task_title'];
    $task_type= $_POST['task_type'];
    $due_date= $_POST['due_date'];
    $task_type_name= $_POST['task_type_name'];
    $task_description= $_POST['task_description'];
    $task_create_by_id= $_POST['task_create_by_id'];
    $task_create_by= $_POST['task_create_by'];
    $task_create_date= $_POST['task_create_date'];
    $task_create_month= $_POST['task_create_month'];
    $task_created_timestamp= $_POST['task_created_timestamp'];
    $task_status= $_POST['task_status'];
    $task_status_name= $_POST['task_status_name'];
    $action_taken_by_id= $_POST['action_taken_by_id'];
    $action_taken_by= $_POST['action_taken_by'];
    $action_taken_date= $_POST['action_taken_date'];
    $action_taken_timestamp= $_POST['action_taken_timestamp'];
    $task_reopen_by= $_POST['task_reopen_by'];
    $task_reopen_by_id= $_POST['task_reopen_by_id'];
    $task_reopen_date= $_POST['task_reopen_date'];
    $task_reopen_timestamp= $_POST['task_reopen_timestamp'];
    $task_finished_by= $_POST['task_finished_by'];
    $task_finished_by_id= $_POST['task_finished_by_id'];
    $task_finished_by_date= $_POST['task_finished_by_date'];
    $task_finished_by_timestamp= $_POST['task_finished_by_timestamp'];
    $task_edit_by= $_POST['task_edit_by'];
    $task_edit_by_id= $_POST['task_edit_by_id'];
    $task_edit_by_date= $_POST['task_edit_by_date'];
    $task_edit_by_timestamp= $_POST['task_edit_by_timestamp'];
    $task_delete_by= $_POST['task_delete_by'];
    $task_delete_by_id= $_POST['task_delete_by_id'];
    $task_delete_by_date= $_POST['task_delete_by_date'];
    $task_delete_by_timestamp= $_POST['task_delete_by_timestamp'];
    $source_from= $_POST['source_from'];
    $assign_to= $_POST['assign_to'];
    $company= $_POST['company'];
    $document_number= $_POST['document_number'];
    $watch_list= $_POST['watch_list'];


$query = "SELECT * FROM task";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

// create task
 $query = "INSERT INTO task(
task_id,
main_task_id,
task_title,
task_type,
due_date,
task_type_name,
task_description,
task_create_by_id,
task_create_by,
task_create_date,
task_create_month,
task_created_timestamp,
task_status,
task_status_name,
action_taken_by_id,
action_taken_by,
action_taken_date,
action_taken_timestamp,
task_reopen_by,
task_reopen_by_id,
task_reopen_date,
task_reopen_timestamp,
task_finished_by,
task_finished_by_id,
task_finished_by_date,
task_finished_by_timestamp,
task_edit_by,
task_edit_by_id,
task_edit_by_date,
task_edit_by_timestamp,
task_delete_by,
task_delete_by_id,
task_delete_by_date,
task_delete_by_timestamp,
source_from,
assign_to,
company,
document_number,
watch_list
 ) VALUES (
'$task_id',
'$main_task_id',
'$task_title',
'$task_type',
'$due_date',
'$task_type_name',
'$task_description',
'$task_create_by_id',
'$task_create_by',
'$task_create_date',
'$task_create_month',
'$task_created_timestamp',
'$task_status',
'$task_status_name',
'$action_taken_by_id',
'$action_taken_by',
'$action_taken_date',
'$action_taken_timestamp',	
'$task_reopen_by',
'$task_reopen_by_id',
'$task_reopen_date',
'$task_reopen_timestamp',
'$task_finished_by',
'$task_finished_by_id',
'$task_finished_by_date',
'$task_finished_by_timestamp',
'$task_edit_by',
'$task_edit_by_id',
'$task_edit_by_date',
'$task_edit_by_timestamp',
'$task_delete_by',
'$task_delete_by_id',
'$task_delete_by_date',
'$task_delete_by_timestamp',
'$source_from',
'$assign_to',
'$company',
'$document_number',
'$watch_list'
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