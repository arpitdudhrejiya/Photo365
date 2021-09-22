<?php

    session_start();
    
    if(isset($_SESSION['admin']))
    {
        session_destroy();
        unset($_SESSION['admin']);
    }
    echo"<SCRIPT> 
{  
     var Backlen=history.length;   
     history.go(-Backlen);   
     window.location.href= 'login.php' 
}
</SCRIPT> 
";

?>