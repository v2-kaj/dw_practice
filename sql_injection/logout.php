<?php
    session_start()
?>

<?php
    //destroy the session
    session_destroy();
    //expire the cookie as well
    setcookie("user_id", "", time()-3600);
    header("Location: login.php");
	die();
?>
    