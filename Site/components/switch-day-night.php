<?
date_default_timezone_set('Asia/Yekaterinburg');
$hour=date('H');
if (($hour>=8) && ($hour<20)){
    $style = '/css/styles.css';
}
else{
    $style = '/css/styles-night.css';
}
?>