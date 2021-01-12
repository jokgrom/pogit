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
	<style>
.cabinet{
	display: flex;
	justify-content: space-around;
	margin-top:80px;
}
.box_cabinet{
	display: flex;
	justify-content: center;
	align-items: center;
}
.box_cabinet .title_min{text-align: center;}
.form_cabinet__address, .form_cabinet__price{
	width:95%;
	padding: 7px;
	border: none;
	border-radius: 7px;
	line-height: 2em;
	color:#000;
	background-color: #f1f3f4;
}
.cabinet__additional .item{
	margin-right: 10px;
	padding:7px; 
    border-radius: 7px;
    background-color: #f1f3f4;
}
.form_cabinet__offer{
	text-align: center;
	padding: 15px 43px;
}

.info_cabinet{width: 40%;}


.form_cabinet__contacts,.form_cabinet__comment{
	width: 95%;
	height: 100px;
    padding: 7px;
	border: 1px solid #a9a9a9;
    border-radius: 7px;
    line-height: 2em;
    color: #000;
    background-color: #f1f3f4;
}
	</style>
	<div id="page">
		<?php include('../tpl/header.php');?>
	
		<div id="content">
			<div class="cabinet">
				<div class="box_cabinet">
					<div class="wrappe">
						<div class="title_min">Ваша услуга</div>
						<div>
							<small>Адрес:</small>
							<br>
							<input type="text" placeholder="Например: г.Краснодар, ул.Красная" class="form_cabinet__address">
							<br><br>
							<small>У вас так же можно оставить:</small>
							<br> 
							<div class="cabinet__additional">
								<span class="item">транспорт <input type="checkbox"></span> 
								<span class="item">животное <input type="checkbox"></span>
								<span class="item">передать 3му лицу<input type="checkbox"></span>
							</div>
							<br>
							<small>Цена за услугу:</small>
							<br>
							<input type="text" placeholder="100руб" class="form_cabinet__price">
							<br><br>
							<small>Контактные данные:</small>
							<br> 
							<textarea class="form_cabinet__contacts" placeholder="Укажите контактны для связи. Можете указать номер телефона, инстаграмм, личный сайт и др."></textarea>
							<small>Комментарий:</small>
							<br> 
							<textarea class="form_cabinet__comment"  placeholder="Дополнительная информация"></textarea>
							<br>
							<p style="text-align: center;width: 90%;"><input type="button" value="Изменить" class="form_cabinet__cabinet button"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php include('../tpl/footer.php');?>
		
	</div>
</body>
<html>