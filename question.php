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
	<form action="confirm.php" method="post">
	<table>
	<caption>お問い合わせ</caption>
　	<tr>
	<td>名前：</td>
	<td><input class="buttonStyle" type="text" name="name" /></td>
	</tr>
	<tr>
	<td>題名：</td>
	<td><input class="buttonStyle" type="text" name="title" /></td>
	</tr>
	<tr>
	<td>メールアドレス：</td>
	<td><input class="buttonStyle" type="text" name="mail" /></td>
	</tr>
	<tr>
	<td>要件：</td>
	</tr>
	<tr>
	<td colspan="2"><textarea name="textarea" rows="10" cols="50"></textarea></td>
	</tr>
	<tr>
	<td colspan="2"><div style="text-align:right;"><input type="submit" value="確認" class="confirmButton" /></div></td>
	</tr>
	</table>
	</form>
	</div>
	</div>
</div>

<div class="footer">
	<div class="footerFontStyle"><P>Copyright © 2016 bookrec inc. All Rights Reserved.</P></div>
</div>

</div>
</body>
</html>