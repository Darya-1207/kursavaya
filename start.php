<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Совкомбанк/Главная</title>
    <link rel="stylesheet" href="start.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body>
    <div class="header">
    <a href="#">Частным лицам</a>
    <a href="#">Малому бизнесу и ИП</a>
    <a href="#">CIB</a>
    <a href="#">О Банке</a>
    <a href ="#">|</a>
    <a href="#">Помощь</a>
    <a href="#">Офисы и банкоматы</a>
    <a href ="#">Москва</a>
    <a href ="#">8 800 250 45 36</a>
    </div>
    <div class="menu">
    <img src="img/sovcombank 1.png" class="sov">
    <a href="#">Карты</a>
    <a href="#">Кредиты</a>
    <a href="#">Сбережения</a>
    <a href="#">Платежи</a>
    <a href="#">Готовые решения</a>
    <a href="#">Новости</a>
    
    <input  class="search" type="text" placeholder="Поиск">
    <a href="enter.php"> Личный кабинет</a>
    <a href="#">|</a>
    <a href="reg.php">Регистрация</a>


    </div>
    <div class="reklama">

    
    <script type="text/javascript">
    var images = new Array();
    var i = 0;

    images[0] = 'img/1.png';
    images[1] = 'img/халва.jpg';

    function viewImages() {
        document.getElementById("img_main").src = images[i]; 
        i++;
        if (i == images.length) {
            i = 0;
        }
        setTimeout("viewImages()",7000);
    }   
</script>

<img src="" id="img_main">

<script> viewImages(); </script>
</div>

<div class="bloks">

<div class="bloks_blok1">
<img src="img/добавить.svg" alt="">
<p>Внести платеж по кредиту</p>
</div>
<div class="bloks_blok1">
    <img src="img/кредит.svg" alt="">
    <p>Оформить кредит</p>
</div>
<div class="bloks_blok3">
    <img src="img/сейф.svg" alt="">
    <p>Открыть вклад</p>
</div>
<div class="bloks_blok3">
    <img src="img/карты.svg" alt="">
    <p>Перевод с карты на карту</p>
</div>

</div>

<div class="app">
    <div class="app_blok1">
        <h1>Приложение “Совкомбанк-Халва”</h1>
        <p>Привычная выгода в удобном формате</p>
        <div class="app_blok1_left1">
        <img src="img/кошелек.jpg" alt="">
        <p>Все возможности карты «Халва», акции и магазины</p>
        </div>
        <div class="app_blok1_mid1">
            <img src="img/рейтингэ.png" alt="">
            <p>Управление вашими кредитами,вкладами и счетами</p>
        </div>
        <div class="app_blok1_right1">
            <img src="img/стрелки.png" alt="">
            <p>Платежи и переводы 24/7</p> 

        </div>
        <div class="app_blok1_right">
        <img src="img/apple.png" alt="">
        <img src="img/play.png" alt="">
        <img src="img/huavey.png" alt="">
        </div>
        
    </div>
    <div class="app_blok2">
        <img src="img/телефон.png" alt="">
    </div>
    <div class="app_blok3">
        <p>Карта «Халва», все продукты и счета на одном экране!</p>
    </div>

</div>


<div class="touch">
    <div class="touch_blok1">
        <h1>Давайте пообщаемся! Портал Совкомидея</h1>
        <h4>У вас есть идеи, как сделать обслуживание удобнее?</h4>
        <p>Ваши идеи участвуют в голосовании, зарабатывают лайки. Каждый месяц авторы лучших предложений получают подарки</p>
        <p>Мы собираем обратную связь от пользователей, делаем наши сервисы лучше вместе с вами</p>
        <a href="#">Предложить идею</a>
    </div>
    <div class="touch_blok2">
        <img src="img/girl.png" alt="">
    </div>
    <div class="touch_blok3">
        <div class="touch_blok3_left1">
            <h3>Хотите узнать больше?</h3>
            <p>О том как пользоваться услугами банка</p>
            <a href="#">Задать вопрос </a>
        </div>
        <div class="touch_blok3_left1">
            <h3>Вам что-то не понравилось?</h3>
            <p>Сообщите нам, и мы исправимся!</p>
            <a href="#">Пожаловаться</a>
        </div>
        
    </div>
</div>


<div class="footer">
    <div class="footer_blok1">
        <div class="footer_blok1_left1">
            <h3>8 800 250 45 36</h3>
            <p>Для звонков по России (бесплатно)</p>
        </div>
        <div class="footer_blok1_left1">
            <h3>+7 495 555 02 88</h3>
            <p>Для звонков из-за рубежа (платно)</p>
        </div>
    </div>

    <div class="footer_blok2">
        <p>О банке </p>
        <p>Реквизиты и лизензии</p>
        <p>Пресс-центр</p>
        <p>Работа у нас</p>
        <p>Контакты</p>
        <p>Раскрытие информации</p>
        <p>Кредитные каникулы</p>
        <p>Страница раскрытия информации в Интерфакс</p>
        <p>Реализация залогового имущества</p>
        <p>Стать самозанятым</p>
        <p>Раскрытие информации в рамках 3921-У</p>
        <p>Для дольщиков Urban Group - заемщиков ПАО «Совкомбанк»</p>
        <p>Биометрия</p>
        <p>Стандарты безопасности</p>
    </div>
    <div class="footer_blok3">
        <h3>Клиентам других банков</h3>
        <p>Держателям карт "Совесть"</p>
        <p>Клиентам АО Нордеа Банк</p>
        <p>Клиентам ЗАО ДжиИ Мани банк</p>
        <p>Клиентам АО Меткомбанк</p>
        <p>Клиентам АКБ РосЕвроБанк (АО)</p>
        <p>Клиентам ПАО "Татфондбанк"</p>
        <p>Клиентам АО АКБ «Экспресс-Волга»</p>
        <p>Клиентам АО "ВКАБАНК</p>
        <h3>Проверить статус по кредиту</h3>
    </div>
    <div class="footer_blok4">
        <img src="img/vk.png" alt="">
        <img src="img/fb.png" alt="">
        <img src="img/inst.png" alt="">
    </div>
</div>

</body>
</html>