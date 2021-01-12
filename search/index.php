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
<body>
	<div id="page">
		<?php include('../tpl/header.php');?>
	
		<div id="content">
			<div class="search">
				<div class="box_search">
					<div class="wrappe">
						<div class="title_min">Поиск пункта</div>
						<div>
							<small>Укажите адрес:</small>
							<br>
							<input type="text" placeholder="Например: г.Краснодар, ул.Красная" class="form_search__address">
							<br><br>
							<small>Радиут поиска:</small>
							<select class="from_search__radius">
								<option disabled >км</option>
								<option value="500">500м</option>
								<option value="1000">1000м</option>
							</select>
							<br><br>
							<small>Цена за услугу:</small>
							<input type="text" placeholder="100руб" class="form_search__price">
							&mdash;
							<input type="text" placeholder="200руб" class="form_search__price">
							<br><br>
							<small>Дополнительно:</small>
							<br> 
							<div class="search__additional">
								<span class="item">транспорт <input type="checkbox"></span> 
								<span class="item">животные <input type="checkbox"></span>
								<span class="item">передача 3му лицу<input type="checkbox"></span>
							</div>
							<br>
							<p style="text-align: center;width: 90%;"><input type="button" value="Найти" class="form_search__search button"></p>
						</div>
					</div>
				</div>
				<div class="info_search">
					<div class="title_min">Обратите внимание</div>
					<p>&bull; Мы не несём никакой отвественности за сохранность ваших вещей. 
					<br>&bull; Мы не являемся владельцами пунктов. 
					<br>&bull; Вся информация предоставленная на сайте, несёт только информационный характер.
					<br>&bull; Настоятельно рекомендуем согласовывать все детали.</p>
				</div>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2818.371268051763!2d38.97899631554381!3d45.057979179098304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f04585cf8d17db%3A0x9090eec2adea809a!2sUlitsa%20Krasnaya%2C%204%2C%20Krasnodar%2C%20Krasnodarskiy%20kray%2C%20350020!5e0!3m2!1sen!2sru!4v1587043668057!5m2!1sen!2sru" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
		
		<?php include('../tpl/footer.php');?>
		
	</div>
</body>
<html>