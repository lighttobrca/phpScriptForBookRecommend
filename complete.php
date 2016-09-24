<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>書籍紹介サイト</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<link href="./css/main.css" media="all" rel="stylesheet" type="text/css">
</head>
<body>

<div class="centermargin">

<div class = "top">

<div class="leftmessege">
<img src="./picture/title.png"/ class="titlePicture">
</div>

<div class = "rightmessege">
<h1>参考になった!<br/>書籍まとめ</h1>
</div>
</div>

	<div class = "middle">
		<ul id="listNavi">
		<li id="listBorderStyle"><a href="./home.php">Home</a></li>
		<li><a href="./ITbookrec.php">IT系書籍</a></li>
		<li><a href="./Sportsbookrec.php">スポーツ系書籍</a></li>
		<li><a href="./Humanbookrec.php">自己啓発系書籍</a></li>
		<li><a href="./question.php">お問い合わせ</a></li>
		</ul>
	</div>
	
<div class="bottombox">
	<div class = "questionbottom">
	<div class = "homeintro">
	<h2>要件登録完了のお知らせ</h2>
	<p>要件が管理者に送信されました。<br/>後日連絡致しますので、しばらくお待ちください。</p>
	<input type="button" class="buttonStyleHome" onclick="location.href='home.php'"value="Homeへ戻る" >
	</div>

	<?php
	define('DB_DATABASE', 'LAA0784655-question');
	define('DB_USERNAME','LAA0784655');
	define('DB_PASSWORD','hkh222');
	define('PDO_DSN','mysql:host=mysql116.phy.lolipop.lan;dbname='.DB_DATABASE.';charset=utf8');

	$postName = htmlspecialchars($_POST['name'],ENT_QUOTES);
	$postName = trim($postName);
	$name = "name";
	$postTitle = htmlspecialchars($_POST['title'],ENT_QUOTES);
	$postTitle = trim($postTitle);
	$title = "title";
	$postMail = htmlspecialchars($_POST['mail'],ENT_QUOTES);
	$postMail = trim($postMail);
	$mail = "mail";
	$postQuestion = htmlspecialchars($_POST['textarea'],ENT_QUOTES);
	$postQuestion = trim($postQuestion);
	$question = "question";
	try{
		//DB接続
		$db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);
		$db -> exec("insert into question (".$name.",".$title.",".$mail.",".$question.") values ('".$postName."','".$postTitle."','".$postMail."','".$postQuestion."')");
		var_dump($db->errorInfo());
	} catch(PDOExcception $s){
		exit('データベース接続失敗'.$e->getMessege()); 
	}

	?>

	</div>
</div>

<div class="footer">
	<div class="footerFontStyle"><P>Copyright © 2016 bookrec inc. All Rights Reserved.</P></div>
</div>

</div>

</body>
</html>