<?php
session_start();
session_unset();
$_SESSION['ROOT'] = dirname(__FILE__);
ob_start();
?>
<!-------------------------------------start-------------------------------------------------->  
ffffffffffffffffffffff
<!-------------------------------------end-------------------------------------------------->  
<?php
$content = ob_get_contents();
ob_end_clean();
include_once $_SESSION['ROOT'] . '/master.php';
?> 
