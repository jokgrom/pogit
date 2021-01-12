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
			<div class="offer">
				<div class="box_offer">
					<div class="wrappe">
						<div class="title_min">Предложить услугу</div>
						<div>
							<small>Укажите адрес:</small>
							<br>
							<input type="text" placeholder="Например: г.Краснодар, ул.Красная" class="form_offer__address">
							<br><br>
							<small>У вас так же можно оставить:</small>
							<br> 
							<div class="offer__additional">
								<span class="item">транспорт <input type="checkbox"></span> 
								<span class="item">животное <input type="checkbox"></span>
								<span class="item">передать 3му лицу<input type="checkbox"></span>
							</div>
							<br>
							<small>Цена за услугу:</small>
							<br>
							<input type="text" placeholder="100руб" class="form_offer__price">
							<br><br>
							<small>Контактные данные:</small>
							<br> 
							<textarea class="form_offer__contacts" placeholder="Укажите контактны для связи. Можете указать номер телефона, инстаграмм, личный сайт и др."></textarea>
							<small>Комментарий:</small>
							<br> 
							<textarea class="form_offer__comment" placeholder="Дополнительная информация"></textarea>
							<br>
							<p style="text-align: center;width: 90%;"><input type="button" value="Разместить" class="form_offer__offer button"></p>
						</div>
					</div>
				</div>
				<div class="info_offer">
					<div class="title_min">Обратите внимание</div>
					<p>&bull; Мы не несём никакой отвественности за предоставляемые вещи. 
					<br>&bull; Мы не являемся владельцами вещей. 
					<br>&bull; Вся информация предоставленная на сайте, несёт только информационный характер.
					<br>&bull; Настоятельно рекомендуем согласовывать все детали.</p>
				</div>
			</div>
		</div>
		
		<?php include('../tpl/footer.php');?>
		
	</div>
</body>
<html>