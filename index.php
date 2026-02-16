<?php
# ================================================================
# This is the required structure for our system to recognize the 
# shortened URL, which will be used to query the database to 
# determine the correct URL for page redirection.
# ================================================================
$path_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path_url = trim($path_url, '/');
$pieces_url = explode('/', $path_url);
$last_value = end($pieces_url);

if (!empty($last_value)) {

    # ================================================================
    # Test to verify if our URL reader is working. Soon, it will be 
    # changed to use a database query structure with SQL.
    # ================================================================
    if ($last_value == "A313c2") {
        header("Location: https://www.google.com");
        exit;
    } elseif ($last_value == "b155jk2") {
        header("Location: https://www.youtube.com");
        exit;
    }

} else {

}


?>

<?php include("header.php"); ?>

<!--Context-->

<?php include("footer.php"); ?>