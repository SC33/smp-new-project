<?php include('../../bd.php');
$name = 'kran-na-hodu-ks-3577-3';
$array = $bd[$name];

$title = $array['name'];
$description = '';
$keywords = '';
$breadcrumb = $array['name'];
$table = json_decode('[{"name":"Технические характеристики КС-3577-3","tb":[["Грузоподъемность","20т"],["Тип хода","Автомобильный"],["Вылет, м","14"]]}]',true);
$opisanie = 'Автомобильный кран КС-3577-3 \"Угличмаш\" грузоподъемностью 14 тонн на  МАЗ-5337А2 используется для выполнения  строительно-монтажных, аварийных работ, погрузочно-разгрузочных и на различных объектах. Отличная маневренность и легкость управления, компактные малые габариты делают этот автокран незаменимым при использовании в стесненных условиях города.';
?>