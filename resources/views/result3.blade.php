<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録完了</title>
</head>

<body>
    <h1></h1>
    {{ $message2 }}
    
    <form action="tensuu3" method="get" name="numberform">
        @csrf
        <input type="submit" value="戻る" />
        <!--<input type="submit" value="Submit" onClick="return check()"/>-->
    </form>

</body>
</html>