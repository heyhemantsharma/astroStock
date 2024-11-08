<?php

include "./dbConn.php";

$today = date("Y-m-d");
$microseconds = strtotime($today) * 1000;
// echo $microseconds;

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.prod.astrotalk.in/AstroTalk/horoscope3/get?type=DAILY&zodiac=&languageId=1&time=$microseconds&timezone=Asia/Kolkata",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $phpObject = json_decode($response, true);
    $zodiacData = $phpObject["data"];
    foreach ($zodiacData as $key => $value) {
        $zodiac = $value["zodiac"];
        $luck = $value["luck"];

        $sql = $conn->prepare("INSERT INTO `predictions` (`sign`, `prediction`, `date`) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $zodiac, $luck, $today);
        $spl = $sql->execute();
    }
    if ($spl === true) {

        $sql->close();
        $sign = $_GET["sign"];
        $getPre = $conn->prepare("SELECT `prediction` FROM `predictions` WHERE `sign`= ? AND `date` = ?");
        $getPre->bind_param("ss", $sign, $today);
        $getPre->execute();
        $getPre->bind_result($prediction);

        if ($getPre->fetch()) {
            $response = ["prediction" => $prediction];
            echo json_encode($response);

            $getPre->close();
            $conn->close();
        }
    } else {
        echo "Data not insert successfully";
    }
}

?>