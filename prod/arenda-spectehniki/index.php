<?php $title = 'Аренда спецтехники'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php 
include("../blocks/meta.php");
include("../blocks/header.php");
$array = json_decode('[
{"h2":"Машины для земляных работ","href":"mashiny-dlya-zemlyanyh-rabot","table":[
{"name":"Экскаватор ДЭМ-114","href":"ekskavator-dem-114",
"info":"Ёмкость ковша отвала 1 м3, ёмкость ковша копания 0,35 м3, глубина копания 3,7 м. Масса 6,7 т.",
"cost":"1110"},
{"name":" &mdash; Гидромолот на базе экскаватора ДЭМ-114",
"info":"",
"cost":"1390"},
{"name":" &mdash; Гидробур(гл. до 3 м, 0 до 350 мм) на базе экскаватора ДЭМ-114",
"info":"Диаметр рабочей части 0 300 мм, глубина бурения до 2,7 м.",
"cost":"1390"},
{"name":"Экскаватор HYUNDAI R170W-7","href":"ekskavator-hyundai-r170w-7",
"info":"Ёмкость ковша 0,76 м3, глубина копания 5,8 м. Масса 17 т.",
"cost":"1630"},
{"name":" &mdash; Гидромолот на базе экскаватора HYUNDAI R170W-7",
"info":"",
"cost":"1850"},
{"name":" &mdash; Виброплита на базе экскаватора HYUNDAI R170W-7",
"info":"",
"cost":"1850"},
{"name":"Экскаватор ЭО-4225","href":"ekskavator-eo-4225",
"info":"Ёмкость ковша 0,85 м3, глубина копания 4,7 м. . Масса 25т.",
"cost":"1280"},
{"name":"Экскаватор ЕК 18-60","href":"ekskavator-ek-18-60",
"info":"Ёмкость ковша 1 м3, глубина копания 5,7 м. Масса 18 т.",
"cost":"1560"},
{"name":"Фронтальный погрузчик XGMA XG93211","href":"ekskavator-dem-114",
"info":"Ёмкость ковша 1,7 м3. Масса 10т.",
"cost":"1300"},
{"name":"Бульдозер ДТ-75","href":"buldozer-dt-75",
"info":"Масса 6,5 т.",
"cost":"1000"}]},
{"h2":"Механизмы для погружения свай и фундаментов", "table":[
{"name":"Сваебойная установка СП-49Д",
"info":"Установка на базе Т-170. Гидромолот «РОПАТ» 3 т., позволяет работать с малыми вибрациями грунта. Масса установки 38 т.",
"cost":"Цена договорная"},
{"name":"Мобильный вибропогружатель свайных фундаментов и свай МВФ-1",
"info":"Длина свай до 6 м (сечением 300x300 мм). Для работы необходимо а/кран грузоподъёмностью не менее 25т, буровая установка до 3 м, 0 бура 300 мм, бортовой автомобиль для перевозки.",
"cost":"Цена договорная"},
{"name":"Вибропогружатель АВФ-1 на ж. д. ходу",
"info":"Для погружения фундаментов и свай на ж/д полотне в габаритах до 5,7 м. Максимальная дина фундамента 4,5м.",
"cost":"Цена договорная"}]},
{"h2":"Машины подъёмно-транспортные", "table":[
{"name":"Кран на а/ходу КС-3577-3",
"info":"Грузоподъёмность 14 т, максимальная высота подъёма 14,5 м.",
"cost":"1160"},
{"name":"Кран на а/ходу КС-3577-2",
"info":"Грузоподъёмность 12,5 т, максимальная высота подъёма 14,5 м.",
"cost":"1160"},
{"name":"Кран на а/ходу КС-45717-К",
"info":"Грузоподъёмность 25 т, максимальная высота подъёма 21,3 м.",
"cost":"1510"},
{"name":"Кран на а/ходу XZJ QZ25K",
"info":"Грузоподъёмность 25 т, длина стрелы 39 м.",
"cost":"1970"},
{"name":"Кран манипулятор автомобильный на базе КАМАЗ-65117",
"info":"Грузоподъёмность 9,5 т, максимальная высота подъёма 11,2 м. Грузоподъёмность машины 12 т. Длина кузова 6 м.",
"cost":"1510"},
{"name":"Кран на ж. д. ходу ЕДК-80/3",
"info":"Грузоподъёмность 20 т. Высота подъёма груза над верхней кромкой рельса 11 м.",
"cost":"1730"},
{"name":"Кран на ж. д. ходу КДЭ-163 с грейфером",
"info":"Грузоподъёмность 16 т, максимальная высота подъёма 13,6 м. Вылет стрелы 14 м.",
"cost":"1540"}]},
{"h2":"Машины дорожные","href":"mashiny-dorozhnye","table":[
{"name":"Каток тротуарный","href":"katok-trotuarnyy",
"info":"Ширина укатки 1 м. Масса 1,2 т.",
"cost":"810"}]},
{"h2":"Грузовые автомобили","href":"gruzovye-avtomobili","table":[
{"name":"КАМАЗ 55111с (самосвал)","href":"kamaz-55111s-samosval",
"info":"Грузоподъёмность 13 т. Объём кузова 8 м3",
"cost":"1120"},
{"name":"КАМАЗ 65115 (самосвал)","href":"kamaz-65115-samosval",
"info":"Грузоподъёмность 15 т. Объём кузова 10 м3",
"cost":"1230"},
{"name":"КАМАЗ 6520-63 (самосвал)","href":"kamaz-6520-63-samosval",
"info":"Грузоподъёмность 20 т. Объём кузова 16 м3",
"cost":"1600"},
{"name":"MA3-6422A8-330 (седельный тягач)","href":"ma3-6422a8-330-sedelnyy-tyagach",
"info":"Грузоподъёмность 20 т. Длина площадки 13 м, ширина 2,4 м.",
"cost":"1600"}]},
{"h2":"Пассажирские автомобили", "table":[
{"name":"Газель ГАЗ-330232 ( грузопассажирс.)",
"info":"5 мест. Грузоподъёмность 1 т.",
"cost":"700"},
{"name":"Газель ГАЗ-2834 (грузопассажирс.)",
"info":"5 мест. Грузоподъёмность 1 т.",
"cost":"700"},
{"name":"Соболь ГАЗ-2752 (грузопассажирс.)",
"info":"6 мест. Грузоподъёмность 0,7 т.",
"cost":"700"}]},
{"h2":"Автобус","href":"avtobusy", "table":[
{"name":"Микроавтобус Fiat DUCATO","href":"mikroavtobus-fiat-ducato",
"info":"15 мест",
"cost":"750"}]}
]',true);
?>
<article>
<div class="container">
<div class="row">
<h1 class="h1">Аренда спецтехники</h1>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-block">
		<p>Строительство и ремонт крупных объектов подразумевают использование специальной техники. Перевозка крупногабаритных и тяжелых грузов, высотные, дорожные и землеройные работы невозможно осуществить без специальных машин и оборудования. Покупка специальной строительной техники обходится недешево, поэтому оптимальным решением проблемы является ее аренда.</p>
		<p>Компания ЗАО «СМП-245-ТРАНССТРОЙ» предлагает услуги по аренде строительной спецтехники. У нас есть широкий ассортимент нужного для Вас строительного транспорта:</p>
		<ul>
			<li>&mdash;&nbsp;&nbsp;самосвалов и автопоездов;</li>
			<li>&mdash;&nbsp;&nbsp;экскаваторов и иной землеройной техники;</li>
			<li>&mdash;&nbsp;&nbsp;спец.техники (гидромолоты, буровые машины);</li>
			<li>&mdash;&nbsp;&nbsp;автокранов;</li>
			<li>&mdash;&nbsp;&nbsp;бульдозеров и т.д.</li>
		</ul>
		<p>Кроме этого, ЗАО «СМП-245-ТРАНССТРОЙ» предоставляет в аренду базу с подъездным и повышенным железнодорожным путём, производственные помещения и охраняемую площадку для хранения материалов.</p>
		<ul id="links" class="list-unstyled">
<?php foreach($array as $key => $row) { ?>
			<li><a href="javascript: void(0);" data-table="<?php echo $key;?>"><?php echo $row['h2'];?></a></li>
<?php } ?>
		</ul>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-block">
		<img src="img/26.jpg" alt="" class="img-responsive center-block">
		<p class="center-block" style="max-width:275px;margin-top:10px;">База ЗАО «СМП-245-Трансстрой» 
	тел.: -49-34-27- (адрес: г. Владмир, ул. Большая Нижегородская д.124 а)</p>
	</div>
</div>

    <article id="tables" class="col-md-10 col-md-offset-1">
<?php foreach($array as $row) { ?>
		<h2><?php echo $row['h2'];?></h2>
		<table class="table">
		<thead><tr>
				<td width="30%">Наименование механизма, автомашины, марка</td>
				<td>Характеристика механизма (грузоподъёмность, ёмкость ковша и др.)</td>
				<td width="15%">Цена за 1 м/час (с НДС 18%), руб.</td>
		</tr></thead>
		<tbody>
	<?php foreach($row['table'] as $table) { ?>
			<tr>
				<td>
		<?php if (isset($table['href'])) {echo '<a href="'.HTTP_SERVER.$row['href'].'/'.$table['href'].'">';}
		echo $table['name'];
		if (isset($table['href'])) {echo '</a>';} ?>
				</td>
				<td><?php echo $table['info'];?></td>
				<td><?php echo $table['cost'];?></td>
			</tr>
	<?php } ?>
		</tbody>
		</table>
<?php } ?>
	</article> 


   <!-- row -->
</div><!-- container -->
</article>
<?php include("../blocks/footer.php"); ?>
<script>
$('#links a').click(function(e){
	var top = $('#tables h2').eq($(this).attr('data-table')).offset().top;
	$('html, body').animate({scrollTop:top}, 'slow');
});
</script>