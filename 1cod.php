
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
<?php  ?>

function esPrimo(n)

if($n<=1) return false;
for ($i=2; $i<=$n-1; $i++)
if($n%$i==0) return false;
return false;

echo(esPrimo(70));
echo(esPrimo(23));

</body>
</html>


