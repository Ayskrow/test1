
<?php

$data = [
    [
        'title' => 'Banana Republic',
        'paragraph' => 'Добро пожаловать в независимую банановую республику. Здесь свои законы, свои правила и очень подозрительные поставки бананов.',
        'image' => 'img/banana.jpg'
    ],

    [
        'title' => 'Coconut Empire',
        'paragraph' => 'Великая кокосовая империя контролирует тропические острова. Никто не знает, сколько у них кокосов на самом деле.',
        'image' => 'img/coconut.jpg'
    ],

    [
        'title' => 'Secret Island',
        'paragraph' => 'Загадочный остров, на котором происходят странные вещи. Местные жители утверждают, что ничего не видели.',
        'image' => 'img/island.jpg'
    ],
    [
        'title' => 'Previous for our turrists',
        'paragraph' => 'Самые доступные цены, прекрасные места, опытные гиды и лучшие кокосы ждут вас! Удачи в джунглях!',
        'image' => 'img/tourist.jpg'
    ]

];


$cards = [];

foreach($data as $key => $value){
    $cards[] = "
    <div class ='card'>
        <div class = 'card-image'>
            <img src='{$value['image']}' alt ='Изображение'>
        </div>
        <div class ='card-content'>
            <h2>{$value['title']}</h2>
            <p>{$value['paragraph']}</p>
        </div>
    </div> 
        ";
}

$content = [
    [
        'sub' => 'WELCOME TO BANANA REPUBLIC',
        'her' => 'Добро пожаловать в банановый мир!',
        'pag' => 'Независимые остроова, подозрительные грузы, кокосовые империи и самые лучшие бананы'
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

            <span class="subtitle">EXPLORE OUR WORLD</span>

            <h1>Наши территории</h1>

            <p>Три места, о которых лучше никому не рассказывать.</p>

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
