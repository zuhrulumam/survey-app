<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Unique Design UI Kit a Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
        <!--fonts-->
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <!--//fonts-->
        <link href="{!! asset('theme/css/bootstrap.css') !!}" rel="stylesheet">
        <link href="{!! asset('theme/css/style.css') !!}" rel="stylesheet" type="text/css" media="all" />
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Unique Design UI Kit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->	
        <!-- js -->
        <script type="text/javascript" src="{!! asset('theme/js/jquery.min.js') !!}"></script>
        <!-- js -->
        <!----Calender -------->
        <link rel="stylesheet" href="{!! asset('theme/css/clndr.css') !!}" type="text/css" />
        <script src="{!! asset('theme/js/underscore-min.js') !!}" type="text/javascript"></script>
        <script src= "{!! asset('theme/js/moment-2.2.1.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('theme/js/clndr.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('theme/js/site.js') !!}" type="text/javascript"></script>
        <!----End Calender -------->

        <!-- Nav CSS -->
        <link href="{!! asset('theme/css/custom.css') !!}" rel="stylesheet">
        <!-- Metis Menu Plugin JavaScript -->
        <script src="{!! asset('theme/js/metisMenu.min.js') !!}"></script>
        <script src="{!! asset('theme/js/custom.js') !!}"></script>
        <!-- Graph JavaScript -->
        <!-- script for close -->
        <script>
                    $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
            $('.vlcone').fadeOut('slow', function (c) {
            $('.vlcone').remove();
            });
            });
            });        </script>
        <script>$(document).ready(function (c) {
            $('.alert-close1').on('click', function (c) {
            $('.vlctwo').fadeOut('slow', function (c) {
            $('.vlctwo').remove();
            });
            });
            });        </script>
        <script>$(document).ready(function (c) {
            $('.alert-close2').on('click', function (c) {
            $('.vlcthree').fadeOut('slow', function (c) {
            $('.vlcthree').remove();
            });
            });
            });        </script>
        <!-- //script for close -->

    </head>
    <body>
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="logo">
                    <a href="#">UNIQUE DESIGN UI KIT</a>
                </div>
                <div class="logo-text">
                    <p>BEST UI DESIGN FOR YOUR SITE</p>
                </div>
                <div class="strip"></div>
                <div class="slider-banner">
                    <!-- responsiveslides -->
                    <script src="{!! asset('theme/js/responsiveslides.min.js') !!}"></script>
                    <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                    // Slideshow 4
                    $("#slider3").responsiveSlides({
                    auto: true,
                            pager: true,
                            nav: false,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                            $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                            $('.events').append("<li>after event fired.</li>");
                            }
                    });
                    });                    </script>
                    <!-- responsiveslides -->
                    <div  id="top" class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <div class="banner-info">
                                    <p>PSITTACOSAURUS IS A GENUS OF 
                                        PSITTACOSAURID
                                        CERATOPSIAN
                                        DINOSAUR FROM THE EARLY CRETACEOUS</p>
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <p>PSITTACOSAURUS IS A GENUS OF 
                                        PSITTACOSAURID
                                        CERATOPSIAN
                                        DINOSAUR FROM THE EARLY CRETACEOUS</p>
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <p>PSITTACOSAURUS IS A GENUS OF 
                                        PSITTACOSAURID
                                        CERATOPSIAN
                                        DINOSAUR FROM THE EARLY CRETACEOUS</p>
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <p>PSITTACOSAURUS IS A GENUS OF 
                                        PSITTACOSAURID
                                        CERATOPSIAN
                                        DINOSAUR FROM THE EARLY CRETACEOUS</p>
                                    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="content-bottom">
                    <div class="cont-bot-grids">
                        <div class="col-md-3 cont-bot-one">
                            <div class="search">
                                <form>
                                    <input type="submit" value=" ">
                                    <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Search';
                                                }" required="">
                                </form>
                            </div>
                            <div class="normal">
                                <ul>
                                    <li> <button type="button">Normal</button> </li>
                                    <li> <button type="button">Hover</button> </li>
                                    <li> <button class="activate" type="button">Click State</button> </li>
                                </ul>
                            </div>
                            <!-- switches -->
                            <div class="switches-check">
                                <div class="checkbox-grid-left">
                                    <p>
                                        <span class="col_checkbox">
                                            <input id="1" class="css-checkbox1" type="checkbox">
                                            <label for="1" name="demo_lbl_1" class="css-label1"> </label>
                                        </span>
                                        Normal
                                    </p>
                                    <p>
                                        <span class="col_checkbox">
                                            <input id="2" class="css-checkbox2" type="checkbox">
                                            <label for="2" name="demo_lbl_2" class="css-label2"> </label>
                                        </span>
                                        Hover
                                    </p>
                                    <p>
                                        <span class="col_checkbox">
                                            <input id="3" class="css-checkbox3" type="checkbox">
                                            <label for="3" name="demo_lbl_3" class="css-label3"> </label>
                                        </span>
                                        Click
                                    </p>
                                </div>
                                <div class="checkbox-grid-left">
                                    <p>
                                        <span class="col_checkbox">
                                            <input id="8" class="css-checkbox8" type="checkbox">
                                            <label for="8" name="demo_lbl_8" class="css-label8"> </label>
                                        </span>
                                        Normal
                                    </p>
                                    <p>
                                        <span class="col_checkbox">
                                            <input id="9" class="css-checkbox9" type="checkbox">
                                            <label for="9" name="demo_lbl_9" class="css-label9"> </label>
                                        </span>
                                        Hover
                                    </p>
                                    <p>
                                        <span class="col_checkbox">
                                            <input id="10" class="css-checkbox10" type="checkbox">
                                            <label for="10" name="demo_lbl_10" class="css-label10"> </label>
                                        </span>
                                        Click
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- switches -->


                        </div>
                        <div class="col-md-4 cont-bot-two">
                            <div class="menu-btns">
                                <ul class="menu">
                                    <li class="item1"><a href="#">Application<i class="menu-down"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></i> </a>
                                        <ul class="cute">
                                            <li class="subitem1"><a class="back-one" href="#"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>Likes </a></li>
                                            <li class="subitem2"><a class="back-one" href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Preferences </a></li>
                                            <li class="subitem3"><a class="back-one" href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>Messages </a></li>
                                        </ul>
                                    </li>
                                    <li class="item2"><a href="#">Application <i class="menu-down"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> </i></a>
                                        <ul class="cute cuty">
                                            <li class="subitem1"><a class="back-two" href="#"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>Likes </a></li>
                                            <li class="subitem2"><a class="back-two" href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Preferences </a></li>
                                            <li class="subitem3"><a class="back-two" href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>Messages </a></li>
                                        </ul>
                                    </li>		

                                </ul>
                                <!--initiate accordion-->
                                <script type="text/javascript">
                                            $(function () {
                                            var menu_ul = $('.menu > li > ul'),
                                                    menu_a = $('.menu > li > a');
                                                    menu_ul.hide();
                                                    menu_a.click(function (e) {
                                                    e.preventDefault();
                                                            if (!$(this).hasClass('active')) {
                                                    menu_a.removeClass('active');
                                                            menu_ul.filter(':visible').slideUp('normal');
                                                            $(this).addClass('active').next().stop(true, true).slideDown('normal');
                                                    } else {
                                                    $(this).removeClass('active');
                                                            $(this).next().stop(true, true).slideUp('normal');
                                                    }
                                                    });
                                            });                                </script>
                                <!---->
                            </div>
                            <div class="video-right">
                                <div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
                            </div>
                        </div>
                        <div class="col-md-5 cont-bot-three">
                            <div class="like-pre-chat">
                                <div class="like-left">
                                    <ul>
                                        <li><a href="#"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
                                        <div class="clearfix"></div>
                                    </ul>
                                </div>
                            </div>
                            <div class="genius">
                                <div class="feli-grid2">
                                    <div class="login-head">
                                        <div id="dd1" class="wrapper-dropdown-3" tabindex="1"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                            <ul class="dropdown">

                                                <li><a href="#">View Profile </a></li>
                                                <li><a href="#">Lists</a></li>
                                                <li><a href="#">Help</a></li>
                                                <li><a href="#">Activity log</a></li>
                                                <li><a href="#">Report a problem</a></li>
                                                <li><a href="#">Log Out</a></li>
                                            </ul>
                                            <script type="text/javascript">
                                                        function DropDown(el) {
                                                        this.dd = el;
                                                                this.initEvents();
                                                        }
                                                DropDown.prototype = {
                                                initEvents: function () {
                                                var obj = this;
                                                        obj.dd.on('click', function (event) {
                                                        $(this).toggleClass('active');
                                                                event.stopPropagation();
                                                        });
                                                }
                                                }
                                                $(function () {

                                                var dd = new DropDown($('#dd1'));
                                                        $(document).click(function () {
                                                // all dropdowns
                                                $('.wrapper-dropdown-3').removeClass('active');
                                                });
                                                });                                            </script>
                                        </div>
                                        <h3>GENIUS</h3>
                                        <div id="dd" class="wrapper-dropdown-2" tabindex="1"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                            <ul class="dropdown">

                                                <li><a href="#">View Profile </a></li>
                                                <li><a href="#">Lists</a></li>
                                                <li><a href="#">Help</a></li>
                                                <li><a href="#">Activity log</a></li>
                                                <li><a href="#">Report a problem</a></li>
                                                <li><a href="#">Log Out</a></li>
                                            </ul>
                                        </div>
                                        <!-----start-script---->
                                        <script type="text/javascript">
                                                    function DropDown(el) {
                                                    this.dd = el;
                                                            this.initEvents();
                                                    }
                                            DropDown.prototype = {
                                            initEvents: function () {
                                            var obj = this;
                                                    obj.dd.on('click', function (event) {
                                                    $(this).toggleClass('active');
                                                            event.stopPropagation();
                                                    });
                                            }
                                            }
                                            $(function () {

                                            var dd = new DropDown($('#dd'));
                                                    $(document).click(function () {
                                            // all dropdowns
                                            $('.wrapper-dropdown-2').removeClass('active');
                                            });
                                            });                                        </script>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="login-bottom">
                                        <div class="checkbox-form">
                                            <div class="check">
                                                <label class="checkbox"><p class="green"></p><h6></h6><input type="checkbox" name="checkbox" checked=""><i> </i>Green</label>
                                            </div>
                                            <div class="check">
                                                <label class="checkbox"><p class="red"></p><h6></h6><input type="checkbox" name="checkbox" checked=""><i> </i>Red</label>
                                            </div>
                                            <div class="check">
                                                <label class="checkbox"><p class="yellow"></p><h6></h6><input type="checkbox" name="checkbox" checked=""><i> </i>Yellow</label>
                                            </div>
                                            <div class="check">
                                                <label class="checkbox"><p class="blue"></p><h6></h6><input type="checkbox" name="checkbox" checked=""><i> </i>Blue</label>
                                            </div>
                                            <div class="check">
                                                <label class="checkbox"><p class="purple"></p><h6></h6><input type="checkbox" name="checkbox" checked=""><i> </i>Purple</label>
                                            </div>
                                            <div class="check">
                                                <label class="checkbox"><p class="lilac"></p><h6></h6><input type="checkbox" name="checkbox" checked=""><i> </i>Lilac</label>
                                            </div>
                                        </div>
                                        <h6>Updated at 17:04</h6>

                                    </div>
                                    <div class="audio-grid">
                                        <div class="audio-player">
                                            <audio id="audio-player"  controls="controls">
                                                <source src="media/Blue Browne.ogg" type="audio/ogg"></source>
                                                <source src="media/Blue Browne.mp3" type="audio/mpeg"></source>
                                                <source src="media/Georgia.ogg" type="audio/ogg"></source>
                                                <source src="media/Georgia.mp3" type="audio/mpeg"></source></audio>
                                        </div>
                                        <!---->
                                        <script type="text/javascript">
                                                    $(function () {
                                                    $('#audio-player').mediaelementplayer({
                                                    alwaysShowControls: true,
                                                            features: ['playpause', 'progress', 'volume'],
                                                            audioVolume: 'horizontal',
                                                            iPadUseNativeControls: true,
                                                            iPhoneUseNativeControls: true,
                                                            AndroidUseNativeControls: true
                                                    });
                                                    });                                        </script>
                                        <!--//-->
                                        <ul class="next-top">
                                            <li><a href="#"><i> </i></a></li>
                                            <li><a href="#"><i class="next"> </i></a></li>	
                                        </ul>
                                        <link rel="stylesheet" type="text/css" media="all" href="{!! asset('theme/css/audio.css') !!}">
                                        <script type="text/javascript" src="{!! asset('theme/js/mediaelement-and-player.min.js') !!}"></script>
                                    </div>
                                </div>
                            </div>				
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="content-middle">
                    <div class="col-md-6 mid-left">
                        <div class="video-gd">
                            <iframe src="https://player.vimeo.com/video/69126435?color=ffffff&title=0&byline=0&portrait=0" frameborder="0"></iframe>
                        </div>
                        <div class="badges">
                            <div class="badges-left">
                                <div class="list-group">
                                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><span class="badge">230</span>Dashboard</a>
                                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span><span class="badge">115</span>Messages</a>
                                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Profile</a>
                                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><span class="badge">234</span>My Views</a>
                                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="badge">35</span>My Followers</a>
                                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-glass" aria-hidden="true"></span><span class="badge">26</span>My Lab</a>
                                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Settings</a>
                                </div>
                            </div>
                            <div class="badges-right">
                                <div class="vlc-grids vlcone">
                                    <div class="alert-close"> </div>
                                    <a href="#">FOLLOW</a>
                                </div>
                                <div class="two-num">
                                    <p>2<span></span></p>
                                    <h6>6<span></span></h6>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tabs-top">
                            <div class="sap_tabs">	
                                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                    <ul class="resp-tabs-list">
                                        <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Images</span></li>
                                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Web</span></li>
                                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Locations</span></li>
                                        <div class="clearfix"></div>
                                    </ul>				  	 
                                    <div class="resp-tabs-container">
                                        <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0">
                                            <span class="resp-arrow"></span>TAB DATA</h2>
                                        <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                            <div class="facts">
                                                <div class="input-group">

                                                    <input class="form-control" type="text" name="domain" size="20" placeholder="Searches Images">
                                                    <span class="input-group-btn">
                                                        <select class="btn btn-default button-one" name="ext">
                                                            <option selected="">.com</option>
                                                            <option>.net</option>
                                                            <option>.org</option>
                                                            <option>.biz</option>
                                                            <option>.com.au</option>
                                                            <option>.net.au</option>
                                                            <option>.info</option>
                                                            <option>.asia</option>
                                                            <option>.co.nz</option>
                                                            <option>.org.au</option>
                                                        </select>
                                                    </span> 
                                                </div>
                                            </div>	
                                        </div>
                                        <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1">
                                            <span class="resp-arrow"></span>TAB DATA</h2>
                                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                            <div class="facts">
                                                <div class="input-group">

                                                    <input class="form-control" type="text" name="domain" size="20" placeholder="Searches Web">
                                                    <span class="input-group-btn">
                                                        <select class="btn btn-default button-one" name="ext">
                                                            <option selected="">.com</option>
                                                            <option>.net</option>
                                                            <option>.org</option>
                                                            <option>.biz</option>
                                                            <option>.com.au</option>
                                                            <option>.net.au</option>
                                                            <option>.info</option>
                                                            <option>.asia</option>
                                                            <option>.co.nz</option>
                                                            <option>.org.au</option>
                                                        </select>
                                                    </span> 
                                                </div>
                                            </div>	
                                        </div>
                                        <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2">
                                            <span class="resp-arrow"></span>TAB DATA</h2>
                                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                            <div class="facts">
                                                <div class="input-group">

                                                    <input class="form-control" type="text" name="domain" size="20" placeholder="Searches Location">
                                                    <span class="input-group-btn">
                                                        <select class="btn btn-default button-one" name="ext">
                                                            <option selected="">.com</option>
                                                            <option>.net</option>
                                                            <option>.org</option>
                                                            <option>.biz</option>
                                                            <option>.com.au</option>
                                                            <option>.net.au</option>
                                                            <option>.info</option>
                                                            <option>.asia</option>
                                                            <option>.co.nz</option>
                                                            <option>.org.au</option>
                                                        </select>
                                                    </span> 
                                                </div>
                                            </div>	
                                        </div>	
                                    </div>
                                </div>
                                <script src="{!! asset('theme/js/easyResponsiveTabs.js') !!}" type="text/javascript"></script>
                                <script type="text/javascript">
                                                    $(document).ready(function () {
                                            $('#horizontalTab').easyResponsiveTabs({
                                            type: 'default', //Types: default, vertical, accordion           
                                                    width: 'auto', //auto or any width like 600px
                                                    fit: true   // 100% fit in a container
                                            });
                                            });                                </script>	
                            </div>	
                        </div>
                    </div>
                    <div class="col-md-6 mid-right">
                        <div class="application">
                            <div class="sidebar-nav navbar-collapse">
                                <ul class="nav" id="side-menu">
                                    <li>
                                        <a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Application Settings</a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="#">Grid System</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-second-level -->
                                    </li>
                                    <li>
                                        <a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>Messages</a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="#">Sent</a>
                                            </li>
                                            <li>
                                                <a href="#">Inbox</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-second-level -->
                                    </li>
                                    <li>
                                        <a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Profile</a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="#">Account</a>
                                            </li>
                                            <li>
                                                <a href="#">Edit</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-second-level -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="cartoon">
                            <img src="{!! asset('theme/images/pic1.jpg') !!}" alt=""/>
                            <ul>
                                <li>250<span>Following</span></li>
                                <li>63<span>Photos</span></li>
                                <li>728<span>Likes</span></li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="vladimir">
                            <h3>VLADIMIR KUDINOV<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span></h3>
                            <div class="vladimir-list">
                                <ul>
                                    <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>New York, NY</li>
                                    <li><span class="glyphicon glyphicon-glass" aria-hidden="true"></span>UI Designer</li>
                                </ul>
                            </div>
                            <div class="vlc-flw vlcthree">
                                <div class="alert-close2"> </div>
                                <a href="#">FOLLOWING</a>
                            </div>
                            <div class="sec-slider">
                                <div class="work-bottom">
                                    <ul id="flexiselDemo1">			
                                        <li>
                                            <div class="team-left">
                                                <img src="{!! asset('theme/images/team-1.jpg') !!}" alt=""/>								
                                            </div>
                                        </li>
                                        <li>
                                            <div class="team-left">
                                                <img src="{!! asset('theme/images/team-3.jpg') !!}" alt=""/>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="team-left">
                                                <img src="{!! asset('theme/images/team-2.jpg') !!}" alt=""/>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="team-left">
                                                <img src="{!! asset('theme/images/team-4.jpg') !!}" alt=""/>
                                            </div>
                                        </li>
                                    </ul>
                                    <script type="text/javascript">
                                                $(window).load(function () {
                                        $("#flexiselDemo1").flexisel({
                                        visibleItems: 5,
                                                animationSpeed: 1000,
                                                autoPlay: true,
                                                autoPlaySpeed: 3000,
                                                pauseOnHover: true,
                                                enableResponsiveBreakpoints: true,
                                                responsiveBreakpoints: {
                                                portrait: {
                                                changePoint: 480,
                                                        visibleItems: 3
                                                },
                                                        landscape: {
                                                        changePoint: 640,
                                                                visibleItems: 3
                                                        },
                                                        tablet: {
                                                        changePoint: 768,
                                                                visibleItems: 4
                                                        }
                                                }
                                        });
                                        });                                    </script>
                                    <script type="text/javascript" src="{!! asset('theme/js/jquery.flexisel.js') !!}"></script>

                                </div>
                            </div>
                        </div>
                        <div class="degrees">
                            <div class="degree-left">
                                <p>26°<span>NEW YORK</span></p>
                            </div>
                            <div class="degree-right">
                                <img src="{!! asset('theme/images/sun.png') !!}" alt=""/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="table-grids">
                    <div class="mailbox-content">
                        <div class="mail-toolbar">
                            <div class="float-left">
                                <div class="btn btn_1 btn-default mrg5R">
                                    <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
                                </div>
                                <div class="mail-app">
                                    <p>Mail Application</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="float-right">
                                <span class="text-muted m-r-sm">1-50 of 300 </span>	 
                                <div class="btn-group">
                                    <a class="btn btn-default arrl"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></a>
                                    <a class="btn btn-default arrl"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
                                </div>					
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="tb-gd">
                            <table class="table">
                                <tbody>                    
                                    <tr class="read checked vlctwo">
                                <div class="alert-close1"> </div>
                                <td class="hidden-xs in-ch che-hov">
                                    <input type="checkbox" class="checkbox4">
                                </td>
                                <td class="hidden-xs star-hov pad yel">
                                    <span class="glyphicon glyphicon-star-empty whit" aria-hidden="true"></span>
                                </td>
                                <td class="hidden-xs">
                                    Dribbble.com
                                </td>
                                <td class="cl-white">
                                    <span>USERS</span> Michael J. Morgan is now following you
                                </td>

                                <td>
                                    Today, 10:15 PM
                                </td>
                                </tr>
                                <tr class="read checked vlcthree">
                                <div class="alert-close1"> </div>
                                <td class="hidden-xs in-ch">
                                    <input type="checkbox" class="checkbox4">
                                </td>
                                <td class="hidden-xs pad">
                                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                </td>
                                <td class="hidden-xs">
                                    Behance
                                </td>
                                <td class="cl-white">
                                    Dominik Laurysiewicz Posted a New Work in Progress
                                </td>

                                <td>
                                    Jan 12
                                </td>
                                </tr>
                                <tr class="read checked vlcfour">
                                <div class="alert-close1"> </div>
                                <td class="hidden-xs in-ch">
                                    <input type="checkbox" class="checkbox4">
                                </td>
                                <td class="hidden-xs pad">
                                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                </td>
                                <td class="hidden-xs">
                                    Behance
                                </td>
                                <td class="cl-white">
                                    Comment on Square UI
                                </td>

                                <td>
                                    Jan 10
                                </td>
                                </tr>
                                <tr class="read checked vlcfive">
                                <div class="alert-close1"> </div>
                                <td class="hidden-xs in-ch">
                                    <input type="checkbox" class="checkbox4">
                                </td>
                                <td class="hidden-xs pad">
                                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                </td>
                                <td class="hidden-xs">
                                    Twitter
                                </td>
                                <td class="cl-white">
                                    Jonno Riekwel (@Jonnotie) is now following you on Twitter!
                                </td>

                                <td>
                                    Jan 9
                                </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="buttons-grids">
                    <ul>
                        <li><a href="#">ADD TO BASKET</a></li>
                        <li><a href="#">and something else</a></li>
                        <li><a href="#">play soundtrack</a></li>
                        <li><a href="#">buy now button</a></li>
                        <li><a href="#">Go shopping</a></li>
                        <li><a href="#">new message</a></li>
                        <li><a href="#">let’s favorite it</a></li>
                        <li><a href="#">just nice blue button</a></li>
                        <li><a href="#">new message<span>2</span></a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="app-board">
                    <div class="col-md-4 board-left">
                        <div class="audio-record-list">
                            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                            <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                                <div class="jp-type-playlist">
                                    <div class="jp-gui jp-interface">
                                        <div class="jp-controls">	
                                            <button class="jp-play" role="button" tabindex="0">play</button>
                                        </div>
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div class="jp-play-bar"></div>
                                            </div>
                                        </div>
                                        <div class="jp-volume-controls">
                                            <button class="jp-mute" role="button" tabindex="0">mute</button>
                                            <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                                            <div class="jp-volume-bar">
                                                <div class="jp-volume-bar-value"></div>
                                            </div>
                                        </div>
                                        <div class="jp-time-holder">
                                            <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                                            <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                                        </div>

                                    </div>
                                    <div class="jp-playlist">
                                        <ul>
                                            <li>&nbsp;</li>
                                        </ul>
                                    </div>
                                    <div class="jp-no-solution">
                                        <span>Update Required</span>
                                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 board-right">
                        <div class="login-head2">
                            <div id="dd2" class="wrapper-dropdown-4" tabindex="1"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                <ul class="dropdown">

                                    <li><a href="#">View Profile </a></li>
                                    <li><a href="#">Lists</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Activity log</a></li>
                                    <li><a href="#">Report a problem</a></li>
                                    <li><a href="#">Log Out</a></li>
                                </ul>
                                <script type="text/javascript">
                                                function DropDown(el) {
                                                this.dd = el;
                                                        this.initEvents();
                                                }
                                        DropDown.prototype = {
                                        initEvents: function () {
                                        var obj = this;
                                                obj.dd.on('click', function (event) {
                                                $(this).toggleClass('active');
                                                        event.stopPropagation();
                                                });
                                        }
                                        }
                                        $(function () {

                                        var dd = new DropDown($('#dd2'));
                                                $(document).click(function () {
                                        // all dropdowns
                                        $('.wrapper-dropdown-4').removeClass('active');
                                        });
                                        });                                </script>
                            </div>
                            <h3>Application</h3>
                            <h3>Board</h3>
                            <div class="searchtwo">
                                <form>
                                    <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Search';
                                                }" required="">
                                    <input type="submit" value=" ">
                                </form>
                            </div>
                            <h3>Options</h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="shirt-grids">
                            <div class="shirt-left">
                                <div class="shirt">
                                    <img src="{!! asset('theme/images/pic1.jpg') !!}" alt=""/>
                                    <ul>
                                        <li><p></p></li>
                                        <li><p></p></li>
                                        <li><p></p></li>
                                        <li><p></p></li>
                                        <li><p></p></li>
                                    </ul>
                                    <p class="dolor">$39</p>
                                    <div class="clearfix"></div>
                                </div>
                                <h5>NICE T-SHIRT</h5>
                                <h6>Her reign from 1883 to 1897 was marked.</h6>
                                <a href="#">ADD TO BASKET</a>
                            </div>
                            <div class="shirt-right">
                                <div class="tooltiptop">
                                    <div class="like-set-mes text-center">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="tooltip" title="Pinguicula moranensis is a perennial">
                                                    <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                                                    Like me

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="tooltip" title="Pinguicula moranensis is a perennial">
                                                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                                    Settings

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="tooltip" title="Pinguicula moranensis is a perennial">
                                                    <span class="glyphicon glyphicon-cog " aria-hidden="true"></span>
                                                    Messages

                                                </a>
                                            </li>
                                            <div class="clearfix"></div>
                                        </ul>
                                    </div>
                                    <script>
                                                $(document).ready(function () {
                                        $('[data-toggle="tooltip"]').tooltip();
                                        });                                    </script>
                                </div>
                                <div class="tooltip-bottom">
                                    <ul>
                                        <li>
                                            <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span>8:35 PM</p>
                                            <h6>Pinguicula moranensis is perennial</h6>
                                        </li>
                                        <li>
                                            <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span>9:20 PM</p>
                                            <h6>Application Settings</h6>
                                        </li>

                                        <a href="#">17 more events <span class="glyphicon glyphicon-arrow-right " aria-hidden="true"></span></a>

                                    </ul>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="map-content">
                    <div class="col-md-8 map-content-left">
                        <div class="infom">
                            <div id="verticalTab" class="resp-vtabs" style="display: block; width: 100%; margin: 0px;"><!-- start vertical Tabs-->
                                <ul class="resp-tabs-list">
                                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span class="glyphicon glyphicon-dashboard"> </span></li>
                                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span class="glyphicon glyphicon-user"> </span></li>
                                    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span class="glyphicon glyphicon-comment"> </span></li>
                                    <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span class="glyphicon glyphicon-cloud-download"> </span></li>
                                    <li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span class="glyphicon glyphicon-cog"> </span></li>
                                </ul>
                                
                                <div class="resp-tabs-container">
                                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span><i class="icon_1"></i></h2><div class="new_posts resp-tab-content" aria-labelledby="tab_item-0">
                                        <h3>Informations generales</h3>
                                        <div class="vertical_post">
                                            <div class="vert-top">
                                                <li class="se">Sexe</li>
                                                <li class="hom">Homme</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Vous recherchez</li>
                                                <li class="hom">24 Juillet 1986</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Anniversaire</li>
                                                <li class="hom">Marie</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Situation amoureuse</li>
                                                <li class="hom">Adam</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Autres noms</li>
                                                <li class="hom">Homme</li>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span><i class="icon_2"></i></h2><div class="new_posts resp-tab-content" aria-labelledby="tab_item-1">
                                        <h3>Simply dummy text </h3>
                                        <div class="vertical_post">
                                            <div class="vert-top">
                                                <li class="se">Situation amoureuse</li>
                                                <li class="hom">Adam</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Sexe</li>
                                                <li class="hom">Homme</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Vous recherchez</li>
                                                <li class="hom">24 Juillet 1986</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Anniversaire</li>
                                                <li class="hom">Marie</li>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="vert-top">
                                                <li class="se">Autres noms</li>
                                                <li class="hom">Homme</li>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span><i class="icon_3"></i></h2><div class="new_posts resp-tab-content" aria-labelledby="tab_item-2">
                                        <h3>Contrary to popular</h3>
                                        <div class="vertical_post">
                                            <div class="vert-top">
                                                <li class="se">Vous recherchez</li>
                                                <li class="hom">24 Juillet 1986</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Anniversaire</li>
                                                <li class="hom">Marie</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Sexe</li>
                                                <li class="hom">Homme</li>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="vert-top">
                                                <li class="se">Situation amoureuse</li>
                                                <li class="hom">Adam</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Autres noms</li>
                                                <li class="hom">Homme</li>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-3"><span class="resp-arrow"></span><i class="icon_4"></i></h2><div class="new_posts resp-tab-content" aria-labelledby="tab_item-3">
                                        <h3>The standard chunk</h3>
                                        <div class="vertical_post">
                                            <div class="vert-top">
                                                <li class="se">Situation amoureuse</li>
                                                <li class="hom">Adam</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Autres noms</li>
                                                <li class="hom">Homme</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Sexe</li>
                                                <li class="hom">Homme</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Vous recherchez</li>
                                                <li class="hom">24 Juillet 1986</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Anniversaire</li>
                                                <li class="hom">Marie</li>
                                                <div class="clearfix"></div>
                                            </div>

                                        </div>
                                    </div>	  
                                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-4"><span class="resp-arrow"></span><i class="icon_4"></i></h2><div class="new_posts resp-tab-content" aria-labelledby="tab_item-3">
                                        <h3> Finibus Bonorum et </h3>
                                        <div class="vertical_post">

                                            <div class="vert-top">
                                                <li class="se">Anniversaire</li>
                                                <li class="hom">Marie</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Situation amoureuse</li>
                                                <li class="hom">Adam</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Autres noms</li>
                                                <li class="hom">Homme</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Sexe</li>
                                                <li class="hom">Homme</li>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="vert-top">
                                                <li class="se">Vous recherchez</li>
                                                <li class="hom">24 Juillet 1986</li>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>	           
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <script src="{!! asset('theme/js/easyResponsiveTabs.js') !!}"></script>
                            <script type="text/javascript">
                                                $(document).ready(function () {
                                        $('#horizontalTab').easyResponsiveTabs({
                                        type: 'default', //Types: default, vertical, accordion           
                                                width: 'auto', //auto or any width like 600px
                                                fit: true, // 100% fit in a container
                                                closed: 'accordion', // Start closed if in accordion view
                                                activate: function (event) { // Callback function if tab is switched
                                                var $tab = $(this);
                                                        var $info = $('#tabInfo');
                                                        var $name = $('span', $info);
                                                        $name.text($tab.text());
                                                        $info.show();
                                                }
                                        });
                                                $('#verticalTab').easyResponsiveTabs({
                                        type: 'vertical',
                                                width: 'auto',
                                                fit: true
                                        });
                                        });                            </script>
                        </div>
                        <div class="app-form-grid">
                            <div class="ap-fr-gd">
                                <div class="app-form-left">
                                    <img src="{!! asset('theme/images/team-1.jpg') !!}" alt=""/> 
                                    <div class="app-form-pos">
                                        <img src="{!! asset('theme/images/pointer3.png') !!}" alt=""/> 
                                    </div>
                                </div>
                                <div class="app-form-right">
                                    <form>
                                        <input type="text" placeholder="Application" required>
                                        <input type="submit" value="SEND">
                                    </form>
                                    <div class="login-bottom1">
                                        <div class="checkbox-form2">
                                            <div class="check2">
                                                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Facebook</label>
                                            </div>
                                        </div>
                                        <div class="checkbox-form2">
                                            <div class="check2 check3">
                                                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Twitter</label>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 map-content-right">
                        <div class="map-grid">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12086.301475722317!2d-73.97980640155744!3d40.77136331814117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smidtown+central+park!5e0!3m2!1sen!2sin!4v1437656182527" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <div class="map-pos">
                                <p>Pinguicula moranensis</p>
                                <h6>1.8 KM</h6>
                            </div>
                            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                            <img src="{!! asset('theme/images/pointer.png') !!}" alt=""/>
                        </div>
                        <div class="map-bottom">
                            <div class="map-left">
                                <img src="{!! asset('theme/images/team-3.jpg') !!}" alt=""/> 
                                <div class="map-img-pos">
                                    <img src="{!! asset('theme/images/point2.png') !!}" alt=""/> 
                                </div>
                            </div>
                            <div class="map-right">
                                <h3>Pinguicula moranensis</h3>
                                <p>She entered into a political marriage with Rainilaiarivony who, in his role as Prime Minister.</p>
                                <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span><h6>9:20PM</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //content -->
        <!-- subscribe -->
        <div class="subscribe">
            <div class="container">
                <div class="col-md-7 subscribe-left">
                    <h3>Subscribe</h3>
                    <p>Want to get <span>more stuff</span> like this?</p>
                    <form>
                        <input type="text" placeholder="Enter Your Mail" required>
                        <input type="submit" value="SUBSCRIBE">
                    </form>
                </div>
                <div class="col-md-5 subscribe-right">
                    <h3>Get Square UI Pro</h3> 
                    <ul>
                        <li>Tons of components</li>
                        <li>A lot of complex components</li>
                        <li>Styles & Swatches</li>
                        <li>Typography Stylesheet</li>
                        <li>Startup Examples</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- subscribe -->
        <!-- footer -->
        <div class="copy-right">
            <div class="container">
                <p>Copyright &copy; 2015 Unique Design UI Kit. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
            </div>
        </div>
        <!-- //footer -->
        <!-- Bootstrap Core JavaScript -->
        <script src="{!! asset('theme/js/bootstrap.min.js') !!}"></script>
        <!-- Bootstrap Core JavaScript -->
        <!-- script for play-list -->
        <link href="{!! asset('theme/css/jplayer.blue.monday.min.css') !!}" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="{!! asset('theme/js/jquery.jplayer.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('theme/js/jplayer.playlist.min.js') !!}"></script>
        <script type="text/javascript">
                                                //<![CDATA[
                                                $(document).ready(function () {

                                        new jPlayerPlaylist({
                                        jPlayer: "#jquery_jplayer_1",
                                                cssSelectorAncestor: "#jp_container_1"
                                        }, [
                                        {
                                        title: "Cro Magnon Man",
                                                mp3: "http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
                                                oga: "http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"
                                        },
                                        {
                                        title: "Your Face",
                                                mp3: "http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
                                                oga: "http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg"
                                        },
                                        {
                                        title: "Cyber Sonnet",
                                                mp3: "http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
                                                oga: "http://www.jplayer.org/audio/ogg/TSP-07-Cybersonnet.ogg"
                                        },
                                        {
                                        title: "Tempered Song",
                                                mp3: "http://www.jplayer.org/audio/mp3/Miaow-01-Tempered-song.mp3",
                                                oga: "http://www.jplayer.org/audio/ogg/Miaow-01-Tempered-song.ogg"
                                        },
                                        {
                                        title: "Hidden",
                                                mp3: "http://www.jplayer.org/audio/mp3/Miaow-02-Hidden.mp3",
                                                oga: "http://www.jplayer.org/audio/ogg/Miaow-02-Hidden.ogg"
                                        },
                                        {
                                        title: "Lentement",
                                                free: true,
                                                mp3: "http://www.jplayer.org/audio/mp3/Miaow-03-Lentement.mp3",
                                                oga: "http://www.jplayer.org/audio/ogg/Miaow-03-Lentement.ogg"
                                        },
                                        {
                                        title: "Lismore",
                                                mp3: "http://www.jplayer.org/audio/mp3/Miaow-04-Lismore.mp3",
                                                oga: "http://www.jplayer.org/audio/ogg/Miaow-04-Lismore.ogg"
                                        },
                                        {
                                        title: "The Separation",
                                                mp3: "http://www.jplayer.org/audio/mp3/Miaow-05-The-separation.mp3",
                                                oga: "http://www.jplayer.org/audio/ogg/Miaow-05-The-separation.ogg"
                                        },
                                        {
                                        title: "Beside Me",
                                                mp3: "http://www.jplayer.org/audio/mp3/Miaow-06-Beside-me.mp3",
                                                oga: "http://www.jplayer.org/audio/ogg/Miaow-06-Beside-me.ogg"
                                        },
                                        {
                                        title: "Bubble",
                                                free: true,
                                                mp3: "http://www.jplayer.org/audio/mp3/Miaow-07-Bubble.mp3",
                                                oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
                                        },
                                        {
                                        title: "Stirring of a Fool",
                                                mp3: "http://www.jplayer.org/audio/mp3/Miaow-08-Stirring-of-a-fool.mp3",
                                                oga: "http://www.jplayer.org/audio/ogg/Miaow-08-Stirring-of-a-fool.ogg"
                                        },
                                        {
                                        title: "Partir",
                                                free: true,
                                                mp3: "http://www.jplayer.org/audio/mp3/Miaow-09-Partir.mp3",
                                                oga: "http://www.jplayer.org/audio/ogg/Miaow-09-Partir.ogg"
                                        },
                                        {
                                        title: "Thin Ice",
                                                mp3: "http://www.jplayer.org/audio/mp3/Miaow-10-Thin-ice.mp3",
                                                oga: "http://www.jplayer.org/audio/ogg/Miaow-10-Thin-ice.ogg"
                                        }
                                        ], {
                                        swfPath: "../../dist/jplayer",
                                                supplied: "oga, mp3",
                                                wmode: "window",
                                                useStateClassSkin: true,
                                                autoBlur: false,
                                                smoothPlayBar: true,
                                                keyEnabled: true
                                        });
                                        });
                                                //]]>
        </script>
        <!-- //script for play-list -->

    </body>
</html>
