<html>
<head>
	<title>Solar System</title>
	<!-- link calendar resources -->
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
</head>
<body>
<?php
	$size=$_GET['m'];
	$date=$_GET['date'];
	$time=$_GET['time'];
?>
	<form method="get" action="solarsystem.php">
		<!-- add class="tcal" to your input field -->
		<p><b>������� ����. ������ mm/dd/yyyy .  �������� ���� ������ ��� ������� ����</b><br>
<?php
	echo "	<div><input type=\"text\" name=\"date\" class=\"tcal\" value=\"$date\" /></div><br>";
	echo "	<p><b>������� �����. ������ hh:mm . ����� ������� ��������� �� ��������! �������� ���� ������ ��� �������� �������.</b><br>";
	echo "	<div><input type=\"text\" name=\"time\" value=\"$time\" /></div><br>";
	echo "	<p><b>�������. ������� ������ ���� � ��������������� ��������. ������� �������� 100 ��� ������� ������ ��������� �������.</b><br>";
	echo "	<input name=\"m\" type=\"text\" size=\"4\" value=\"$size\"><br>\n";
?>
		<div><input type="submit" value="��������"/></div>
	</form>
<?php
	echo "<img src=\"image.php?m=$size&date=$date&time=$time\">\n";
?>
</body>
</html>
