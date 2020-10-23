<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <title>Ha</title>
    <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-social/bootstrap-social.css')}}">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top bg-dark">
        <div class="container">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#Navbar" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="navbar-item"><a href="" class="nav-link text-light"><span class="fa fa-home"></span> Beranda</a></li>
                    <li class="navbar-item"><a href="" class="nav-link text-light"><span class="fa fa-list"></span> Kategori</a></li>
                    <li class="navbar-item"><a href="" class="nav-link text-light"><span class="fa fa-user-circle"></span> About Me</a></li>
                    <li class="navbar-item"><a href="" class="nav-link text-light"><span class="fa fa-address-card-o"></span> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
            <div class="col-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-12">
              <h3>Location Information</h3>
           </div>
            <div class="col-12 col-sm-4 offset-sm-1">
                   <h5>Our Address</h5>
                    <address style="font-size: 100%">
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		              <i class="fa fa-phone"></i>: +852 1234 5678<br>
		              <i class="fa fa-fax"></i>: +852 8765 4321<br>
		              <i class="fa fa-envelope"></i>:
                        <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
            </div>
            <div class="col-12 col-sm-11 offset-sm-1">
                <div class="btn-group" role="group">
                    <a role="button" class="btn btn-primary" href="tel:+85123456789"><i class="fa fa-phone"></i>Call</a>
                    <a role="button" class="btn btn-info" href=""><i class="fa fa-skype"></i> Skype</a>
                    <a role="button" class="btn btn-success" href=""><i class="fa fa-envelope"></i> Email</a>
                </div>
            </div>
        </div>

    <div class="row">
           <div class="col-12">
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-12 col-md-9">
                <form action="">
                    <div class="form-group row">
                        <label for="firstname" class="col-md-2 col-form-label">
                            First Name
                        </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Last Name" class="col-md-2 col-form-label">
                            Last Name
                        </label>
                        <div class="col-md-10">
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tel" class="col-12 col-md-2 col-form-label">
                            Telephone
                        </label>
                        <div class="col-5 col-md-3">
                            <input type="text" name="telnum" id="areacode" class="form-control" placeholder="Area Code">
                        </div>
                        <div class="col-7 col-md-7">
                            <input type="tel" name="telnum" id="telnum" class="form-control" placeholder="Telephone Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Email" class="col-md-2 col-form-label">
                            Email
                        </label>
                        <div class="col-md-10">
                            <input type="email" name="Email" id="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-2">
                            <div class="form-check">
                                <input type="checkbox" name="checkbox" id="approve" class="form-check-input" value="">
                                <label for="approve" class="form-check-label"><strong>May I Contact You?</strong></label>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <select name="" id="" class="form-control">
                                <option value="">Tel.</option>
                                <option value="">Email</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feedback" class="col-md-2 col-form-label">
                            Feedback
                        </label>
                        <div class="col-md-10">
                            <textarea name="feedback" id="feedback" cols="30" rows="10" class="form-control" placeholder="FeedBack">
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button class="btn btn-primary" type="submit">
                                Send Feedback
                            </button>
                        </div>
                    </div>
                </form>
            </div>
             <div class="col-12 col-md">
            </div>
       </div>

    </div>
    <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Link</h5>
                    <ul class="list-unstyled">
                        <li><a href="">Beranda</a></li>
                        <li><a href="">Kategori</a></li>
                        <li><a href="">About Me</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Alamat</h5>
                    <addres>
                        121, Clear Water Bay Road<br>
                        Clear Water Bay, Kowloon<br>
                        HONG KONG<br>
                        <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
                        <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                        <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:confusion@food.net">confusion@food.net</a>
                    </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center d-none d-lg-block">
                        <a href="http://google.com/+" class="btn btn-social-icon btn-google"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a href="http://www.facebook.com/profile.php?id=" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="http://www.linkedin.com/in/" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a href="http://twitter.com/" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="http://youtube.com/" class="btn btn-social-icon btn-google"><i class="fa fa-youtube fa-lg"></i></a>
                        <a href="mailto:" class="btn btn-social-icon"><i class="fa fa-envelope fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('jquery/dist/jquery.slim.min.js')}}"></script>
    <script src="{{asset('popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>
</html>