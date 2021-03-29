<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IDを登録します</title>
   </head>

<body>
    <form action="input3" method="post" name="numberform">
        @csrf
        ID：<input type="number" name="number3"/>
        <input type="submit" value="登録" />
       </form>

</body>
</html>