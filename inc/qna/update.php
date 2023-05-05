<?php
require('../config.php');
$qna = $Qna->get_qna();
$db =  new Database();
if(isset($_POST['update_qna'])){

    $data = [
        'id' => $_POST["form_id"],
        'question' => $_POST["update_question"],
        'answer' => $_POST["update_answer"],
    ];
    foreach ($qna as $q){
        if($q->id==$data['id']){
            if(empty($data['question'])){
                $data['question'] = $q->question;
            }
            if(empty($data['answer'])){
                $data['answer'] = $q->answer;
            }
        }
    }
    try{
        $query =  "UPDATE qna SET question=:question, answer=:answer WHERE id=:id";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
        if(isset($_SERVER['HTTP_REFFERER'])){
            header("Location: {$_SERVER['HTTP_REFFERER']}");
        }else{
            header("Location: ../../index.php");
        }
        

    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
}else{
    print_r("F");
}
?>