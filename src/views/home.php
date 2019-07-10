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
          <a href="#tarrifs">Выбрать план</a>
        </button>
      </div>
      <div class="order-1 md:order-none flex justify-center md:w-1/2">
        <div class="block">
          <img src="./src/assets/Sale.png" alt="Экономия до 90%. Цены от 50р в месяц!" />
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

<section class="md:mb-10" id="tarrifs">
  <div class="container mx-auto md:px-0">
    <div class="flex flex-row xl:justify-center overflow-x-auto px-3 py-6 md:px-0">
      <?
      C::card("SSD HOSTING 2GB", "Для небольших сайтов", 50, "70", ["2GB на SSD", "2GB для бэкапов", "3% нагрузки", "Помощь в настройке", "Автоустановка CMS"], "Тестовый период 15 дней", true);
      C::card("SSD HOSTING 6GB", "Для сайтов побольше", 78, "20", ["6GB на SSD", "6GB для бэкапов", "9% нагрузки", "SSL - сертификат", "Премиум CMS плагины"], "Тестовый период 12 дней", true);
      C::card("SSD HOSTING 12GB", "Сайты со средней нагрузкой", 122, "56", ["12GB на SSD", "12GB для бэкапов", "18% нагрузки", "CloudFlare защита", "Премиум CMS плагины"], "Тестовый период 7 дней", true);
      C::card("SSD HOSTING 12GB", "Сайты с высокой нагрузкой", 200, "45", ["24GB на SSD", "24GB для бэкапов", "35% нагрузки", "CloudFlare защита", "Премиум CMS плагины"], "Тестовый период 5 дней", false);
      ?>
      <div class="w-10 lg:hidden">  </div>
    </div>
  </div>
</section>

<section class="mb-3 md:mb-10">
  <div class="container mx-auto px-3 md:px-0">
    <h1 class="text-5xl md:text-6xl text-text font-bold leading-none mb-4">Основа всех тарифов</h1>
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

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var i = 1;
    var elements = document.querySelectorAll('section');

    elements.forEach(element => {
      element.style.opacity = '0';
    })
    elements.forEach(element => {
      setTimeout(() => {
        element.style.opacity = '100';
        element.classList.add('anim-appear');
      }, 300 * i);
      i++;
    });
    setTimeout(() => {
      elements.forEach(element => {
        element.classList.remove('anim-appear');
        console.log('done');

      });
    }, 2500);
  });
</script>