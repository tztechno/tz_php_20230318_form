<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>確認ページ</title>
</head>

<body>
  <h1>確認ページ</h1>
<?php
session_start();
// セッションからフォームの入力内容を取り出す
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$message = $_SESSION["message"];
?>

<!-- 入力内容を表示するHTML -->
<p>お名前: <?php echo htmlspecialchars($name); ?></p>
<p>メールアドレス: <?php echo htmlspecialchars($email); ?></p>
<p>お問い合わせ内容: <?php echo htmlspecialchars($message); ?></p>

<form action="send_email.php" method="post">
  <div>
    <input type="submit" value="メールを送信する" name="submit">
    <input type="button" value="フォームに戻る" onclick="location.href='index.php'">
  </div>
</form>

</body>
</html>