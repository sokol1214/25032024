<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitler</title>
    <?php
    require_once 'polaczenie.php';
    $query = "SELECT * FROM uczniowie";    
    ?>
</head>
<body>
    <form action="delete.php" method="post">
        <select name="kewin" onchange="this.form.submit()">
            <option value="0">Wybierz</option>
            <?php
                foreach($baza->query($query) as $wiersz){
                    $imie = $wiersz['imie'];
                    $nazwisko = $wiersz['nazwisko'];
                    $idu = $wiersz['idu'];

                    echo <<< tak
                    <option value="$idu"> $imie $nazwisko </opiton>
                    tak;
                }
            ?>
        </select>
    </form>
    <?php $baza=null ?>
</body>
</html>