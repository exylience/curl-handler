<?

echo "Переданные поля, включая скрытые:\n";

foreach ($_POST as $key => $value) {
	echo $key . ": " . $value . "\n";
}