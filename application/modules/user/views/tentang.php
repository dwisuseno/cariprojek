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
            <h1 class="page-title">Tentang Kami</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    Cariprojek.com adalah sebuah wadah untuk mencari sebuah projek dimana anda bisa mencari projek sesuai kemampuan anda. Sebagai tempat mengasah skill anda. </p>
                    <p class="text-bigger">Selain itu kami akan memberikan penawaran terbaik.</p>
                </div>
            </div>
            <div class="gap"></div>
        </div>
        <!--
        <div class="bg-holder">
            <div class="bg-parallax" style="background-image:url(img/1280x852.png);"></div>
            <div class="bg-mask"></div>
            <div class="bg-holder-content">
                <div class="container">
                    <div class="gap gap-big text-white">
                        <div class="row">
                            <div class="col-md-10">
                                <h2>Learn n Grow</h2>
                                <p class="text-bigger">test</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gap"></div>
            <h2>Thinker Studio</h2>
            <div class="row">
                <div class="col-md-8">
                    <p class="text-bigger">Cubilia gravida mus senectus donec consectetur dis ac vel quis a suscipit potenti purus aptent nibh gravida aliquet vestibulum varius dictum consectetur semper consectetur at varius donec sociis habitasse vivamus eget faucibus tempus donec lorem etiam volutpat blandit aliquam varius molestie nibh mattis adipiscing sodales dictumst volutpat quam rhoncus sodales</p>
                </div>
            </div>
            <div class="gap"></div>
            <h2>Rockstar Team</h2>
            <div class="row">
                <div class="col-md-10">
                    <p class="text-bigger mb30">Auctor sit parturient aenean sodales maecenas fusce potenti tristique lectus dapibus hendrerit habitant tristique vulputate vehicula quisque nisl curabitur varius enim quam maecenas facilisis inceptos auctor gravida massa facilisis risus</p>
                </div>
            </div>
            <div class="row row-wrap" data-gutter="60">
                <div class="col-md-4">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="<?php echo base_url()?>assets/img/member/alaji.jpg" alt="Image Alternative text" title="AMaze" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Dwi Al Aji Suseno</h5>
                            <p class="thumb-meta text-small">Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="<?php echo base_url()?>assets/img/member/alief.jpg" alt="Image Alternative text" title="Chiara" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Alief Yoga Priyanto</h5>
                            <p class="thumb-meta text-small">Product Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="<?php echo base_url()?>assets/img/member/erlangga.jpg" alt="Image Alternative text" title="Bubbles" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Erlangga Krisnamukti</h5>
                            <p class="thumb-meta text-small">Producer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="<?php echo base_url()?>assets/img/member/reva.jpg" alt="Image Alternative text" title="Gamer Chick" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Reva Yoga Pradana</h5>
                            <p class="thumb-meta text-small">CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="<?php echo base_url()?>assets/img/member/rizkifika.jpg" alt="Image Alternative text" title="Afro" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Rizkifika Asanul In'am</h5>
                            <p class="thumb-meta text-small">Office Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb text-center">
                        <header class="thumb-header">
                            <img class="round" src="<?php echo base_url()?>assets/img/member/yunan.jpg" alt="Image Alternative text" title="Me with the Uke" />
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title">Yunan Helmi Mahendra</h5>
                            <p class="thumb-meta text-small">Product Designer</p>
                        </div>
                    </div>
                </div>
               
            </div>
            <h4>Want to Join Our Team</h4>
            <div class="row">
                <div class="col-md-10">
                    <p>Nascetur metus morbi nibh magnis semper elit proin vivamus hac vivamus ultricies hac nulla sodales himenaeos luctus nascetur lacus sed placerat penatibus sociosqu lectus semper tincidunt pellentesque volutpat egestas porttitor</p>
                    <a href="#">Explore open positions</a>
                </div>
            </div>
            <div class="gap"></div>
         
        <div class="container">
        </div>
        -->
    </div>
     

        <?php
            $this->load->view('include/footer');
        ?>
    </div>
</body>

</html>


