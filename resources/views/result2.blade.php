<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力結果</title>
</head>

<body>
    <h1></h1>
    {{ $num }}
    
    <form action="tensuu2" method="get" name="numberform">
        @csrf
        <input type="submit" value="戻る" />
        <!--<input type="submit" value="Submit" onClick="return check()"/>-->
    </form>

</body>
</html>