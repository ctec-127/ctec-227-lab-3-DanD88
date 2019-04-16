<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 3</title>
</head>
<body>

    <h1>Lab 3</h1>

    <br>
    <?php 
        // if ($_SERVER[REQUEST_METHOD] == 'POST') {
        //     // COOKIE STUFF
        // }

        if(isset($_POST['submit'])) {
            $state = htmlentities($_POST['state']);

            setcookie('state', $state, time()+7200);
            
        }

        if(isset($_COOKIE['state'])) {
            echo 'State: ' . $_COOKIE['state'] . ' is set <br>';
        } else {
            echo 'Not set';
        }

        if(isset($_POST['submit'])) {
            $countries = htmlentities($_POST['countries']);

            setcookie('countries', $countries, time()+7200);
            
        }

        if(isset($_COOKIE['countries'])) {
            echo 'Countries: ' . $_COOKIE['countries'] . ' is set <br>';
        } else {
            echo 'Not set';
        }

    ?>
    
    <!--makes degree_program sticky -->
    <?php
    if (isset($_POST['state'])){
        $state = $_POST['state'];
    }else { 
        $state = "";
    }
    ?>
<br>
    <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    <label for="state">State:</label>
        <select name="state" id="state" method="post">
            <option value="Washington" <?=($state == "Washington") ? 'selected' : ''; ?>>Washington</option>
            <option value="Oregon"  <?=($state == "Oregon") ? 'selected' : ''; ?>>Oregon</option>
            <option value="California" <?=($state == "California") ? 'selected' : ''; ?> >California</option>
            <option value="Idaho" <?=($state == "Idaho") ? 'selected' : ''; ?>>Idaho</option>
            <option value="Montana" <?=($state == "Montana") ? 'selected' : ''; ?>></option>
        </select>


        <?php
            if (isset($_POST['countries'])){
                $countries = $_POST['countries'];
            }else { 
                $countries = "";
            }
        ?>
        <br>
        <br> 

        <label for="countries">Countries:</label>
        <select name="countries" id="countries" method="post">
            <option value="United_States" <?=($countries == "United_States") ? 'selected' : ''; ?>>United States</option>
            <option value="Canada" <?=($countries == "Canada") ? 'selected' : ''; ?>>Canada</option>
            <option value="Mexico" <?=($countries == "Mexico") ? 'selected' : ''; ?>>Mexico</option>
            <option value="Panama" <?=($countries == "Panama") ? 'selected' : ''; ?>>Panama</option>
        </select>
    <br>
    <br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>