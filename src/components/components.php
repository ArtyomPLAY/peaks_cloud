<?
class C
{
  public static function navbar()
  { ?>
  <section id="navbar" class="z-50 bg-white fixed top-0 w-full anim-menu">
    <div class="container mx-auto">
      <nav class="flex items-center justify-between text-text flex-wrap py-2 px-3 md:py-4 md:px-0">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
          <span class="font-semibold text-2xl text-text tracking-tight hover:text-primary cursor-pointer">PeaksCloud</span>
        </div>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 text-text" onclick="toggleMenu()">
            <svg class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div id="menu" class="hidden w-full flex-grow lg:flex lg:items-center lg:w-auto lg:justify-end menu-anim">
          <div class="text-xl h-full">
            <a class="block mt-3 ml-3  lg:inline-block lg:mt-0 lg:ml-0 text-primary hover:text-primary-500 mr-4 cursor-pointer">
              Главная
            </a>
            <a class="block mt-3 ml-3 lg:inline-block lg:mt-0 lg:ml-0 text-text hover:text-primary mr-4 cursor-pointer">
              Домен
            </a>
            <a class="block mt-3 ml-3 lg:inline-block lg:mt-0 lg:ml-0 text-text hover:text-primary mr-4 cursor-pointer">
              Хостинг
            </a>
            <a class="block mt-3 ml-3 lg:inline-block lg:mt-0 lg:ml-0 text-text hover:text-primary mr-4 cursor-pointer">
              VPS/VDS
            </a>
            <a class="block mt-3 ml-3 lg:inline-block lg:mt-0 lg:ml-0 text-text hover:text-primary mr-4 cursor-pointer">
              Облако
            </a>
            <a class="block mt-3 ml-3 lg:inline-block lg:mt-0 lg:ml-0 text-text hover:text-primary mr-4 cursor-pointer">
              Сотрудничество
            </a>
          </div>
        </div>
      </nav>
    </div>
  </section>
<? }

public static function card($title, $desc, $rubles, $cents, array $pluses, $test_period, $margin)
{ ?>
  <div class="text-text card-tariff flex flex-col p-3 border-2 border-primary rounded-lg <? echo $margin ? " mr-5" : "" ?>" style="height: 505px">
    <h2 class="font-bold text-primary text-2xl text-center tracking-wider mb-3">
      <? echo $title ?>
    </h2>
    <div class="bg-primary text-center py-1 mb-6" style="margin-left: -0.75rem; margin-right: -0.75rem ">
      <h3 class="text-lg text-white">
        <? echo $desc ?>
      </h3>
    </div>

    <div class="flex self-center mb-6">
      <p class="text-text text-2xl font-medium leading-none">от</p>
      <h1 class="mx-1 font-medium leading-none -my-2" style="font-size: 90px">
        <? echo $rubles ?>
      </h1>
      <div class="flex items-stretch flex-col justify-between">
        <p class="leading-none text-2xl font-medium  self-start">
          <? echo $cents ?>
        </p>
        <p class="leading-none text-xl font-medium  self-end">р/мес</p>
      </div>
    </div>

    <div class="mb-4 h-full ml-2">
      <? for ($i = 0; $i < sizeof($pluses); $i++) { ?>
        <div class="inline-flex items-center <? echo $i != sizeof($pluses) - 1 ? " mb-2" : "" ?>">
          <svg widt h="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg ">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.6 11.6L2.4 7.4L1 8.8L6.6 14.4L18.6 2.4L17.2 1L6.6 11.6Z" fill="#3ABEF7" stroke="#3ABEF7" />
          </svg>
          <p class="ml-3 font-medium text-lg">
            <? echo $pluses[$i] ?>
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

public static function tariff_main($title, array $pluses, $mark)
{
  ?>
  <div class="mb-3">
    <h2 class="text-text text-3xl font-medium">
      <? echo $title ?>
    </h2>
    <div class="flex flex-col ml-1">
      <? for ($i = 0; $i < sizeof($pluses); $i++) { ?>
        <div class="inline-flex items-center">
          <? if ($mark) : ?>
            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.46989 9.29463L17.5301 2.70537C20.2228 0.747079 24 2.67054 24 6V6C24 9.32946 20.2228 11.2529 17.5301 9.29463L8.46989 2.70537C5.77723 0.747079 2 2.67054 2 6V6C2 9.32946 5.77723 11.2529 8.46989 9.29463Z" stroke="#3ABEF7" stroke-width="2.5" />
            </svg>
          <? else : ?>
            <svg widt h="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg ">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.6 11.6L2.4 7.4L1 8.8L6.6 14.4L18.6 2.4L17.2 1L6.6 11.6Z" fill="#3ABEF7" stroke="#3ABEF7" />
            </svg>
          <? endif; ?>
          <p class="ml-3 text-lg md:text-xl text-text">
            <? echo $pluses[$i] ?>
          </p>
        </div>
      <? } ?>
    </div>
  </div>
<?
}

public static function footer()
{ ?>
  <section class="h-40 bg-primary">
    <div class="container">

    </div>
  </section>
<? }
} ?>