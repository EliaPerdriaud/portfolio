<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    
    <script src="js/animation-text.js"></script> 
    <script src="js/animation-scrool.js"></script> 

    <title><?php echo $title; ?></title>
</head>

<body>
    <!-- <div class="topnav">          
        <a href="./index.php">Accueil</a>
        <a href="./a_propos.php">A propos</a>
        <a href="./index.php"><img id="logo-header" src="img/Logo-Elia-Rose.png" alt="logo"></a>
        <a href="./portfolio.php">Portfolio</a>
        <a href="#">Contact</a>      

    </div> -->

    <div class="topnav">
        <div class="menu">
            <input id="burger-menu" type="checkbox">
            <label id="burger-icon" for="burger-menu">☰</label>
            <div class="box-menu">
                <div class="text-menu"><a href="./index.php">Accueil</a></div>
                <div class="text-menu"><a href="./a_propos.php">A propos</a></div>
            </div>
        </div>
        <div class="logo">
            <img class="img-logo" src="img/Logo-Elia-Rose.png" alt="logo">
        </div>
        <div class="menu">
            <div class="box-menu">
                <div class="text-menu"><a href="./portfolio.php">Portfolio</a></div>
                <div class="text-menu"><a href="#">Contact</a></div>
            </div>
        </div>
    </div>