<?
date_default_timezone_set('Asia/Yekaterinburg');
function theme($hour){
    if (($hour >= 8) && ($hour < 20)) {
        $style = '/css/styles.css';
        return $style;
    } else {
        $style = '/css/styles-night.css';
        return $style;
    }
}
$hour=date('H');
?>