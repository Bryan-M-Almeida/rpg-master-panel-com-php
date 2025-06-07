<?php
// logout.php
session_start();
session_destroy();
header("Location: ../index.php?logout=1"); // tem que ter esse ?logout=1
exit();

?>