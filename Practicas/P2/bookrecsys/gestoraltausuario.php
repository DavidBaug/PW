<?php
// Requerimos la comprobación de que la sesión esté iniciada, si no redirigirá a la ventana de login
require_once "sesion.php";
include "configuracion.php";
// Include('dbinit.php');
// Si no se solicita ninguna pagina mostramos la home
if(!isset($_GET['page'])) {
    $page = "index";
    $page_title = "Home";
    include('index.html');
} else {
	$page = $_GET['page'];
    // Si no existe mostramos la pagina de error
	if(!file_exists($page . ".html")) {
        header("Location: 404.html");
        exit();
	} else {
        // Cargamos la página solicitada
        $page_title = ucwords(str_replace("_", " ", $page));
        // include('view/header.phtml');
		include($page . '.html');
	}
}
// Cargamos el pie de la página
// include "view/footer.phtml";
?>
