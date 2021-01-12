<?php
	//подключение к БД	
	include('../file/db.php');
	//подключаем функции
	include('../file/functions.php');

	
	
	
$form__word3=$_GET['form__word3'];
$form__word4=$_GET['form__word4'];

//обработка полученных данных через форму
if($form__word3!=''){
	$value=$form__word3;
	$form__word3=clean($value);
	unset($value);
}
if($form__word4!=''){
	$value=$form__word4;
	$form__word4=clean($value);
	unset($value);
}



//из строки берём первое слово=> делаем запрос на проверку и добавление связи
$array_word3 = explode(" ", $form__word3);
if(mb_strlen($array_word3[0],'UTF-8')>1){
	$id_word3=f_search__word_id($db,$array_word3[0]);
}

$array_word4 = explode(" ", $form__word4);
if(mb_strlen($array_word4[0],'UTF-8')>1){
	$id_word4=f_search__word_id($db,$array_word4[0]);
}



//если 2слова есть, то можно установить связь
if($id_word3!='' AND $id_word4!=''){
	f_insert__word_connection_common($db,$id_word3,$id_word4);
	f_insert__word_connection_common($db,$id_word4,$id_word3);
}else{
	if($id_word3==''){
		echo '<script language="JavaScript" type="text/javascript"> 
			alert( "первое слово не найдено" );
		</script>';
	}else{
		echo '<script language="JavaScript" type="text/javascript"> 
			alert( "второе слово не найдено" );
		</script>';
	}
}
?>
