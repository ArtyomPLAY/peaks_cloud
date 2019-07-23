<?
session_start();
$lang = $_GET['lang'];

switch ($lang) {
  case 'en':
    $_SESSION['lang'] = 'en';
    break;

  case 'ru':
    $_SESSION['lang'] = 'ru';
    break;
}

header('Location: /');
