<!DOCTYPE html>
<html>
<head>
	<title>LANChat</title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta content='width=device-width, initial-scale=1' name='viewport'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" href="./content.css">
	<script src="./jquery-3.4.1.min.js"></script>
	<script src="./process.js"></script>
</head>

<body>
	<textarea class="box" rows="20" id="box" disabled></textarea>
	<div class="limit"><br>
		<b>Nhắn ở dưới đây</b><br><br>
		<input type="text" id="usr" placeholder="Tên người gửi"><br><br>
		<textarea rows="10" id="data" placeholder="Tin nhắn ở đây"></textarea><br>
		<button type="button" id="send" onclick="show(this.value)">Nhắn</button>
	</div>
</body>
</html>