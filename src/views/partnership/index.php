<?
if ($_SESSION['lang'] == "ru")
  include __DIR__ . '/ru.php';
elseif ($_SESSION['lang'] == 'en')
  include __DIR__ . '/en.php';

include $_SERVER['DOCUMENT_ROOT'] . '/src/components/components.php';

C::navbar($loc['nav']['titles'], $loc['nav']['links'], 1);
C::scrollBackBtn();
?>

<section class="<? C::sections_margin() ?>" id="tariffs">
  <div class="container mx-auto flex flex-col px-3 md:px-0 anim-appear">
    <div class="flex flex-row flex-wrap md:justify-around leading-none ">
      <div class="flex flex-col items-center w-48 mb-3 lg:mb-0">
        <img class="bg-primary w-40 h-40 rounded-full mb-4" src="" alt="">
        <h2 class="font-medium text-text text-lg text-center mb-2">До 50% от заказа</h2>
        <p class="text-text-lighten text-sm text-center">Выгодные условия для каждого партнера</p>
      </div>
      <div class="flex flex-col items-center w-48 mb-3 lg:mb-0">
        <img class="bg-primary w-40 h-40 rounded-full mb-4" src="" alt="">
        <h2 class="font-medium text-text text-lg text-center mb-2">Быстрые выплаты</h2>
        <p class="text-text-lighten text-sm text-center">Выплаты по запросу в любой момент</p>
      </div>
      <div class="flex flex-col items-center w-48 mb-3 lg:mb-0">
        <img class="bg-primary w-40 h-40 rounded-full mb-4" src="" alt="">
        <h2 class="font-medium text-text text-lg text-center mb-2">Вывод от 1 рубля</h2>
        <p class="text-text-lighten text-sm text-center">Не нужно ждать пока накопится сумма</p>
      </div>
      <div class="flex flex-col items-center w-48 mb-3 lg:mb-0">
        <img class="bg-primary w-40 h-40 rounded-full mb-4" src="" alt="">
        <h2 class="font-medium text-text text-lg text-center mb-2">Любая платежная система</h2>
        <p class="text-text-lighten text-sm text-center">Которая доступна в Яндекс.Касса</p>
      </div>
    </div>
  </div>
</section>

<section class="<? C::sections_margin() ?>" id="tariffs">
  <div class="container mx-auto flex flex-col px-3 md:px-0 anim-appear">
    <div>
      <? C::sectionHeader('Условия сотрудничества'); ?>
      <p class="text-text-lighten font-normal font-base text-lg">
        Партнерский процент изменяется в зависимости от ежемесячного оборота
      </p>
    </div>
    <div class="block">
      <h1 class="text-text text-2xl"><span class="text-primary font-medium">30%</span> - до 8000 рублей</h1>
      <h1 class="text-text text-2xl"><span class="text-primary font-medium">40%</span> - от 8000 до 16000 рублей</h1>
      <h1 class="text-text text-2xl"><span class="text-primary font-medium">45%</span> - от 16000 до 32000 рублей</h1>
      <h1 class="text-text text-2xl"><span class="text-primary font-medium">50%</span> - от 32000 рублей</h1>
    </div>
  </div>
</section>

<? C::footer($loc['nav']['titles'], $loc['nav']['links'], 1, $loc['footer']['pay'], $loc['footer']['corp']); ?>