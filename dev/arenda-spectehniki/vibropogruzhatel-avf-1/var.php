<?php include('../../bd.php');
$name = 'vibropogruzhatel-avf-1';
$array = $bd[$name];

$title = 'Вибропогружатель АВФ-1';
$description = '';
$keywords = '';
$breadcrumb = $array['name'];
$table = json_decode('[{"name":"Технические характеристики АВФ-1","tb":[["Масса погружаемого фундамента или сваи наибольшая, т ","2,6"],["Длина погружаемого фундамента наибольшая, м","4,5"]]}]',true);
$opisanie = 'Вибропогружатель АВФ-1 предназначен для вибропогружения с железнодорожного пути свайных фундаментов типа ТС и ФКА под опоры контакной сети и анкеров типа ТА, а также (анкеров) для сооружения сборного фундамента опор гибких поперечин при электрификации и реконструкции железных дорог нормальной колеи, текущем и капитальном ремонте контактной сети железных дорог.';
?>