<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" href="./src/assets/favicon.ico" type="image/x-icon">
  <link rel="icon" href="./src/assets/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,700&display=swap&subset=cyrillic" rel="stylesheet" />
  <link rel="stylesheet" href="./src/styles/output.css" />
  <title>PeaksCloud - главная</title>
  <meta name="Description" content="Главная страница хостинга PeaksCloud - здесь можно ознакомиться с основными преимуществами сервиса, тарифами и концепциями работы.">
</head>

<body class="mt-12 md:mt-32">

  <? include './src/views/home.php' ?>

</body>

</html>

<style>
  .menu-anim {
    animation: anim-menu 0.3s ease;
  }

  @keyframes anim-menu {
    0% {
      transform: translateY(-100px);
      opacity: 0;
    }

    50% {
      opacity: 0;
    }

    100% {
      transform: translateY(0);
      opacity: 100%;
    }
  }
</style>