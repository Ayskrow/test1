<?php
    require_once "lib/func.php";

    if(isset($_GET['click'])){
        $data =$_GET;
        addInfo($data);
        header("Location: /");
    }

    
    $comments = getInfo();
    $data =[];
    foreach($comments as $key =>$value){
        $data[] = explode(',', $value);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

 <div class="form">
            <form action="" method="GET">
                <p><input type="text" name="name" placeholder="Имя"></p>
                <p><input type="text" name="lastname" placeholder="Фамилия"></p>
                <p><input type="text" name="firstname" placeholder="Отчество"></p>
                <p><input type="text" name="address" placeholder="Адрес"></p>
                <p><textarea cols="31" rows="14" name="comment" placeholder="Комментарии"></textarea></p>
                <input name="click" type="submit">
            </form>
        </div>
    <div class="wrapper">
        <div class="content">
            <h1>Добро пожаловать</h1>

            <?  foreach($data as $key => $value){?>
            <? if(count($value) == 1) continue?>
                <div class="cards">
                    <?foreach($value as $k => $v){?>
                    <? $v .= ';';?>
                         <h1><?=trim($v, ';')?></h1>
                    <?}?>
                </div>
            <?}?>
            
        </div>

       
    </div>

    
</body>
</html>