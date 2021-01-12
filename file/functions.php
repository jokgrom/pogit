<?php

	function clean($value){
		$value = preg_replace('/\s+/', ' ', $value);//удаляем лишние пробелы
		$value=trim($value);
		return $value;
	}




//поиск и добавление символа
function f_search__symbol($db,$symbol){
	$stmt = $db->prepare("SELECT `id` FROM `t1_symbol` WHERE `symbol` = :symbol");
	$stmt->execute([':symbol' => $symbol]);
	if($stmt->fetch()){return true;}else{return false;}
}

function f_insert__symbol($db,$symbol){
	$query = "INSERT INTO `t1_symbol` (`symbol`,`logics`) VALUES (:symbol,1)";
	$params = [':symbol' => $symbol];
	$stmt = $db->prepare($query);
	$stmt->execute($params);
	echo '<script language="JavaScript" type="text/javascript"> 
			alert( "символ \"'.$symbol.'\" добавлен в БД" );
		</script>';
}





//поиск слова
function f_search__word($db,$word){
	$stmt = $db->prepare("SELECT `id` FROM `t2_word` WHERE `word` = :word");
	$stmt->execute([':word' => $word]);
	if($stmt->fetch()){return true;}else{return false;}
}
//поиск ид слова
function f_search__word_id($db,$word){
	$stmt = $db->prepare("SELECT `id` FROM `t2_word` WHERE `word` = :word");
	$stmt->execute([':word' => $word]);
	while ($row = $stmt->fetch())
	{return $row['id'];}
	
	
}
//добавление слова
function f_insert__word($db,$word){
	$query = "INSERT INTO `t2_word` (`word`,`logics`) VALUES (:word,1)";
	$params = [':word' => $word];
	$stmt = $db->prepare($query);
	$stmt->execute($params);
	echo '<script language="JavaScript" type="text/javascript"> 
			alert( "слово \"'.$word.'\" добавлено в БД" );
		</script>';
}









//поиск и добавление связи младшему слову
function f_insert__word_connection_junior($db,$id_word1,$id_connection){
	$stmt = $db->prepare("SELECT `connection_senior` FROM `t2_word` WHERE `id` = :id_word1");
	$stmt->execute([':id_word1' => $id_word1]);
	$row = $stmt->fetch();
	if(preg_match("/$id_connection/", $row['connection_senior'])){
		echo '<p>связь была ранее установлена</p>';
	}else{
		//добавляем связь
		$id_connection.='_'.$row['connection_senior'];
		$params = [':id_word1' => $id_word1,':id_connection' => $id_connection];
		$query = "UPDATE t2_word SET connection_senior =:id_connection WHERE id = :id_word1";
		$stmt = $db->prepare($query);
		$stmt->execute($params);
		echo '<p>связь добавлена</p>';
	}
}


//поиск и добавление связи старшому слову
function f_insert__word_connection_senior($db,$id_word2,$id_connection){
	$stmt = $db->prepare("SELECT `connection_junior` FROM `t2_word` WHERE `id` = :id_word2");
	$stmt->execute([':id_word2' => $id_word2]);
	$row = $stmt->fetch();
	if(preg_match("/$id_connection/", $row['connection_junior'])){
		echo '<p>связь была ранее установлена</p>';
	}else{
		//добавляем связь
		$id_connection.='_'.$row['connection_junior'];
		$params = [':id_word2' => $id_word2,':id_connection' => $id_connection];
		$query = "UPDATE t2_word SET connection_junior =:id_connection WHERE id = :id_word2";
		$stmt = $db->prepare($query);
		$stmt->execute($params);
		echo '<p>связь добавлена</p>';
	}
}




//поиск и добавление связи общему слову
function f_insert__word_connection_common($db,$id_word1,$id_connection){
	$stmt = $db->prepare("SELECT `connection_common` FROM `t2_word` WHERE `id` = :id_word1");
	$stmt->execute([':id_word1' => $id_word1]);
	$row = $stmt->fetch();
	if(preg_match("/$id_connection/", $row['connection_common'])){
		echo '<p>связь была ранее установлена</p>';
	}else{
		//добавляем связь
		$id_connection.='_'.$row['connection_common'];
		$params = [':id_word1' => $id_word1,':id_connection' => $id_connection];
		$query = "UPDATE t2_word SET connection_common =:id_connection WHERE id = :id_word1";
		$stmt = $db->prepare($query);
		$stmt->execute($params);
		echo '<p>связь добавлена</p>';
	}
}
















//вывод слов по связям одного слова
function f_select_ii($db,$word){
	$stmt = $db->prepare("SELECT * FROM t2_word WHERE word = :word");
	$stmt->execute([':word' => $word]);
	while ($row = $stmt->fetch()){
		echo '<br>Младшие связи<br>';
		$array_connection_junior = explode("_", $row['connection_junior']);
		foreach ($array_connection_junior as $key=>$cell_connection_junior){
			if($cell_connection_junior!=''){
				$stmt_junior = $db->prepare("SELECT * FROM t2_word WHERE id = :id_word");
				$stmt_junior->execute([':id_word' => $cell_connection_junior]);
				$row_junior = $stmt_junior->fetch();
				echo $row_junior['word'].'<br>';
			}
			
		}
		
		echo '<br>Старшие связи<br>';
		$array_connection_senior = explode("_", $row['connection_senior']);
		foreach ($array_connection_senior as $key=>$cell_connection_senior){
			if($cell_connection_senior!=''){
				$stmt_senior = $db->prepare("SELECT * FROM t2_word WHERE id = :id_word");
				$stmt_senior->execute([':id_word' => $cell_connection_senior]);
				$row_senior = $stmt_senior->fetch();
				echo $row_senior['word'].'<br>';
			}
			
		}
		
		
		echo '<br>Средние связи<br>';
		$array_connection_common = explode("_", $row['connection_common']);
		foreach ($array_connection_common as $key=>$cell_connection_common){
			if($cell_connection_common!=''){
				$stmt_common = $db->prepare("SELECT * FROM t2_word WHERE id = :id_word");
				$stmt_common->execute([':id_word' => $cell_connection_common]);
				$row_common = $stmt_common->fetch();
				echo $row_common['word'].'<br>';
			}
			
		}
	}
}
?>