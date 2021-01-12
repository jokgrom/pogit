<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Сервис осуществления передач. Оставьте, заберут</title>
	<?php include('../tpl/head.php'); ?>
	<meta name="description" content="">
    <meta name="keywords" content="">
	
	<script>
	// $(document).ready(function() {	
	// 	//добавление слова или символа
	// 	$(document).on("click", '#form__button', function() {
	// 		var form__word = $(".form__word").val();	
	// 		$.get('/work/select_connection.php',  {form__word: form__word}, function(data) {
	// 			$('#footer').html(data);
	// 		});
	// 	});
	// });
	</script>
</head>
<body class="registration_fon">
	<?php include('../tpl/header.php');?>
	<div id="page" class="registration_page">
		<div class="registration">
			<div class="box_registration">
				<div class="title_min">Регистрация</div>
				<small>Тел.номер</small>
				<br>
				<input type="text" placeholder="" class="registration_phone">
				<br><br>
				<small>Пароль</small>
				<br>
				<input type="text" placeholder="" class="registration_password">
				<br><br>
				<small>Пароль ещё раз</small>
				<br>
				<input type="text" placeholder="" class="registration_password">
				<br><br>
				<p><input type="checkbox"> Я согласен с <a href="">политикой обработки персональных данных</a></p>
				<p style="text-align: center;"><input type="button" value="Войти" class="registration_button button"></p>
			</div>
		</div>
	</div>
</body>
<html>