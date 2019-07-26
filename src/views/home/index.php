<?
if ($_SESSION['lang'] == "ru") {
  //$data = file_get_contents(__DIR__ . "/ru.json");
  //$loc = json_decode($data, true);
  include __DIR__ . '/ru.php';
} elseif ($_SESSION['lang'] == 'en') {
  include __DIR__ . '/en.php';
}
include $_SERVER['DOCUMENT_ROOT'] . '/src/components/components.php';

C::navbar($loc['nav']['titles'], $loc['nav']['links'], 0);
C::scrollBackBtn();
?>

<section class="mt-3 md:mt-10 <? C::sections_margin() ?>">
  <div class="container mx-auto px-3 md:px-0 anim-appear">
    <div class="flex flex-col md:flex-row">
      <div class="mt-3 md:mt-0 order-2 md:order-none flex-col md:w-1/2">
        <? C::sectionHeader($loc['s1']['h']); ?>
        <p class="text-text-lighten font-normal font-base text-lg">
          <? echo $loc['s1']['p'] ?>
        </p>
        <button onclick="scrollToTariffs()" class="bg-primary text-sm text-white py-3 px-8 w-full md:w-auto rounded uppercase tracking-widest mt-4 hover:bg-primary-lighten button-raise">
          <a><? echo $loc['s1']['btn'] ?></a>
        </button>
      </div>
      <div class="order-1 md:order-none flex justify-center md:w-1/2">
        <div class="block">
          <img src="<? echo $loc['s1']['img_loc'] ?>" alt="<? echo $loc['s1']['img_alt'] ?>" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-gray-200 <? C::sections_margin() ?>">
  <div class="container mx-auto py-6">
    <div class="flex flex-row justify-around align-middle">
      <div class="flex max-w-full w-12 md:w-20 items-center cursor-pointer">
        <img src="./src/assets/logos/wp.png" class="crm-image" alt="Wordpress" />
      </div>
      <div class="flex max-w-full w-12 md:w-20 items-center cursor-pointer">
        <img src="./src/assets/logos/joomla.png" class="crm-image" alt="Joomla" />
      </div>
      <div class="flex max-w-full w-12 md:w-20 items-center cursor-pointer">
        <img src="./src/assets/logos/dp.png" class="crm-image" alt="Drupal" />
      </div>
      <div class="flex max-w-full w-12 md:w-20 items-center ">
        <img src="./src/assets/logos/cf.png" class="crm-image cursor-pointer" alt="CloudFlare" />
      </div>
    </div>
  </div>
</section>

<section class="<? C::sections_margin() ?>" id="tariffs">
  <div class="container mx-auto md:px-0">
    <div id="scrollTariffs" class="flex flex-row xl:justify-center overflow-x-auto px-3 py-6 md:px-0">
      <div class="relative flex" style="min-width: 295px">
        <div class="absolute">
          <? C::card($loc['s2']['tarrifs'][0]['t'], $loc['s2']['tarrifs'][0]['desc'], $loc['s2']['tarrifs'][0]['int'], $loc['s2']['tarrifs'][0]['fr'], $loc['s2']['tarrifs'][0]['diff'], $loc['s2']['test'] . ' ' . $loc['s2']['tarrifs'][0]['test'], $loc['s2']['currency'], $loc['s2']['btn']); ?>
        </div>

        <div id="swypeHint" onclick="removeSwypeHint()" class="flex md:hidden items-center justify-center w-48 h-48 absolute self-center button-swype-anim" style="opacity: 0.8">
          <img src="./src/assets/pictures/swype.svg" alt="Swipe right" srcset="" />
        </div>
      </div>

      <?
      array_shift($loc['s2']['tarrifs']);
      foreach ($loc['s2']['tarrifs'] as $key => $t) {
        C::card($t['t'], $t['desc'], $t['int'], $t['fr'], $t['diff'], $loc['s2']['test'] . ' ' . $t['test'], $loc['s2']['currency'], $loc['s2']['btn'], $key == sizeof($loc['s2']['tarrifs'])  - 1 ? false : true);
      }
      ?>
      <div class="text-transparent lg:hidden">ol</div>
    </div>
    <div class="flex text-center flex-col md:flex-row justify-center">
      <p class="text-text-lighten">
        <? echo $loc['s2']['hint'] ?>
      </p>
      <span class="text-primary">
        <a class="hover:underline ml-0 md:ml-1" href=""><? echo $loc['s2']['hint_span'] ?></a>
      </span>
    </div>
  </div>
</section>

<? $gb_left = 98; ?>
<section class="hidden md:block bg-gray-200 fixed bottom-0 w-full z-30 py-4" id="last-gb-offer">
  <div class="container mx-auto flex flex-row text-text justify-between">
    <div class="font-bold">
      <h1 class="text-4xl"><? echo $loc['ad']['h.1'] ?>
        <span class="text-primary">
          <? echo $gb_left . $loc['ad']['unit'] ?>
        </span>
        <? echo $loc['ad']['h.2'] ?>
      </h1>
      <p class="text-text-lighten font-normal font-base text-lg">
        <? echo $loc['ad']['p'] ?>
      </p>
    </div>
    <div class="flex flex-col justify-center items-center">
      <button onclick="scrollToTariffs();removeOffer()" class="bg-primary text-sm text-white py-3 px-12 mb-3 md:w-auto rounded uppercase tracking-widest hover:bg-primary-lighten button-raise">
        <a><? echo $loc['ad']['btn'] ?></a>
      </button>
      <p onclick="removeOffer()" class="text-text-lighten cursor-pointer hover:text-text">
        <? echo $loc['ad']['no'] ?>
      </p>
    </div>
  </div>
</section>

<section class="<? C::sections_margin() ?>">
  <div class="container mx-auto px-3 md:px-0">
    <? C::sectionHeader($loc['s3']['h']); ?>
    <div class="flex flex-col md:flex-row">
      <div class="md:w-1/2">
        <?
        foreach (array_slice($loc['s3']['data'], 0, 3) as $key => $item) {
          C::tariff_main($item['title'], $item['data'], $key == 2 ? false : true);
        }
        ?>
      </div>
      <div class="md:w-1/2">
        <?
        foreach (array_slice($loc['s3']['data'], 3, 2) as $key => $item) {
          C::tariff_main($item['title'], $item['data'], $key == 0 ? false : true);
        }
        ?>
      </div>
    </div>
  </div>
</section>

<section class="bg-primary overflow-hidden <? C::sections_margin() ?>">
  <div class="container mx-auto px-3 lg:px-0">
    <div class="relative">
      <div class="absolute lg:right-0 h-full partner-program-img">
        <img class="h-full" src="./src/assets/pictures/handshake.svg" alt="handshake" style="max-width: 1300px" />
      </div>
      <div class="absolute h-full xl:hidden" style="background-color: #0000005c; width: 6000px; left: -500px">
      </div>
      <div class="relative flex flex-col lg:block justify-between left-0 py-3 z-10">
        <? C::sectionHeader($loc['s4']['h'], 'text-white'); ?>
        <p class="text-white font-normal font-base text-lg mt-4 mt">
          <? echo $loc['s4']['p'] ?>
        </p>
        <button class="bg-white text-sm text-primary py-3 px-8 w-full md:w-auto rounded uppercase tracking-widest mt-2 button-raise">
          <a><? echo $loc['s4']['btn'] ?></a>
        </button>
      </div>
    </div>
  </div>
</section>

<section class="<? C::sections_margin() ?>" id="tariffs">
  <div class="container mx-auto">
    <div class="px-3 md:px-0">
      <? C::sectionHeader($loc['s5']['h']) ?>
    </div>

    <div id="scrollTariffs" class="flex flex-row xl:justify-center overflow-x-auto px-3 md:px-0 mb-3">
      <?
      C::feedback('Иван', 'Отличный хостинг, заказал самый дешевый тариф - все работает на высшем уровне. Помогли настроить WordPress. Все круто, буду продолжать пользоваться вашими услугами, спасибо!', 'Сегодня', '😊', true);
      C::feedback('Андрей', 'Использую PeaksCloud более 2-х лет, полностью удовлетворен всеми аспектами услуг (время работы, сеть, качество, стабильность), а также поддержкой клиентов.', '3 дн. назад', '😊', true);
      C::feedback('John', 'I have been with this hosting for quite long time now and it was just amazing. Do not expect "just a normal service provider", they are the best hosting provider you could ever find, except for DDoS protection, but we can work on that.', '4 дн.назад', '🙂', true);
      C::feedback('Михаил', 'Быстрый, компетентный и окончательный ответ на все вопросы, которые у меня были. Проблемы были исправлены сразу. Отличная компания! Приятно иметь дело.', '8 дн. назад', '😊', false)
      ?>
      <div class="text-transparent lg:hidden">ol</div>
    </div>
    <div class="flex text-center flex-col md:flex-row justify-center">
      <a class="hover:underline text-primary ml-0 md:ml-1 cursor-pointer"><? echo $loc['s5']['hint'] ?></a>
    </div>
  </div>
</section>

<? C::footer($loc['nav']['titles'], $loc['nav']['links'], 0, $loc['footer']['pay'], $loc['footer']['corp']); ?>