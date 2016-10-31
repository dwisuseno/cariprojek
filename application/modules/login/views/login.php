<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE HTML>
<html>

<head>
    <?php
    $this->load->view('include/head');
    ?>
</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
       <?php
        $this->load->view('include/header');
        ?>

        <div class="container">
            <h1 class="page-title">Login/Register Sekarang!</h1>
        </div>

        <div class="gap"></div>


        <div class="container">
            <div class="row" data-gutter="60">
                <div class="col-md-4">
                    <h3>Selamat Datang di Cariprojek.com</h3>
                    <p>Dapatkan penghasilan tambahan sebagai pekerja lepas.</p>
                    <p>Dan Tingkatkan terus pengalaman anda bersama kami.</p>
                </div>
                <div class="col-md-4">
                    <h3>Login</h3>
                    <form method="post" action="<?php echo base_url()?>login/doLogin">
                        <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                            <label>Username</label>
                            <input value="" required name="username" class="form-control" placeholder="username" type="text" />
                        </div>
                        <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                            <label>Password</label>
                            <input value="" required name="password" class="form-control" type="password" placeholder="secret password" />
                        </div>
                        <input class="btn btn-primary" type="submit" value="Log in" />
                    </form>
                </div>
                <div class="col-md-4">
                    <h3>Buat akun baru</h3>
                    <form>
                        <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                            <label>Full Name</label>
                            <input class="form-control" placeholder="Fajar Setiawan" type="text" />
                        </div>
                        <div class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                            <label>Emai</label>
                            <input class="form-control" placeholder="fajar@setiawan.com" type="text" />
                        </div>
                        <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                            <label>Password</label>
                            <input class="form-control" type="password" placeholder="secret password" />
                        </div>
                        <input class="btn btn-primary" type="submit" value="Sign up for Traveler" />
                    </form>
                </div>
            </div>
        </div>



        <div class="gap"></div>



        <?php
            $this->load->view('include/footer');
        ?>
    </div>
</body>

</html>


