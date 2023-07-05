<?php
    require_once "../dbconfig/class.mysql.php";
    $login_form = new DataBasePDO();
    if (isset($_POST['login'])){
        $user_name = $_POST['username'];
        $password = $_POST['password'];

        $whereAr['user_name'] = "'$user_name'";
        $whereAr['password'] = "'$password'";
        $result = $login_form->selectData(TABLE_ADMIN,$whereAr);
        if($result){
            $data = file_get_contents('../home.php');
            print($data);
        }
        else{
            echo "failed";
        }

    }
    // if(isset($_POST['login'])){
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    //     $conn = mysqli_connect('localhost', 'root', '', 'medauxin');
    //     if(!$conn){
    //         echo mysqli_connect_error();
    //     }

    //     $sql = "SELECT * FROM admins WHERE user_name = '$username'";
    //     $result = mysqli_query($conn, $sql);
    //     $row_count = mysqli_num_rows($result);
    //     if($row_count>0){
    //         $row = mysqli_fetch_array($result);
    //         if ($row['password'] == $password){
    //             echo "login successful!!";
    //         }
    //         else{
    //             echo "password is incorrect. Please chek enter right password";
    //         }
    //     }
    //     else{
    //         echo "no username found";
    //     }
    // }

?>