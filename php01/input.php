<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
</head>

<body>
<h1>骨粗鬆症アプリ</h1>
    <form action="write.php" method="post">
        <label>名前：<input type="text" name="name" required></label><br>
        <label>生年月日：<input type="date" name="birthday" required></label><br>
        <label>性別：<input type="radio" name="gender" value="male" required>男性
        <input type="radio" name="gender" value="female">女性</label><br>
        <label>既往歴：<input type="text" name="medical_history" required></label><br>
        <label>過去の骨折歴：<input type="text" name="fracture_history" required></label><br>
        <label>過去の骨粗鬆症治療歴：<input type="text" name="osteoporosis_history" required></label><br>
        <input type="submit" value="送信">
    </form>
</body>

</html>