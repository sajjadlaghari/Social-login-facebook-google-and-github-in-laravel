<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Login</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container d-flex justify-content-center my-5">
        <div class="row my-2 mx-2 main">
            <div class="col-md-6 d-flex justify-content-center">
                <!--left-column-->
                <form class="formone">
                <h6 class="header">Lets do it faster!</h6>
                <div class="row ro">
                    <div class="form-group col-md-6 xyz">
                        <a  href="{{ route('facebook.login') }}">
                        <button type="button" class="btn btn-primary fb"><i class="fa fa-facebook"></i> Facebook</button>
                        </a>
                    </div>
                </div>
                <div class="row rt">
                    <div class="form-group col-md-6 xyz">
                        <a href="{{ route('google-login') }}">
                        <button type="button" class="btn btn-primary gplus"><i class="fa fa-google"></i> Google</button>
                        </a>
                    </div>
    
                </div>

                <div class="row rt">
                    <div class="form-group col-md-6 xyz">
                        <a  href="/auth/github">
                        <button type="button" class="btn btn-dark github" style="background-color: #00000 !important"><i class="fa fa-github"></i> Github</button>
                        </a>
                    </div>
    
                </div>
                <p class="foot text-muted">We don't post anything without permission</p>
                <!--right-column-->
                </form>
            </div>
            <div class="col-md-6">
                <h2 class="title pt-5 pb-3">Let's Create your account</h2>
                <form class="formtwo">
                        <small class="identity text-muted">What is your Name?</small>
                <div class="row rone">						
                    <div class="form-group col-md-6 fone py-3">
                        <input type="text" class="form-control" placeholder="Tony">
                        <img src="https://img.icons8.com/material-two-tone/24/000000/person-male.png"/>
                    </div>
                    <div class="form-group col-md-6 ftwo py-3">
                        <input type="text" class="form-control ml-3 box2" placeholder="Stark">
                        <img src="https://img.icons8.com/material-two-tone/24/000000/person-male.png"/>
                    </div>
                </div>
                
                <small class="emailinfo text-muted">What is your Email?</small>
                <div class="row rtwo">				
                    <div class="form-group col-md-12 fthree">
                        <input type="email" class="form-control" placeholder="tonystark@gmail.com"
                        \>
                        <img src="https://img.icons8.com/windows/32/000000/email-sign.png"/>
                    </div>
                </div>
                <small class="password text-muted">Let's Secure your account</small>
                <div class="row rthree">				
                    <div class="form-group col-md-12 ffour">
                        <input type="password" class="form-control secure" placeholder="">
                        <img src="https://img.icons8.com/material-outlined/24/000000/lock.png"/>
                        <i class="image2"><img src="https://img.icons8.com/ios-glyphs/64/000000/invisible.png"/></i>
                    </div>
                </div>
                <div class="row rfour">
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary mt-3 ca"><span>CREATE ACCOUNT</span></button>
                    </div>
                    <p class="note text-muted">By submitting the form, you agree with Viama'<a href="#" class="text-muted"><strong>T&C and Privacy policy.</strong></a></p>
                </div>
    
                </form>
            </div>
                
        </div>
    </div>
    
</body>
</html>
