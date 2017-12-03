<?php

//データベースに接続
$link = mysqli_connect('127.0.0.1', 'root', 'root', 'online_bbs');
if (!$link) {
    die('データベースに接続できません:' . mysqli_error());
}

//データベースを選択する
mysqli_select_db($link, 'online_bbs');

$errors = array();

//POSTなら保存処理を実行する
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//名前が正しいかチェックする
    $name = null;
    if (!isset($_POST['name']) || !strlen($_POST['name'])) {
        $errors['name'] = '名前を入力してください';
    } elseif (strlen($_POST['name']) > 40) {
        $errors['name'] = '名前は40文字以内で入力してください';
    } else {
        $name = $_POST['name'];
    }
    var_dump($name);


    //ひとことが正しく入力されているかチェックする
    $comment = null;
    if (!isset($_POST['comment']) || !strlen($_POST['comment'])) {
        $errors['comment'] = 'ひとことを入力してください';
    } elseif (strlen($_POST['comment']) > 200) {
        $errors['comment'] = 'ひとことは200文字以内で入力してください';
    } else {
        $comment = $_POST['comment'];
    }
    var_dump($comment);


    var_dump($errors);
    //エラーがなければ保存
    if (count($errors) === 0) {
        $sql = "INSERT INTO `post` (`name`,`comment`,`created_at`) VALUES ('"
            . mysqli_real_escape_string($link, $name) . "','"
            . mysqli_real_escape_string($link, $comment) . "','"
            . date('Y-m-d H:i:s') . "')";

        //保存する
        mysqli_query($link, $sql);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>ひとこと掲示板</title>
</head>
<body>
<h1>ひとこと掲示板</h1>

<form action="bbs.php" method="post">
    <p>
        名前：<input type="text" name="name"/><br/>
        ひとこと：<input type="text" name="comment" size="60"/><br/>
        <input type="submit" name="submit" value="送信"/>
    </p>
</form>
</body>
</html>