<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>点数測定</title>
    <!--
     secure_assert:httpsの場合こちらを使用
     assert:httpの場合はこちらを使用
     -->
    <script src="{{ secure_asset('js/check.js') }}"></script>
    <!--<script type="text/javascript">
    function check(){
        alert(numberform.no.value);
        if(numberform.no.value>=0 && numberform.no.value<50){
            alert('頑張りましょう');
        }else if(numberform.no.value>=50 && numberform.no.value<80){
            alert('よくできました');
        }else if(numberform.no.value>=80){
            alert('大変よくできました');
        }
    }
    </script>-->
</head>

<body>
    <form action="input" method="post" name="numberform">
        @csrf
        点数：<input type="number" name="number"/>
        <input type="submit" value="Submit" />
        <!--<input type="submit" value="Submit" onClick="return check()"/>-->
    </form>

</body>
</html>