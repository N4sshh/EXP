<?php
class PizzaController
{
    function __construct()
    {   
    }

    public function handlePageRequest()
    {   
        $command = isset($_REQUEST['command']) ? $_REQUEST['command'] : 'home';

        switch ($command) {    
            case 'home':
                include('pizzacodes/Pizza.php');  
                break;
            case 'about':
                include('pizzacodes/about.php');  
                break;
            case 'dominos':
                include('pizzacodes/domino.php');  
                break;
            case 'pizzahut':
                include('pizzacodes/pizzahut.php');  
                break;
            case 'papajohns':
                include('pizzacodes/papajohns.php');  
                break;
            default:
                include('pizzacodes/Pizza.php');  
        }
    }

    public function goBackToHome()
    {
        header('Location: ?command=home');
        exit();
    }
}
?>
