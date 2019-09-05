# Redirector

## Basic workflow

Basic Redirector workflow is this:

`https://root_domain/rotator.php?rotator_lander=lander_name?param1=param_value -> https://random_sub_somain.root_domain/lander_name?param_value`

## URL Params

If you add this url to Voluum:
`https://summer-rewards.com/redirector.php?rotator_lander=0509-test?cid=12345`
final redirect will be to one random subdomain from the set you provided in config (will be described later). 
**Query params will be saved.**
Example resulting url:
`https://2.summer-rewards.com/0509-test?cid=12345`

## Setup

For Redirector to work you need to create entry point php file. You should keep it in root directory.

So reccomended files/folders structure is:

`/rotator.php`
`/inc/Rotator.php`

You need to have `/inc/Rotator.php` as its a main code for redirector.

## Configuration

This is an example of `/rotator.php` file placed the root location.

```php
<?php
require_once('./inc/Rotator.php');

$lander = Rotator::getLander();
$rotator = new Rotator($lander);
$rotator->setDomains(array(
    'https://2.summer-rewards.com',
    'https://3.summer-rewards.com',
    'https://4.summer-rewards.com',
    'https://5.summer-rewards.com',
    'https://6.summer-rewards.com',
    'https://7.summer-rewards.com',
));
$rotator->redirect();
```


