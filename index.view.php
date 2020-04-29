<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desset Time</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Beth+Ellen|Delius+Swash+Caps&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-md navbar-dark">
            <a href="index.php" class="navbar-brand">Dessert Time</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navBar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navBar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="banner">
        <div class="container">
           <div class="row">
                <div class="banner-text col-md-6">
                    <h1>Take your Time<br> have a Dessert</h1>
                </div>
            </div> 
        </div>
        
        
    </section>

    <section class="meniu">
        <div class="container">
            <div class="row">
                <?php foreach($product as $product) : ?>
                            <div class="col-md-4 bg">
                                <img src="img/<?=$product->img?>" class="img-fluid " >
                                <h3><?= $product->name ?></h3>
                                <h4><?= $product->description ?></h4>
                                <h3><?= $product->price ?></h3> 
                            </div>
                <?php endforeach ?>
            </div>            
            </div>
        </div>
    </section>
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-item">
                    <h4>Contact us:</h4>
                    <p>Tel: 0761 607 101<br>Adress: Imparatul Traian nr 119A Craiova<br><a href="mailto:dessert.time@gmail.com">Mail!</a> </p>
                </div>
                <div class="col-md-4 footer-item">
                    <div id="fb-root"></div>
                    <div class="fb-page" data-href="https://www.facebook.com/Cofetaria-DesserTime-1674153229538094/" data-tabs="" data-width="304" data-height="300" 
                      data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/Cofetaria-DesserTime-1674153229538094/" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/Cofetaria-DesserTime-1674153229538094/">Cofetaria DesserTime</a>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4 footer-item">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=dessert%20time&t=&z=13&ie=UTF8&iwloc=&output=embed">
                            </iframe>
                            
                        </div>
                    </div> 
                </div>
                
            </div>
        </div>
           
    </footer>                
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>                
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>