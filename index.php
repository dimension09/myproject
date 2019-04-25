<?php
  error_reporting (0);
  require_once "inc/lib.inc.php";

  set_error_handler ("myError");

  require_once "inc/data.inc.php";

  $day = strftime ('%d');
  $mon = strftime ('%B');
  $year = strftime ('%Y');

  $welcom = '';
  $hour = (int) strftime ('%H');

  if ($hour >= 0 and $hour < 6)
  {
    $welcom = 'Добрый день';

  }elseif ($hour >= 6 and $hour < 12)
  {
    $welcom = 'Доброе утро';

  }elseif ($hour >= 12 and $hour < 18)
  {
    $welcom = 'Добрый день';

  }elseif ($hour >= 18 and $hour < 23)
  {
    $welcom = 'Добрый вечер';

  }else
  {
    $welcom = 'Доброй ночи';
  }

  // Инициализация заголовков страницы

  $title = 'Сайт нашей школы';
  $header = "$welcom, Гость!";
  $id = strtolower(strip_tags(trim($_GET['id'])));
  switch ($id)
  {
    case 'about':
      $title = 'О сайте';
      $header = 'О нашем сайте';
      break;
    case 'contact':
      $title = 'Контакты';
      $header = 'Обратная связь';
      break;
    case 'table':
      $title = 'Таблица умножения';
      $header = 'Таблица умножения';
      break;
    case 'calc':
      $title = 'Он-лайн калькулятор';
      $header = 'Калькулятор';
      break;

  }
?>

<!DOCTYPE html>
<html>

<head>
  <title><?= $title ?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <?php
      require_once "inc/top.inc.php";
    ?>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?= $header ?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
      switch ($id)
      {
        case 'about':
          include 'about.php';
          break;
        case 'contact':
          include 'contact.php';
          break;
        case 'table':
          include 'table.php';
          break;
        case 'calc':
          include 'calc.php';
          break;
        default:
          include 'inc/index.inc.php';

      }
    ?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <?php
      require_once "inc/menu.inc.php";
    ?>
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    <?php
      require_once "inc/bottom.inc.php";
    ?>
    <!-- Нижняя часть страницы -->
  </div>

</body>

</html>
