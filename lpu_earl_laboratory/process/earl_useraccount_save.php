<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fieldArray = [];
    foreach($_POST as $key => $value){
        $fieldArray[] = $value;
    }
    //echo json_encode($fieldArray);
    include 'db_connection.php';

    $conn = OpenCon();
    $sql1 = "UPDATE user_accounttbl 
    SET username = '$fieldArray[0]',
        password = '$fieldArray[1]',
        confirm_password = '$fieldArray[2]'
    WHERE employee_no = '$fieldArray[3]'";

   $conn->query($sql1);
    
    CloseCon($conn);
    echo json_encode([
        'ok' => 1,
    ]);
}
?>