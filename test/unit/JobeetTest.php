<?php

require_once dirname(__FILE__).'/../bootstrap/unit.php';
 

$t = new lime_test(1);
 
if (function_exists('iconv'))
{
  $t->is(Jobeet::slugify('Développeur Web'), 'developpeur-web', '::slugify() removes accents');
}
else
{
  $t->skip('::slugify() removes accents - iconv not installed');
}

?>