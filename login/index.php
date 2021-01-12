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
<body class="login_fon">
	<?php include('../tpl/header.php');?>
	<div id="page" class="login_page">
		<div class="login">
			<div class="box_login">
				<div class="title_min">Авторизация <a href="" style="float:right; font-size: 16px;"><small>Забыли пароль?</small></a></div>
				<small>Тел.номер</small>
				<br>
				<input type="text" placeholder="" class="login_phone">
				<br><br>
				<small>Пароль</small>
				<br>
				<input type="text" placeholder="" class="login_password">
				<br>
				<p style="text-align: center;"><input type="button" value="Войти" class="login_button button"></p>
			</div>
		</div>
	</div>
</body>
<html>