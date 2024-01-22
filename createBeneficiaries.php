<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
require_once("dbconfig.php"); 

    $cin_no= $_POST['cin_no'];
    $beneficiary_full_name= $_POST['beneficiary_full_name'];
    $name_with_initial= $_POST['name_with_initial'];
    $short_key= $_POST['short_key'];
    $entity_type= $_POST['entity_type'];
    $registration_no= $_POST['registration_no'];
    $email= $_POST['email'];
    $fixed_line= $_POST['fixed_line'];
    $mobile= $_POST['mobile'];
    $whatsapp_No= $_POST['whatsapp_No'];
    $address_= $_POST['address_'];
    $resident_country= $_POST['resident_country'];
    $country_citizen= $_POST['country_citizen'];
    $contact_person_name= $_POST['contact_person_name'];
    $designation= $_POST['designation'];
    $contact_person_mobile= $_POST['contact_person_mobile'];
    $contact_person_Wh= $_POST['contact_person_Wh'];
    $contact_person_email= $_POST['contact_person_email'];
    $services_category= $_POST['services_category'];
    $activate= $_POST['activate'];
    



$query = "SELECT * FROM beneficiaries";
$res = mysqli_query($con,$query);
$data = mysqli_fetch_array($res);

// create beneficiaries
 $query = "INSERT INTO beneficiaries(
cin_no,
beneficiary_full_name,
name_with_initial,
short_key,
entity_type,
registration_no,
email,
fixed_line,
mobile,
whatsapp_No,
address_,
resident_country,
country_citizen,
contact_person_name,
designation,
contact_person_mobile,
contact_person_Wh,
contact_person_email,
services_category,
activate

 ) VALUES (
'$cin_no',
'$beneficiary_full_name',
'$name_with_initial',
'$short_key',
'$entity_type',
'$registration_no',
'$email',
'$fixed_line',
'$mobile',
'$whatsapp_No',
'$address_',
'$resident_country',
'$country_citizen',
'$contact_person_name',
'$designation',
'$contact_person_mobile',
'$contact_person_Wh',
'$contact_person_email',
'$services_category',
'$activate'

 )";

$res = mysqli_query($con,$query);	
	if ($res){
	echo json_encode("true");
	}else{
	echo json_encode("false");
	}
?>