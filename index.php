<?php

define('CARD_COUNT', 25);

spl_autoload_register(function($class_name) {
  include 'classes/' .  $class_name . '.php';
});

// build output string of user cards
$user_cards = '';
for ($i = 0; $i < CARD_COUNT; $i++) {
  // create user with call to json endpoint
  $user = new User(
    json_decode(
      file_get_contents('http://faker.hook.io/?property=helpers.userCard&amp;locale=en_US'),
      false
    )
  );

  // render user card html and append to user cards string
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
