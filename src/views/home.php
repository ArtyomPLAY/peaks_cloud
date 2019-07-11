<? include $_SERVER['DOCUMENT_ROOT'] . '/src/components/components.php';
C::navbar();
?>


<section class="mt-3 md:mt-10 mb-3 md:mb-10">
  <div class="container mx-auto px-3 md:px-0 anim-appear">
    <div class="flex flex-col md:flex-row">
      <div class="mt-3 md:mt-0 order-2 md:order-none flex-col md:w-1/2">
        <h1 class="text-5xl md:text-6xl text-text font-bold leading-none">
          Хостинг нового поколения
        </h1>
        <p class="text-text-lighten font-normal font-base text-lg mt-4">
          PeaksCloud - дешёвый хостинг сайтов, который позволит вам легко
          создать сайт любой тематики. Мы занимаем лидирующие позиции в данной
          сфере для миллионов людей, которые действительно доверяют и экономят
          вместе с нами, не теряя при этом функции и качество премиум хостинга.
        </p>
        <button class="bg-primary text-sm text-white py-3 px-8 w-full md:w-auto rounded uppercase tracking-widest mt-4 hover:bg-primary-lighten button-raise">
          <a onclick="scrollToTariffs()">Выбрать план</a>
        </button>
      </div>
      <div class="order-1 md:order-none flex justify-center md:w-1/2">
        <div class="block">
          <img src="./src/assets/pictures/Sale.png" alt="Экономия до 90%. Цены от 50р в месяц!" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-gray-200 md:mb-10">
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

<section class="md:mb-10" id="tariffs">
  <div class="container mx-auto md:px-0">
    <div id="scrollTariffs" class="flex flex-row xl:justify-center overflow-x-auto px-3 py-6 md:px-0">
      <div class="relative flex" style="min-width: 295px">
        <div class="absolute" >
          <? C::card("SSD HOSTING 2GB", "Для небольших сайтов", 50, "70", ["2GB на SSD", "2GB для бэкапов", "3% нагрузки", "Помощь в настройке", "Автоустановка CMS"], "Тестовый период 15 дней", true); ?>
        </div>
        
        <div id="swypeHint" onclick="removeSwypeHint()" class="flex md:hidden items-center justify-center bg-primary shadow-xl w-16 h-16 absolute rounded-full self-center button-swype-anim" style="right: -10px">
          <svg width="12" height="20" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.600098 1.4L2.0001 0L8.0001 6L2.0001 12L0.600098 10.6L5.2001 6L0.600098 1.4Z" fill="#ffffff"/>
          </svg>
        </div>
      </div>
      

      <? 
      C::card("SSD HOSTING 6GB", "Для сайтов побольше", 78, "20", ["6GB на SSD", "6GB для бэкапов", "9% нагрузки", "SSL - сертификат", "Премиум CMS плагины"], "Тестовый период 12 дней", true);
      C::card("SSD HOSTING 12GB", "Сайты со средней нагрузкой", 122, "56", ["12GB на SSD", "12GB для бэкапов", "18% нагрузки", "CloudFlare защита", "Премиум CMS плагины"], "Тестовый период 7 дней", true);
      C::card("SSD HOSTING 24GB", "Сайты с высокой нагрузкой", 200, "45", ["24GB на SSD", "24GB для бэкапов", "35% нагрузки", "CloudFlare защита", "Премиум CMS плагины"], "Тестовый период 5 дней", false);
      ?>
      <div class="w-10 lg:hidden"></div>
    </div>
  </div>
</section>

<section class="mb-3 md:mb-10">
  <div class="container mx-auto px-3 md:px-0">
    <h1 class="text-5xl md:text-6xl text-text font-bold leading-none mb-4">
      Основа всех тарифов
    </h1>
    <div class="flex flex-col md:flex-row">
      <div class="md:w-1/2">
        <?
        C::tariff_main("Безлимит", ["Сайты", "Почтовые ящики", "Базы данных", "Домены", "Поддомены", "Трафик"], true);
        C::tariff_main("Бонусы", ["Бесплатный антивирус", "Бесплатный SSL - сертификат"], false)
        ?>
      </div>
      <div class="md:w-1/2">
        <?
        C::tariff_main("Скорость", ["Скорость накопителей до 1024 мбит/с", "Пропускная способность до 1024 мбит/с"], true);
        C::tariff_main("Сервис", ["Бесплатный перенос сайта", "Личный помошник на первый месяц", "Отзывчивая поддержка", "Удобная панель управления Plesk", "Ежедневные бэкапы", "Доступ по SSH"], false)
        ?>
      </div>
    </div>
  </div>
</section>

<section class="mb-3 md:mb-10">
  <div class="container mx-auto px-3 md:px-0">
    <div class="flex flex-col md:flex-row">
      <div class="md:w-1/2">
        <h1 class="text-5xl md:text-6xl text-text font-bold leading-none mb-4">
          Этап 1
        </h1>
        <p class="text-text-lighten font-normal font-base text-lg mt-4">
          Работа хостинга постоянно отлаживается и улучшается, в связи с чем в
          данный момент проходит первый этап работы. Во время первого этапа
          будет продано 480гб хранилища Все это время цены на тарифы будут
          снижены.
        </p>
        <button class="bg-primary text-sm text-white py-3 px-8 w-full md:w-auto rounded uppercase tracking-widest mt-4 hover:bg-primary-lighten button-raise">
          <a onclick="scrollToTariffs()">Принять участие</a>
        </button>
      </div>

      <div class="relative flex justify-center md:w-1/2 mt-4 md:mt-0" style="height: 300px">
        <div class="absolute">
          <img src="./src/assets/pictures/Progress.png" alt="Этап 1 - 480гб" />
        </div>
        <div class="flex flex-col absolute w-full px-0 md:px-10 mt-4 md:mt-0">
          <div class="flex justify-between items-baseline">
            <h1 class="text-3xl lg:text-5xl text-text font-bold leading-none">
              Уже продано
            </h1>
            <div class="flex justify-end items-baseline">
              <h2 class="font-medium text-text-lighten text-xl leading-none mr-2">480GB</h1>
            </div>
          </div>
          <div>
            <div class="bg-white w-full h-16 rounded flex justify-between items-center mt-2 px-2" style="box-shadow: 0 20px 25px -5px #ffffff80, 0 10px 10px -5px #ffffff0a;">
              <div class="bg-primary h-12 rounded flex justify-end items-center" style="width:35%">
                <h2 class="font-medium text-white text-2xl leading-none mr-2">35%</h1>
              </div>
              <h2 class="font-medium text-primary text-2xl leading-none">100%</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<? C::footer(); ?>