<?php
	require_once 'config.php';
	$id_book = intval($_GET['id']);
	$sql = 'SELECT `ID`, `Title`, `Author`, `YEAR` FROM `books` WHERE `ID` = ' . $id_book;
	$result = $conn->query($sql)->fetch();
	
	$Author = $result['Author'];
	$Title = $result['Title'];
	$ID = $result['ID'];
	$YEAR = $result['YEAR'];
	$answer = sprintf('{"Author":"%s", "Title":"%s", "Year":"%d", "id":"%d"}', $Author,$Title,$YEAR,$ID);
	echo $answer;
?>
