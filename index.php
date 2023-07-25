<?php
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$redirect_link =  $actual_link . 'data/capa.php';
?>

<meta http-equiv="refresh" content="5;url=<?php echo $redirect_link ?>">
<p>
    Redirecting to <?php echo $redirect_link ?>...
</p>