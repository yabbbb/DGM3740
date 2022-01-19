<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabot Cruises: <?php echo($title); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="css/styles.css">

    <script src="https://kit.fontawesome.com/d56106c196.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css"/>
</head>
<body>
    <div class='body-wrapper'>
        <div class="header">
            <nav class='smallHeader'>
                <i class="fas fa-bars fa-lg" id='theButton'></i>
                <form class="search" >
                    <input type="text" placeholder="Search.." name="search">
                </form>
                <div class='menu'>
                    <a href="/index.php">Home</a>
                    <a href="/cruises.php">Cruises</a>
                    <div class="subnav">
                        <button class="subnavbtn">Agents <i class="fa fa-caret-down"></i></button>
                        <div class="subnav-content">
                          <a href="/contact">Contact an Agent</a>
                          <a href="/who">Who</a>
                        </div>
                    </div> 

                    <a href="/book.php">Book</a>
                </div>
            </nav>
            <div class="top-header">
                <figure>
                    <img
                        alt='logo'
                        class='logo'
                        srcset="./assets/Sedovo 1.png 1x, ./assets/Sedovo 2.png 2x, ./assets/Sedovo 2.png 3x"
                        src="./assets/Sedovo 1.png" 
                    />
                </figure>
                <p class='phone'><a href="tel:123-456-7890">123-456-7890</a></p>
            </div>
    
            <div class="nav">
                <div class='nav-grouping'>
                    <div class='menu'>
                        <a href="/index.php">Home</a>
                        <a href="/cruises.php">Cruises</a>
                        <div class="subnav">
                            <button class="subnavbtn" href="/agent.php">Agents <i class="fa fa-caret-down"></i></button>
                            <div class="subnav-content">
                                <a href="#">Contact an Agent</a>
                                <a href="#">Who</a>
                            </div>
                        </div> 

                        <a href="/book.php">Book</a>
                    </div>
                    
                    <form class="search" >
                        <button type="submit"><i class="fa fa-search"></i></button>
                        <input type="text" placeholder="Search.." name="search">
                    </form>
                </div>
            </div>
        </div>