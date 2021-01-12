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


//из строки берём первое слово=> делаем запрос на проверку и добавление связи
$array_word = explode(" ", $form__word);
foreach($array_word as $key=>$cell_word){
	if($cell_word!='' and isset($array_word[$key+1])){
		echo 'da';
	}
	/*
	if(mb_strlen($array_word[0],'UTF-8')>1){
		$id_word1=f_select_ii($db,$array_word[0]);
	}*/
	//echo $cell_word;
}


?>
