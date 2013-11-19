<?php
$session_name = 'MySession';
session_name($session_name);
session_start();


if(empty($_SESSION['last_active']) && !empty($_SESSION['sessionID'])){
   /* Set the Session */
   $_SESSION['last_active'] = time();
}

elseif(isset($_SESSION['last_active']) && !empty($_SESSION['last_active']) && $_SESSION['last_active'] < time()-10){
   /* Set last_active to empty string */
   $_SESSION['last_active'] = '';
   /* Unset and destroy all session variables */
         if (isset($_SESSION['sessionID'])) unset($_SESSION['sessionID']);
         if (isset($_SESSION['sessionName'])) unset($_SESSION['sessionName']);
         if (isset($_SESSION['sessionAdmin'])) unset($_SESSION['sessionAdmin']);
         if (isset($_SESSION['hourOffset'])) unset($_SESSION['hourOffset']);
         session_destroy();
         /* Clear out all cookies */
         setcookie('ID', '', time()-3600, '/');

         // Restart window with new session and resume the last process
         echo '<script language="JavaScript" type="text/javascript">window.location = "logout.php"'
               . $_SERVER['REQUEST_URI'] . '"</script>';

            //CmnFns::Debug();
            exit();      
}
/* Session reset, and the user has not been inactive for n minutes */
elseif(!empty($_SESSION['last_active']) && $_SESSION['last_active'] >= time()-10){
   /* Update session with current time */
   $_SESSION['last_active'] = time();
}


?>