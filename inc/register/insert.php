<?php
require('../config.php');
$db =  new Database();
$users = $User->get_users();

if(isset($_POST['add_user'])){
    $data = [
        'user_name' => $_POST["user_name"],
        'user_email' => $_POST["user_email"],
        'user_password' => $_POST["user_password"],
    ];
    //Ak niektoré pole nie je vyplnené 
    if(empty($_POST["user_name"])||empty($_POST["user_email"]) || empty($_POST["user_email"])){
        echo('Všetky polia musia byť vyplnené');
    }
    //Ak sú všetky polia vyplnené
    else{
        //prejdem usermi v databaze
        foreach($users as $user){
            //ak email co som zadala sa uz nachadza v databaze, nedovolim pouzivatelovi registrovat sa
            if($user->user_email==$data['user_email']){
                 echo 'User so zadaným emailom už existuje';   
            }
            //v opacnom pripade ide o noveho pouzivatela, zaregistrujem ho
            else{
                try{
                    $query = "INSERT INTO users (user_name, user_email, user_password) VALUES (:user_name, :user_email,:user_password)";
                    $query_run = $db->conn->prepare($query);        
                    $query_run->execute($data);
                    header("Location: ../../thankyou.php");
                }catch(PDOException $e){
                    $e->getMessage();
                    print($e);
                }
            }
        }
    }     
}
?>