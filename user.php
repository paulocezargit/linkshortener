<?php include("header.php"); ?>

<?php

$url_page = "";

if ($url_page == "home") {

    include("assets/pages/home.php");

} elseif ($url_page == "links") {

    include("assets/pages/links.php");

} elseif ($url_page == "perfil") {

    include("assets/pages/perfil.php");

} elseif ($url_page == "setting") {

    include("assets/pages/setting.php");

} else {

    include("assets/pages/home.php");

}

?>

<?php include("footer.php"); ?>