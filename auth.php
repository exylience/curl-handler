<?

$users = require 'includes/users.php';

$username = $_SERVER["PHP_AUTH_USER"];
$password = $_SERVER["PHP_AUTH_PW"];

foreach ($users as $user) {
	if (
		$user["name"] == $username &&
		$user["password"] == $password
	) {
		echo "Successful authentication";
		die();
	}
}

echo "Invalid name or password";