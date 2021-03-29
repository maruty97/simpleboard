<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="syukudai1.css">
    <script type="text/javascript" src="contact.js"></script>
</head>
<body>
    <div id= "header">
        <a href="index.html"><img id="sora" src= "sora.jpg" alt= "空"></a>
    </div>
        <div id= "nav">
            <ul>
                <li><a href="syukudai1.html">ホーム</a></li>
                <li><a href="vision.html">ビジョン</a></li>
                <li><a href="career.html">経歴</a></li>
                <li><a href="profile.html">自己紹介</a></li>
                <li><a href="contact.html">お問い合わせ</a></li>
            </ul>
            
        </div>
       <div id= "contact1">
            <div class="contact-subtitle">
                <h2>お問い合わせ</h2>
                <p>下記フォームの必要事項を記載し、内容を確認の上、送信ボタンを押してください。弊社よりあらためてご連絡差し上げます。</p>
            </div>
            <form name="form" method="post" action="store">
                @csrf
                <label for="text">お名前（必須）</label><br>
                <input type="text" name="yourname">
                <br><label for="mail">メールアドレス（必須）</label><br>
                <input type="email" id="mail" name="mail">
                <br><label for="number">年齢</label>
                <br><input type="number" id="age" name="age">
                <br><label for="text">件名</label><br>
                <input type="text" id="subject" name="subject">
                <br><label for="comment">お問い合わせ内容</label><br>
                <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br>
                <input type="submit" onClick="return check2();" value="送信する">
                <input type="reset" value="キャンセル">
            </form>    
            
        </div>
    <div id= "footer">
        <p>&copy; 20xx ○○ All Rights Reserved.</p>
    </div>
    
</body>
</html>