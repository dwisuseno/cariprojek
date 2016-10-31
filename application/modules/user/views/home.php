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


        <div class="bg-holder">
            <div class="bg-mask-darken"></div>
            <div class="bg-parallax"></div>
            <!-- START GRIDROTATOR -->
            <div class="ri-grid" id="ri-grid">
                <ul>
                    <?php for($i=1;$i<=48;$i++) { ?>
                    <li>
                        <a href="#">
                            <img src="<?php echo base_url()?>assets/img/Cariprojek-bg.png" alt="Image Alternative text" title="new york at an angle" />
                        </a>
                    </li>
                    <?php } ?>   
                </ul>
            </div>
            <!-- END GRIDROTATOR -->
            <div class="bg-front full-center">
                <div class="container">
                    <div class="search-tabs search-tabs-bg">
                        <h1>Cari Projekmu Sekarang Juga!</h1>
                        <p>
                            <a href="<?php echo base_url()?>cari">
                                <button class="btn btn-primary btn-lg" type="submit">Cari Projek!</button>
                            </a>
                            <a href="<?php echo base_url()?>bagi">
                                <button class="btn btn-primary btn-lg" type="submit">Bagi Projek!</button>
                            </a>
                        </p>
                        <!--
                        <div class="tabbable">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Hotels</span></a>
                                </li>
                                <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-plane"></i> <span >Flights</span></a>
                                </li>
                                <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-home"></i> <span >Rentals</span></a>
                                </li>
                                <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-car"></i> <span >Cars</span></a>
                                </li>
                                <li><a href="#tab-5" data-toggle="tab"><i class="fa fa-bolt"></i> <span >Activities</span></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-1">
                                    <h2>Search and Save on Hotels</h2>


                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                    <label>Where are you going?</label>
                                                    <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-daterange" data-date-format="M d, D">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Check-in</label>
                                                                <input class="form-control" name="start" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Check-out</label>
                                                                <input class="form-control" name="end" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-group-lg form-group-select-plus">
                                                                <label>Rooms</label>
                                                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                    <label class="btn btn-primary active">
                                                                        <input type="radio" name="options" />1</label>
                                                                    <label class="btn btn-primary">
                                                                        <input type="radio" name="options" />2</label>
                                                                    <label class="btn btn-primary">
                                                                        <input type="radio" name="options" />3</label>
                                                                    <label class="btn btn-primary">
                                                                        <input type="radio" name="options" />3+</label>
                                                                </div>
                                                                <select class="form-control hidden">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option selected="selected">4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-group-lg form-group-select-plus">
                                                                <label>Guests</label>
                                                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                    <label class="btn btn-primary active">
                                                                        <input type="radio" name="options" />1</label>
                                                                    <label class="btn btn-primary">
                                                                        <input type="radio" name="options" />2</label>
                                                                    <label class="btn btn-primary">
                                                                        <input type="radio" name="options" />3</label>
                                                                    <label class="btn btn-primary">
                                                                        <input type="radio" name="options" />3+</label>
                                                                </div>
                                                                <select class="form-control hidden">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option selected="selected">4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-lg" type="submit">Search for Hotels</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab-2">
                                    <h2>Search for Cheap Flights</h2>
                                    <form>
                                        <div class="tabbable">
                                            <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                                                <li class="active"><a href="#flight-search-1" data-toggle="tab">Round Trip</a>
                                                </li>
                                                <li><a href="#flight-search-2" data-toggle="tab">One Way</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="flight-search-1">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                        <label>From</label>
                                                                        <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                        <label>To</label>
                                                                        <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-daterange" data-date-format="M d, D">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                            <label>Departing</label>
                                                                            <input class="form-control" name="start" type="text" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                            <label>Returning</label>
                                                                            <input class="form-control" name="end" type="text" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                                            <label>Passngers</label>
                                                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                                <label class="btn btn-primary active">
                                                                                    <input type="radio" name="options" />1</label>
                                                                                <label class="btn btn-primary">
                                                                                    <input type="radio" name="options" />2</label>
                                                                                <label class="btn btn-primary">
                                                                                    <input type="radio" name="options" />3</label>
                                                                                <label class="btn btn-primary">
                                                                                    <input type="radio" name="options" />3+</label>
                                                                            </div>
                                                                            <select class="form-control hidden">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option selected="selected">4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                                <option>7</option>
                                                                                <option>8</option>
                                                                                <option>9</option>
                                                                                <option>10</option>
                                                                                <option>11</option>
                                                                                <option>12</option>
                                                                                <option>13</option>
                                                                                <option>14</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="flight-search-2">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                        <label>From</label>
                                                                        <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                        <label>To</label>
                                                                        <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-daterange" data-date-format="M d, D">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                            <label>Departing</label>
                                                                            <input class="date-pick form-control" data-date-format="M d, D" type="text" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group form-group-lg form-group-select-plus">
                                                                            <label>Passngers</label>
                                                                            <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                                <label class="btn btn-primary active">
                                                                                    <input type="radio" name="options" />1</label>
                                                                                <label class="btn btn-primary">
                                                                                    <input type="radio" name="options" />2</label>
                                                                                <label class="btn btn-primary">
                                                                                    <input type="radio" name="options" />3</label>
                                                                                <label class="btn btn-primary">
                                                                                    <input type="radio" name="options" />3+</label>
                                                                            </div>
                                                                            <select class="form-control hidden">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option selected="selected">4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                                <option>7</option>
                                                                                <option>8</option>
                                                                                <option>9</option>
                                                                                <option>10</option>
                                                                                <option>11</option>
                                                                                <option>12</option>
                                                                                <option>13</option>
                                                                                <option>14</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-lg" type="submit">Search for Flights</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab-3">
                                    <h2>Find Your Perfect Home</h2>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                    <label>Where are you going?</label>
                                                    <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-daterange" data-date-format="M d, D">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Check-in</label>
                                                                <input class="form-control" name="start" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Check-out</label>
                                                                <input class="form-control" name="end" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-group-lg form-group-select-plus">
                                                                <label>Rooms</label>
                                                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                    <label class="btn btn-primary active">
                                                                        <input type="radio" name="options" />1</label>
                                                                    <label class="btn btn-primary">
                                                                        <input type="radio" name="options" />2</label>
                                                                    <label class="btn btn-primary">
                                                                        <input type="radio" name="options" />3</label>
                                                                    <label class="btn btn-primary">
                                                                        <input type="radio" name="options" />3+</label>
                                                                </div>
                                                                <select class="form-control hidden">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option selected="selected">4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-group-lg form-group-select-plus">
                                                                <label>Guests</label>
                                                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                    <label class="btn btn-primary active">
                                                                        <input type="radio" name="options" />1</label>
                                                                    <label class="btn btn-primary">
                                                                        <input type="radio" name="options" />2</label>
                                                                    <label class="btn btn-primary">
                                                                        <input type="radio" name="options" />3</label>
                                                                    <label class="btn btn-primary">
                                                                        <input type="radio" name="options" />3+</label>
                                                                </div>
                                                                <select class="form-control hidden">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option selected="selected">4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-lg" type="submit">Search for Vacation Rentals</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab-4">
                                    <h2>Search for Cheap Rental Cars</h2>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                            <label>Pick-up Location</label>
                                                            <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                            <label>Drop-off Location</label>
                                                            <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-daterange" data-date-format="M d, D">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Pick-up Date</label>
                                                                <input class="form-control" name="start" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Drop-ff Date</label>
                                                                <input class="form-control" name="end" type="text" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-lg" type="submit">Search for Rental Cars</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab-5">
                                    <h2>Search for Activities</h2>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                    <label>Where are you going?</label>
                                                    <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-daterange" data-date-format="M d, D">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>From</label>
                                                                <input class="form-control" name="start" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>To</label>
                                                                <input class="form-control" name="end" type="text" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-lg" type="submit">Search for Activities</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
        </div>
        <!-- Bagian keunggulan2 Cariprojek.com-->
        <div class="bg-color text-white">
            <div class="container">
                <div class="gap"></div>
                <div class="row row-wrap" data-gutter="120">
                    <div class="col-md-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-thumbs-o-up box-icon-border round box-icon-white box-icon-big"></i>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Lebih Mudah</h4>
                                <p class="thumb-desc">Kami tawarkan kemudahan untuk mencari dan berbagi Projek</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-send box-icon-border round box-icon-white box-icon-big"></i>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Lebih Cepat</h4>
                                <p class="thumb-desc">Transaksi pembayayan lebih mudah. Karena kami menggunakan Bank Lokal yang ada di Indonesia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumb">
                            <header class="thumb-header"><i class="fa fa-dollar box-icon-border round box-icon-white box-icon-big"></i>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Lebih Banyak</h4>
                                <p class="thumb-desc">Dapatkan banyak penawaran projek dari kami.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap gap-small"></div>
            </div>
        </div>

        <div class="container">
        </div>
<!--
        <div class="special-area">
            <div class="owl-carousel owl-slider owl-carousel-area" id="owl-carousel-slider">
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(img/2048x1365.png);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <div class="owl-cap-weather"><span>+26</span><i class="im im-cloudy"></i>
                            </div>
                            <h1 class="owl-cap-title">Paris</h1>
                            <div class="owl-cap-price"><small>from</small>
                                <h5>$1800</h5>
                            </div><a class="btn btn-white btn-ghost" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                        </div>
                    </div>
                </div>
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(img/2048x2048.png);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <div class="owl-cap-weather"><span>+28</span><i class="im im-sun"></i>
                            </div>
                            <h1 class="owl-cap-title">Budapest</h1>
                            <div class="owl-cap-price"><small>from</small>
                                <h5>$3000</h5>
                            </div><a class="btn btn-white btn-ghost" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                        </div>
                    </div>
                </div>
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(img/2048x1365.png);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <div class="owl-cap-weather"><span>+31</span><i class="im im-rain"></i>
                            </div>
                            <h1 class="owl-cap-title">Las Vegas</h1>
                            <div class="owl-cap-price"><small>from</small>
                                <h5>$1400</h5>
                            </div><a class="btn btn-white btn-ghost" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
-->
<!-- 
        <div class="container">
            <div class="gap"></div>
            <h2 class="text-center mb20">Top Travel Destinations</h2>
            <div class="row row-wrap">
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="img/800x600.png" alt="Image Alternative text" title="lack of blue depresses me" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Greece</h4>
                            <p class="thumb-desc">Consectetur diam dignissim aptent augue maecenas ridiculus aliquam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="img/400x300.png" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Africa</h4>
                            <p class="thumb-desc">Suspendisse vulputate etiam convallis aptent justo aptent senectus</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="img/800x600.png" alt="Image Alternative text" title="Upper Lake in New York Central Park" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">USA</h4>
                            <p class="thumb-desc">Quis volutpat vel at mus ipsum fames habitant</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="img/800x600.png" alt="Image Alternative text" title="people on the beach" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Australia</h4>
                            <p class="thumb-desc">Montes ullamcorper venenatis nullam feugiat dui eros himenaeos</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>
-->

        <?php
            $this->load->view('include/footer');
        ?>
    </div>
</body>

</html>


