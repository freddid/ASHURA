<?php

$url = './graphic/projects/1';

?>

<!DOCTYPE html>
<html lang="ru-RU" translate="no">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="Expires" content="0">
   <meta http-equiv="Pragma" content="no-cache">
   <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

   <title>Ashura - Благотворительная организация</title>

   <link type="text/css" rel="stylesheet" href="./css/libs/font-awesome/css/all.min.css">
   <link type="text/css" rel="stylesheet" href="./css/fonts.css">
   <link type="text/css" rel="stylesheet" href="./css/index.css">
   <link type="text/css" rel="stylesheet" href="./css/responsive.css">

   <script type="text/javascript" src="./js/libs/jquery/jquery-3.6.0.js"></script>
</head>

<body class="project-info">

   <div class="project-info__wrapper__sections">

      <?php require("./header.php") ?>

      <section class="project-info__info">
         <div class="wrapper">
            <div class="project-info__info__cont">
               <div class="project-info__info__name">Лобзин Роман</div>
               <div class="project-info__info__age">Возраст: 8 лет.</div>
               <div class="project-info__info__disease">Диагноз: двухсторонняя сенсоневральная глухота.</div>
               <div class="project-info__info__treatment">Требуется: курс реабилитации в центре ООО «Логопед-Профи».</div>
               <div class="project-info__info__price">НУЖНО: 108 300 рублей</div>
            </div>
            <div class="project-info__info__help">
               <div class="project-info__info__img">
                  <img src="<?php echo ($url) ?>/img/title.jpg" alt="">
               </div>
               <button class="btn project-info__info__btn">
                  Хочу помочь
               </button>
            </div>
         </div>
      </section>

      <section class="project-info__gallery">
         <div class="wrapper">
            <div class="project-info__gallery__video">
               <iframe width="500" height="300" src="<?php echo ($url) ?>/video/1.mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="project-info__gallery__photos">
               <div class="project-info__gallery__photo">
                  <img src="<?php echo ($url) ?>/img/other-1.jpg" alt="">
               </div>
               <div class="project-info__gallery__photo">
                  <img src="<?php echo ($url) ?>/img/other-2.jpg" alt="">
               </div>
               <div class="project-info__gallery__photo">
                  <img src="<?php echo ($url) ?>/img/other-3.jpg" alt="">
               </div>
               <div class="project-info__gallery__photo">
                  <img src="<?php echo ($url) ?>/img/other-4.jpg" alt="">
               </div>
            </div>
         </div>
      </section>

      <section class="project-info__history">
         <div class="wrapper">
            <h2 class="title project-info__history__title">
               История
            </h2>
            <div class="project-info__history__txt">
               <p> Милана, мама Ромы, делится их историей: «Во время беременности врачи сказали, что у нашего ребенка порок сердца…После его рождения мы морально готовились к тому, что ему будет проводиться операция: через 4 дня после появления на свет Роме сделали операцию по коррекции порока сердечка и через какое-то время после восстановления нас выписали домой.</p>
               <p>Рома рос обычным ребенком: веселый, пухлый малыш. К году сказал свои первые слова «мама, папа, баба»…Когда Роме было полтора года, мы стали замечать, что сынок не откликнется на имя и не реагирует на просьбы …В три года ребенку поставили диагноз: Двусторонняя сенсоневральная глухота.</p>
               <p>Не теряя времени, осенью 2016 г. сыну сделали операцию и через месяц подключили имплант. Началась новая жизнь в мире звуков, к которым Роме надо было привыкать и развивать слух. В 5 лет Рома рассказал свое первое четверостишие в садике на новогоднем утреннике, мы очень гордились своим сыном, ведь мы знали, сколько сил и труда было вложено в этот маленький, но такой значимый для нас, успех.</p>
               <p>Сын пошел в обычную общеобразовательную школу, учится по адаптированной программе для слабослышащих. Ему нравится, когда его понимают окружающие, но он очень переживает, когда что-то не может объяснить. Когда Рома слышит посторонние звуки с улицы, находясь дома, это такое счастье видеть его светящиеся глаза: «Мама, я слышу это! Что это такое там?»</p>
               <p>Воспитывать и реабилитировать глухого, но в тоже время вроде бы уже и слышащего ребенка — тяжелый труд. Нужна помощь специалистов высокого уровня. Рома понимает речь людей, говорит фразами, рассказывает стихи на праздниках, хотя их заучивание дается ему с трудом. Он очень любознательный и активный мальчик, отвечает на вопросы, сам их задает, но речь его еще недостаточно сформирована: окружающие не всегда его понимают, хотя он изо всех сил пытается говорить правильно.</p>
               <p>Чтобы у Ромы был прогресс, нужны постоянные курсы занятий в реабилитационном центре. На частое посещение у нас не хватает финансовых возможностей, работает только папа, дополнительных доходов нет.»</p>
               <p> Обращаемся к Вам с просьбой оказать помощь в оплате реабилитации для Ромы, перечислив на расчетный счет фонда доступную для Вас сумму.</p>
            </div>
         </div>
      </section>
   </div>

   <?php require("./footer.php") ?>

   <script type="text/javascript" src="./js/index.js"></script>
</body>

</html>