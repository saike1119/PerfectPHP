<!DOCTYPE html>
<html>
<head>
    <title>フォーム</title>
</head>
<body>
<?php if (isset($_GET['name']) && strlen($_GET['name']) > 0): ?>
    <p><?php echo htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8'); ?>さん、こんにちは！</p>
<?php endif; ?>

<form action="form.php" method="get">
    <p>
        名前を入力してください：
        <input type="text" name="name"/>
        <input type="submit" value="送信"/>
    </p>
</form>
</body>
</html>
<?php