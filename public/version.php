<?php

$lander        = "https://syn.su/lander.php?r=land/index";
$land          = 'serbia';
$type          = 'univer';
$unit          = 'synergy';
$phone 		   = '+7&nbsp;(495)&nbsp;280-78-86';
$phone_link    = '+74952807886';
$mail          = 'infomoscow@synergy.ru';
$WA            = 'https://api.whatsapp.com/send?phone=79854179304';
$date          = '';
$quote_id      = '';
$speaker       = '';
$program       = '';
$gtm           = '';
$title         = '';
$desc          = '';
$link          = 'https://synergy.ru/lp/thanks-short/';


$action = implode(array(

    $lander,

    '&land='     ,  $land,
    '&unit='     ,  $unit,
    '&type='     ,  $type,
    '&version='  ,  $version,
    '&partner='  ,  $partner,
    '&speaker='  ,  $speaker,
    '&program='  ,  $program,
    '&quote_id=' ,  $quote_id,
    '&link=', urlencode($link),
    '&ignore-thanksall=true'
));