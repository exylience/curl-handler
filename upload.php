<?

$fileName = $_FILES["file"]["name"];
$tmpFile = $_FILES["file"]["tmp_name"];

$path = "uploads/" . time() . "_" . $fileName;

if (move_uploaded_file($tmpFile, $path)) {
	echo "Файл успешно загружен\n";
	echo "http://" . $_SERVER["HTTP_HOST"] . "/" . $path;
} else echo "Ошибка загрузки файла";