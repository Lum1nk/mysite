<?php
	require_once 'config.php';

	$sql = 'SELECT `Author`, `Title` FROM `books` WHERE `ID` = 1';
	$result = $conn->query($sql)->fetch();
	
	$n = $result['Author'];
	$s = $result['Title'];
	$answer = sprintf('{"Author":"%s", "Title":"%s"}', $n,$s);
	echo $answer;
?>
