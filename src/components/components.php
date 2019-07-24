<?
class C
{
  public static function sections_margin()
  {
    echo "mb-5 md:mb-10";
  }
  public static function sectionHeader($text, $color = 'text-text')
  {
    echo '<h1 class="text-4xl md:text-6xl ' . $color . ' font-bold leading-none mb-3">'
      . $text
      . '</h1>';
  }



  public static function navbar($titles, $links, $current)
  {
    $ru = '<svg class="h-6 mr-2" version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M512 200H0V97c0-5 4-9 9-9h494c5 0 9 4 9 9v103z" fill="#f5f5f5" />
                    <path d="M503 424H9c-5 0-9-4-9-9V312h512v103c0 5-4 9-9 9z" fill="#ff4b55" />
                    <path fill="#41479b" d="M0 200h512v112H0z" />
                  </svg>';
    $en = '<svg class="h-6 mr-2" version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M474 88H38c-21 0-38 17-38 39v258c0 22 17 39 38 39h436c21 0 38-17 38-39V127c0-22-17-39-38-39z" fill="#41479b" />
                <path d="M511 120c-3-18-18-32-37-32h-10L300 195V88h-88v107L48 88H38c-19 0-34 14-37 32l139 92H0v88h140L1 392c3 18 18 32 37 32h10l164-107v107h88V317l164 107h10c19 0 34-14 37-32l-139-92h140v-88H372l139-92z" fill="#f5f5f5" />
                <g fill="#ff4b55">
                  <path d="M282 88h-52v142H0v52h230v142h52V282h230v-52H282z" />
                  <path d="M25 421l186-121h-32L9 410c4 5 10 9 16 11zM346 300h-32l181 117c5-3 9-7 12-13L346 300zM4 109l158 103h32L15 96c-4 3-8 8-11 13zM333 212l170-111c-5-4-10-8-16-10L300 212h33z" />
                </g>
              </svg>';
    ?>
    <section id="navbar" class="z-50 bg-white fixed top-0 w-full anim-menu">
      <div class="container mx-auto">
        <nav class="flex items-center justify-between text-text flex-wrap py-2 px-3 md:py-4 md:px-0">
          <div class="flex items-center flex-shrink-0 text-white mr-6">
            <span class="font-medium text-2xl text-text tracking-tight hover:text-primary cursor-pointer">PeaksCloud</span>
          </div>
          <div class="block lg:hidden">
            <button class="flex focus:outline-none items-center px-3 py-2 text-text" onclick="toggleMenu()">

              <svg id="open-burger" class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
              </svg>

              <svg id="close-burger" class="fill-current h-4 w-4" style="display: none" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 2L48 48M48 2L2 48" stroke="#2C3A3E" stroke-width="5" />
              </svg>

            </button>
          </div>
          <div id="menu" class="hidden w-full flex-grow lg:flex lg:items-center lg:w-auto lg:justify-end menu-anim" style="transition: 0.3s all">
            <div class="text-xl lg:inline-flex items-center h-full ml-3">
              <?
              for ($i = 0; $i < sizeof($titles); $i++) { ?>
                <a href="<? echo $links[$i] ?>" class="block mt-3 lg:inline-block lg:mt-0 lg:ml-0 <? echo $i == $current ? 'text-primary' : 'text-text' ?>  hover:text-primary-500 mr-4 cursor-pointer">
                  <? echo $titles[$i] ?>
                </a>
              <? }

              if ($_SESSION['lang'] == 'ru') : ?>
                <div class="dropdown flex items-center mt-3 lg:mt-0 -ml-2 text-text">
                  <div class="inline-flex ml-2 items-center">
                    <? echo $ru; ?>
                    <p class="uppercase">RU</p>
                  </div>
                  <div class="dropdown-lang absolute bg-gray-100 rounded overflow-hidden shadow-xl">
                    <a class="block cursor-pointer hover:bg-gray-300 leading-none px-2 py-1" href="./src/scripts/lang.php?lang=en">
                      <div class="inline-flex items-center">
                        <? echo $en; ?>
                        <p class="uppercase leading-none">EN</p>
                      </div>
                    </a>
                  </div>
                </div>
              <? elseif ($_SESSION['lang'] == 'en') : ?>
                <div class="dropdown flex items-center mt-3 lg:mt-0 -ml-2 text-text">
                  <div class="inline-flex ml-2 items-center">
                    <? echo $en; ?>
                    <p class="uppercase">EN</p>
                  </div>
                  <div class="dropdown-lang absolute bg-gray-100 rounded overflow-hidden shadow-xl">
                    <a class="block cursor-pointer hover:bg-gray-300 leading-none px-2 py-1" href="./src/scripts/lang.php?lang=ru">
                      <div class="inline-flex items-center">
                        <? echo $ru; ?>
                        <p class="uppercase leading-none">RU</p>
                      </div>
                    </a>
                  </div>
                </div>
              <? endif; ?>
            </div>
          </div>

        </nav>
      </div>
    </section>
  <? }

  public static function card($title, $desc, $rubles, $cents, array $pluses, $test_period, $currency, $margin = true)
  { ?>
    <div class="text-text card-tariff flex flex-col p-3 border-2 border-primary rounded-lg <? echo $margin ? " mr-5" : "" ?>" style="height: 470px">
      <h2 class="font-bold text-primary text-2xl text-center tracking-wider mb-3">
        <? echo $title ?>
      </h2>
      <div class="bg-primary text-center py-1 mb-3" style="margin-left: -0.75rem; margin-right: -0.75rem ">
        <h3 class="text-lg text-white">
          <? echo $desc ?>
        </h3>
      </div>

      <div class="flex self-center mb-3">
        <p class="text-text text-2xl font-medium leading-none"><? echo $_SESSION['lang'] == 'ru' ? 'от ' : '' ?></p>
        <h1 class="mx-1 font-medium leading-none -my-2" style="font-size: 90px">
          <? echo $rubles ?>
        </h1>
        <div class="flex items-stretch flex-col justify-between">
          <p class="leading-none text-2xl font-medium  self-start">
            <? echo $cents ?>
          </p>
          <p class="leading-none text-xl font-medium  self-end"><? echo $currency ?></p>
        </div>
      </div>

      <div class="inline-flex mb-3 justify-between">
        <div class="bg-primary w-1/3 flex font-medium justify-center" style="margin-left: -0.75rem; ">
          <h3 class="text-lg text-white">-40%</h3>
        </div>
        <div class="flex font-medium justify-center w-2/3">
          <h3 class="text-lg text-gray-400 line-through"> <? echo ($_SESSION['lang'] == 'ru' ? 'от ' : 'starts at ') . ($rubles * 1.67) . $currency ?></h3>
        </div>

      </div>

      <div class="mb-4 h-full ml-2">
        <? foreach ($pluses as $key => $plus) { ?>
          <div class="inline-flex items-center w-full <? echo $key != sizeof($pluses) - 1 ? 'mb-2' : '' ?>">
            <svg widt h="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg ">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.6 11.6L2.4 7.4L1 8.8L6.6 14.4L18.6 2.4L17.2 1L6.6 11.6Z" fill="#3ABEF7" stroke="#3ABEF7" />
            </svg>
            <p class="ml-3 font-medium text-lg">
              <? echo $plus ?>
            </p>
          </div>
        <? } ?>
      </div>

      <button class="bg-primary text-sm text-white py-3 px-8 w-full rounded uppercase tracking-widest hover:bg-primary-lighten mb-2">
        Заказать
      </button>
      <p class="text-text-lighten text-center text-sm">
        <? echo $test_period ?>
      </p>
    </div>
  <? }

  public static function tariff_main($title, array $pluses, $mark, $margin = true)
  {
    ?>
    <div class="<? echo $margin ? 'mb-3' : '' ?>">
      <h2 class="text-text text-2xl font-medium">
        <? echo $title ?>
      </h2>
      <div class="flex flex-col ml-1">
        <? foreach ($pluses as $plus) { ?>
          <div class="inline-flex items-center text-lg text-medium md:text-xl text-text-lighten">
            <? if ($mark) : ?>
              <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.46989 9.29463L17.5301 2.70537C20.2228 0.747079 24 2.67054 24 6V6C24 9.32946 20.2228 11.2529 17.5301 9.29463L8.46989 2.70537C5.77723 0.747079 2 2.67054 2 6V6C2 9.32946 5.77723 11.2529 8.46989 9.29463Z" stroke="#3ABEF7" stroke-width="2.5" />
              </svg>
            <? else : ?>
              <svg widt h="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg ">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.6 11.6L2.4 7.4L1 8.8L6.6 14.4L18.6 2.4L17.2 1L6.6 11.6Z" fill="#3ABEF7" stroke="#3ABEF7" />
              </svg>
            <? endif; ?>
            <p class="ml-3">
              <? echo $plus ?>
            </p>
          </div>
        <? } ?>
      </div>
    </div>
  <?
  }

  public static function payLogo($name, $alt)
  { ?>
    <div class="flex justify-center items-center mr-3 mb-3 lg:mb-0" style="max-height: 30px">
      <img class="block h-4" src="./src/assets/pictures/pay/<? echo $name ?>" alt="<? echo $alt ?>">
    </div>
  <? }

  public static function footer()
  { ?>
    <section class="bg-text">
      <div class="container mx-auto pl-3 lg:pl-0">
        <div class="flex flex-col lg:flex-row justify-between text-white pt-6 lg:pb-3">
          <div class="flex items-center mb-3 lg:mb-0">
            <a class="font-medium text-2xl text-white-halfopacity tracking-tight hover:text-primary cursor-pointer leading-none">PeaksCloud</a>
          </div>

          <div class="text-white text-lg lg:flex lg:items-center mb-3 lg:mb-0">
            <a class="block text-primary mr-4 lg:inline-block cursor-pointer hover:text-primary mb-1 lg:mb-0">
              Главная
            </a>
            <a class="block mr-4 lg:inline-block cursor-pointer hover:text-primary mb-1 lg:mb-0">
              Домен
            </a>
            <a class="block mr-4 lg:inline-block cursor-pointer hover:text-primary mb-1 lg:mb-0">
              Хостинг
            </a>
            <a class="block mr-4 lg:inline-block cursor-pointer hover:text-primary mb-1 lg:mb-0">
              VPS/VDS
            </a>
            <a class="block mr-4 lg:inline-block cursor-pointer hover:text-primary mb-1 lg:mb-0">
              Облако
            </a>
            <a class="block lg:inline-block cursor-pointer hover:text-primary">
              Сотрудничество
            </a>
          </div>
          <div class="inline-flex mb-3 lg:mb-0">
            <a class="mr-3" href="https://vk.com/peakscloud" target="_blank" rel="noopener">
              <img src="./src/assets/pictures/vk.svg" alt="vk">
            </a>
            <a class="mr-3" href="https://vk.com/peakscloud" target="_blank" rel="noopener">
              <img src="./src/assets/pictures/twitter.svg" alt="twitter">
            </a>
            <a href="https://vk.com/peakscloud" target="_blank" rel="noopener">
              <img src="./src/assets/pictures/facebook.svg" alt="facebook">
            </a>
          </div>
        </div>
        <div class="block lg:inline-flex mb-3 lg:mb-0">
          <div class="inline-flex items-center lg:mr-3">
            <p class="text-white-halfopacity text-base text-lg mr-2 leading-none mb-2 lg:mb-0">Мы принимаем </p>
          </div>
          <div class="flex items-center">
            <div class="inline-flex flex-wrap">
              <?
              C::payLogo('visa.svg', 'Visa');
              C::payLogo('mastercard.svg', 'MasterCard');
              C::payLogo('maestro.svg', 'MaestroCard');
              C::payLogo('mir.svg', 'Мир');
              C::payLogo('sberbank.svg', 'Sberbank');
              C::payLogo('tinkoff.png', 'Тинькофф банк');
              C::payLogo('alfabank.svg', 'Альфа банк');
              C::payLogo('applepay.svg', 'Apple Pay');
              C::payLogo('gpay.svg', 'Google Pay');
              C::payLogo('webmoney.svg', 'WebMoney');
              C::payLogo('qiwi.svg', 'Qiwi');
              C::payLogo('yadengi.svg', 'Яндекс.Деньги');

              ?>
            </div>
          </div>
        </div>
        <div class="py-2">
          <p class="text-white-halfopacity">© 2019 peakscloud.ru - хостинг, развитием которого управляют его пользователи</p>
        </div>
      </div>
    </section>
  <? }
  public static function scrollBackBtn()
  { ?>
    <div style="display: none; right: 0; bottom: 100px;" id="scroll-top-btn" onclick="scrollToTop()" class="fixed anim-appear flex z-50 justify-center items-center w-16 h-16 bg-primary rounded-l-full shadow-xl cursor-pointer hover:shadow-2xl">
      <svg width="18" height="11" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 0L0 6L1.4 7.4L6 2.8L10.6 7.4L12 6L6 0Z" fill="#ffffff" />
      </svg>
    </div>
  <? }

  public static function feedback($name, $text, $date, $rate, $margin)
  { ?>
    <div class="bg-gray-100 card-review rounded-lg p-4 flex flex-col justify-between <? echo $margin ? 'mr-5' : '' ?>">
      <div>
        <h2 class="text-text text-lg font-medium mb-3"><? echo $name ?></h2>
        <p class="text-text-lighten font-normal text-base">
          <? echo $text ?>
        </p>
      </div>
      <div class="flex justify-between">
        <p class="text-text-lighten font-normal text-base"><? echo $date ?></p>
        <p><? echo $rate ?></p>
      </div>
    </div>
  <? }
} ?>