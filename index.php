<?php
// $page = $_SERVER['REQUEST_URI'];
// print substr($page, 1, -strlen('.php'));

$page = isset($_GET['page']) ? $_GET['page'] : '';




?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aura | SPA & Релакс</title>
  <!-- Подключение внешнего файла стилей -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Шапка -->
  <header>
    <div class="logo">AURA SPA</div>
    <nav>
      <a href="?page=services">Услуги</a>
      <a href="?page=booking">Запись</a>
    </nav>
  </header>

  <!-- Главный блок -->
  <section class="hero">
    <h1>Гармония тела и души</h1>
    <p>Погрузитесь в атмосферу полного расслабления, заботы и восстановления в нашем премиальном СПА-салоне.</p>
    <a href="#booking" class="btn">Записаться онлайн</a>
  </section>


  <?if($page == 'services'){?>

      <section id="services">
        <h2 class="section-title">Наши процедуры</h2>
        <div class="services-grid">
        <div class="service-card">
            <h3>Арома-массаж</h3>
            <p>Расслабляющий массаж с натуральными эфирными маслами для снятия стресса и напряжения.</p>
            <span class="price">2 500 ₽ / 60 мин</span>
        </div>
        <div class="service-card">
            <h3>Фито-бочка и пилинг</h3>
            <p>Глубокое очищение кожи в кедровой бочке с травяным сбором и мягким скрабом.</p>
            <span class="price">3 200 ₽ / 90 мин</span>
        </div>
        <div class="service-card">
            <h3>Уход за лицом</h3>
            <p>Увлажняющие и омолаживающие маски на основе органической косметики.</p>
            <span class="price">2 800 ₽ / 50 мин</span>
        </div>
        </div>
    </section>

  <?}elseif($page == 'booking'){?>
    <section id="booking">
        <h2 class="section-title">Запись на визит</h2>
        <div class="booking-container">
        <form onsubmit="event.preventDefault(); alert('Спасибо! Ваша заявка отправлена.');">
            <div class="form-group">
            <label for="name">Ваше имя</label>
            <input type="text" id="name" required placeholder="Введите имя">
            </div>
            <div class="form-group">
            <label for="phone">Номер телефона</label>
            <input type="tel" id="phone" required placeholder="+7 (___) ___-__-__">
            </div>
            <div class="form-group">
            <label for="service">Выберите процедуру</label>
            <select id="service">
                <option>Арома-массаж</option>
                <option>Фито-бочка и пилинг</option>
                <option>Уход за лицом</option>
            </select>
            </div>
            <button type="submit" class="btn btn-submit">Отправить заявку</button>
        </form>
        </div>
    </section>
  <?}?>



  <!-- Подвал -->
  <footer>
    <p>&copy; 2026 Aura SPA. Все права защищены.</p>
  </footer>

</body>
</html>
