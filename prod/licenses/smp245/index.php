<?php $title = 'Лицензии и свидетельства'; ?><?php $description = ''; ?><?php $keywords = ''; ?><?php $h1 = "СМП-245"; $text = "Свидетельство о допуске к видам работ которые оказывают влияние на безопасность особо опасных, технически сложных и уникальных объектов №0559.03-2012-3329030445-С-122 выдано Саморегулируемой организацией «Международная гильдия транспортных строителей».<br> Сертификат соответствия требованиям ГОСТ Р ИСО 9001-2008."; $host = $_SERVER['HTTP_HOST']; $self = explode("/", $_SERVER['PHP_SELF']); define('HTTP_URL', 'http://'.$host.'/'.$self[1].'/'.$self[2].'/'); $path = $_SERVER['DOCUMENT_ROOT'].'/'.$self[1].'/'.$self[2].'/'; $images = scandir($path); ?><?php include("../view.php"); ?>