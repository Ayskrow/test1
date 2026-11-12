
<?php

$data = [
    [
        'title' => 'Banana Republic',
        'paragraph' => 'Добро пожаловать в независимую банановую республику. Здесь свои законы, свои правила и очень подозрительные поставки бананов.',
        'image' => 'img/banana.jpg',
        'price' => '12000 руб.'
    ],

    [
        'title' => 'Coconut Empire',
        'paragraph' => 'Великая кокосовая империя контролирует тропические острова. Никто не знает, сколько у них кокосов на самом деле.',
        'image' => 'img/coconut.jpg',
        'price' => '300000 руб.'
    ],

    [
        'title' => 'Secret Island',
        'paragraph' => 'Загадочный остров, на котором происходят странные вещи. Местные жители утверждают, что ничего не видели.',
        'image' => 'img/island.jpg',
        'price' => '210000 руб.'
    ],
    [
        'title' => 'Benefit for our turrists',
        'paragraph' => 'Самые доступные цены, прекрасные места, опытные гиды и лучшие кокосы ждут вас! Удачи в джунглях!',
        'image' => 'img/tourist.jpg',
        'price' => '700000 руб.'
    ]

];
$colors =['orange', 'purple', 'blue', 'red'];


$cards = [];

foreach($data as $key => $value){
    $cards[] = "
    <div class ='card' style ='background-color: $colors[$key]'>
        <div class = 'card-image'>
            <img src='{$value['image']}' alt ='Изображение'>
        </div>
        <div class ='card-content'>
            <h2>{$value['title']}</h2>
            <p class ='card_p'>{$value['paragraph']}</p>
            <p class='price'>{$value['price']}</p>
        </div>
    </div> 
        ";
}

$content = [
    [
        'sub' => 'WELCOME TO BANANA REPUBLIC',
        'her' => 'Добро пожаловать в банановый мир!',
        'pag' => 'Независимые остроова, подозрительные грузы, кокосовые империи и самые лучшие бананы',
    ]
];

$box = [];

foreach($content as $k =>$v){
    $box[] ="
    <span class='subtitle'>{$v['sub']}</span>
    <h1>{$v['her']}</h1>
    <p>{$v['pag']}</p>
    ";
}
$container =[
    [
        'sab' => 'EXPLORE OUR WORLD',
        'har' => 'Наши территории',
        'peg' => 'Три места, о которых лучше некому не рассказывать'
    ]
];
$block =[];
foreach($container as $k =>$v){
    $block[] =  "
    <span class ='subtitle'>{$v['sab']}</span>
    <h1>{$v['har']}</h1>
    <p>{$v['peg']}</p>
    ";
}
?>



<!DOCTYPE html>
<html lang="ru">
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>BANANACOCO</title>
    
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    
    <header>
        
        <div class="logo">
            BANANA<span>COCO</span>
        </div>
        
        <nav>
            <a href="#">Главная</a>
            <a href="#">О нас</a>
            <a href="#">Контакты</a>
        </nav>
        
    </header>
    
    
    <section class="hero">
        
        <div class="hero-content">
            <?php foreach($box as $v){?>
            <?=$v?>
            <?php } ?>
            
        </div>
        
    </section>
    
    
    <main>
        
        
        <div class="section-title">
        
            <?php foreach($block as $v){?>
                <?= $v?>
            <?}?>
        </div>
        

        <div class="cards">

            <?php foreach($cards as $value){ ?>

                <?=$value?>

            <?php } ?>

        </div>

    </main>


    <footer>

        <div class="logo">
            BANANA<span>COCO</span>
        </div>

        <p>© 2026 BANANACOCO. Все права условно защищены.</p>

    </footer>

</body>
</html>
