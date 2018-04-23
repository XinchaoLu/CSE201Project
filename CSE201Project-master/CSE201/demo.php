<? php

define('DB_NAME', 'enduring-sign-201801:us-central1:user');
define('DB_USER', 'root');
define('DB_PASSWORD', '23015927qq');
define('DB_HOST', '35.193.62.55');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
    die('Could not connect:' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
  die('Can\'t use ' . DB_NAME . ':' . mysql_error());
}


$email = $_POST['email'];
$sql = "INSERT INTO Users (email) VALUES ('$email')";
$username = $_POST['username'];
$sql = "INSERT INTO Users (username) VALUES ('$username')";
$password = $_POST['password'];
$sql = "INSERT INTO Users (pswd) VALUES ('$password')";
$birthday = $_POST['birthday'];
$sql = "INSERT INTO Users (bdate) VALUES ('$birthday')";
$email = $_POST['email'];
$sql = "INSERT INTO Users (email) VALUES ('$email')";
if (!mysql_query($sql)) {
  die('Error: ' . mysql_error());
}

mysql_close();
?>
