<?php
function getName() {
if (array_key_exists("displayName", $_SERVER)) {
return implode(" ", explode(";", $_SERVER["displayName"]));
} else if (array_key_exists("cn", $_SERVER)) {
return implode(" ", explode(";", $_SERVER["cn"]));
} else if (array_key_exists("givenName", $_SERVER) &&
array_key_exists("sn", $_SERVER)) {
return implode(" ", explode(";", $_SERVER["givenName"])) . " " .
implode(" ", explode(";", $_SERVER["sn"]));
}
return "Unknown";
}
$username = $_SERVER["REMOTE_USER"];
$name = getName();
print "<h1>Hi " . $username . "!!!</h1>";
print "<p>Your name is; " . $name . ".</p>";
?>
