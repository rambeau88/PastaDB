<?php
ob_start();
require $_SERVER['DOCUMENT_ROOT'] . '/examples/PastaDB/connect.php';
ob_end_clean();

echo $db->RawPasta->select("SELECT * FROM test WHERE value2 = '%s'", "Hey'3");
?>