<?php
    session_start()
?>

<?php
    //destroy the session
    session_destroy();
    //expire the cookie as well
    setcookie("user_id", "", time()-1);//expxiring
    header("Location: login.php");
	die();
?>
    