<?php 

include("header.php"); 

@$url_page = $_GET["p"];

if ($url_page == "home") {

    include("assets/pages_user/home.php");

} elseif ($url_page == "links") {

    include("assets/pages_user/links.php");

} elseif ($url_page == "perfil") {

    include("assets/pages_user/perfil.php");

} elseif ($url_page == "setting") {

    include("assets/pages_user/setting.php");

} else {

    include("assets/pages_user/home.php");

}

include("footer.php"); 

?>