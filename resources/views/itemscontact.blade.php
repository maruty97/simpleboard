<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録表</title>
   </head>

<body>
   <h1>itemを登録してください</h1>
   <form method="post" action="items2">
       @csrf
       <!--//nameで紐付ける-->
       <label>商品ID</label><br>
       <input type=number id=itemid name="itemid"><br>
       
       <label>商品名</label><br>
       <input type=text id=name name="name"><br>
       
       <label>値段</label><br>
       <input type=number id=price name="price"><br>
       
       <label>在庫</label><br>
       <input type=number id=stock_puantity name="stock_puantity"><br>
       
       <input type="submit" onClick="itemsTable();" value="送信する"><br>
            <input type="reset" value="キャンセル"><br>
       
   </form>
    
</body>
</html>