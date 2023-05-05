<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['delete_qna'])){
    try{
        $id = $_POST["delete_qna"];
        $sql = $sql = 'DELETE FROM qna WHERE id ='.$id;
        $db->conn->exec($sql);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>