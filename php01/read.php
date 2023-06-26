<?php
// ファイルを読み込む
$data = file_get_contents('data/data.txt');
// 改行でデータを配列に分割
$rows = explode("\n", $data);
?>
<html>
<head>
    <title>骨粗鬆症アプリ</title>
</head>
<body>
    <h1>登録データ一覧</h1>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>生年月日</th>
            <th>性別</th>
            <th>既往歴</th>
            <th>過去の骨折歴</th>
            <th>過去の骨粗鬆症治療歴</th>
        </tr>
        <?php
        foreach ($rows as $row) {
            // 末尾の空白行をスキップ
            if (!trim($row)) continue;
            // カンマでデータを配列に分割
            $fields = explode(',', $row);
            echo '<tr>';
            foreach ($fields as $field) {
                echo '<td>' . htmlspecialchars($field) . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>
