<?php
require_once('./Rotator.php');

$lander = Rotator::getLander();
$rotator = new Rotator($lander);
$rotator->setDomains(array(
    'https://yandex.ru',
    'https://google.com',
    'https://terrikon.com'
));
$rotator->redirect();