<!DOCTYPE html>
<?php

if (isset($_POST["submitted"])) {
    sucheverarbeiten();
}

function sucheverarbeiten()
{
    if (isset($_POST["rezeptname"])) {
        $meister = $_POST["rezeptname"];
    } else {
        $meister = "";
    }

    header("Location: results.php?rezeptname=" . $rezeptname);
}

?>

<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Abfrageoberfläche</title>
    <link rel="stylesheet" href="css/design.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <h1>Datenbank der Deutschen Fußballmeister</h1>
    
    <form class="example" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" placeholder="Verein" name="rezeptname">
        <button type="submit" name="submitted"><i class="fa fa-search"></i></button>
    </form>

</body>

</html>