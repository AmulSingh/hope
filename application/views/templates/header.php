         <html>
           <head>
                <title>Sahayta</title>
                <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                  <link rel="stylesheet" href="./assets/style.css">
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  <script>
                  $(document).ready(function(){
                    $("#foot_icon2").hover(function(){
                       $("#foot_icon2").removeClass().addClass("fa fa-twitter fa-lg fa-stack-1x");
                     },
                    function(){
                      $("#foot_icon2").removeClass().addClass("fa fa-twitter fa-stack-1x");
                    });
                    $("#foot_icon3").hover(function(){
                      $("#foot_icon3").removeClass().addClass("fa fa-facebook fa-lg fa-stack-1x");
                     },
                      function(){
                        $("#foot_icon3").removeClass().addClass("fa fa-facebook fa-stack-1x");
                    });
                    $("#foot_icon4").hover(function(){
                       $("#foot_icon4").removeClass().addClass("fa fa-pinterest-p fa-lg fa-stack-1x");
                      },
                      function(){
                          $("#foot_icon4").removeClass().addClass("fa fa-pinterest-p fa-stack-1x");
                     });
                     $("#foot_icon5").hover(function(){
                         $("#foot_icon5").removeClass().addClass("fa fa-youtube fa-lg fa-stack-1x");
                        },
                       function(){
                           $("#foot_icon5").removeClass().addClass("fa fa-youtube fa-stack-1x");
                     });
                     $("#foot_icon6").hover(function(){
                          $("#foot_icon6").removeClass().addClass("fa fa-google-plus fa-lg fa-stack-1x");
                         },
                       function(){
                            $("#foot_icon6").removeClass().addClass("fa fa-google-plus fa-stack-1x");
                     });
                     $("#foot_icon7").hover(function(){
                           $("#foot_icon7").removeClass().addClass("fa fa-linkedin fa-lg fa-stack-1x");
                          },
                       function(){
                             $("#foot_icon7").removeClass().addClass("fa fa-linkedin fa-stack-1x");
                     });
                     $("#login").click(function(){
                       $("#mymodal").modal();
                     });
                     $("#signup").click(function(){
                       $("#signup_modal").modal();
                     });
                     $("#login_btn").click(function(){
                       $("#mymodal").modal();
                     });
                     $("#sign_btn").click(function(){
                       $("#signup_modal").modal();
                     });
                     $('[data-toggle="popover"]').popover({
                       html: true,
                       content: function(){
                         return $("#pop-content").html();
                       }
                     });
                   });
                </script>
                </head>
                <body>
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="./images/help2.png" class="img-responsive" id="carousel-img">
                      </div>
                      <div class="item">
                        <img src="https://www.hhcenter.org/wp-content/uploads/2016/12/tree-596x510.png" class="img-responsive" id="carousel-img">
                      </div>
                      <div class="item">
                        <img src="https://projecthelping.org/wp-content/uploads/2016/05/helpinghands.png" class="img-responsive" id="carousel-img">
                      </div>
                    </div>
          <nav class="navbar navbar-fixed-top">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" id="left-menu" data-toggle="collapse" data-target="#menu_item">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Sahayta</a>
                    </div>
                    <div class="collapse navbar-collapse" id="menu_item">
                      <ul class="nav navbar-nav">
		                   <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                       <li><a href="#">About</a></li>
                       <li><a href="#">Our Work</a></li>
                       <li><a href="#">Contribute</a></li>
		                  </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#signup_modal" id="signup"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                      <li><a href="#mymodal" id="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                  </div>
                </div>
                </nav>
                </div>
                <div class="modal fade" id="mymodal">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" class="close">&times</button>
                      <div class="modal_side_login"><span class="glyphicon glyphicon-lock"></span>Login <a href="http://localhost/codeignitor/index.php"><span class="modal-brand">Sahayta</span></a></div>
                    </div>
                    <div class="modal-body">
                      <form role="form">
                       <div class="form-group form-text">
                         <p><span class="glyphicon glyphicon-user"></span>Username or Email</p>
                         <input type="name" name="name" class="form-control" placeholder="Enter Name or Email">
                       </div>
                       <div class="form-group form-text">
                        <p><span class="fa fa-key"></span>Password</p>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <button type="submit" id="submit_btn"><span class="glyphicon glyphicon-log-in"></span> Login</button><br>
                      </div>
                    </form>
                    </div>
                    <div class="modal-footer form-text">
                      <button type="button" data-dismiss="modal" class="btn btn-danger pull-left"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                      <p class="footer-text">Not Registered? Click here to <button type="button" class="btn btn-default" id="sign_btn" data-dismiss="modal" data-target="#mymodal">SignUp</button></p>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="signup_modal">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" class="close">&times</button>
                      <div class="modal_side_login"><span class="fa fa-user-plus fa-lg"></span>SignUp <a href="http://localhost/codeignitor/index.php"><span class="modal-brand">Sahayta</span></a></div>
                    </div>
                    <div class="modal-body">
                      <form role="form">
                       <div class="form-group form-text row">
                         <div class="col-md-6">
                           <p><span class="glyphicon glyphicon-user"></span> Username</p>
                           <input type="name" name="name" class="form-control" placeholder="Enter Name">
                         </div>
                         <div class="col-md-6">
                         <p><span class="email_signup"><i class=" glyphicon glyphicon-envelope"></i> Email</span></p>
                         <input type="email" name="email" class="form-control" placeholder="Enter Email">
                         </div>
                       </div>
                       <div class="form-group form-text row">
                         <div class="col-md-6">
                           <p><span class="fa fa-key"></span> Password</p>
                           <input type="password" name="password" class="form-control" placeholder="Password">
                         </div>
                         <div class="col-md-6">
                        <p><span class="cnf_pass">&#10004; Confirm Password</span></p>
                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <button type="submit" id="signup_btn"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> SignUp</button><br>
                      </div>
                    </form>
                    </div>
                    <div class="modal-footer form-text">
                      <button type="button" data-dismiss="modal" class="btn btn-danger pull-left"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                      <p class="footer-text">Already Registered? Click here to <button type="button" class="btn btn-default" id="login_btn" data-dismiss="modal" data-target="#signup_modal">Login</button></p>
                  </div>
                  </div>
                </div>
