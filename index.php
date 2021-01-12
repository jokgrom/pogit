<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Сервис осуществления передач. Оставьте, заберут</title>
	<?php include('tpl/head.php'); ?>
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
<body>
	<div id="page">
		<?php include('tpl/header.php');?>
		
		<div id="content">
			<div class="box_welcome">
				<div class="content">
					<h1>Сервис хранения и передачи вещей</h1>
					<br>
					<div style="text-align: center;"><input type="button" value="Присоединиться" class="button"></div>
				</div>
			</div>

			<div class="box1">
				<div class="item1"><img src="/img/fon5.jpg" class="img1"></div>
				<div class="item2">
					<div class="content">
						<p class="title_min" style="text-align: center;">У вас есть что передать или оставить на сохранность?</p>
						<div style="text-align: center;"><input type="button" value="Найти пункт" class="button"></div>
						<br>
						<p>&bull; Оставлять на сохранность свои вещи, такие как сумки, письма, чемоданы, домашние питомцы, автомобили и др.</p>
						<p>&bull; Осуществляйте передачи только через доверенных лиц</p>
						<p>&bull; У нас с каждым днём добавляется всё больше и больше пунктов сохранности вещей...</p>
					</div>
				</div>
			</div>

			<div class="box2">
				<div class="title_min">Всё очень просто2...</div>
				<div class="content">
					<div class="item">
						<div class="wrappe">
							<p style="color:#000; font-weight: 600">Близко</p>
							<p>Уже сотни пунктов осушествляют свою деятельность вблизи вас. Укажите адрес, и система подберёт ближайшие пункты.</p>
						</div>
					</div>
					<div class="item">
						<div class="wrappe">
							<p style="color:#000">Надёжно</p>
							<p>Выбирайте только надёжные и проверненные пункты. Оставляйте отзывы, делитесь впечатлениями.</p>
						</div>
					</div>
					<div class="item">
						<div class="wrappe">
							<p style="color:#000">Прибыльно</p>
							<p>Присоединяйся, это прибыльно. Осушествляйте услуги хранение вещей, уделяя на это минимум своего времени. Регистрация за 1минуту.</p>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<?php include('tpl/footer.php');?>

	</div>
</body>
<html>