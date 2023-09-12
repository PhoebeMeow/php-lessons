<?php
    //opdracht 1
        session_start();
        if(isset($_SESSION['count'])){

            echo "Deze pagina heb je al: ";
            echo $_SESSION['count']++;
            echo " bekeken <br> voordat je de internet browser hebt afgesloten";
        }
        else{
            $_SESSION['count'] = 1;
        }

    //opdracht 2
        if(isset($_SESSION['counter'])){
            echo "<br>";
            echo "Deze pagina heb je al: ";
            echo $_SESSION['counter']++;
            echo " bekeken <br> voordat je de internet browser hebt afgesloten";
        }
        else{
            $_SESSION['counter'] = 1;
        }

    //opdracht 3
?>
