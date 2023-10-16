<meta name="robots" content="noindex"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php
$f = "notepad.php.txt";
$txt = $_REQUEST["txt"];
if ($txt!='') {
	file_put_contents($f,$txt);
	echo "<font color='red'>saved</font><br>";
}

if (file_exists($f)) {
	$txt = file_get_contents($f);
	$countLines = count(explode("\n", $txt));
}

?>
<form action="notepad.php" method="post">
	<textarea rows="<?=($countLines+3)?>" style="width:99%; background-color: #EEE; font-size:24px; white-space: nowrap;" name="txt"><?=$txt?></textarea><br><br><br>
	<button style="width: 100%; height: 90px;">save me</button>
</form>