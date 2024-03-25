<?php
    if(isset($_POST['kewin']) && $_POST['kewin'] != 0)
    {
        $idu = $_POST['kewin'];
        require_once 'polaczenie.php';

        $baza->query("DELETE FROM uczniowie WHERE idu=$idu");

        $baza=null;
    }
    header("Location: index.php")
?>