<?php

//エラーメッセージ
$err = [];

//バリデーション
if(!$email = filter_input(INPUT_POST, 'email')) {
    $err[] = 'メールアドレスを記入してください。';
}
 $password = filter_input(INPUT_POST, 'password');
//正規表現
if(!preg_match("/\A(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)[a-zA-Z\d]{8,100}+\z/",$password)) {
  $err[] = 'パスワードは半角英小文字大文字数字をそれぞれ1種類以上含む8文字以上にしてください';
}

if (count($err) === 0) {
    // ユーザーを登録する処理
　;}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録完了画面</title>
</head>
<body>
<?php if (count($err) > 0) :?>
  <?php foreach ($err as $e ) : ?>
      <p><?php echo $e?></p>
  <?php endforeach ?>
<?php else : ?>
   <p>ユーザー登録が完了しました。</p>
<?php endif ?>
   <a href="./signup_form.php">戻る</a>
</body>
</html>

