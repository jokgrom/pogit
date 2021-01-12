<?php
	//подключение к БД	
	include('../file/db.php');
	//подключаем функции
	include('../file/functions.php');

	
	
	
$form__word1=$_GET['form__word1'];
$form__word2=$_GET['form__word2'];

//обработка полученных данных через форму
if($form__word1!=''){
	$value=$form__word1;
	$form__word1=clean($value);
	unset($value);
}
if($form__word2!=''){
	$value=$form__word2;
	$form__word2=clean($value);
	unset($value);
}



//из строки берём первое слово=> делаем запрос на проверку и добавление связи
$array_word1 = explode(" ", $form__word1);
if(mb_strlen($array_word1[0],'UTF-8')>1){
	$id_word1=f_search__word_id($db,$array_word1[0]);
}

$array_word2 = explode(" ", $form__word2);
if(mb_strlen($array_word2[0],'UTF-8')>1){
	$id_word2=f_search__word_id($db,$array_word2[0]);
}



//если 2слова есть, то можно установить связь
if($id_word1!='' AND $id_word2!=''){
	f_insert__word_connection_junior($db,$id_word1,$id_word2);
	f_insert__word_connection_senior($db,$id_word2,$id_word1);//а тут надо сделать добавление для высшего звена и для общего
	
}else{
	if($id_word1==''){
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
