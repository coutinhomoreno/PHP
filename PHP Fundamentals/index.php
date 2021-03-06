<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>AirPupnMeow.com: All the love, none of the crap!</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AirPupnMeow</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>

    <div class="jumbotron">
        <div class="container">
            <?php 
                $cleverWelcomeMessage = 'All the love, none of the crap!';
                $upperMessage = strtoupper($cleverWelcomeMessage);
                $upperMessagelower = strtolower($cleverWelcomeMessage);
                $pupCount = rand(50,100);
            ?>
            <h1><?php echo $upperMessage ?></h1>
            <p>Over <?php echo $pupCount; ?> pet friends!</p>

            <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
        </div>
    </div>

    <?php
        $pet1="Chew Barka";
        $pet2 = "Spark Pug";
        $pet3 = "Pico de Gato";
    
        $pancake = array(
           'name' => 'Pancake',
            'age' => '1 year',
            'weight' => 9,
            'bio' =>'Treats and Snoozin!',
            'filename' => 'pancake.png');

        $pets = array($pet1,$pet2,$pet3);      
        $pets =  ['Kitty Gala']
                
    ?>

    <div class="container">
        <div class="row">
        <div class="col-lg-4 pet-list-item">
            <h2> <?php echo $pancake['nome']; ?> </h2>
            <img src="/images/<?php echo $pancake['filename'];?>" class="img-rounded" />

            <blockquote class="pet-details">
                <?php  echo $pancake['age'];?>
                <?php  echo $pancake['weight'];?> lbs
            </blockquote>
        <p>
        <?php echo $pancake['bio']; ?>
        </p>

        </div>

            <?php 
            foreach($pets as $pet){
                echo '<div class="col-lg-4">';
                echo '<h2>';
                echo $pet;
                echo '</h2>';
                echo '<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui. </p>';
                echo '</div>';
            }
        ?>
        </div>

        <hr>

        <footer>
            <p>&copy; AirPupnMeow.com</p>
        </footer>
    </div>
    <!-- /container -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>