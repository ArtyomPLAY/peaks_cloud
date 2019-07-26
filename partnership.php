<?
session_start();
if (!isset($_SESSION['lang']))
  $_SESSION['lang'] = 'ru';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0" />
  <meta http-equiv=" X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" href="./src/assets/favicon.ico" type="image/x-icon">
  <link rel="icon" href="./src/assets/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./src/styles/output.css" />
  <title>PeaksCloud - партнерская программа</title>
  <meta name="Description" content="Главная страница хостинга PeaksCloud - здесь можно ознакомиться с основными преимуществами сервиса, тарифами и концепциями работы.">
</head>

<body class="mt-12 md:mt-32">
  <? include './src/views/partnership/index.php'; ?>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var i = 1;
      var elements = document.querySelectorAll("section");
      // animation on appear
      elements.forEach(element => {
        element.style.opacity = "0";
      });
      elements.forEach(element => {
        setTimeout(() => {
          element.style.opacity = "100";
          element.classList.add("anim-appear");
        }, 300 * i);
        i++;
      });
      setTimeout(() => {
        elements.forEach(element => {
          element.classList.remove("anim-appear");
        });
      }, 2500);
    });
  </script>
</body>

</html>