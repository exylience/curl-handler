<?

echo "Переданные POST параметры: \n";
foreach ($_POST as $key => $value) {
	echo $key . ": " . $value . "\n";
}