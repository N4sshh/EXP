<?php

echo "<title>Pizza Giants</title>";
include_once('HeadFoot/header.php');  
include_once('controller/PizzaController.php');  

$controller = new PizzaController(); 
$controller->handlePageRequest();  

include_once('HeadFoot/footer.php');
?>