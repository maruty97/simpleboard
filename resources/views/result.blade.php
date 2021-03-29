<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>点数結果</title>
</head>

<body>
    
    {{ $message }}
    
    <form action="tensuu1" method="get" name="numberform">
        @csrf
        <input type="submit" value="戻る" />
        <!--<input type="submit" value="Submit" onClick="return check()"/>-->
    </form>

</body>
</html>