<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php"); 

    $cin_no= $_POST['cin_no'];
    $company_name= $_POST['company_name'];
    $company_email= $_POST['company_email'];
    $reg_no= $_POST['reg_no'];
    $address_= $_POST['address_'];
    $contact_person_name= $_POST['contact_person_name'];
    $contact_person_phone= $_POST['contact_person_phone'];
    $contact_person_email= $_POST['contact_person_email'];
    $user_role= $_POST['user_role'];
    $activate= $_POST['activate'];
    



$query = "SELECT * FROM company";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

// create company
 $query = "INSERT INTO company(
cin_no,
company_name,
company_email,
reg_no,
address_,
contact_person_name,
contact_person_phone,
contact_person_email,
user_role,
activate

 ) VALUES (
'$cin_no',
'$company_name',
'$company_email',
'$reg_no',
'$address_',
'$contact_person_name',
'$contact_person_phone',
'$contact_person_email',
'$user_role',
'$activate'

 )";

$res = mysqli_query($con,$query);	
	if ($res){
	echo json_encode("true");
	}else{
	echo json_encode("false");
	}
?>