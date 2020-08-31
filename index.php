<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-oop-hotel</title>

  </head>
  <body>
    <?php
    require_once(__DIR__ . '/stanza.php');
    $stanze = [
      [
      'room_number' => '107',
      'floor' => '10',
      'beds' => '2',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    [
      'room_number' => '102',
      'floor' => '1',
      'beds' => '3',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    [
      'room_number' => '103',
      'floor' => '1',
      'beds' => '1',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    [
      'room_number' => '104',
      'floor' => '1',
      'beds' => '2',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    [
      'room_number' => '105',
      'floor' => '1',
      'beds' => '2',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    [
      'room_number' => '201',
      'floor' => '2',
      'beds' => '2',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    [
      'room_number' => '202',
      'floor' => '2',
      'beds' => '3',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    [
      'room_number' => '203',
      'floor' => '2',
      'beds' => '3',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    [
      'room_number' => '204',
      'floor' => '2',
      'beds' => '1',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    [
      'room_number' => '205',
      'floor' => '2',
      'beds' => '2',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    [
      'room_number' => '301',
      'floor' => '3',
      'beds' => '3',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    [
      'room_number' => '302',
      'floor' => '3',
      'beds' => '3',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    [
      'room_number' => '303',
      'floor' => '3',
      'beds' => '2',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    [
      'room_number' => '304',
      'floor' => '3',
      'beds' => '1',
      'created_at' => '2018-05-28 11:33:11',
      'updated_at' => '2020-07-28 09:45:12',
    ],
    ];

    ?>
    <ul>
      <?php
      foreach ($stanze as $singola_stanza) {
        $singola_stanza = new stanza($singola_stanza['room_number'],$singola_stanza['floor'],$singola_stanza['beds'],$singola_stanza['created_at'],$singola_stanza['updated_at']);
        echo $singola_stanza->getStanze();
      }
      ?>
    </ul>
  </body>
</html>
