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
?>

<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
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
    <h1><?= $welcom ?>, Гость! </h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
      require_once "inc/index.inc.php";
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
