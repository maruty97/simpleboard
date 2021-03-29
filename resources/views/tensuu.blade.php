<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Laravel基礎　ホームワーク①</title>
    <script type="text/javascript">
    function result(){
        if("tensuu"<=0 && "tensuu">50){
            console.log("頑張りましょう");
        }else if("tensuu"<=50 && "tensuu">80){
            console.log("よくできました");
        }else if("tensuu" <=80){
            console.log("大変よくできました");
        }
    }
   </script>
</head>

<body>
    <h1>点数（1〜100）を入力してください。</h1>
    <label for="number"  name="tensuu">点数</label>
    <input type="number" name="tensuu">
    <input type="submit" onClick=return result(); value="送信">
</body>
</html>