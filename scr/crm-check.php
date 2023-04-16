<?php
if(isset($_COOKIE['ABCD'])) { //Cookie name is "ABCD"
    echo '<meta http-equiv="refresh" content="0;URL=/scr/main.html">'; //if has cookie "ABCD"
} else {
    echo '<meta http-equiv="refresh" content="0;URL=/scr/hi.html">'; //if has not cookie "ABCD"
}
?>
  <script>
   window.history.replaceState({}, null, '/loading'); 
</script>
