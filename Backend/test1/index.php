<?php

require_once "lib/func.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
if(isset($_GET['click'])){
    $data = $_GET;
    addInfo($data);
    header("Location: ?page=reviews");
    exit;
}


// ПОЛУЧЕНИЕ ОТЗЫВОВ

$comments = getInfo();
$data = [];
if($comments){
    foreach($comments as $key => $value){
        $data[] = explode(',', $value);
    }
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TECHCORE | Компьютерный магазин</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<!-- ШАПКА -->

<header>

    <div class="logo">
        TECH<span>CORE</span>
    </div>

    <nav>

        <a href="?page=home">Главная</a>

        <a href="?page=catalog">Каталог</a>

        <a href="?page=reviews">Отзывы</a>

    </nav>

</header>


<!-- ГЛАВНАЯ СТРАНИЦА -->

<?php if($page == 'home'){ ?>

    <section class="hero">

        <div class="hero-content">

            <span class="subtitle">ТЕХНОЛОГИИ БУДУЩЕГО</span>

            <h1>
                Твоя техника.
                <span>Твои возможности.</span>
            </h1>

            <p>
                TECHCORE — магазин компьютерной техники,
                комплектующих и периферии.
                Собери компьютер своей мечты вместе с нами.
            </p>

            <a href="?page=catalog" class="btn">
                Перейти в каталог
            </a>

        </div>

    </section>


    <section class="about">

        <h2>Почему выбирают TECHCORE?</h2>

        <div class="advantages">

            <div class="advantage-card">

                <h3>Качество</h3>

                <p>
                    Только проверенные комплектующие
                    и компьютерная техника.
                </p>

            </div>


            <div class="advantage-card">

                <h3>Ассортимент</h3>

                <p>
                    Процессоры, видеокарты, мониторы
                    и всё необходимое для компьютера.
                </p>

            </div>


            <div class="advantage-card">

                <h3>Поддержка</h3>

                <p>
                    Помогаем подобрать оборудование
                    под твои задачи.
                </p>

            </div>

        </div>

    </section>


<?php }elseif($page == 'catalog'){ ?>


    <!-- КАТАЛОГ -->

    <section class="catalog">

        <div class="section-title">

            <span class="subtitle">НАШ АССОРТИМЕНТ</span>

            <h1>Каталог товаров</h1>

            <p>
                Всё необходимое для твоего компьютера.
            </p>

        </div>


        <div class="products">


            <div class="product-card">

                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1591488320449-011701bb6704?w=600"
                         alt="Видеокарта">
                </div>

                <h3>Видеокарта RTX</h3>

                <p>
                    Производительная видеокарта
                    для современных игр и работы.
                </p>

                <span class="price">65 000 ₽</span>

            </div>


            <div class="product-card">

                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1555617981-dac3880eac6e?w=600"
                         alt="Процессор">
                </div>

                <h3>Процессор Intel Core</h3>

                <p>
                    Высокая производительность
                    для многозадачности.
                </p>

                <span class="price">32 000 ₽</span>

            </div>


            <div class="product-card">

                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1597872200969-2b65d56bd16b?w=600"
                         alt="Оперативная память">
                </div>

                <h3>Оперативная память DDR5</h3>

                <p>
                    Быстрая память для современных
                    компьютерных систем.
                </p>

                <span class="price">12 000 ₽</span>

            </div>


        </div>

    </section>


<?php }elseif($page == 'reviews'){ ?>


    <!-- СТРАНИЦА ОТЗЫВОВ -->

    <section class="reviews">

        <div class="section-title">

            <span class="subtitle">МНЕНИЕ ПОКУПАТЕЛЕЙ</span>

            <h1>Отзывы клиентов</h1>

            <p>
                Поделитесь впечатлениями о нашем магазине.
            </p>

        </div>


        <!-- ФОРМА ДОБАВЛЕНИЯ ОТЗЫВА -->

        <div class="form">

            <form action="?page=reviews" method="GET">

                <input type="hidden" name="page" value="reviews">

                <p>
                    <input type="text"
                           name="name"
                           placeholder="Имя"
                           required>
                </p>

                <p>
                    <input type="text"
                           name="lastname"
                           placeholder="Фамилия"
                           required>
                </p>

                <p>
                    <input type="text"
                           name="firstname"
                           placeholder="Отчество">
                </p>

                <p>
                    <input type="text"
                           name="address"
                           placeholder="Ваш город"
                           required>
                </p>

                <p>
                    <textarea cols="31"
                              rows="8"
                              name="comment"
                              placeholder="Напишите свой отзыв..."
                              required></textarea>
                </p>

                <input name="click"
                       type="submit"
                       value="Оставить отзыв"
                       class="btn">

            </form>

        </div>


        <!-- ВЫВОД ОТЗЫВОВ -->

        <div class="content">

            <h2>Отзывы покупателей</h2>


            <?php foreach($data as $key => $value){ ?>

                <?php if(count($value) == 1) continue; ?>

                <div class="cards">

                    <?php foreach($value as $k => $v){ ?>

                        <?php $v .= ';'; ?>

                        <p>
                            <?= htmlspecialchars(trim($v, ';'), ENT_QUOTES, 'UTF-8') ?>
                        </p>

                    <?php } ?>

                </div>

            <?php } ?>


        </div>

    </section>


<?php }else{ ?>


    <!-- ЕСЛИ СТРАНИЦА НЕ НАЙДЕНА -->

    <section class="not-found">

        <h1>Страница не найдена</h1>

        <a href="?page=home" class="btn">
            На главную
        </a>

    </section>


<?php } ?>


<!-- ПОДВАЛ -->

<footer>

    <div class="logo">
        TECH<span>CORE</span>
    </div>

    <p>© 2026 TECHCORE. Все права защищены.</p>

</footer>


</body>
</html>
