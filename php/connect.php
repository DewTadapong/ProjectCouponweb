<?php
 // connect to mysql    user                   pass                 name database
$connect = mysqli_connect('localhost','root','','dewweb');
if(mysqli_connect_error($connect)){
    echo 'Error to connect';
}

?>