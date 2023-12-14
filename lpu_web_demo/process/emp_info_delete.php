<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fieldArray = [];
    foreach ($_POST as $key => $value) {
        $fieldArray[] = $value;
    }
    include 'db_connection.php';

    $conn = OpenCon();
    $sql = "DELETE FROM personal_infotbl WHERE employee_no = '$fieldArray[13]'";

    $conn->query($sql);
    CloseCon($conn);
    echo json_encode([
        'ok' => 1,
    ]);
}
