<?php
require('User.class.php');

// nieuwe user aanmaken...
$u = new User('kristof123', 'k@mail.com', 'https.?//dsfdsf');
$twee = new User('blabla', 'bla@mail.com');
// $drie = new User();




// $u->setUsername('pinkDog');
// $twee->setUsername('purpleRain');
// $u->setUsername('greenDog');
print $u->getUsername();



print '<pre>';
print_r($u);
print_r($twee);
// print_r($drie);
print '</pre>';

print time();
