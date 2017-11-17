console.log("V2");
var colorCodes = {
	'абрикосовый': 'abrikosoviy.jpg',
	'баклажановый': 'baklagan.jpg',
	'бардовый': 'bardo.jpg',
	'бежевый': 'begeviy.jpg',
	'белый': 'beliy.jpg',
	'бирюзовый': 'biruza.jpg',
	'черный': 'cherniy.jpg',
	'грушевый': 'grusheviy.jpg',
	'желтый': 'jeltiy.jpg',
	'карминовый': 'karmin.jpg',
	'красный': 'krasniy.jpg',
	'нежно-кремовый': 'kremoviy.jpg',
	'малахитовый': 'malahit.jpg',
	'морской': 'morskoy.jpg',
	'мятный': 'myatniy.jpg',
	'небесный': 'nebesniy.jpg',
	'оливковый': 'olivkoviy.jpg',
	'оранжевый': 'oranjeviy.jpg',
	'салатовый': 'salatoviy.jpg',
	'синий': 'siniy.jpg',
	'сливовый': 'slivoviy.jpg',
	'светло-желтый': 'svetlo-jelt.jpg',
	'светло-серый': 'svetlo-seriy.jpg',
	'темно-коричневый': 'temno-korich.jpg',
	'темно-серый': 'temno-seriy.jpg',
	'темно-синий': 'temno-siniy.jpg',
	'темно-зеленый': 'temno-zel.jpg',
	'терракот': 'terrakot.jpg',
	'васильковый': 'vasilkoviy.jpg'
};

var tStore = {groups:[], layer1:[],layer2:{}};

tStore.groups = [
	{id:"withsleeves", title:"Волшебные ТУБЫ c рукавами"},
{id:"long", title:"Бесшовная Туба одежда"},
	//{id:"short", title:"Короткие платья"},
	//{id:"tops", title:"Шапки-снуды"}
	//,{id:"bluse", title:"Кофточки"}
];

/*БЕСШОВНЫЕ ВОЛШЕБНЫЕ ПЛАТЬЯ*/
tStore.layer1.push({
	id:"longdresswithhood",
	group:"long",
	title:"Длинные платья с капюшоном",
	pricetext:"470грн",
	description:"Красивое женственное хлопковое платье. <br>Создано с любовью и легкостью, БЕЗ шитья из ткани-тубы",
	images:[
		'/wp-content/uploads/2016/10/DPK1a.jpg',
		'/wp-content/uploads/2016/10/DPK2a.jpg',
	]
});
tStore.layer1.push({
	id:"Longdress",
	group:"long",
	title:"Длинные платья",
	pricetext:"420 грн",
	description:"Элегантное хлопковое платье<br>Создано с любовью и легкостью, БЕЗ шитья из ткани-тубы",
	images:[
		'/wp-content/uploads/2016/10/DP4a.jpg',
		'/wp-content/uploads/2016/10/DP3a.jpg'
	]
});

tStore.layer1.push({
	id:"Longlargedress",
	group:"long",
	title:"Длинные широкие платья",
	pricetext:"550 грн",
	description:"Восхитительное и очень удобное бесшовное хлопковое платье.<br>Создано с любовью и легкостью из ткани-тубы ",
	images:[
		'/wp-content/uploads/2016/10/SP1-1.jpg',
		'/wp-content/uploads/2016/10/SP2-1.jpg',
	]
});

tStore.layer1.push({
	id:"rainbowsnood",
	group:"long",
	title:"Радужные шапки-снуды",
	pricetext:"120 грн",
	description:"Очень удобные шапки-снуды из натурального трикотажа. Идеально для осени. <br>Много вариаций ношения и цветов(идеально подходят для придания дню определенного настроения) При заказе от 3-х снудов - прекрасный набор открыток с 'записками Вселены' в подарок) <br>Создано с любовью и легкостью из ткани-тубы (Индия) <br> Для Вас ",
	images:[
		'/wp-content/uploads/2016/09/photo-3.jpg',
		'/wp-content/uploads/2016/09/photo-1.jpg',
	]
});
tStore.layer1.push({
	id:"supershortdress",
	group:"long",
	title:"Короткое платье с капюшоном",
	pricetext:"420 грн",
	description:"Восхитительное и очень удобное бесшовное хлопковое платье.<br>Создано с любовью и легкостью из ткани-тубы (Индия) <br> Для Вас ",
	images:[
		'/wp-content/uploads/2016/10/KPK1.jpg',
		'/wp-content/uploads/2016/10/KPK2-1.jpg',
	]
});
tStore.layer1.push({
	id:"longlargedresswithsleeves",
	group:"withsleeves",
	title:"Длинное расклешенное платье с капюшоном",
	pricetext:750,
	pricediscount: 640,
	description:"Женственное, красивое и невероятно удобное трикотажное платье <br> Минимум швов(пришиты рукава и вставлены клинья в юбку)",
	images:[
		'http://tuba-duba.com//wp-content/uploads/2016/10/DP-s-R-1.jpg',
		'http://tuba-duba.com//wp-content/uploads/2016/10/DP-s-R-2-2.jpg',
	]
});


tStore.layer1.push({
	id:"longdreeswithsleeves",
	group:"withsleeves",
	title:"Длинное платье с капюшоном",
	pricetext:650,
	pricediscount:550,
	description:"Женственное, красивое и невероятно удобное трикотажное платье, создано  с любовью и легкостью из Ткани-тубы. <br> Минимум швов(пришиты только рукава)",
	images:[
		'/wp-content/uploads/2016/10/DPsRK1.jpg',
		'/wp-content/uploads/2016/10/DPsRK4.jpg',
	]
});
tStore.layer1.push({
	id:"longdresswithsleevsandcollar",
	group:"withsleeves",
	title:"Длинное платье с красивым хомутом",
	pricetext:620,
	pricediscount:520,
	description:"Женственное, красивое и невероятно удобное трикотажное платье, создано с любовью и легкостью из Ткани-тубы. <br> Минимум швов(пришиты только рукава)",
	images:[
		'/wp-content/uploads/2016/10/DPsRK14.jpg',
		'/wp-content/uploads/2016/10/DPsRK13.jpg',
	]
});

tStore.layer1.push({
	id:"longdreesbigleeves",
	group:"withsleeves",
	title:"Длинное платье без капюшона",
	pricetext:600,
	pricediscount:510,
	description:"Женственное, красивое и невероятно удобное трикотажное платье, создано  с любовью и легкостью из Ткани-тубы. <br> Минимум швов(пришиты только рукава)",
	images:[
		'/wp-content/uploads/2016/10/DPsRK11.jpg',
		'/wp-content/uploads/2016/10/DPsRK17.jpg',
	]
});


tStore.layer1.push({
	id:"shortdreeswithsleevesandhood",
	group:"withsleeves",
	title:"Короткое платье с капюшоном",
	pricetext:530,
	pricediscount:450,
	description:"Женственное, красивое и невероятно удобное трикотажное платье, создано с любовью и легкостью из Ткани-тубы. <br> Минимум швов(пришиты только рукава)",
	images:[
		'/wp-content/uploads/2016/10/DPsRK8.jpg',
		'/wp-content/uploads/2016/10/DPsRK10.jpg',
	]
});

tStore.layer1.push({
	id:"shortdreeswithsleeves",
	group:"withsleeves",
	title:"Короткое платье",
	pricetext:430,
	pricediscount:370,
	description:"Женственное, красивое и невероятно удобное трикотажное платье, создано с любовью и легкостью из Ткани-тубы. <br> Минимум швов(пришиты только рукава)",
	images:[
		
		'/wp-content/uploads/2016/10/DPsRK7.jpg',
'/wp-content/uploads/2016/10/DPsRK6.jpg',
	]
});

tStore.layer1.push({
	id:"jacketwithsleeves",
	group:"withsleeves",
	title:"Туба-кофта",
	pricetext:350,
	pricediscount:300,
	description:"Женственная, красивая и невероятно удобная трикотажная кофта с рукавами, создана с любовью и легкостью из Ткани-тубы. <br> Минимум швов(пришиты только рукава)",
	images:[
		'/wp-content/uploads/2016/10/DPsRK16.jpg',
		'/wp-content/uploads/2016/10/DPsRK15.jpg',
	]
});

tStore.layer1.push({
	id:"jacketwithsleevesandcollar",
	group:"withsleeves",
	title:"Туба-кофта с красивым воротником",
	pricetext:350,
	pricediscount:300,
	description:"Женственная, красивая и невероятно удобная трикотажная кофта с рукавами, создана с любовью и легкостью из Ткани-тубы. <br> Минимум швов(пришиты только рукава)",
	images:[
		'/wp-content/uploads/2016/10/DPsRK19.jpg',
		'/wp-content/uploads/2016/10/DPsRK18.jpg',
	]
});






/*ОПИСАНИЕ ДЛЯ ТОВАРОВ*/

tStore.layer2['longdresswithhood'] = {
	id:"longdresswithhood",
	title:"Длинное платье с капюшоном",
	pricetext:"470 грн",
	description: "Очень красивое и женственное платье с капюшоном. <br>Создано с любовью и легкостью<br>БЕЗ шитья и выкроек<br>Материал: Ткань: бесшовная ТУБА 95% хлопок, 5% эластан<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)",
	images:[
		'/wp-content/uploads/2016/08/DPK0.jpg',
		'/wp-content/uploads/2016/08/DPK1-1.jpg',
		'/wp-content/uploads/2016/08/DPK3-1.jpg',
		'/wp-content/uploads/2016/08/DPK5-1.jpg',
		'/wp-content/uploads/2016/08/DPK6-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK19.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK22.jpg',
		'/wp-content/uploads/2016/08/DPK7-1.jpg',
		'/wp-content/uploads/2016/08/DPK8-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK21.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK20.jpg',
'/wp-content/uploads/2016/08/DPK9-1.jpg',
		'/wp-content/uploads/2016/08/DPK10-1.jpg',
'/wp-content/uploads/2016/08/DPK13-1.jpg',
		'/wp-content/uploads/2016/08/DPK14-1.jpg',
		'/wp-content/uploads/2016/08/DPK11-1.jpg',
		'/wp-content/uploads/2016/08/DPK12-1.jpg',
		'/wp-content/uploads/2016/08/DPK15-1.jpg',
		'/wp-content/uploads/2016/08/DPK16-1.jpg',
'/wp-content/uploads/2016/08/DPK23.jpg',
		'/wp-content/uploads/2016/08/DPK17-1.jpg'
		
	],
	colors:[ 
		{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
 {name:"карминовый",d:"44", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		 //{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		 {name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		  //{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 {name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		  //{name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 {name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]},
		  {name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},
	   //{name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]},
	  {name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
{name:"насыщенный терракот",d:"48", color:"#9f270e", images:["/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"]},
		 {name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
		 //{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		//{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		 {name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
 {name:"грушевый",d:"45", color:"#241902", images:["http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"]},
 {name:"салатовый",d:"44", color:"#92cf5b", images:["http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"]},
 {name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		 {name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
//{name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
 {name:"оливковый",d:"54", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		 //{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		
		],
	price:470
};

tStore.layer2['Longdress'] = {
	id:"Longdress",
	title:"Длинное платье",
	pricetext:"420 грн",
	description:"Элегантное хлопковое платье<br>Можно сочетать со множеством стилей (этно, классика, деловой и т.д.)<br>Создано с любовью и легкостью <br>БЕЗ шитья и выкроек<br>Материал: Ткань-ТУБА 95% хлопок,5% эластан<br>Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP1-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP2-1.jpg',
		'/wp-content/uploads/2016/08/Dlinnoeplate2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP13.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP9-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP3-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP4.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP4-2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP5-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP6-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP8-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP7-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP7-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP12.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP13-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP14.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP15.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP16.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP17.jpg'

	],
	colors:[ 
		{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
 {name:"карминовый",d:"44", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		 //{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		 {name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		  //{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 {name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		  //{name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 {name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]},
		  {name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},
	   //{name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]},
	  {name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
{name:"насыщенный терракот",d:"48", color:"#9f270e", images:["/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"]},
		 {name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
		 //{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		//{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		 {name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
 {name:"грушевый",d:"45", color:"#241902", images:["http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"]},
 {name:"салатовый",d:"44", color:"#92cf5b", images:["http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"]},
 {name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		 {name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
//{name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
 {name:"оливковый",d:"54", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		 //{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		],
	price:420
};
tStore.layer2['Longdress'] = {
	id:"Longdress",
	title:"Короткое платье с капюшоном",
	pricetext:"420 грн",
	description:"Элегантное хлопковое платье<br>Можно сочетать со множеством стилей (этно, классика, деловой и т.д.)<br>Создано с любовью и легкостью <br>БЕЗ шитья и выкроек<br>Материал: Ткань-ТУБА 95% хлопок,5% эластан<br>Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/11/1-3.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/11/2-3.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/11/3-3.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/11/4-4.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/11/6-3.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/11/5-4.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/11/8-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/11/9-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/11/10-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/11/11-1.jpg'
	],
	colors:[ 
		{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
 {name:"карминовый",d:"44", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		 //{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		 {name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		  //{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 {name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		  //{name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 {name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]},
		  {name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},
	   //{name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]},
	  {name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
{name:"насыщенный терракот",d:"48", color:"#9f270e", images:["/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"]},
		 {name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
		 //{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		//{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		 {name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
 {name:"грушевый",d:"45", color:"#241902", images:["http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"]},
 {name:"салатовый",d:"44", color:"#92cf5b", images:["http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"]},
 {name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		 {name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
//{name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
 {name:"оливковый",d:"54", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		 //{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		],
	price:420
};

tStore.layer2['Longlargedress'] = {
	id:"Longlargedress",
	title:"Длинные широкие платья",
	pricetext:"550 грн",
	description: "Очень красивое и женственное платье). <br>Создано с любовью и легкостью<br>БЕЗ шитья и выкроек<br>Материал: Ткань: бесшовная ТУБА 95% хлопок, 5% эластан<br> На моделе: оранжево-желтое платье(на свету оно кажется светлее)<br>Размеры: XXS-XXXL (<a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)",
	images:[
		'/wp-content/uploads/2016/08/SPD1.jpg',
	'/wp-content/uploads/2016/08/SPD2-2.jpg',
		'/wp-content/uploads/2016/08/SPD3-2.jpg',
		'/wp-content/uploads/2016/08/SPD4-2.jpg' 
		
		
		
	],
	colors:[ 
		{name:"желтый",d:"65", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/geltiy-Factura.jpg"]},
		{name:"лимонный",d:"65", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/limonniy-factura.jpg"]},
		{name:"нежно-желтый",d:"65", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/negno-geltiy-Factura.jpg"]},
		//{name:"оранжево-желтый", d:"65", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/Orangevo-geltiy-factura.jpg"]},
		//{name:"оранжевый",d:"65", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/Orangeviy-factura.jpg"]}, 
		//{name:"баклажановый",d:"65", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura-1.jpg"]},
		//{name:"белый",d:"65", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura-2.jpg"]}
		
		],
	price:550
};

tStore.layer2['rainbowsnood'] = {
	id:"rainbowsnood",
	title:"Радужные шапки-снуды",
	pricetext:"120 грн",
	description: `Очень удобные шапки-снуды из натурального трикотажа. Идеально для осени)
<br>Много вариаций ношения и цветов (идеально подходят для придания дню определенного настроения)
<br>Создано с любовью и легкостью из ткани-тубы <br> :) При заказе от 3-х снудов - прекрасный набор открыток с "записками Вселены" в подарок) `,
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/11/1-2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/11/2-2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/11/3-2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/11/4-3.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/11/5-3.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/11/6-2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/11/7-1.jpg'
		
	],
	colors:[ 
		{name:"темно-коричневый", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
 //{name:"карминовый",color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		 //{name:"бардовый", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		 {name:"красный", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		 {name:"оливковый", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		//{name:"темно-зеленый", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		//{name:"небесный", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		 {name:"темно-синий", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 {name:"синий", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]},
		 //{name:"бирюзовый", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},
	  {name:"морской", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]},
	  {name:"бежевый", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"терракот", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
		 {name:"желтый", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		{name:"светло-желтый", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		{name:"черный", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
		 {name:"темно-серый",color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		//{name:"светло-серый", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		//{name:"абрикосовый",color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
		 {name:"оранжевый", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]}
//{name:"сливовый", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
		 //{name:"малахитовый",color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		
		],
	price:120
};

tStore.layer2['longlargedresswithsleeves'] = {
	id:"longlargedresswithsleeves",
        title:"Длинное расклешенное платье с капюшоном",
	pricetext:"750 грн",
	description: "Женственное, красивое и невероятно удобное трикотажное платье<br> Создано с любовью и легкостью из Ткани-тубы. <br> Минимум швов(пришиты рукава и вставлены клинья в юбку). <br> Ткань: 95% хлопок, 5% эластан<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br>Доступен любой цвет (под заказ в течении недели)",
	images:[
		'/wp-content/uploads/2016/10/with-sleews1.jpg',
'/wp-content/uploads/2016/10/with-sleews2.jpg',
'/wp-content/uploads/2016/10/with-sleews3.jpg',
'/wp-content/uploads/2016/10/with-sleews4.jpg',
'/wp-content/uploads/2016/10/with-sleews5.jpg',
'/wp-content/uploads/2016/10/with-sleews6.jpg',
'/wp-content/uploads/2016/10/with-sleews7.jpg'
	],
	colors:[ 
		{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
 //{name:"карминовый",d:"44", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		 //{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		//{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		 {name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		  //{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		//{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 {name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		  //{name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 //{name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]},
		  //{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},
	   //{name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]},
	  {name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
//{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
//{name:"насыщенный терракот",d:"48", color:"#9f270e", images:["/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"]},
		 //{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		//{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		//{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
		  {name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		//{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		 //{name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
 //{name:"грушевый",d:"45", color:"#241902", images:["http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"]},
//{name:"салатовый",d:"44", color:"#92cf5b", images:["http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"]},
  //{name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		 //{name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
//{name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
 //{name:"оливковый",d:"54", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		 //{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		],
	price:750
};

tStore.layer2['longdreeswithsleeves'] = {
	id:"longdreeswithsleeves",
        title:"Длинное платье с капюшоном",
	pricetext:"650 грн",
	description: "Женственное, красивое и невероятно удобное трикотажное платье<br> Создано с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов(пришиты только рукава) <br> Длину делаем под ваш рост<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br> Цвета в наличии: желтый, морской, кирпичный. Все остальные цвета под заказ в течении недели(пошив по четвергам - отправка в пятницу)",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood8.jpg',
'/wp-content/uploads/2016/10/withsleevsandhood1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood6-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood5-1.jpg',
'/wp-content/uploads/2016/10/withsleevsandhood3.jpg',
'/wp-content/uploads/2016/10/withsleevsandhood4.jpg',
'/wp-content/uploads/2016/10/withsleevsandhood6.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood2-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood3-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood1-1.jpg'
		
	],
	colors:[ 
		 //{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
 //{name:"карминовый",d:"44", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		 //{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		 {name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		  //{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		//{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		  //{name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		  //{name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 //{name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]},
		  //{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},
	    {name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]},
	   //{name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
{name:"насыщенный терракот",d:"48", color:"#9f270e", images:["/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"]},
		  {name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		//{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		  //{name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		//{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
		 //{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		//{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		  //{name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
 //{name:"грушевый",d:"45", color:"#241902", images:["http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"]},
 //{name:"салатовый",d:"44", color:"#92cf5b", images:["http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"]},
 {name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		 //{name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
//{name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
 //{name:"оливковый",d:"54", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		 //{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		
		],
	price:650
};

tStore.layer2['shortdreeswithsleeves'] = {
	id:"shortdreeswithsleeves",
        title:"Короткое платье",
	pricetext:"430 грн",
	description: "Женственное, красивое и невероятно удобное трикотажное платье<br> Создано с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов(Пришиты только рукава) <br> Длина по колено (делаем под ваш рост)<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br> <strong>Цвета в наличии</strong>: оранжевый. Все остальные цвета под заказ в течении недели(пошив по четвергам - отправка в пятницу)",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood1-2.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood2-2.jpg.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood3-2.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood4-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood5-2.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood6-2.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood7-1.jpg'
		
	],
	colors:[ 
		//{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
 //{name:"карминовый",d:"44", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		 //{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		 {name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		  //{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		//{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 //{name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		   {name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 //{name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]},
		  //{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},
	   //{name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]},
	  //{name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
//{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
//{name:"насыщенный терракот",d:"48", color:"#9f270e", images:["/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"]},
		 //{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		//{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		 {name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
		 //{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		//{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		 //{name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
 {name:"грушевый",d:"45", color:"#241902", images:["http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"]},
 {name:"салатовый",d:"44", color:"#92cf5b", images:["http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"]},
 //{name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		 {name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
//{name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
 //{name:"оливковый",d:"54", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		 //{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		
		],
	price:430
};

tStore.layer2['shortdreeswithsleevesandhood'] = {
	id:"shortdreeswithsleevesandhood",
        title:"Короткое платье с капюшоном",
	pricetext:"530 грн",
	description: "Женственное, красивое и невероятно удобное трикотажное платье<br> Создано с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов(Пришиты только рукава) <br> Длина по колено (делаем под ваш рост)<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br><strong>Цвета в наличии</strong>: карминовый, морской, грушевый, бирюзовый, темно-синий, серый. <br>Все остальные цвета под заказ в течении недели(пошив по четвергам - отправка в пятницу)",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood3.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood4.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood0.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood2.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood5.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood6.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood7.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood8.jpg'
		
	],
		colors:[ 
		{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
 //{name:"карминовый",d:"44", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		 //{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		 {name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		  //{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 {name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		  {name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 //{name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]},
		   {name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},
	    {name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]},
	  //{name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
//{name:"насыщенный терракот",d:"48", color:"#9f270e", images:["/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"]},
		 //{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		//{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 //{name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		//{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
		  {name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		//{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		 //{name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
 //{name:"грушевый",d:"45", color:"#241902", images:["http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"]},
 {name:"салатовый",d:"44", color:"#92cf5b", images:["http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"]},
 //{name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		 //{name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
//{name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
 //{name:"оливковый",d:"54", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		 //{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		
		],
	price:530
};

tStore.layer2['longdreesbigleeves'] = {
	id:"longdreesbigleeves",
        title:"Длинное платье без капюшона",
	pricetext:"600 грн",
	description: "Женственное, красивое и невероятно удобное трикотажное платье<br> Создано с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов(Пришиты только рукава) <br> Длину делаем под ваш рост<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br><strong>Цвета в наличии</strong> карминовый, темно-синий. <br>Все остальные цвета под заказ в течении недели(пошив по четвергам - отправка в пятницу)",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves2.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves3.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves4.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves5.jpg'
		
	],
	colors:[ 
		{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
 {name:"карминовый",d:"44", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		 //{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		//{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		 //{name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		  //{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		//{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 {name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		  //{name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 //{name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]},
		  //{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},
	   //{name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]},
	  {name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
//{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
//{name:"насыщенный терракот",d:"48", color:"#9f270e", images:["/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"]},
		 //{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		//{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		//{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
		 //{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		//{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		 {name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
 //{name:"грушевый",d:"45", color:"#241902", images:["http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"]},
 //{name:"салатовый",d:"44", color:"#92cf5b", images:["http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"]},
 {name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		 //{name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
//{name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
 //{name:"оливковый",d:"54", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		 //{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		
		],
	price:600
};

tStore.layer2['longdresswithsleevsandcollar'] = {
	id:"longdresswithsleevsandcollar",
        title:"Длинное ТУБА-платье с красивым воротником",
	pricetext:"620 грн",
	description: "Женственное, красивое и невероятно удобное трикотажное платье<br> Создано с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов: пришиты только рукава <br> Длину делаем под ваш рост<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br>Все цвета под заказ в течении недели(пошив в ЧЕТВЕРГ - отправка в пятницу)",
	images:[
		'/wp-content/uploads/2016/10/withsleevsandcollar1.jpg',
'/wp-content/uploads/2016/10/withsleevsandcollar2.jpg',
'/wp-content/uploads/2016/10/withsleevsandcollar3.jpg',
'/wp-content/uploads/2016/10/withsleevsandcollar4.jpg',
'/wp-content/uploads/2016/10/withsleevsandcollar5.jpg',
'/wp-content/uploads/2016/10/withsleevsandcollar6.jpg',
'/wp-content/uploads/2016/10/withsleevsandcollar7.jpg'
		
	],
	colors:[ 
		{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
 //{name:"карминовый",d:"44", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		 //{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		//{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		 //{name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		  //{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		//{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 {name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		  //{name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 //{name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]},
		  //{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},
	   //{name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]},
	  {name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
//{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
//{name:"насыщенный терракот",d:"48", color:"#9f270e", images:["/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"]},
		 //{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		//{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		//{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
		 //{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		//{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		 {name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
 //{name:"грушевый",d:"45", color:"#241902", images:["http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"]},
 //{name:"салатовый",d:"44", color:"#92cf5b", images:["http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"]},
 {name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		 //{name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
 {name:"сливовый",d:"48", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
 //{name:"оливковый",d:"54", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		 //{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		],
	price:620
};

tStore.layer2['jacketwithsleeves'] = {
	id:"jacketwithsleeves",
        title:"ТУБА-кофта",
	pricetext:"350 грн",
	description: "Женственная, уютная и невероятно удобная трикотажная кофта с рукавами<br> Создана с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов: пришиты только рукава <br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br> <strong>Цвета в наличии:</strong> <br>Все цвета под заказ в течении недели(пошив в ЧЕТВЕРГ - отправка в пятницу)",
	images:[
		'/wp-content/uploads/2016/10/jacketwithsleeves1.jpg',
'/wp-content/uploads/2016/10/jacketwithsleeves3.jpg',
'/wp-content/uploads/2016/10/jacketwithsleeves.jpg',
'/wp-content/uploads/2016/10/jacketwithsleeves2.jpg',
'/wp-content/uploads/2016/10/jacketwithsleeves4.jpg'
		
	],
	colors:[ 
		{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
 //{name:"карминовый",d:"44", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		 //{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		 //{name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		  //{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 {name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		   {name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 //{name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]},
		  {name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},
	    {name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]},
	  {name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
//{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
{name:"насыщенный терракот",d:"48", color:"#9f270e", images:["/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"]},
		 //{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		//{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		 {name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
		 //{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		//{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		 {name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
 //{name:"грушевый",d:"45", color:"#241902", images:["http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"]},
 {name:"салатовый",d:"44", color:"#92cf5b", images:["http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"]},
 {name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		 //{name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
//{name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
 //{name:"оливковый",d:"54", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		 //{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		
		],
	price:350
};

tStore.layer2['jacketwithsleevesandcollar'] = {
	id:"jacketwithsleevesandcollar",
        title:"ТУБА-кофта с красивым хомутом",
	pricetext:"350 грн",
	description: "Женственная, уютная и невероятно удобная трикотажная кофта с рукавами и красивым хомутом<br> Создана с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов: пришиты только рукава <br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br> <strong>Цвета в наличии:</strong> <br>Все цвета под заказ в течении недели(пошив в ЧЕТВЕРГ - отправка в пятницу)",
	images:[
		'/wp-content/uploads/2016/10/jacketwithsleevesandcollar6.jpg',
'/wp-content/uploads/2016/10/jacketwithsleevesandcollar1.jpg',
'/wp-content/uploads/2016/10/jacketwithsleevesandcollar2.jpg',
'/wp-content/uploads/2016/10/jacketwithsleevesandcollar3.jpg',
'/wp-content/uploads/2016/10/jacketwithsleevesandcollar4.jpg',
'/wp-content/uploads/2016/10/jacketwithsleevesandcollar5.jpg' 
 
		
	],
	colors:[ 
		{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
 //{name:"карминовый",d:"44", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		 //{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		 {name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		  //{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 {name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		  //{name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 //{name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]},
		  //{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},
	   //{name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]},
	  {name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
//{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
//{name:"насыщенный терракот",d:"48", color:"#9f270e", images:["/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"]},
		 //{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		//{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
		  {name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		 {name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		 {name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
 //{name:"грушевый",d:"45", color:"#241902", images:["http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"]},
 {name:"салатовый",d:"44", color:"#92cf5b", images:["http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"]},
 {name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		 //{name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
//{name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
 //{name:"оливковый",d:"54", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		 //{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		],
	price:350
};



// ======================================
// RU
// ======================================

var tStoreRU = {layer1:[],layer2:{}};

/*БЕСШОВНЫЕ ВОЛШЕБНЫЕ ПЛАТЬЯ*/
tStoreRU.layer1.push({
	id:"longdresswithhood",
	title:"Длинные платья с капюшоном",
	pricetext:"1600 руб",
	description:"Красивое женственное хлопковое платье. <br>Создано с любовью и легкостью, БЕЗ шитья из ткани-тубы",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/09/DPK3.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/09/DPK8.jpg',
	]
});
tStoreRU.layer1.push({
	id:"Longdress",
	title:"Длинные платья",
	pricetext:"1400 руб",
	description:"Элегантное хлопковое платье<br>Создано с любовью и легкостью, БЕЗ шитья из ткани-тубы",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/09/DP11.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/09/DP1.jpg'
	]
});

/*tStoreRU.layer1.push({
	id:"Longlargedress",
	title:"Длинное широкое платье",
	pricetext:"1600 руб",
	description:"Восхитительное и очень удобное бесшовное хлопковое платье.<br>Создано с любовью и легкостью из ткани-тубы ",
	images:[
		'/wp-content/uploads/2016/08/shirokoedlinnoe-plate.jpg',
		'/wp-content/uploads/2016/08/shirokoedlinnoe-plate1.jpg',
	]
});
*/


/*ОПИСАНИЕ ДЛЯ ТОВАРОВ*/

tStoreRU.layer2['longdresswithhood'] = {
	id:"longdresswithhood",
	title:"Длинное платье с капюшоном",
	pricetext:"1600 руб",
	description: "Очень красивое и женственное платье с капюшоном. <br>Создано с любовью и легкостью<br>БЕЗ шитья и выкроек<br>Материал: ткань-ТУБА 95% хлопок, 5% эластан<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>) <br><a href='http://tuba-duba.com/delivery-ru/'> Условия доставки по России</a>", 

	images:[
		'/wp-content/uploads/2016/08/DPK0.jpg',
		'/wp-content/uploads/2016/08/DPK1-1.jpg',
		'/wp-content/uploads/2016/08/DPK3-1.jpg',
		'/wp-content/uploads/2016/08/DPK5-1.jpg',
		'/wp-content/uploads/2016/08/DPK6-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK19.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK22.jpg',
		'/wp-content/uploads/2016/08/DPK7-1.jpg',
		'/wp-content/uploads/2016/08/DPK8-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK21.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK20.jpg',
'/wp-content/uploads/2016/08/DPK9-1.jpg',
		'/wp-content/uploads/2016/08/DPK10-1.jpg',
'/wp-content/uploads/2016/08/DPK13-1.jpg',
		'/wp-content/uploads/2016/08/DPK14-1.jpg',
		'/wp-content/uploads/2016/08/DPK11-1.jpg',
		'/wp-content/uploads/2016/08/DPK12-1.jpg',
		'/wp-content/uploads/2016/08/DPK15-1.jpg',
		'/wp-content/uploads/2016/08/DPK16-1.jpg',
'/wp-content/uploads/2016/08/DPK23.jpg',
		'/wp-content/uploads/2016/08/DPK17-1.jpg'
		
	],
	colors:[ 
		{name:"карминовый",d:"45", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		//{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		{name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		//{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 {name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		{name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 {name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]}, 
		/*{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},*/
		//{name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"шоколадный",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
		{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		//{name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
 //{name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
{name:"светло-серый",d:"55", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		{name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
		{name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
		{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		
		],
	price:1600
};

tStoreRU.layer2['Longdress'] = {
	id:"Longdress",
	title:"Длинное платье",
	pricetext:"1400 руб",
	description:"Элегантное хлопковое платье<br>Можно сочетать со множеством стилей (этно, классика, деловой и т.д.)<br>Создано с любовью и легкостью <br>БЕЗ шитья и выкроек<br>Материал: Ткань-ТУБА 95% хлопок, 5% эластан<br>Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br><a href='http://tuba-duba.com/delivery-ru/'> Условия доставки по России</a>",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP1-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP2-1.jpg',
		'/wp-content/uploads/2016/08/Dlinnoeplate2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP13.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP9-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP3-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP4.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP4-2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP5-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP6-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP8-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP7-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP7-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP12.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP13-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP14.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP15.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP16.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP17.jpg'

	],colors:[ 
		{name:"карминовый",d:"45", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		//{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		//{name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		//{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 {name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		//{name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 {name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]}, 
		/*{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},*/
		{name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"шоколадный",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
		{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		{name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
//{name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
{name:"светло-серый",d:"55", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		{name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
		{name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
		{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
	 
		
		],
	price:1400
};

 
// ======================================
// CRIMEA
// ======================================

var tStoreCR = {groups:[], layer1:[],layer2:{}};

tStoreCR.groups = [
	{id:"withsleeves", title:"Волшебные ТУБЫ c рукавами"},
{id:"long", title:"Бесшовная Туба одежда"},
	//{id:"short", title:"Короткие платья"},
	//{id:"tops", title:"Шапки-снуды"}
	//,{id:"bluse", title:"Кофточки"}
];

/*БЕСШОВНЫЕ ВОЛШЕБНЫЕ ПЛАТЬЯ*/
tStoreCR.layer1.push({
	id:"longdresswithhood",
	title:"Длинные платья с капюшоном",
	pricetext:"1600 руб",
	description:"Красивое женственное хлопковое платье. <br>Создано с любовью и легкостью, БЕЗ шитья из ткани-тубы )",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/09/DPK6.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/09/DPK1.jpg',
	]
});
tStoreCR.layer1.push({
	id:"Longdress",
	title:"Длинные платья",
	pricetext:"1400 руб",
	description:"Элегантное хлопковое платье<br>Создано с любовью и легкостью, БЕЗ шитья из ткани-тубы",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/09/DP7.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/09/DP6.jpg'
	]
});

/*tStoreCR.layer1.push({
	id:"Longlargedress",
	title:"Длинное широкое платье",
	pricetext:"1700 руб",
	description:"Восхитительное и очень удобное бесшовное хлопковое платье.<br>Создано с любовью и легкостью из ткани-тубы ",
	images:[
		'/wp-content/uploads/2016/08/shirokoedlinnoe-plate.jpg',
		'/wp-content/uploads/2016/08/shirokoedlinnoe-plate1.jpg',
	]
});
*/


/*ОПИСАНИЕ ДЛЯ ТОВАРОВ*/

tStoreCR.layer2['longdresswithhood'] = {
	id:"longdresswithhood",
	title:"Длинное платье с капюшоном",
	pricetext:"1600 руб",
	description: "Очень красивое и женственное платье с капюшоном. <br>Создано с любовью и легкостью<br>БЕЗ шитья и выкроек<br>Материал: ткань-ТУБА 95% хлопок, 5% эластан<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>) <br><a href='http://tuba-duba.com/delivery/'> Условия доставки по Крыму</a>", 

	images:[
		'/wp-content/uploads/2016/08/DPK0.jpg',
		'/wp-content/uploads/2016/08/DPK1-1.jpg',
		'/wp-content/uploads/2016/08/DPK3-1.jpg',
		'/wp-content/uploads/2016/08/DPK5-1.jpg',
		'/wp-content/uploads/2016/08/DPK6-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK19.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK22.jpg',
		'/wp-content/uploads/2016/08/DPK7-1.jpg',
		'/wp-content/uploads/2016/08/DPK8-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK21.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK20.jpg',
'/wp-content/uploads/2016/08/DPK9-1.jpg',
		'/wp-content/uploads/2016/08/DPK10-1.jpg',
'/wp-content/uploads/2016/08/DPK13-1.jpg',
		'/wp-content/uploads/2016/08/DPK14-1.jpg',
		'/wp-content/uploads/2016/08/DPK11-1.jpg',
		'/wp-content/uploads/2016/08/DPK12-1.jpg',
		'/wp-content/uploads/2016/08/DPK15-1.jpg',
		'/wp-content/uploads/2016/08/DPK16-1.jpg',
'/wp-content/uploads/2016/08/DPK23.jpg',
		'/wp-content/uploads/2016/08/DPK17-1.jpg'
		
	],
	colors:[ 
		 
		//{name:"карминовый",d:"45", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		//{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"48", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		{name:"красный", d:"47", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		//{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 //{name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		 {name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 {name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]}, 
		//{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},*/
		 {name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
		//{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
//{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		{name:"светло-желтый",d:"48", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
 //{name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		//{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		//{name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
		{name:"оранжевый",d:"55", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
		//{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]},
  {name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
  {name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]}
		
		
		],
	price:1600
};

tStoreCR.layer2['Longdress'] = {
	id:"Longdress",
	title:"Длинное платье",
	pricetext:"1400 руб",
	description:"Элегантное хлопковое платье<br>Можно сочетать со множеством стилей (этно, классика, деловой и т.д.)<br>Создано с любовью и легкостью <br>БЕЗ шитья и выкроек<br>Материал: Ткань-ТУБА 95% хлопок, 5% эластан<br>Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br><a href='http://tuba-duba.com/delivery/'> Условия доставки по Крыму</a>",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP1-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP2-1.jpg',
		'/wp-content/uploads/2016/08/Dlinnoeplate2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP13.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP9-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP3-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP4.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP4-2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP5-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP6-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP8-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP7-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP7-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP12.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP13-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP14.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP15.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP16.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP17.jpg'

	],colors:[ 
		//{name:"карминовый",d:"45", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		//{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"48", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		{name:"красный", d:"47", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		//{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 //{name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		 {name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 {name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]}, 
		//{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},*/
		 {name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
		//{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
//{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		{name:"светло-желтый",d:"48", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
 //{name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		//{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		//{name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
		{name:"оранжевый",d:"55", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
 {name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
		//{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]},
  {name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]}
		
		],
	price:1400
};




// ======================================
// RU
// ======================================

var tStoreRU = {layer1:[],layer2:{}};

/*БЕСШОВНЫЕ ВОЛШЕБНЫЕ ПЛАТЬЯ*/
tStoreRU.layer1.push({
	id:"longdresswithhood",
	title:"Длинные платья с капюшоном",
	pricetext:"1600 руб",
	description:"Красивое женственное хлопковое платье. <br>Создано с любовью и легкостью, БЕЗ шитья из ткани-тубы",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/09/DPK3.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/09/DPK8.jpg',
	]
});
tStoreRU.layer1.push({
	id:"Longdress",
	title:"Длинные платья",
	pricetext:"1400 руб",
	description:"Элегантное хлопковое платье<br>Создано с любовью и легкостью, БЕЗ шитья из ткани-тубы",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/09/DP11.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/09/DP1.jpg'
	]
});

/*tStoreRU.layer1.push({
	id:"Longlargedress",
	title:"Длинное широкое платье",
	pricetext:"1600 руб",
	description:"Восхитительное и очень удобное бесшовное хлопковое платье.<br>Создано с любовью и легкостью из ткани-тубы ",
	images:[
		'/wp-content/uploads/2016/08/shirokoedlinnoe-plate.jpg',
		'/wp-content/uploads/2016/08/shirokoedlinnoe-plate1.jpg',
	]
});
*/


/*ОПИСАНИЕ ДЛЯ ТОВАРОВ*/

tStoreRU.layer2['longdresswithhood'] = {
	id:"longdresswithhood",
	title:"Длинное платье с капюшоном",
	pricetext:"1600 руб",
	description: "Очень красивое и женственное платье с капюшоном. <br>Создано с любовью и легкостью<br>БЕЗ шитья и выкроек<br>Материал: ткань-ТУБА 95% хлопок, 5% эластан<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>) <br><a href='http://tuba-duba.com/delivery-ru/'> Условия доставки по России</a>", 

	images:[
		'/wp-content/uploads/2016/08/DPK0.jpg',
		'/wp-content/uploads/2016/08/DPK1-1.jpg',
		'/wp-content/uploads/2016/08/DPK3-1.jpg',
		'/wp-content/uploads/2016/08/DPK5-1.jpg',
		'/wp-content/uploads/2016/08/DPK6-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK19.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK22.jpg',
		'/wp-content/uploads/2016/08/DPK7-1.jpg',
		'/wp-content/uploads/2016/08/DPK8-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK21.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK20.jpg',
'/wp-content/uploads/2016/08/DPK9-1.jpg',
		'/wp-content/uploads/2016/08/DPK10-1.jpg',
'/wp-content/uploads/2016/08/DPK13-1.jpg',
		'/wp-content/uploads/2016/08/DPK14-1.jpg',
		'/wp-content/uploads/2016/08/DPK11-1.jpg',
		'/wp-content/uploads/2016/08/DPK12-1.jpg',
		'/wp-content/uploads/2016/08/DPK15-1.jpg',
		'/wp-content/uploads/2016/08/DPK16-1.jpg',
'/wp-content/uploads/2016/08/DPK23.jpg',
		'/wp-content/uploads/2016/08/DPK17-1.jpg'
		
	],
	colors:[ 
		{name:"карминовый",d:"45", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		//{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		{name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		//{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 {name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		{name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 {name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]}, 
		/*{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},*/
		//{name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"шоколадный",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
		{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		//{name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
 //{name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
{name:"светло-серый",d:"55", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		{name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
		{name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
		{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
		
		],
	price:1600
};

tStoreRU.layer2['Longdress'] = {
	id:"Longdress",
	title:"Длинное платье",
	pricetext:"1400 руб",
	description:"Элегантное хлопковое платье<br>Можно сочетать со множеством стилей (этно, классика, деловой и т.д.)<br>Создано с любовью и легкостью <br>БЕЗ шитья и выкроек<br>Материал: Ткань-ТУБА 95% хлопок, 5% эластан<br>Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br><a href='http://tuba-duba.com/delivery-ru/'> Условия доставки по России</a>",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP1-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP2-1.jpg',
		'/wp-content/uploads/2016/08/Dlinnoeplate2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP13.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP9-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP3-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP4.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP4-2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP5-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP6-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP8-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP7-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP7-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP12.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP13-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP14.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP15.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP16.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP17.jpg'

	],colors:[ 
		{name:"карминовый",d:"45", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		//{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"49", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		//{name:"красный", d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		//{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 {name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		//{name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 {name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]}, 
		/*{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},*/
		{name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"шоколадный",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
		{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		{name:"светло-желтый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		{name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
//{name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
{name:"светло-серый",d:"55", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		{name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
		{name:"оранжевый",d:"54", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
		{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]}
	 
		
		],
	price:1400
};

 
// ======================================
// CRIMEA
// ======================================

var tStoreCR = {layer1:[],layer2:{}};

/*БЕСШОВНЫЕ ВОЛШЕБНЫЕ ПЛАТЬЯ*/
tStoreCR.layer1.push({
	id:"longdresswithhood",
	title:"Длинные платья с капюшоном",
	pricetext:"1600 руб",
	description:"Красивое женственное хлопковое платье. <br>Создано с любовью и легкостью, БЕЗ шитья из ткани-тубы )",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/09/DPK6.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/09/DPK1.jpg',
	]
});
tStoreCR.layer1.push({
	id:"Longdress",
	title:"Длинные платья",
	pricetext:"1400 руб",
	description:"Элегантное хлопковое платье<br>Создано с любовью и легкостью, БЕЗ шитья из ткани-тубы",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/09/DP7.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/09/DP6.jpg'
	]
});

/*tStoreCR.layer1.push({
	id:"Longlargedress",
	title:"Длинное широкое платье",
	pricetext:"1700 руб",
	description:"Восхитительное и очень удобное бесшовное хлопковое платье.<br>Создано с любовью и легкостью из ткани-тубы ",
	images:[
		'/wp-content/uploads/2016/08/shirokoedlinnoe-plate.jpg',
		'/wp-content/uploads/2016/08/shirokoedlinnoe-plate1.jpg',
	]
});
*/


/*ОПИСАНИЕ ДЛЯ ТОВАРОВ*/

tStoreCR.layer2['longdresswithhood'] = {
	id:"longdresswithhood",
	title:"Длинное платье с капюшоном",
	pricetext:"1600 руб",
	description: "Очень красивое и женственное платье с капюшоном. <br>Создано с любовью и легкостью<br>БЕЗ шитья и выкроек<br>Материал: ткань-ТУБА 95% хлопок, 5% эластан<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>) <br><a href='http://tuba-duba.com/delivery/'> Условия доставки по Крыму</a>", 

	images:[
		'/wp-content/uploads/2016/08/DPK0.jpg',
		'/wp-content/uploads/2016/08/DPK1-1.jpg',
		'/wp-content/uploads/2016/08/DPK3-1.jpg',
		'/wp-content/uploads/2016/08/DPK5-1.jpg',
		'/wp-content/uploads/2016/08/DPK6-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK19.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK22.jpg',
		'/wp-content/uploads/2016/08/DPK7-1.jpg',
		'/wp-content/uploads/2016/08/DPK8-1.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK21.jpg',
'http://tuba-duba.com/wp-content/uploads/2016/08/DPK20.jpg',
'/wp-content/uploads/2016/08/DPK9-1.jpg',
		'/wp-content/uploads/2016/08/DPK10-1.jpg',
'/wp-content/uploads/2016/08/DPK13-1.jpg',
		'/wp-content/uploads/2016/08/DPK14-1.jpg',
		'/wp-content/uploads/2016/08/DPK11-1.jpg',
		'/wp-content/uploads/2016/08/DPK12-1.jpg',
		'/wp-content/uploads/2016/08/DPK15-1.jpg',
		'/wp-content/uploads/2016/08/DPK16-1.jpg',
'/wp-content/uploads/2016/08/DPK23.jpg',
		'/wp-content/uploads/2016/08/DPK17-1.jpg'
		
	],
	colors:[ 
		 
		//{name:"карминовый",d:"45", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		//{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"48", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		{name:"красный", d:"47", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		//{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 //{name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		 {name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 {name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]}, 
		//{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},*/
		 {name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
		//{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
//{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		{name:"светло-желтый",d:"48", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
 //{name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		//{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		//{name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
		{name:"оранжевый",d:"55", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
		//{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]},
  {name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
  {name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]}
		
		
		],
	price:1600
};

tStoreCR.layer2['Longdress'] = {
	id:"Longdress",
	title:"Длинное платье",
	pricetext:"1400 руб",
	description:"Элегантное хлопковое платье<br>Можно сочетать со множеством стилей (этно, классика, деловой и т.д.)<br>Создано с любовью и легкостью <br>БЕЗ шитья и выкроек<br>Материал: Ткань-ТУБА 95% хлопок, 5% эластан<br>Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br><a href='http://tuba-duba.com/delivery/'> Условия доставки по Крыму</a>",
	images:[
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP1-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP2-1.jpg',
		'/wp-content/uploads/2016/08/Dlinnoeplate2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP13.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP9-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP3-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP4.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP4-2.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP5-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP6-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP8-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP7-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP7-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP12.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP13-1.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP14.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP15.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP16.jpg',
		'http://tuba-duba.com/wp-content/uploads/2016/08/DP17.jpg'

	],colors:[ 
		//{name:"карминовый",d:"45", color:"#560406", images:["http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"]},
		//{name:"бардовый",d:"50", color:"#800000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"]},
		{name:"баклажановый",d:"48", color:"#b0147c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"]},
		{name:"красный", d:"47", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"]},
		{name:"оливковый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"]},
		//{name:"темно-зеленый",d:"48", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"]},
		//{name:"васильковый",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"]}, 
		 //{name:"небесный",d:"45", color:"#9fc6e3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"]},
		 {name:"темно-синий",d:"48", color:"#00003e", images:["http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"]},
		 {name:"синий",d:"48", color:"#07167d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"]}, 
		//{name:"бирюзовый",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"]},*/
		 {name:"бежевый",d:"44", color:"#d3a75c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"]},
{name:"терракот",d:"45", color:"#cb5d2b", images:["http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"]},
		//{name:"темно-коричневый",d:"47", color:"#331610", images:["http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"]},
//{name:"желтый",d:"47", color:"#f8f102", images:["http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"]},
		{name:"светло-желтый",d:"48", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"]},
		 {name:"белый",d:"45", color:"#ffffff", images:["http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"]},
		{name:"черный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"]},
		//{name:"нежно-кремовый",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"]},
 //{name:"мятный",d:"45", color:"#000000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"]},
		//{name:"темно-серый",d:"50", color:"#5c5c5c", images:["http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"]},
		{name:"светло-серый",d:"45", color:"#b5b5b3", images:["http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"]},
		//{name:"абрикосовый",d:"45", color:"#efbc9d", images:["http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"]},
		{name:"оранжевый",d:"55", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"]},
 {name:"сливовый",d:"56", color:"#ff5c05", images:["http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"]},
		//{name:"малахитовый",d:"56", color:"#0bc331", images:["http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"]},
  {name:"морской",d:"49", color:"#FF0000", images:["http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"]}
		
		],
	price:1400
};

for (var key in tStore.layer2){
	var l1Found = false;
	tStore.layer1.forEach(function(f){if (f.id == key) l1Found = f});
	if (l1Found && l1Found.pricediscount) {
		tStore.layer2[key].price = l1Found.pricediscount;
		tStore.layer2[key].price_full = l1Found.pricetext;
		tStore.layer2[key].pricetext = "<span style='font-size:20px;text-decoration:line-through;'>" + tStore.layer2[key].price_full + "</span> "  + tStore.layer2[key].price ;
	}
}
