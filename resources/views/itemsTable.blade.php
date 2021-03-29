<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アイテム登録表</title>
   </head>

<body>
    <table border=1>
        <tr>
            <th>商品ID</th>
            <th>商品名</th>
            <th>値段</th>
            <th>在庫</th>
            <th>更新</th>
            <th>削除</th>
            
        </tr>   
        
        @foreach($items as $item)
        <tr>
            <td>{{$item->itemid}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->stock_puantity}}</td>
            <td><input type="submit" value="更新" name="kousin"></td>
            <td><input type="submit" value="削除" name="sakujo"></td>
        </tr>
        @endforeach
        <!--bladeでforeachを回すとき@foreach($items as $item) @endforeachで囲う-->
        
    </table>       
    <form action="itemscontact">
        <input type="submit" value="新規登録">
    </form>
 
    
    
</body>
</html>