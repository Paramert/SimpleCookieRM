<?php
setcookie('ABCD', '1234', time() + (10 * 365 * 24 * 60 * 60), "/"); //set cookie

// check 
if(isset($_COOKIE['ABCD'])) { 
    echo " " . $_COOKIE[''] . ""; 
} else {
    echo ""; 
}
?>
<meta http-equiv="refresh" content="0.2;URL=/scr/main.html"/> <!--After setting the cookie redirection to main.html-->
<script>
   window.history.replaceState({}, null, '/loading');
</script>