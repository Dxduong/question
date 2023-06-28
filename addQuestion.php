<?php

try{
    include('connect.php');
    $question = $_POST['question'];
    $optionA = $_POST['optionA'];
    $optionB = $_POST['optionB'];
    $optionC = $_POST['optionC'];
    $optionD = $_POST['optionD'];
    $answer = $_POST['answer'];
    $sql = "INSERT INTO tbl_question (question, option_a, option_b, option_c, option_d, answer)
    VALUES ('$question', '$optionA', '$optionB', '$optionC', '$optionD', '$answer')";
    if ($conn->query($sql) == TRUE) {
        echo "Thêm câu hỏi vào cơ sở dữ liệu thành công";
    } else {
        echo "Lỗi thêm câu hỏi vào cơ sở dữ liệu không thành công";
    }
}catch(Exception $e){
    echo "Lỗi thêm câu hỏi không thành công: ".$e;
}