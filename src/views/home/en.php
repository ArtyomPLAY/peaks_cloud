<?

$loc = array(
  'nav' => array(
    'titles' => ['Home', 'Domen', 'Hosting', 'VPS/VDS', 'Cloud', 'Partnership'],
    'links' => ['/', '', '', '', '', '']
  ),
  's1' => array(
    'h' => 'Next generation hosting',
    'p' => 'PeaksCloud - cheap website hosting, which will help you easily make website of any category. We lead top positions in this field for millions of people, who trust us and save money with us, without losing functionality and premium quality.',
    'btn' => 'Choose plan',
    'img_loc' => './src/assets/pictures/sale.svg',
    'img_alt' => 'Sale under 90$'
  ),
  's2' => array(
    'currency' => '$/PM',
    'btn' => 'Order',
    'test' => 'Test period',
    'tarrifs' => [
      [
        't' => 'SSD HOSTING 2GB',
        'desc' => 'Small sites',
        'int' => 0.7,
        'fr' => '68',
        'diff' => ['2GB on SSD', '2GB backup', '3% load', 'Setup assistance'],
        'test' => '15 days'
      ],
      [
        't' => 'SSD HOSTING 8GB',
        'desc' => 'Medium sites',
        'int' => 1,
        'fr' => '68',
        'diff' => ['8GB on SSD', '8GB backup', '9% load', 'SSL - sertificate'],
        'test' => '12 days'
      ],
      [
        't' => 'SSD HOSTING 16GB',
        'desc' => 'High traffic sites',
        'int' => 3,
        'fr' => '68',
        'diff' => ['16GB on SSD', '16GB backup', '18% load', 'CloudFlare protect'],
        'test' => '7 days'
      ],
      [
        't' => 'SSD HOSTING 24GB',
        'desc' => 'Highest traffic sites',
        'int' => 5,
        'fr' => '68',
        'diff' => ['24GB on SSD', '24GB backup', '35% load', 'CloudFlare protect'],
        'test' => '5 days'
      ]
    ],
    'hint' => 'Dont like standard plans?',
    'hint_span' => 'Make your own!'
  )

);
