<?php

define('CARD_COUNT', 1);

spl_autoload_register(function($class_name) {
  include 'classes/' .  $class_name . '.php';
});

$user_cards = '';
for ($i = 0; $i < CARD_COUNT; $i++) {
  $user = new User(
    json_decode(
      file_get_contents('http://faker.hook.io/?property=helpers.userCard&amp;locale=en_US'),
      false
    )
  );

  $user_cards .= $user->render();
}

?>

<html>
<head>
<title></title>
</head>
<body>
  <?php print $user_cards; ?>
</body>
</html>
