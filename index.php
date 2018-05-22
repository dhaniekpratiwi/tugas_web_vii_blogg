<html>
<title>Membuat Status Jejaring Sosial</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery.1.4.2.min.js"></script>
<script type="text/javascript" src="update.js"></script>
</head>
<body>
<div id="wall_container">
<div id="updateboxarea">
<h2>Tulis Statusmu ..! </h2>
<textarea cols="30" rows="4" name="update" id="update"></textarea>
<input type="submit" value="Update" id="update_button" />
</form>
</div>
<div id="flashmessage">
<div id="flash" align="left"></div>
</div>
<div id="status">
<?php include('buka_status.php'); ?>
</div>
</div>
</body>
</html>
