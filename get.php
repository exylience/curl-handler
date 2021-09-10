<?

echo "Переданные GET параметры: \n";

foreach ($_GET as $key => $value) {
	echo $key . ': ' . $value . "\n";
}