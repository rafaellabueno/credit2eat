<?php

if (isset($_REQUEST['caminho'])) {
    if (isset($_SESSION['erro']))
        unset($_SESSION['erro']);
    header("location:./" . $_REQUEST['caminho']);
}else {
    header("location:./");
}
?>