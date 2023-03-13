<!-- index.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問い合わせフォーム</title>
</head>

<body>
  <h1>お問い合わせフォーム</h1>

  <form action="confirm.php" method="post" enctype="multipart/form-data">
    <div>
      <label for="name">名前：</label>
      <input type="text" name="name" id="name" required>
    </div>

    <div>
      <label for="email">メールアドレス：</label>
      <input type="email" name="email" id="email" required>
    </div>

    <div>
      <label for="phone">電話番号：</label>
      <input type="tel" name="phone" id="phone" required>
    </div>

    <div>
      <label for="address">住所：</label>
      <input type="text" name="address" id="address">
    </div>

    <div>
      <label>お問い合わせ項目：</label>
      <label for="estimate">お見積り</label>
      <input type="checkbox" name="inquiry[]" id="estimate" value="estimate" >

      <label for="question">ご質問</label>
      <input type="checkbox" name="inquiry[]" id="question" value="question" >

      <label for="consultation">ご相談</label>
      <input type="checkbox" name="inquiry[]" id="consultation" value="consultation" >

      <label for="other">その他</label>
      <input type="checkbox" name="inquiry[]" id="other" value="other" >
    </div>

    <div>
      <label>お問い合わせ種類：</label>
      <label for="estimate2">お見積り</label>
      <input type="radio" name="inquiry_type" id="estimate2" value="estimate" required>

      <label for="question2">ご質問</label>
      <input type="radio" name="inquiry_type" id="question2" value="question" required>

      <label for="consultation2">ご相談</label>
      <input type="radio" name="inquiry_type" id="consultation2" value="consultation" required>

      <label for="other2">その他</label>
      <input type="radio" name="inquiry_type" id="other2" value="other" required>
    </div>

    <div>
      <label for="message">お問い合わせ内容：</label>
      <textarea name="message" id="message" required></textarea>
    </div>

    <div>
      <label for="file">ファイルの添付：</label>
      <input type="file" name="file" id="file">
    </div>
    <div>
    <input type="checkbox" name="agreement" id="agreement" required>
    <label for="agreement">個人情報の取扱いについて同意する</label>
    </div>
    <div>
        <input type="submit" value="確認ページへ">
    </div>
</form>

<?php
session_start();
// フォームが送信された場合、入力内容をセッションに保存
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $_SESSION["name"] = $_POST["name"];
  $_SESSION["email"] = $_POST["email"];
  $_SESSION["message"] = $_POST["message"];
  // 確認画面にリダイレクト
  header("Location: confirm.php");
  exit;
}
?>

</body>
</html>