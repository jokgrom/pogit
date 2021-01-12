<?php
	//подключение к БД	
	include('../file/db.php');
	//подключаем функции
	include('../file/functions.php');

	
	
	
$form__word=$_GET['form__word'];

//обработка полученных данных через форму
if($form__word!=''){
	$value=$form__word;
	$form__word=clean($value);
	unset($value);
}


//создаём массив символов без повторов => делаем запросы на проверку и добавление символов
$array_symbol=preg_split('//u', $form__word, -1, PREG_SPLIT_NO_EMPTY);
$array_symbol=array_unique($array_symbol);
foreach($array_symbol as $key=>$cell_symbol){
	if(f_search__symbol($db,$array_symbol[$key])==false){
		f_insert__symbol($db,$array_symbol[$key]);
	}
}



//разбиваем строку на слова => делаем запрос на проверку и добавление слова
$array_word = explode(" ", $form__word);
foreach($array_word as $word){
	if(mb_strlen($word,'UTF-8')>1){
		if(f_search__word($db,$word)==false){
			f_insert__word($db,$word);
		}
	}
	
}
?>
