<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>1から入力した数値を足します</title>
   </head>

<body>
    <form action="input2" method="post" name="numberform">
        @csrf
        数値：<input type="number" name="number2"/>
        <input type="submit" value="Submit" />
       </form>

</body>
</html>