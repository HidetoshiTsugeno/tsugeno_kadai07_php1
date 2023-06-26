<?php
// inputから受け取る
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$medical_history = $_POST['medical_history'];
$fracture_history = $_POST['fracture_history'];
$osteoporosis_history = $_POST['osteoporosis_history'];

// データを整形する
$data = $name . ',' . $birthday . ',' . $gender . ',' . $medical_history . ',' . $fracture_history  . ',' . $osteoporosis_history . "\n";


// データを保存する。
file_put_contents('data/data.txt', $data, FILE_APPEND)
?>



<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>