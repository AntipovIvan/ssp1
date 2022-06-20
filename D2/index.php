<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    .message {
        color: red;
    }
    </style>
    <title>Document</title>
</head>

<body>

    <form method="post" method="POST">
        <dl>
            <dt>氏名(必須）：</dt>
            <dd>
                <input type="text" name="name">
            </dd>
            <dt>メールアドレス(必須）：</dt>
            <dd>
                <input type="email" name="email">
            </dd>
            <dt>電話番号（任意）：</dt>
            <dd>
                <input type="tel" name="tel">
            </dd>
            <dt>メールマガジン（任意）：</dt>
            <dd>
                <input type="checkbox" id="News" name="newsletter" value="OK">
                <label for="News">希望する</label>
            </dd>
            <dt>備考（任意）：</dt>
            <dd>
                <textarea name="remarks" cols="30" rows="10"></textarea>
            </dd>
        </dl>
        <p><input type="submit" name="sub" value="送信"></p>
    </form>
    <?php
        $name = empty($_POST["name"]);
        $email = empty($_POST["email"]);
       if ($name && !$email) {
          echo '氏名を入力してください';
        } elseif (!$name && $email) {
          echo 'メールアドレスを入力してください';
        } elseif (!$name  && !$email) {
          echo '正しく送信されました';
      } 
    ?>
</body>

</html>