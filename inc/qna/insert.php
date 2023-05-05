<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['add_qna'])){
    print_r("T");
    $data = [
        'question' => $_POST["question"],
        'answer' => $_POST["answer"],
    ];
    try{
        $query = "INSERT INTO qna (question, answer) VALUES (:question, :answer)";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }   
}else{
    print_r("F");
}
?>