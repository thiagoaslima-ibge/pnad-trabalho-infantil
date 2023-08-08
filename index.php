<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$redirect_link =  $actual_link . 'data/01capa.php';
?>

<meta http-equiv="refresh" content="5;url=<?php echo $redirect_link ?>">
<p>
    Redirecting to <?php echo $redirect_link ?> in <span id="time">5</span> seconds...
</p>

<script>
    const $span = document.querySelector('#time');
    setInterval(() => {
        const value = Number($span.textContent);
        $span.textContent = Math.max(0, value - 1).toString(10);
    }, 1000);
</script>