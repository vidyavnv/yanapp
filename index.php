<html>
<body>
<?php
$fp=fopen("store/counter.txt","r");
$text=fgets($fp);
fclose($fp);
$counter=(int)$text+1;
$fp=fopen("store/counter.txt","w");
fwrite($fp,$counter."\n");
fclose($fp);
echo 'Hello! You are visitor number&nbsp;'.$counter; 
?>
</body>
</html>
