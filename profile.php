<?php
require_once 'secureCookie.php';
sessionStart(0,'/','localhost',false,true);
?>
<?php

if(isset($_SESSION['loggedIn'])){
    echo "you are logged in";
}
else{
    echo "you are not logged in";
}
?>

<script>
    alert(document.cookie);
</script>
