<?php

if (isset($_POST['select'])) {
    $sign = $_POST['select'];
    $today = date("Y-m-d");

    include "./dbConn.php";

    $sql = $conn->prepare("SELECT `prediction` FROM `predictions` WHERE `sign`= ? AND `date` = ?");
    $sql->bind_param("ss", $sign, $today);
    $sql->execute();

    $sql->bind_result($prediction);

    if ($sql->fetch()) {
        $response = ["prediction" => $prediction];
        echo json_encode($response);
    } else {
        header("Location: ./prediction.php?sign=$sign");
    }

    $sql->close();
    $conn->close();
}


?>