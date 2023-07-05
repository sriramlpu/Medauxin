<?php
print_r($_POST);
require_once "./dbconfig/class.mysql.php";
$contact_form = new DataBasePDO();
    if(isset($_POST['send'])){
        
        $valAr['name'] = $_POST['name'];
        $valAr['institute'] = $_POST['institute'];
        $valAr['email'] = $_POST['email'];
        $valAr['mobileNumber'] = $_POST['mobileNumber'];
        $valAr['address'] = $_POST['address'];
        $valAr['message'] = $_POST['message'];
        $result = $contact_form->insertData(CONTACT_MESSAGES, $valAr);

        if($result){
            echo "inserted successfully <br/>";
            
        }
        else{
            echo "failed to send message";
        }
    }
    else{
        echo "you're not authorized to access this file";
    }
