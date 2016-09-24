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
	
<?php
$name = "";
$title = "";
$mail = "";
$textarea = "";
if (isset($_POST['name'])){
	$name = $_POST['name'];
}
if (isset($_POST['title'])){
	$title = $_POST['title'];	
}
if (isset($_POST['mail'])){
	$mail = $_POST['mail'];	
}
if (isset($_POST['textarea'])){
	$textarea = $_POST['textarea'];
}

?>

<div class="bottombox">
	<div class = "questionbottom">
	<div class = "homeintro">
		<h2>お問い合わせ</h2>
		<table>
		<form action="complete.php" method="post">
　		<tr>
			<td>名前：</td>
			<td>
				<?php echo $_POST['name'];?>
				<input type="hidden" name="name" value="
				<?php echo $name;?>">
			</td>
		</tr>
		
		<tr>
			<td>題名：</td>
		<td>
			<?php echo $_POST['title']?>
			<input type="hidden" name="title" value="
			<?php echo $title;?>">
		</td>
	</tr>

	<tr>
		<td>メールアドレス：</td>
		<td>
			<?php echo $_POST['mail']?>
			<input type="hidden" name="mail" value="
			<?php echo $mail;?>">
		</td>
	</tr>

	<tr>
		<td>要件：</td>
	</tr>
	
	<tr>
		<td colspan="2">
		<div class="textWidth"><?php echo $_POST['textarea']?></div>
		<input type="hidden" name="textarea" value="
		<?php echo $textarea;?>">
		</td>
	</tr>
	<tr>
		<td colspan="2"><div style="text-align:right;">
		<input type="submit" value="送信" class="confirmButton" />
		</div>
		</td>
	</tr>
	</form>
	</table>
	</div>
</div>

</div>

<div class="footer">
	<div class="footerFontStyle"><P>Copyright © 2016 bookrec inc. All Rights Reserved.</P></div>
</div>

</div>
</body>
</html>