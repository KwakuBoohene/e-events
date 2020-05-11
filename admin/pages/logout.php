<?php
session_start();
if(isset($_POST['logout'])){
    session_destroy();
    echo 'success';
    return;
}else{
    echo 'error';
    return;
}

?>