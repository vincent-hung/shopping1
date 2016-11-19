<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blue Clothing & Leather</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" type="text/css" rel="stylesheet">

    <script src="js/change.js"></script>

    <link rel="stylesheet" type="text/css" href="cloud-zoom/cloud-zoom.css" />
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Blue Clothing & Leather</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#cart">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p id="title" class="lead">Blue Clothing & Leather</p>

            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/shop1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/shop2.jpeg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/shop3.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div class="item">
                                <div class="thumb_wrapper">
                                    <div class="thumb">
                                    <a rev="group1" rel="zoomHeight:200, zoomWidth:400, adjustX: 10, adjustY:-4, position:'body'" class='cloud-zoom' href="img/suit.jpg"><img src="img/suit.jpg" alt="suit"/></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h4 class="pull-right">$49.99</h4>
                                <h4>Blazer</h4>
                                <p>This solid blue blazer is perfect for casual outings with friends and families.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="suit">Quantity</label>
                                    <input type="text" name = "suit" id="suit" placeholder="0" onchange="calculate();">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                             <div class="item">
                                <div class="thumb_wrapper">
                                    <div class="thumb">
                                    <a rev="group1" rel="zoomHeight:200, zoomWidth:400, adjustX: 10, adjustY:-4, position:'body'" class='cloud-zoom' href="img/tie.jpeg"><img src="img/tie.jpeg" alt="Formstack 1"/></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h4 class="pull-right">$9.99</h4>
                                <h4>Tie
                                </h4>
                                <p>This blue and white checkered tie is great for making a statement and standing out 
                                in a crowd.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">4 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="tie">Quantity</label>
                                    <input type="text" name = "tie" id="tie" placeholder="0" onchange="calculate();">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                             <div class="item">
                                <div class="thumb_wrapper">
                                    <div class="thumb">
                                    <a rev="group1" rel="zoomHeight:200, zoomWidth:400, adjustX: 10, adjustY:-4, position:'body'" class='cloud-zoom' href="img/shoes.jpg"><img src="img/shoes.jpg" alt="Formstack 1"/></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h4 class="pull-right">$29.99</h4>
                                <h4>Shoes
                                </h4>
                                <p>This pair of shoes is sporty and lightweight and is designed for urban walkers.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">26 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="shoes">Quantity</label>
                                    <input type="text" name = "shoes" id="shoes" placeholder="0" onchange="calculate();">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                             <div class="item">
                                <div class="thumb_wrapper">
                                    <div class="thumb">
                                    <a rev="group1" rel="zoomHeight:200, zoomWidth:400, adjustX: 10, adjustY:-4, position:'body'" class='cloud-zoom' href="img/belt.jpeg"><img src="img/belt.jpeg" alt="Formstack 1"/></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h4 class="pull-right">$5.99</h4>
                                <h4>Belt
                                </h4>
                                <p>This black genuine leather belt is chic and stylish. Nicely matched with any suit for any occasion.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">8 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="belt">Quantity</label>
                                    <input type="text" name = "belt" id="belt" placeholder="0" onchange="calculate();">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                             <div class="item">
                                <div class="thumb_wrapper">
                                    <div class="thumb">
                                    <a rev="group1" rel="zoomHeight:200, zoomWidth:400, adjustX: 10, adjustY:-4, position:'body'" class='cloud-zoom' href="img/hat.jpg"><img src="img/hat.jpg" alt="Formstack 1"/></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h4 class="pull-right">$9.99</h4>
                                <h4>Hat
                                </h4>
                                <p>This hat is made from straw which is lightweight and made for a sunny at the beach or farm.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">1 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="hat">Quantity</label>
                                    <input type="text" name = "hat" id="hat" placeholder="0" onchange="calculate();">
                                </div>
                            </form>
                        </div>
                    </div>

                     <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                             <div class="item">
                                <div class="thumb_wrapper">
                                    <div class="thumb">
                                    <a rev="group1" rel="zoomHeight:200, zoomWidth:400, adjustX: 10, adjustY:-4, position:'body'" class='cloud-zoom' href="img/watch.jpeg"><img src="img/watch.jpeg" alt="Formstack 1"/></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <h4 class="pull-right">$39.99</h4>
                                <h4>Watch
                                </h4>
                                <p>This watch has wrist strap made from genuine leather and is guaranteed to attract the eyes of the beholder.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="watch">Quantity</label>
                                    <input type="text" name = "watch" id="watch" placeholder="0" onchange="calculate();">
                                </div>
                            </form>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->


    <div class="container" id="cart">

        <div class="col-md-3">
            <h1 id="shop" class="lead">Shopping Cart</h1>
        </div>

        <div class="col-md-9">
            <p id = "status">Your shopping cart is empty</p>
            <p id = "suitbuy"></p>
            <p id = "tiebuy"></p>
            <p id = "shoesbuy"></p>
            <p id = "beltbuy"></p>
            <p id = "hatbuy"></p>
            <p id = "watchbuy"></p>
            <br>
            
            <p id = "subtotal">Subtotal: $<input id="textField1" type="text" value="0.00" align="right" size="13" disabled="true"/></span></p>
            <p id = "tax">Tax: $<input id="textField2" type="text" value="0.00" align="right" size="13" disabled="true"/></span></p>
            <p id = "total">Total: $<span>
            <input id="textField3" type="text" value="0.00" align="right" size="13" disabled="true"/></span></p>



    <script src="https://checkout.stripe.com/checkout.js"></script>
    <button id="customButton">Purchase</button>
    <script type="text/javascript">
      var handler = StripeCheckout.configure({
        key: 'pk_test_O4pwxsOKukpCDGYSWmFJvYp3',
        token: function(token) {
          // Use the token to create the charge with a server-side script.
          // You can access the token ID with `token.id`
        }
      });

      document.getElementById('customButton').addEventListener('click', function(e) {
        // This line is the only real modification...
        var amount = $("#textField3").val() * 100;
        handler.open({
          name: "Blue Clothing & Leather",
          description: "Card Payment",
          // ... aside from this line where we use the value.
          amount: amount
        });
        e.preventDefault();
      });
    </script>

       <!--  <form action="" method="POST">
          <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="pk_test_O4pwxsOKukpCDGYSWmFJvYp3"
            data-amount="999"
            data-name="Blue Clothing & Leather"
            data-description="Card Payment"
            data-locale="auto"
            data-currency="cad">
          </script>
        </form> -->
         </div>
    </div>

    <br>

    <div class="container" id="contact">

        <div class="col-md-3">
            <h1 id="con" class="lead">Contact Us</h1>
        </div>

        <div class="col-md-9">
        <form action="MAILTO:vincent-hung@live.com" enctype="text/plain" method="post">
            <p>Name: <input name="Name" type="text" size="40"></p>
            <p>E-mail address: <input name="mail" type="text" size="40"></p>
            <p>Comment:</p>
            <p><textarea name="Comment" cols="55" rows="5"></textarea></p>
            <p><input type="submit" value="Submit"></p>
        </form>
        </div>

    </div>


    <?php
    // Set your secret key: remember to change this to your live secret key in production
    // See your keys here https://dashboard.stripe.com/account/apikeys
    \Stripe\Stripe::setApiKey("sk_test_BQokikJOvBiI2HlWgH4olfQ2");

    // Get the credit card details submitted by the form
    $token = $_POST['stripeToken'];

    // Create the charge on Stripe's servers - this will charge the user's card
    try {
      $charge = \Stripe\Charge::create(array(
        "amount" => 1000, // amount in cents, again
        "currency" => "cad",
        "source" => $token,
        "description" => "Example charge"
        ));
    } catch(\Stripe\Error\Card $e) {
      // The card has been declined
    }

    ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.4.4.min.js"></script>
        <script type="text/javascript" src="fancybox/jquery.easing-1.3.pack.js"></script>
        <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.js"></script>
        <script type="text/javascript" src="cloud-zoom/cloud-zoom.1.0.2.js"></script>
        <script type="text/javascript" src="js/jquery-migrate-1.2.1.js"></script>
        <script type="text/javascript">
            $(function() {
                /*
                fancybox init on each cloud-zoom element
                 */
                $("#content .cloud-zoom").fancybox({
                    'transitionIn'  :   'elastic',
                    'transitionOut' :   'none',
                    'speedIn'       :   600,
                    'speedOut'      :   200,
                    'overlayShow'   :   true,
                    'overlayColor'  :   '#000',
                    'cyclic'        :   true,
                    'easingIn'      :   'easeInOutExpo'
                });

                /*
                because the cloud zoom plugin draws a mousetrap
                div on top of the image, the fancybox click needs
                to be changed. What we do here is to trigger the click
                the fancybox expects, when we click the mousetrap div.
                We know the mousetrap div is inserted after
                the <a> we want to click:
                 */
                $("#content .mousetrap").live('click',function(){
                    $(this).prev().trigger('click');
                });

                /*
                the content element;
                each list item / group with several images
                 */
                var $content    = $('#content'),
                $thumb_list = $content.find('.thumb > ul');
                /*
                we need to set the width of each ul (sum of the children width);
                we are also defining the click events on the right and left arrows
                of each item.
                 */
                $thumb_list.each(function(){
                    var $this_list  = $(this),
                    total_w     = 0,
                    loaded      = 0,
                    //preload all the images first
                    $images     = $this_list.find('img'),
                    total_images= $images.length;
                    $images.each(function(){
                        var $img    = $(this);
                        $('<img/>').load(function(){
                            ++loaded;
                            if (loaded == total_images){
                                $this_list.data('current',0).children().each(function(){
                                    total_w += $(this).width();
                                });
                                $this_list.css('width', total_w + 'px');

                                //next / prev events

                                $this_list.parent()
                                .siblings('.next')
                                .bind('click',function(e){
                                    var current = $this_list.data('current');
                                    if(current == $this_list.children().length -1) return false;
                                    var next    = ++current,
                                    ml      = -next * $this_list.children(':first').width();

                                    $this_list.data('current',next)
                                    .stop()
                                    .animate({
                                        'marginLeft'    : ml + 'px'
                                    },400);
                                    e.preventDefault();
                                })
                                .end()
                                .siblings('.prev')
                                .bind('click',function(e){
                                    var current = $this_list.data('current');
                                    if(current == 0) return false;
                                    var prev    = --current,
                                    ml      = -prev * $this_list.children(':first').width();

                                    $this_list.data('current',prev)
                                    .stop()
                                    .animate({
                                        'marginLeft'    : ml + 'px'
                                    },400);
                                    e.preventDefault();
                                });
                            }
                        }).attr('src',$img.attr('src'));
                    });
                });
            });
        </script>

</body>

</html>
