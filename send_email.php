
session_start();
// セッションからフォームの入力内容を取り出す
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$message = $_SESSION["message"];


// メールの設定
$to = '送信先メールアドレス@example.com';
$subject = 'お問い合わせがありました';
$body = "お名前：{$name}\nメールアドレス：{$email}\n\n{$message}";

// メール送信処理
if (mail($to, $subject, $body)) {
  echo 'メールを送信しました。';
} else {
  echo 'メールの送信に失敗しました。';
}
// 送信完了画面に移動
header("Location: thanks.php");
exit;