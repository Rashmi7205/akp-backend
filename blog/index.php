<?php
include("./blog.php");
$blog = new Blog();
$blogList = null;
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  $blogList = $blog->get_all_blogs($page);
} else {
  $blogList = $blog->get_all_blogs(1);
  // print_r($blogList);
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Blog</title>
  <link rel="icon" type="image/x-icon" href="images/esscofavicon16x16.png" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--[if IE
      ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"
    /><![endif]-->

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/lib.css" />
  <link rel="stylesheet" href="css/ie9-and-up.css" />
  <link rel="stylesheet" href="css/style_3.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/shortcodes.css" />
  <link rel="stylesheet" href="css/style_5.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/daterangepicker.css" />
  <link rel="stylesheet" href="css/chosen.css" />
  <link rel="stylesheet" href="css/so_searchpro.css" />
  <link rel="stylesheet" href="css/so-listing-tabs.css" />
  <link rel="stylesheet" href="css/so_sociallogin.css" />
  <link rel="stylesheet" href="css/style_8.css" />
  <link rel="stylesheet" href="css/so_megamenu.css" />
  <link rel="stylesheet" href="css/wide-grid.css" />
  <link rel="stylesheet" href="css/style_4.css" />
  <link rel="stylesheet" href="css/style_10.css" />
  <link rel="stylesheet" href="css/style_6.css" />
  <link rel="stylesheet" href="css/css3_1.css" />
  <link rel="stylesheet" href="css/so-categories.css" />
  <link rel="stylesheet" href="css/style_11.css" />
  <link rel="stylesheet" href="css/style_9.css" />
  <link rel="stylesheet" href="css/style_2.css" />
  <link rel="stylesheet" href="css/css3.css" />
  <link rel="stylesheet" href="css/style_1.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/style_12.css" />
  <link rel="stylesheet" href="css/style_7.css" />
  <link rel="stylesheet" href="css/yellow.css" />
  <link rel="stylesheet" href="css/header10.css" />
  <link rel="stylesheet" href="css/footer2.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/custom.css" />

  <script async="" src="js/gtm.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/libs.js"></script>
  <script src="js/so.system.js"></script>
  <script src="js/lazysizes.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/so.custom.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/common.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/shortcodes.js"></script>
  <script src="js/section.js"></script>
  <script src="js/modernizr.video.js"></script>
  <script src="js/swfobject.js"></script>
  <script src="js/video_background.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/chosen.jquery.js"></script>
  <script src="js/so_megamenu.js"></script>
  <script src="js/jquery.imagesloaded.js"></script>
  <script src="js/jquery.so_accordion.js"></script>
  <script src="js/script.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/moment-with-locales.min.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
  <script src="js/script_1.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700" rel="stylesheet"
    type="text/css" />

  <style type="text/css">
    body,
    #wrapper {
      font-family: "Roboto", sans-serif;
    }
  </style>

  <!-- Linked Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&amp;family=Ubuntu+Condensed&amp;family=Ubuntu:wght@300;400;500;700&amp;display=swap"
    rel="stylesheet" />

  <!-- Spiritnoise Css -->
  <link rel="stylesheet" type="text/css" href="css/sn-style.css" />

  <!-- Spiritnoise Js -->
  <script type="text/javascript" src="js/jarallax.js"></script>
  <script type="text/javascript" src="js/sn-scripts.js"></script>

  <!-- Aos Animation Css -->
  <link rel="stylesheet" href="css/aos.css" />

  <!-- FancyBox Cdn -->

  <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
  <script type="text/javascript" src="js/jquery.fancybox.min.js"></script>

  <!-- Google Tag Manager -->

  <!-- End Google Tag Manager -->


</head>

<body class="extension-so_theme-simple_blog-article ltr layout-2 full_other_pages" data-lang="en-gb">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5TPBW7" height="0" width="0"
      style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div id="wrapper" class="wrapper-fluid banners-effect-7">
    <div class="so-pre-loader no-pre-loader">
      <div class="so-loader-line" id="line-load"></div>
    </div>

    <header id="header">
      <div class="top-header">
        <div class="container">
          <div class="left-panel">
            <div class="contact-info">
              <a href="tel:18001216808"><img src="images/phone_icon.png" alt="Phone Icon" /> 1800 121
                9999</a>
              <a href="mailto:service@#.com"><img src="images/email_icon.png" alt="Email Icon" />
                service@akp.com</a>
            </div>
          </div>
          <div class="right-panel">
            <div class="actions">
              <a href="become-dealer"><img src="images/trade_enquiry_icon.png" alt="Trade Enquiry Icon" />Enquiry</a>


              <!-- <div class="dropdown">
                  <button class="dropbtn">
                    India <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="#">India</a>
                    <a href="https://nepal.esscobathware.com/">Nepal</a>
                    <a href="https://global.esscobathware.com/"
                      >Rest of World</a
                    >
                  </div>
                </div>
                -->



              <div class="shopping_cart">
                <div id="cart" class="btn-shopping-cart">
                  <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle"
                    data-bs-toggle="dropdown">
                    <div class="shopcart">
                      <span class="icon-c">
                        <span class="cart-bag-icon"></span>
                      </span>

                    </div>
                  </a>

                  <ul class="dropdown-menu pull-right shoppingcart-box">
                    <li>
                      <p class="text-center empty">
                        Trail is empty!
                      </p>
                    </li>
                  </ul>
                </div>





              </div>
            </div>
          </div>
          <div style="clear: both"></div>
        </div>
      </div>

      <div class="bottom-header">
        <div class="header-container">
          <div class="logo">
            <a href="#"><img src="images/essco_by_#_logo.svg" alt="Essco Logo" /></a>
          </div>
          <div class="menu">
            <div class="responsive megamenu-style-dev">
              <nav class="navbar-default">
                <div class="container-megamenu horizontal">
                  <div class="navbar-header">
                    <button type="button" id="show-megamenu" data-bs-toggle="collapse" class="navbar-toggle">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>

                  <div class="megamenu-wrapper">
                    <span id="remove-megamenu" class="fa fa-times"></span>

                    <div class="megamenu-pattern">
                      <div class="container">
                        <ul class="megamenu" data-transition="slide" data-animationtime="500">
                          <li class="item-style1 with-sub-menu hover">
                            <p class="close-menu"></p>
                            <a href="#products" class="clearfix">
                              <strong> Products </strong>

                              <b class="caret"></b>
                            </a>

                            <div class="sub-menu" style="width: 100%">
                              <div class="content">
                                <div class="row">
                                  <div class="col-sm-4">
                                    <ul class="subcategory subcate-col">
                                      <li>
                                        <a href="#faucets" class="title-submenu subcate-col">Faucets</a>
                                        <div class="row">
                                          <div class="col-sm-12 hover-menu">
                                            <div class="menu">
                                              <ul>
                                                <li>
                                                  <a href="#orbit" onclick="window.location = '#orbit';"
                                                    class="main-menu">Orbit</a>
                                                </li>
                                                <li>
                                                  <a href="#stella" onclick="window.location = '#stella';"
                                                    class="main-menu">Stella</a>
                                                </li>
                                                <li>
                                                  <a href="#aspire-faucets"
                                                    onclick="window.location = '#aspire-faucets';"
                                                    class="main-menu">Aspire</a>
                                                </li>
                                                <li>
                                                  <a href="#cosmo-faucets" onclick="window.location = '#cosmo-faucets';"
                                                    class="main-menu">Cosmo</a>
                                                </li>
                                                <li>
                                                  <a href="#marvel-faucets"
                                                    onclick="window.location = '#marvel-faucets';"
                                                    class="main-menu">Marvel</a>
                                                </li>
                                                <li>
                                                  <a href="#sumthing-special-faucets"
                                                    onclick="window.location = '#sumthing-special-faucets';"
                                                    class="main-menu">Sumthing Special</a>
                                                </li>
                                                <li>
                                                  <a href="#delux-faucets" onclick="window.location = '#delux-faucets';"
                                                    class="main-menu">Delux</a>
                                                </li>
                                                <li>
                                                  <a href="#tropical-faucets"
                                                    onclick="window.location = '#tropical-faucets';"
                                                    class="main-menu">Tropical</a>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="col-sm-4">
                                    <ul class="subcategory subcate-col">
                                      <li>
                                        <a href="#sanitaryware" class="title-submenu subcate-col">Sanitaryware</a>
                                        <div class="row">
                                          <div class="col-sm-12 hover-menu">
                                            <div class="menu">
                                              <ul>
                                                <li>
                                                  <a href="#orbit-sanitaryware"
                                                    onclick="window.location = '#orbit-sanitaryware';"
                                                    class="main-menu">Orbit</a>
                                                </li>
                                                <li>
                                                  <a href="#aspire-sanitaryware"
                                                    onclick="window.location = '#aspire-sanitaryware';"
                                                    class="main-menu">Aspire</a>
                                                </li>
                                                <li>
                                                  <a href="#cosmo-sanitaryware"
                                                    onclick="window.location = '#cosmo-sanitaryware';"
                                                    class="main-menu">Cosmo</a>
                                                </li>
                                                <li>
                                                  <a href="#essco-sanitaryware"
                                                    onclick="window.location = '#essco-sanitaryware';"
                                                    class="main-menu">Elements</a>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="col-sm-4">
                                    <ul class="subcategory subcate-col">
                                      <li>
                                        <a href="#showers" class="title-submenu subcate-col">Showers</a>
                                        <div class="row"></div>
                                      </li>
                                      <li>
                                        <a href="#cisterns" class="title-submenu subcate-col">Cisterns</a>
                                        <div class="row"></div>
                                      </li>
                                      <li>
                                        <a href="#allied-bathfittings-mechanisms"
                                          class="title-submenu subcate-col">Allied Items</a>
                                        <div class="row"></div>
                                      </li>
                                      <li>
                                        <a href="#accessories" class="title-submenu subcate-col">Accessories</a>
                                        <div class="row"></div>
                                      </li>
                                      <li>
                                        <a href="#water-heaters" class="title-submenu subcate-col">Water Heaters</a>
                                        <div class="row"></div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>

                          <li class="item-style2 hide-catalogue">
                            <p class="close-menu"></p>
                            <a href="catalogue" class="clearfix">
                              <strong> Catalogue </strong>
                            </a>
                          </li>

                          <li class="blog-item">
                            <p class="close-menu"></p>
                            <a href="about-essco" class="clearfix">
                              <strong> About Us </strong>
                            </a>
                          </li>

                          <li class="">
                            <p class="close-menu"></p>
                            <a href="blog" class="clearfix">
                              <strong> Blog </strong>
                            </a>
                          </li>

                          <li class="with-sub-menu hover">
                            <p class="close-menu"></p>
                            <a href="contact-us" class="clearfix">
                              <strong> Contact Us </strong>

                              <b class="caret"></b>
                            </a>

                            <div class="sub-menu" style="width: 250px">
                              <div class="content">
                                <div class="row">
                                  <div class="col-sm-12">
                                    <div class="html">
                                      <div class="locate-us">
                                        <ul>
                                          <li>
                                            <a href="find-dealership">Authorized Dealers</a>
                                          </li>
                                          <!--<li><a href="orientation-center">Orientation Centres</a></li>-->
                                          <li>
                                            <a href="offices">Offices</a>
                                          </li>
                                          <li>
                                            <a href="area-representative">Area Representatives</a>
                                          </li>
                                          <li>
                                            <a href="become-dealer">Trade Enquiry</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>

            <script>
              $(document).ready(function () {
                $('a[href="#"]').each(
                  function () {
                    $(this).parents(".with-sub-menu").addClass("sub-active");
                  }
                );
              });
            </script>
          </div>
          <div class="search-box">
            <div id="sosearchpro" class="sosearchpro-wrapper so-search">
              <form method="GET" action="index.php">
                <div id="search0" class="search input-group form-group">
                  <div class="select_category filter_type icon-select hidden-sm hidden-xs">
                    <select class="no-border chosen-select" name="category_id">
                      <option value="0">All Category</option>

                      <option value="59 ">Products</option>

                      <option value="18">�&nbsp;�&nbsp;�&nbsp;Faucets</option>

                      <option value="60 ">
                        �&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;Orbit
                      </option>

                      <option value="62 ">
                        �&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;Stella
                      </option>

                      <option value="29 ">
                        �&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;Aspire
                      </option>

                      <option value="46 ">
                        �&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;Cosmo
                      </option>

                      <option value="28 ">
                        �&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;Marvel
                      </option>

                      <option value="30 ">
                        �&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;Sumthing
                        Special
                      </option>

                      <option value="45 ">
                        �&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;Delux
                      </option>

                      <option value="31 ">
                        �&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;Tropical
                      </option>

                      <option value="17">�&nbsp;�&nbsp;�&nbsp;Showers</option>

                      <option value="34">
                        �&nbsp;�&nbsp;�&nbsp;Sanitaryware
                      </option>

                      <option value="61 ">
                        �&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;Orbit
                      </option>

                      <option value="32 ">
                        �&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;Aspire
                      </option>

                      <option value="43 ">
                        �&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;Cosmo
                      </option>

                      <option value="44 ">
                        �&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;Elements
                      </option>

                      <option value="20">
                        �&nbsp;�&nbsp;�&nbsp;Cisterns
                      </option>

                      <option value="25">
                        �&nbsp;�&nbsp;�&nbsp;Allied Items
                      </option>

                      <option value="33">
                        �&nbsp;�&nbsp;�&nbsp;Accessories
                      </option>

                      <option value="57">
                        �&nbsp;�&nbsp;�&nbsp;Water Heaters
                      </option>
                    </select>
                  </div>

                  <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off"
                    placeholder="Search" name="search" />
                  <span class="input-group-btn">
                    <button type="submit" class="button-search btn btn-default btn-lg" name="submit_search">
                      <img src="images/search_icon.png" alt="search" /><span class="hidden">Search</span>
                    </button>
                  </span>
                </div>

                <input type="hidden" name="route" value="product/search" />
              </form>
            </div>
            <script type="text/javascript">
              jQuery(document).ready(function ($) {
                $(".chosen-select").chosen({
                  width: "100%",
                });
              });
            </script>
            <script type="text/javascript">
              // Autocomplete */
              (function ($) {
                $.fn.Soautocomplete = function (option) {
                  return this.each(function () {
                    this.timer = null;
                    this.items = new Array();

                    $.extend(this, option);

                    $(this).attr("autocomplete", "off");

                    // Focus
                    $(this).on("focus", function () {
                      this.request();
                    });

                    // Blur
                    $(this).on("blur", function () {
                      setTimeout(
                        function (object) {
                          object.hide();
                        },
                        200,
                        this
                      );
                    });

                    // Keydown
                    $(this).on("keydown", function (event) {
                      switch (event.keyCode) {
                        case 27: // escape
                          this.hide();
                          break;
                        default:
                          this.request();
                          break;
                      }
                    });

                    // Click
                    this.click = function (event) {
                      event.preventDefault();

                      value = $(event.target).parent().attr("data-value");

                      if (value && this.items[value]) {
                        this.select(this.items[value]);
                      }
                    };

                    // Show
                    this.show = function () {
                      var pos = $(this).position();

                      $(this)
                        .siblings("ul.dropdown-menu")
                        .css({
                          top: pos.top + $(this).outerHeight(),
                          left: pos.left,
                        });

                      $(this).siblings("ul.dropdown-menu").show();
                    };

                    // Hide
                    this.hide = function () {
                      $(this).siblings("ul.dropdown-menu").hide();
                    };

                    // Request
                    this.request = function () {
                      clearTimeout(this.timer);

                      this.timer = setTimeout(
                        function (object) {
                          object.source(
                            $(object).val(),
                            $.proxy(object.response, object)
                          );
                        },
                        200,
                        this
                      );
                    };

                    // Response
                    this.response = function (json) {
                      html = "";

                      if (json.length) {
                        for (i = 0; i < json.length; i++) {
                          this.items[json[i]["value"]] = json[i];
                        }

                        for (i = 0; i < json.length; i++) {
                          if (!json[i]["category"]) {
                            html +=
                              '<li class="media" data-value="' +
                              json[i]["value"] +
                              '" title="' +
                              json[i]["label"] +
                              '">';
                            if (
                              json[i]["image"] &&
                              json[i]["show_image"] &&
                              json[i]["show_image"] == 1
                            ) {
                              html +=
                                '	<a class="media-left" href="' +
                                json[i]["link"] +
                                '"><img class="pull-left" src="' +
                                json[i]["image"] +
                                '"></a>';
                            }

                            html += '<div class="media-body">';
                            html +=
                              '<a href="' +
                              json[i]["link"] +
                              '" title="' +
                              json[i]["label"] +
                              '"><span>' +
                              json[i]["cate_name"] +
                              json[i]["label"] +
                              "</span></a>";
                            if (
                              json[i]["price"] &&
                              json[i]["show_price"] &&
                              json[i]["show_price"] == 1
                            ) {
                              html += '	<div class="box-price">';
                              if (!json[i]["special"]) {
                                html +=
                                  '<span class="price">Price : ' +
                                  json[i]["price"] +
                                  "</span>";
                              } else {
                                html +=
                                  '</span><span class="price-new">' +
                                  json[i]["special"] +
                                  "</span>" +
                                  '<span class="price-old" style="text-decoration:line-through;">' +
                                  json[i]["price"];
                              }

                              html += "	</div>";
                            }
                            html += "</div></li>";
                            html += '<li class="clearfix"></li>';
                          }
                        }

                        // Get all the ones with a categories
                        var category = new Array();

                        for (i = 0; i < json.length; i++) {
                          if (json[i]["category"]) {
                            if (!category[json[i]["category"]]) {
                              category[json[i]["category"]] = new Array();
                              category[json[i]["category"]]["name"] =
                                json[i]["category"];
                              category[json[i]["category"]]["item"] =
                                new Array();
                            }

                            category[json[i]["category"]]["item"].push(
                              json[i]
                            );
                          }
                        }

                        for (i in category) {
                          html +=
                            '<li class="dropdown-header">' +
                            category[i]["name"] +
                            "</li>";

                          for (j = 0; j < category[i]["item"].length; j++) {
                            html +=
                              '<li data-value="' +
                              category[i]["item"][j]["value"] +
                              '"><a href="#">   ' +
                              category[i]["item"][j]["label"] +
                              "</a></li>";
                          }
                        }
                      }

                      if (html) {
                        this.show();
                      } else {
                        this.hide();
                      }

                      $(this).siblings("ul.dropdown-menu").html(html);
                    };

                    $(this).after('<ul class="dropdown-menu"></ul>');
                  });
                };
              })(window.jQuery);

              $(document).ready(function () {
                var selector = "#search0";
                var total = 0;
                var showimage = 1;
                var showprice = 1;
                var character = 3;
                var height = 70;
                var width = 70;

                $(selector)
                  .find("input[name='search']")
                  .Soautocomplete({
                    delay: 500,
                    source: function (request, response) {
                      var category_id = $(
                        '.select_category select[name="category_id"]'
                      )
                        .first()
                        .val();
                      if (typeof category_id == "undefined") category_id = 0;
                      var limit = 5;
                      if (request.length >= character) {
                        $.ajax({
                          url:
                            "index.php?route=extension/so_theme/module/so_searchpro|autocomplete&filter_category_id=" +
                            category_id +
                            "&limit=" +
                            limit +
                            "&width=" +
                            width +
                            "&height=" +
                            height +
                            "&filter_name=" +
                            encodeURIComponent(request),
                          dataType: "json",
                          success: function (json) {
                            response(
                              $.map(json, function (item) {
                                total = 0;
                                if (item.total) {
                                  total = item.total;
                                }

                                return {
                                  price: item.price,
                                  special: item.special,
                                  tax: item.tax,
                                  label: item.name,
                                  cate_name: item.category_name
                                    ? item.category_name + " > "
                                    : "",
                                  image: item.image,
                                  link: item.link,
                                  minimum: item.minimum,
                                  show_price: showprice,
                                  show_image: showimage,
                                  value: item.product_id,
                                };
                              })
                            );
                          },
                        });
                      }
                    },
                  });
              });
            </script>
          </div>
        </div>
      </div>
    </header>

    <style>
      /*Custom CSS for Email*/
      .category-banner .cat_banner_des>p.MsoNormal {
        font-weight: 300;
      }

      .article--style5 .article--mainimage .article--maintitle {
        position: static;
        transform: none;
        width: 100%;
      }

      .article--mainimage>.container {
        width: 820px !important;
        max-width: 100% !important;
      }

      .article--mainimage .article-image {
        text-align: left;
        margin-bottom: 20px;
      }

      .article--mainimage .article--maintitle .article-title h3 {
        color: #ffffff;
      }

      .article--mainimage .article--maintitle .article-sub-title .article-author>a {
        color: #ffffff;
      }

      .quick-action-container {
        max-width: 100%;
        width: 1100px;
        padding: 0 10px;
      }

      .quick-action-container>a {
        display: block;
        width: 31.33%;
        padding: 0 0px;
        margin: 10px 1%;
      }

      .quick-action-container>.enquirytt {
        width: 31.33%;
        margin: 10px 1%;
      }

      .quick-action-box {
        position: relative;
        height: 150px;
        width: 100%;
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
        flex-direction: inherit;
        justify-content: flex-start;
        margin: 0;
      }

      .quick-action-box>img {
        margin-right: 20px;
      }

      .quick-action-box .button-arrow {
        margin-left: auto;
      }

      .quick-action-box>h3 {
        margin: 0;
      }

      .content-product-left .large-image {
        position: relative;
      }

      .content-product-left .large-image:before {
        content: "";
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
      }

      @media only screen and (max-width: 1280px) {
        .article--mainimage .article--maintitle {
          width: 100%;
        }

        .quick-action-box>h3 {
          font-size: 25px;
          line-height: 30px;
        }
      }

      @media only screen and (max-width: 991px) {
        .category-banner .cat_banner_caption .cat_banner_des {
          display: block;
        }

        .quick-action-box {
          height: 100px;
        }

        .quick-action-box h3 {
          font-size: 20px;
          line-height: 24px;
        }

        .quick-action-box .button-arrow img {
          width: 45px;
        }

        .article--style5 .article--maintitle .article-sub-title {
          padding: 6px 6px !important;
        }
      }

      @media only screen and (max-width: 767px) {
        .category-banner .bannerCss {
          height: 300px;
          object-fit: cover;
        }

        .article--mainimage .article--maintitle .article-title h3 {
          line-height: 1.5;
        }

        .article--mainimage .article--maintitle .article-sub-title {
          padding: 10px !important;
          width: 100%;
        }

        .article--mainimage>.container {
          padding: 0 15px;
        }

        .article--mainimage .article--maintitle .article-title {
          margin-bottom: 10px;
          padding-bottom: 10px;
        }

        .quick-action-container {
          flex-wrap: wrap;
          justify-content: center;
        }

        .quick-action-container>a {
          width: 255px;
        }

        .quick-action-container>.enquirytt {
          width: 255px;
          margin: 10px 1%;
        }
      }

      @media only screen and (max-width: 420px) {
        .top-header .right-panel {
          width: 100%;
        }

        .top-header .right-panel .actions {
          justify-content: center;
        }

        .top-header .dropdown {
          padding-right: 10px;
        }

        .top-header .dropbtn {
          margin-right: 0px;
          padding-right: 5px;
          font-size: 10px;
        }

        .top-header .right-panel .actions a {
          margin-right: 0;
        }
      }
    </style>

    <div id="socialLogin"></div>
    <div id="alert" style="position: fixed; right: 0; z-index: 1000; top: 20px"></div>
    <div class="container">
      <ul class="breadcrumb">
        <li>
          <a href="#index.php?route=common/home">Home</a>
        </li>
        <li><a href="#">Posts</a></li>
      </ul>
    </div>
    <div class="container product-listing">
      <div class="row">
        <div id="content" class="col-sm-12">
          <div class="blog-category clearfix">
            <div class="blog-header">
              <h1 class="title">Blog</h1>
            </div>

            <div class="product-filter product-filter-top filters-panel hidden-sm hidden-xs">
              <div class="row">
                <div class="col-sm-4 view-mode">
                  <div class="list-view">
                    <button type="button" id="grid-view" class="btn btn-view hidden-sm hidden-xs">
                      1
                    </button>
                    <button type="button" id="grid-view-2" class="btn btn-view">
                      2
                    </button>
                    <button type="button" id="grid-view-3" class="btn btn-view hidden-sm hidden-xs">
                      3
                    </button>
                    <button type="button" id="grid-view-4" class="btn btn-view hidden-sm hidden-xs">
                      4
                    </button>
                    <button type="button" id="list-view" class="btn btn-view list">
                      <i class="fa fa-bars"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="blog-listitem row">
              <?php
              for ($i = 0; $i < count($blogList); $i++) { ?>
                <div class="blog-item">
                  <div class="blog-item-inner clearfix">
                    <div class="itemBlogImg clearfix">
                      <div class="article-image">
                        <div>
                          <a class=""  href="./single-blog?title=<?php echo $blogList[$i][1]; ?>"><img
                          
                             src= "<?php echo  $blogList[$i][2];?>"
                              alt="<?php echo $blogList[$i][1]; ?>" /></a>
                        </div>
                        <div class="article-date">
                          <div class="date"  style="text-align:center;">
                            <span class="article-date">
                          <?php 
                              $date = new DateTime($blogList[$i][5]);
                            echo $date->format( 'M d, Y' );
                          ?>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="itemBlogContent clearfix">
                      <div class="blog-content">
                        <div class="article-title font-title">
                          <h4>
                            <a href="#importance-of-bottle-traps-in-bathroom-and-kitchen-plumbing">
                              <?php echo $blogList[$i][1]; ?>
                            </a>
                          </h4>
                        </div>

                        <div class="blog-meta">
                          <span class="author"><i class="fa fa-user"></i><span>Post by </span>AK pipes and Sanitary House</span>
                        </div>

                        <p class="article-description">
                          <?php echo $blogList[$i][6]; ?>
                        </p>

                        <div class="readmore">
                          <a class="btn-readmore font-title"
                            href="./single-blog?title=<?php echo $blogList[$i][1]; ?>"><i
                              class="fa fa-caret-right"></i>Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php } ?>

            </div>


            <div class="product-filter product-filter-bottom filters-panel clearfix">
              <div class="row">
                <div class="col-md-12">
                  <div>
                    <ul class="pagination">
                      <li class="page-item active">
                        <a href="?page=1" class="page-link">1</a>
                      </li>
                      <li class="page-item">
                        <a href="?page=2" class="page-link">2</a>
                      </li>
                      <li class="page-item">
                        <a href="?page=3" class="page-link">3</a>
                      </li>
                      <li class="page-item">
                        <a href="?page=4" class="page-link">4</a>
                      </li>
                      <li class="page-item">
                        <a href="?page=5" class="page-link">5</a>
                      </li>
                      <li class="page-item">
                        <a href="?page=6" class="page-link">6</a>
                      </li>
                      <li class="page-item">
                        <a href="?page=7" class="page-link">7</a>
                      </li>
                      <li class="page-item">
                        <a href="?page=8" class="page-link">8</a>
                      </li>
                      <li class="page-item">
                        <a href="?page=9" class="page-link">9</a>
                      </li>
                      <li class="page-item">
                        <a href="?page=2" class="page-link">&gt;</a>
                      </li>
                      <li class="page-item">
                        <a href="?page=9" class="page-link">&gt;|</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="section-above-footer">
      <div class="quick-action-container">
        <a href="find-dealership">
          <div class="quick-action-box">
            <img src="images/dealer_locator_icon.png" alt="Dealer Locator Icon" />
            <h3>Dealer<br />Locator</h3>

            <span class="button-arrow"><img src="images/button-arrow.png" alt="button " /></span>
          </div>
        </a>
        <a href="catalogue">
          <div class="quick-action-box center-box">
            <img src="images/download_catalogue_icon.png" alt="Download Catalogue Icon" />
            <h3>Download<br />Catalogue</h3>

            <span class="button-arrow"><img class="w" src="images/button-arrow.png" alt="button" />
            </span>
          </div>
        </a>
        <div class="quick-action-box enquirytt">
          <img src="images/request_callback_icon.png" alt="Request Callback Icon" />
          <h3>Request <br />A Callback</h3>

          <span class="button-arrow"><img src="images/button-arrow.png" alt="button " /></span>
        </div>
      </div>
    </section>

    <footer id="footer" class="footer-container typefooter-2">
      <div class="footer-main">
        <link rel="stylesheet" href="css/style_render_45.css" />
        <div class="so-page-builder">
          <div class="container-fluid page-builder-ltr">
            <div class="row row_cd6l footer-top">
              <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12 col-12 col_qfoi col-style">
                <div class="column">
                  <div class="logo">
                    <img src="images/essco_by_#_logo.svg" alt="Essco Logo" />
                  </div>
                  <!-- Place your site logo image here -->
                  <h4>Connect With Essco</h4>
                  <div class="social-icons">
                    <a href="https://www.facebook.com/esscofittings" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.youtube.com/channel/UCxwhXoqR5XAx-2NRL9Vt12Q" target="_blank"><i
                        class="fa fa-youtube"></i></a>
                    <a href="https://www.instagram.com/esscobathware/?igshid=MzRlODBiNWFlZA%3D%3D" target="_blank"><i
                        class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12 col-12 col_x5c4 col-style">
                <div class="column">
                  <h4>INFORMATION</h4>
                  <ul>
                    <li><a href="about-essco">About Essco</a></li>
                    <!--<li><a href="retail-branding">Retail Branding</a></li>-->
                    <li class="hide-catalogue">
                      <a href="catalogue">Catalogue</a>
                    </li>
                    <li><a href="find-dealership">Dealers</a></li>
                    <li><a href="videos">Videos</a></li>
                    <!-- <li><a href="orientation-center">Orientation Center</a></li> -->
                  </ul>
                </div>
              </div>
              <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12 col-12 col_mhzw col-style">
                <div class="column">
                  <h4>PRODUCTS</h4>
                  <ul>
                    <li><a href="faucets">Faucets</a></li>
                    <li><a href="showers">Showers</a></li>
                    <li><a href="sanitaryware">Sanitaryware</a></li>
                    <li><a href="cisterns">Cisterns</a></li>
                    <li>
                      <a href="allied-bathfittings-mechanisms">Allied Items</a>
                    </li>
                    <li><a href="Bathroom-accessories">Accessories</a></li>
                    <li><a href="water-heaters">Water Heaters</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12 col-12 col_e9al col-style">
                <div class="column">
                  <h4>QUICK LINKS</h4>
                  <ul>
                    <li><a href="become-dealer">Trade Enquiry</a></li>
                    <li class="purchase_assistance">
                      <a href="tel:1800120332222">Purchase Assistance</a>
                    </li>
                    <li><a href="blog">Blogs</a></li>
                    <li><a href="contact-us">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12 col-12 col_d27y col-style">
                <div class="column">
                  <h4>Support</h4>
                  <div class="support-info">
                    <a href="tel:18001216808">1800 121 6808</a>
                    <a href="mail:service@#.com">service@#.com</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <section id="" class="container">
            <div class="container-fluid page-builder-ltr">
              <div class="row row_voim footer-top">
                <div class="col-xl-12 col-lg-4 col-md-6 col-sm-6 col-xs-12 col-12 col_aoim col-style">
                  <div class="footer-menu">
                    <div class="container">
                      <ul>
                        <li>
                          <a href="privacy-policy" class="footer-link">Privacy Policy</a>
                        </li>
                        <!--<li><a href="essco-logo-usage" class="footer-link">LOGO</a></li>-->
                        <li><a href="gdpr" class="footer-link">GDPR</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

      <div class="site-info-band">
        <div class="container">© 2024 Copyright - # Group</div>
      </div>

      <!-- <div class="footer-bottom ">
    <div class="container">		
    <div class="row">
      <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 col-12 copyright-w">	
        <div class="copyright">
                      © 2024 Copyright - # Group
                  </div>	
      </div>
          </div>
    </div>

    
  </div> -->
    </footer>
    <svg xmlns="http://www.w3.org/2000/svg" class="custom-svg hidden">
      <defs>
        <path id="stumbleupon-path-1" d="M0,0.0749333333 L31.9250667,0.0749333333 L31.9250667,31.984 L0,31.984"></path>
      </defs>
      <symbol viewBox="0 0 24 24" id="icon-add">
        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
      </symbol>
      <symbol viewBox="0 0 36 36" id="icon-arrow-down">
        <path d="M16.5 6v18.26l-8.38-8.38-2.12 2.12 12 12 12-12-2.12-2.12-8.38 8.38v-18.26h-3z"></path>
      </symbol>
      <symbol viewBox="0 0 12 8" id="icon-chevron-down">
        <path
          d="M6 6.174l5.313-4.96.23-.214.457.427-.23.214-5.51 5.146L6.03 7 6 6.972 5.97 7l-.23-.214L.23 1.64 0 1.428.458 1l.23.214L6 6.174z"
          stroke-linecap="square" fill-rule="evenodd"></path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-chevron-left">
        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-chevron-right">
        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-close">
        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
        </path>
      </symbol>
      <symbol viewBox="0 0 28 28" id="icon-envelope">
        <path
          d="M0 23.5v-12.406q0.688 0.766 1.578 1.359 5.656 3.844 7.766 5.391 0.891 0.656 1.445 1.023t1.477 0.75 1.719 0.383h0.031q0.797 0 1.719-0.383t1.477-0.75 1.445-1.023q2.656-1.922 7.781-5.391 0.891-0.609 1.563-1.359v12.406q0 1.031-0.734 1.766t-1.766 0.734h-23q-1.031 0-1.766-0.734t-0.734-1.766zM0 6.844q0-1.219 0.648-2.031t1.852-0.812h23q1.016 0 1.758 0.734t0.742 1.766q0 1.234-0.766 2.359t-1.906 1.922q-5.875 4.078-7.313 5.078-0.156 0.109-0.664 0.477t-0.844 0.594-0.812 0.508-0.898 0.422-0.781 0.141h-0.031q-0.359 0-0.781-0.141t-0.898-0.422-0.812-0.508-0.844-0.594-0.664-0.477q-1.422-1-4.094-2.852t-3.203-2.227q-0.969-0.656-1.828-1.805t-0.859-2.133z">
        </path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-facebook">
        <path
          d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
        </path>
      </symbol>
      <symbol viewBox="0 0 20 28" id="icon-google">
        <path
          d="M1.734 21.156q0-1.266 0.695-2.344t1.852-1.797q2.047-1.281 6.312-1.563-0.5-0.641-0.742-1.148t-0.242-1.148q0-0.625 0.328-1.328-0.719 0.063-1.062 0.063-2.312 0-3.898-1.508t-1.586-3.82q0-1.281 0.562-2.484t1.547-2.047q1.188-1.031 2.844-1.531t3.406-0.5h6.516l-2.141 1.375h-2.063q1.172 0.984 1.766 2.078t0.594 2.5q0 1.125-0.383 2.023t-0.93 1.453-1.086 1.016-0.922 0.961-0.383 1.031q0 0.562 0.5 1.102t1.203 1.062 1.414 1.148 1.211 1.625 0.5 2.219q0 1.422-0.766 2.703-1.109 1.906-3.273 2.805t-4.664 0.898q-2.063 0-3.852-0.648t-2.695-2.148q-0.562-0.922-0.562-2.047zM4.641 20.438q0 0.875 0.367 1.594t0.953 1.18 1.359 0.781 1.563 0.453 1.586 0.133q0.906 0 1.742-0.203t1.547-0.609 1.141-1.141 0.43-1.703q0-0.391-0.109-0.766t-0.227-0.656-0.422-0.648-0.461-0.547-0.602-0.539-0.57-0.453-0.648-0.469-0.57-0.406q-0.25-0.031-0.766-0.031-0.828 0-1.633 0.109t-1.672 0.391-1.516 0.719-1.070 1.164-0.422 1.648zM6.297 4.906q0 0.719 0.156 1.523t0.492 1.609 0.812 1.445 1.172 1.047 1.508 0.406q0.578 0 1.211-0.258t1.023-0.68q0.828-0.875 0.828-2.484 0-0.922-0.266-1.961t-0.75-2.016-1.313-1.617-1.828-0.641q-0.656 0-1.289 0.305t-1.039 0.82q-0.719 0.922-0.719 2.5z">
        </path>
      </symbol>
      <symbol viewBox="0 0 32 32" id="icon-instagram">
        <path
          d="M25.522709,13.5369502 C25.7256898,14.3248434 25.8455558,15.1480745 25.8455558,15.9992932 C25.8455558,21.4379334 21.4376507,25.8455558 15.9998586,25.8455558 C10.5623493,25.8455558 6.15416148,21.4379334 6.15416148,15.9992932 C6.15416148,15.1480745 6.27459295,14.3248434 6.4775737,13.5369502 L3.6915357,13.5369502 L3.6915357,27.0764447 C3.6915357,27.7552145 4.24280653,28.3062027 4.92355534,28.3062027 L27.0764447,28.3062027 C27.7571935,28.3062027 28.3084643,27.7552145 28.3084643,27.0764447 L28.3084643,13.5369502 L25.522709,13.5369502 Z M27.0764447,3.6915357 L23.384909,3.6915357 C22.7050083,3.6915357 22.1543028,4.24280653 22.1543028,4.92214183 L22.1543028,8.61509104 C22.1543028,9.29442633 22.7050083,9.84569717 23.384909,9.84569717 L27.0764447,9.84569717 C27.7571935,9.84569717 28.3084643,9.29442633 28.3084643,8.61509104 L28.3084643,4.92214183 C28.3084643,4.24280653 27.7571935,3.6915357 27.0764447,3.6915357 Z M9.84597988,15.9992932 C9.84597988,19.3976659 12.6009206,22.1537374 15.9998586,22.1537374 C19.3987967,22.1537374 22.1543028,19.3976659 22.1543028,15.9992932 C22.1543028,12.6003551 19.3987967,9.84569717 15.9998586,9.84569717 C12.6009206,9.84569717 9.84597988,12.6003551 9.84597988,15.9992932 Z M3.6915357,31.9997173 C1.65296441,31.9997173 0,30.3461875 0,28.3062027 L0,3.6915357 C0,1.6526817 1.65296441,0 3.6915357,0 L28.3084643,0 C30.3473183,0 32,1.6526817 32,3.6915357 L32,28.3062027 C32,30.3461875 30.3473183,31.9997173 28.3084643,31.9997173 L3.6915357,31.9997173 Z"
          id="instagram-Imported-Layers"></path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-keyboard-arrow-down">
        <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-keyboard-arrow-up">
        <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path>
      </symbol>
      <symbol viewBox="0 0 32 32" id="icon-linkedin">
        <path
          d="M27.2684444,27.2675556 L22.5226667,27.2675556 L22.5226667,19.8408889 C22.5226667,18.0702222 22.4924444,15.792 20.0568889,15.792 C17.5866667,15.792 17.2097778,17.7217778 17.2097778,19.7146667 L17.2097778,27.2675556 L12.4693333,27.2675556 L12.4693333,11.9964444 L17.0186667,11.9964444 L17.0186667,14.0844444 L17.0844444,14.0844444 C17.7173333,12.8835556 19.2657778,11.6177778 21.5742222,11.6177778 C26.3804444,11.6177778 27.2684444,14.7795556 27.2684444,18.8924444 L27.2684444,27.2675556 L27.2684444,27.2675556 Z M7.11822222,9.91022222 C5.59377778,9.91022222 4.36444444,8.67733333 4.36444444,7.15733333 C4.36444444,5.63822222 5.59377778,4.40533333 7.11822222,4.40533333 C8.63644444,4.40533333 9.86844444,5.63822222 9.86844444,7.15733333 C9.86844444,8.67733333 8.63644444,9.91022222 7.11822222,9.91022222 L7.11822222,9.91022222 Z M4.74133333,11.9964444 L9.49244444,11.9964444 L9.49244444,27.2675556 L4.74133333,27.2675556 L4.74133333,11.9964444 Z M29.632,0 L2.36,0 C1.05777778,0 0,1.03288889 0,2.30755556 L0,29.6906667 C0,30.9653333 1.05777778,32 2.36,32 L29.632,32 C30.9368889,32 31.9991111,30.9653333 31.9991111,29.6906667 L31.9991111,2.30755556 C31.9991111,1.03288889 30.9368889,0 29.632,0 L29.632,0 Z"
          id="linkedin-Fill-4"></path>
      </symbol>
      <symbol viewBox="0 0 70 32" id="icon-logo-american-express">
        <path
          d="M69.102 17.219l0.399 9.094c-0.688 0.313-3.285 1.688-4.26 1.688h-4.788v-0.656c-0.546 0.438-1.549 0.656-2.467 0.656h-15.053v-2.466c0-0.344-0.057-0.344-0.345-0.344h-0.257v2.81h-4.961v-2.924c-0.832 0.402-1.749 0.402-2.581 0.402h-0.544v2.523h-6.050l-1.434-1.656-1.577 1.656h-9.72v-10.781h9.892l1.405 1.663 1.548-1.663h6.652c0.775 0 2.037 0.115 2.581 0.66v-0.66h5.936c0.602 0 1.749 0.115 2.523 0.66v-0.66h8.946v0.66c0.516-0.43 1.433-0.66 2.265-0.66h4.988v0.66c0.546-0.372 1.32-0.66 2.323-0.66h4.578zM34.905 23.871c1.577 0 3.183-0.43 3.183-2.581 0-2.093-1.635-2.523-3.069-2.523h-5.878l-2.38 2.523-2.236-2.523h-7.427v7.67h7.312l2.351-2.509 2.266 2.509h3.556v-2.566h2.322zM46.001 23.556c-0.172-0.23-0.487-0.516-0.946-0.66 0.516-0.172 1.318-0.832 1.318-2.036 0-0.889-0.315-1.377-0.917-1.721-0.602-0.315-1.319-0.372-2.266-0.372h-4.215v7.67h1.864v-2.796h1.978c0.66 0 1.032 0.058 1.319 0.344 0.316 0.373 0.316 1.032 0.316 1.548v0.903h1.836v-1.477c0-0.688-0.058-1.032-0.288-1.405zM53.571 20.373v-1.605h-6.136v7.67h6.136v-1.563h-4.33v-1.549h4.244v-1.548h-4.244v-1.405h4.33zM58.245 26.438c1.864 0 2.926-0.759 2.926-2.393 0-0.774-0.23-1.262-0.545-1.664-0.459-0.372-1.119-0.602-2.151-0.602h-1.004c-0.258 0-0.487-0.057-0.717-0.115-0.201-0.086-0.373-0.258-0.373-0.545 0-0.258 0.058-0.43 0.287-0.602 0.143-0.115 0.373-0.115 0.717-0.115h3.383v-1.634h-3.671c-1.978 0-2.638 1.204-2.638 2.294 0 2.438 2.151 2.322 3.842 2.38 0.344 0 0.544 0.058 0.66 0.173 0.115 0.086 0.23 0.315 0.23 0.544 0 0.201-0.115 0.373-0.23 0.488-0.173 0.115-0.373 0.172-0.717 0.172h-3.555v1.62h3.555zM65.442 26.439c1.864 0 2.924-0.76 2.924-2.394 0-0.774-0.229-1.262-0.544-1.664-0.459-0.372-1.119-0.602-2.151-0.602h-1.003c-0.258 0-0.488-0.057-0.718-0.115-0.201-0.086-0.373-0.258-0.373-0.545 0-0.258 0.115-0.43 0.287-0.602 0.144-0.115 0.373-0.115 0.717-0.115h3.383v-1.634h-3.671c-1.921 0-2.638 1.204-2.638 2.294 0 2.438 2.151 2.322 3.842 2.38 0.344 0 0.544 0.058 0.66 0.174 0.115 0.086 0.229 0.315 0.229 0.544 0 0.201-0.114 0.373-0.229 0.488s-0.373 0.172-0.717 0.172h-3.556v1.62h3.556zM43.966 20.518c0.23 0.115 0.373 0.344 0.373 0.659 0 0.344-0.143 0.602-0.373 0.774-0.287 0.115-0.545 0.115-0.889 0.115l-2.237 0.058v-1.749h2.237c0.344 0 0.659 0 0.889 0.143zM36.108 8.646c-0.287 0.172-0.544 0.172-0.918 0.172h-2.265v-1.692h2.265c0.316 0 0.688 0 0.918 0.114 0.23 0.144 0.344 0.374 0.344 0.718 0 0.315-0.114 0.602-0.344 0.689zM50.789 6.839l1.262 3.039h-2.523zM30.775 25.792l-2.838-3.183 2.838-3.011v6.193zM35.019 20.373c0.66 0 1.090 0.258 1.090 0.918s-0.43 1.032-1.090 1.032h-2.437v-1.95h2.437zM5.773 9.878l1.291-3.039 1.262 3.039h-2.552zM18.905 20.372l4.616 0 2.036 2.237-2.093 2.265h-4.559v-1.549h4.071v-1.548h-4.071v-1.405zM19.077 13.376l-0.545 1.377h-3.24l-0.546-1.319v1.319h-6.222l-0.66-1.749h-1.577l-0.717 1.749h-5.572l2.389-5.649 2.237-5.104h4.789l0.659 1.262v-1.262h5.591l1.262 2.724 1.233-2.724h17.835c0.832 0 1.548 0.143 2.093 0.602v-0.602h4.903v0.602c0.803-0.459 1.864-0.602 3.068-0.602h7.082l0.66 1.262v-1.262h5.218l0.775 1.262v-1.262h5.103v10.753h-5.161l-1.003-1.635v1.635h-6.423l-0.717-1.749h-1.577l-0.717 1.749h-3.355c-1.318 0-2.294-0.316-2.954-0.659v0.659h-7.971v-2.466c0-0.344-0.057-0.402-0.286-0.402h-0.258v2.867h-15.398v-1.377zM43.363 6.409c-0.832 0.831-0.975 1.864-1.004 3.011 0 1.377 0.344 2.266 0.947 2.925 0.659 0.66 1.806 0.86 2.695 0.86h2.151l0.716-1.692h3.843l0.717 1.692h3.727v-5.763l3.47 5.763h2.638v-7.684h-1.892v5.333l-3.24-5.333h-2.839v7.254l-3.096-7.254h-2.724l-2.638 6.050h-0.832c-0.487 0-1.003-0.115-1.262-0.373-0.344-0.402-0.488-1.004-0.488-1.836 0-0.803 0.144-1.405 0.488-1.748 0.373-0.316 0.774-0.431 1.434-0.431h1.749v-1.663h-1.749c-1.262 0-2.265 0.286-2.81 0.889zM39.579 5.52v7.684h1.863v-7.684h-1.863zM31.12 5.52l-0 7.685h1.806v-2.781h1.979c0.66 0 1.090 0.057 1.376 0.315 0.316 0.401 0.258 1.061 0.258 1.491v0.975h1.892v-1.519c0-0.66-0.057-1.004-0.344-1.377-0.172-0.229-0.487-0.488-0.889-0.659 0.516-0.23 1.319-0.832 1.319-2.036 0-0.889-0.373-1.377-0.976-1.75-0.602-0.344-1.262-0.344-2.208-0.344h-4.215zM23.636 5.521v7.685h6.165v-1.577h-4.301v-1.549h4.244v-1.577h-4.244v-1.377h4.301v-1.606h-6.165z
M16.124 13.205h1.577l2.695-6.021v6.021h1.864v-7.684h-3.011l-2.265 5.219-2.409-5.219h-2.953v7.254l-3.154-7.254h-2.724l-3.297 7.684h1.978l0.688-1.692h3.871l0.688 1.692h3.756v-6.021z">
        </path>
      </symbol>
      <symbol viewBox="0 0 95 32" id="icon-logo-discover">
        <path
          d="M50.431 8.059c4.546 0 8.092 3.49 8.092 7.936 0 4.471-3.571 7.961-8.093 7.961-4.638 0-8.115-3.444-8.115-8.051 0-4.334 3.635-7.845 8.115-7.845zM4.362 8.345c4.811 0 8.168 3.133 8.168 7.64 0 2.247-1.028 4.422-2.761 5.864-1.461 1.214-3.126 1.761-5.429 1.761h-4.339v-15.265h4.362zM7.832 19.81c1.027-0.912 1.639-2.379 1.639-3.847 0-1.464-0.612-2.882-1.639-3.798-0.984-0.892-2.146-1.235-4.065-1.235h-0.797v10.096h0.797c1.919 0 3.127-0.367 4.065-1.216zM13.9 23.611v-15.265h2.965v15.265h-2.965zM24.123 14.201c3.378 1.238 4.379 2.338 4.379 4.764 0 2.952-2.166 5.015-5.247 5.015-2.261 0-3.904-0.896-5.271-2.907l1.914-1.856c0.685 1.328 1.825 2.036 3.24 2.036 1.325 0 2.308-0.915 2.308-2.152 0-0.641-0.298-1.189-0.891-1.578-0.297-0.187-0.889-0.46-2.054-0.87-2.784-1.010-3.742-2.085-3.742-4.192 0-2.493 2.055-4.371 4.745-4.371 1.667 0 3.196 0.571 4.473 1.696l-1.549 2.033c-0.778-0.867-1.508-1.233-2.398-1.233-1.28 0-2.213 0.732-2.213 1.694 0 0.821 0.525 1.258 2.307 1.921zM29.438 15.986c0-4.436 3.605-7.985 8.101-7.985 1.278 0 2.352 0.273 3.653 0.935v3.504c-1.233-1.213-2.308-1.717-3.72-1.717-2.787 0-4.976 2.313-4.976 5.241 0 3.092 2.123 5.267 5.112 5.267 1.347 0 2.397-0.48 3.585-1.671v3.504c-1.347 0.638-2.443 0.892-3.72 0.892-4.519 0-8.034-3.478-8.034-7.97zM65.239 18.601l4.11-10.254h3.216l-6.573 15.655h-1.596l-6.46-15.655h3.24zM73.914 23.612v-15.265h8.418v2.585h-5.453v3.388h5.244v2.585h-5.244v4.123h5.453v2.584h-8.418zM94.081 12.852c0 2.336-1.23 3.87-3.469 4.329l4.794 6.43h-3.651l-4.105-6.135h-0.388v6.135h-2.969v-15.265h4.404c3.425 0 5.384 1.645 5.384 4.506zM88.125 15.372c1.9 0 2.903-0.827 2.903-2.359 0-1.486-1.004-2.266-2.856-2.266h-0.911v4.626h0.863z">
        </path>
      </symbol>
      <symbol viewBox="0 0 54 32" id="icon-logo-mastercard">
        <path
          d="M48.366 15.193c0.6 0 0.9 0.437 0.9 1.282 0 1.281-0.546 2.209-1.337 2.209-0.6 0-0.9-0.436-0.9-1.31 0-1.281 0.573-2.182 1.337-2.182zM38.276 18.275c0-0.655 0.491-1.009 1.472-1.009 0.109 0 0.191 0.027 0.382 0.027-0.027 0.982-0.545 1.636-1.227 1.636-0.382 0-0.628-0.245-0.628-0.655zM26.278 15.848c0 0.082-0 0.192-0 0.327h-1.909c0.164-0.763 0.545-1.173 1.091-1.173 0.518 0 0.818 0.3 0.818 0.845zM38.060 0.002c8.838 0 16.003 7.165 16.003 16.002s-7.165 15.999-16.003 15.999c-3.834 0-7.324-1.344-10.080-3.594 2.102-2.031 3.707-4.567 4.568-7.44h-1.33c-0.833 2.553-2.297 4.807-4.199 6.627-1.892-1.816-3.342-4.078-4.172-6.62h-1.33c0.858 2.856 2.435 5.401 4.521 7.432-2.749 2.219-6.223 3.594-10.036 3.594-8.837 0-16.002-7.163-16.002-15.999s7.164-16.001 16.002-16.001c3.814 0 7.287 1.377 10.036 3.603-2.087 2.023-3.664 4.568-4.521 7.424h1.33c0.83-2.542 2.28-4.804 4.172-6.607 1.903 1.808 3.367 4.060 4.199 6.614h1.33c-0.861-2.872-2.466-5.413-4.568-7.443 2.757-2.249 6.246-3.592 10.080-3.592zM7.217 20.213h1.691l1.336-8.044h-2.672l-1.637 4.99-0.082-4.99h-2.454l-1.336 8.044h1.582l1.037-6.135 0.136 6.135h1.173l2.209-6.189zM14.47 19.477l0.054-0.408 0.382-2.318c0.109-0.736 0.136-0.982 0.136-1.309 0-1.254-0.791-1.909-2.263-1.909-0.627 0-1.2 0.082-2.045 0.327l-0.246 1.473 0.163-0.028 0.246-0.081c0.382-0.109 0.928-0.164 1.418-0.164 0.79 0 1.091 0.164 1.091 0.6 0 0.109 0 0.191-0.055 0.409-0.273-0.027-0.518-0.054-0.709-0.054-1.909 0-2.999 0.927-2.999 2.536 0 1.064 0.627 1.773 1.554 1.773 0.791 0 1.364-0.246 1.8-0.791l-0.027 0.682h1.418l0.027-0.164 0.027-0.246zM17.988 16.314c-0.736-0.327-0.819-0.409-0.819-0.709 0-0.355 0.3-0.519 0.845-0.519 0.328 0 0.791 0.028 1.227 0.082l0.246-1.5c-0.436-0.082-1.118-0.137-1.5-0.137-1.909 0-2.59 1.009-2.563 2.208 0 0.818 0.382 1.391 1.282 1.828 0.709 0.327 0.818 0.436 0.818 0.709 0 0.409-0.3 0.6-0.982 0.6-0.518 0-0.982-0.082-1.527-0.245l-0.246 1.5 0.082 0.027 0.3 0.054c0.109 0.027 0.246 0.055 0.464 0.055 0.382 0.054 0.709 0.054 0.928 0.054 1.8 0 2.645-0.682 2.645-2.181 0-0.9-0.354-1.418-1.2-1.828zM21.75 18.741c-0.409 0-0.573-0.136-0.573-0.464 0-0.082 0-0.164 0.027-0.273l0.463-2.726h0.873l0.218-1.609h-0.873l0.191-0.982h-1.691l-0.737 4.472-0.082 0.518-0.109 0.654c-0.027 0.191-0.055 0.409-0.055 0.573 0 0.954 0.491 1.445 1.364 1.445 0.382 0 0.764-0.055 1.227-0.218l0.218-1.445c-0.109 0.054-0.273 0.054-0.464 0.054zM25.732 18.851c-0.982 0-1.5-0.381-1.5-1.145 0-0.055 0-0.109 0.027-0.191h3.382c0.163-0.682 0.218-1.145 0.218-1.636 0-1.446-0.9-2.373-2.318-2.373-1.718 0-2.973 1.663-2.973 3.899 0 1.936 0.982 2.945 2.89 2.945 0.628 0 1.173-0.082 1.773-0.273l0.273-1.636c-0.6 0.3-1.145 0.409-1.773 0.409zM31.158 15.524h0.109c0.164-0.79 0.382-1.363 0.655-1.881l-0.055-0.027h-0.164c-0.573 0-0.9 0.273-1.418 1.064l0.164-1.009h-1.554l-1.064 6.544h1.718c0.627-4.008 0.791-4.69 1.609-4.69zM36.122 20.133l0.3-1.827c-0.545 0.273-1.036 0.409-1.445 0.409-1.009 0-1.609-0.737-1.609-1.963 0-1.773 0.9-3.027 2.182-3.027 0.491 0 0.928 0.136 1.528 0.436l0.3-1.745c-0.163-0.054-0.218-0.082-0.436-0.163l-0.682-0.164c-0.218-0.054-0.491-0.082-0.791-0.082-2.263 0-3.845 2.018-3.845 4.88 0 2.155 1.146 3.491 3 3.491 0.463 0 0.872-0.082 1.5-0.246zM41.521 19.069l0.355-2.318c0.136-0.736 0.136-0.982 0.136-1.309 0-1.254-0.763-1.909-2.236-1.909-0.627 0-1.2 0.082-2.045 0.327l-0.246 1.473 0.164-0.028 0.218-0.081c0.382-0.109 0.955-0.164 1.446-0.164 0.791 0 1.091 0.164 1.091 0.6 0 0.109-0.027 0.191-0.082 0.409-0.246-0.027-0.491-0.054-0.682-0.054-1.909 0-3 0.927-3 2.536 0 1.064 0.627 1.773 1.555 1.773 0.791 0 1.363-0.246 1.8-0.791l-0.028 0.682h1.418v-0.164l0.027-0.246 0.054-0.327zM43.648 20.214c0.627-4.008 0.791-4.69 1.608-4.69h0.109c0.164-0.79 0.382-1.363 0.655-1.881l-0.055-0.027h-0.164c-0.572 0-0.9 0.273-1.418 1.064l0.164-1.009h-1.554l-1.037 6.544h1.691zM48.829 20.214l1.608 0 1.309-8.044h-1.691l-0.382 2.291c-0.464-0.6-0.955-0.9-1.637-0.9-1.5 0-2.782 1.854-2.782 4.035 0 1.636 0.818 2.7 2.073 2.7 0.627 0 1.118-0.218 1.582-0.709zM11.306 18.279c0-0.655 0.492-1.009 1.447-1.009 0.136 0 0.218 0.027 0.382 0.027-0.027 0.982-0.518 1.636-1.228 1.636-0.382 0-0.6-0.245-0.6-0.655z">
        </path>
      </symbol>
      <symbol viewBox="0 0 57 32" id="icon-logo-paypal">
        <path
          d="M47.11 10.477c2.211-0.037 4.633 0.618 4.072 3.276l-1.369 6.263h-3.159l0.211-0.947c-1.72 1.712-6.038 1.821-5.335-2.111 0.491-2.294 2.878-3.023 6.423-3.023 0.246-1.020-0.457-1.274-1.65-1.238s-2.633 0.437-3.089 0.655l0.281-2.293c0.913-0.182 2.106-0.583 3.615-0.583zM47.32 16.885c0.069-0.291 0.106-0.547 0.176-0.838h-0.773c-0.596 0-1.579 0.146-1.931 0.765-0.456 0.728 0.177 1.348 0.878 1.311 0.807-0.037 1.474-0.401 1.65-1.238zM53.883 8h3.242l-2.646 12.016h-3.209zM39.142 8.037c1.689 0 3.729 1.274 3.131 4.077-0.528 2.476-2.498 3.933-4.89 3.933h-2.428l-0.879 3.969h-3.412l2.603-11.979h5.874zM39.037 12.114c0.211-0.911-0.317-1.638-1.197-1.638h-1.689l-0.704 3.277h1.583c0.88 0 1.795-0.728 2.006-1.638zM16.346 10.476c2.184-0.037 4.611 0.618 4.056 3.276l-1.352 6.262h-3.155l0.208-0.947c-1.664 1.712-5.929 1.821-5.235-2.111 0.486-2.294 2.844-3.023 6.345-3.023 0.208-1.020-0.485-1.274-1.664-1.238s-2.601 0.437-3.017 0.655l0.277-2.293c0.867-0.182 2.046-0.583 3.537-0.583zM16.589 16.885c0.035-0.291 0.104-0.547 0.173-0.838h-0.797c-0.555 0-1.525 0.146-1.872 0.765-0.451 0.728 0.138 1.348 0.832 1.311 0.797-0.037 1.491-0.401 1.664-1.238zM28.528 10.648l3.255-0-7.496 13.351h-3.528l2.306-3.925-1.289-9.426h3.156l0.508 5.579zM8.499 8.036c1.728 0 3.738 1.274 3.139 4.077-0.529 2.476-2.504 3.933-4.867 3.933h-2.468l-0.847 3.969h-3.456l2.609-11.979h5.89zM8.393 12.114c0.247-0.911-0.317-1.638-1.164-1.638h-1.693l-0.741 3.277h1.623c0.882 0 1.763-0.728 1.975-1.638z">
        </path>
      </symbol>
      <symbol viewBox="0 0 49 32" id="icon-logo-visa">
        <path
          d="M14.059 10.283l4.24-0-6.302 15.472-4.236 0.003-3.259-12.329c2.318 0.952 4.379 3.022 5.219 5.275l0.42 2.148zM17.416 25.771l2.503-15.501h4.001l-2.503 15.501h-4.002zM31.992 16.494c2.31 1.106 3.375 2.444 3.362 4.211-0.032 3.217-2.765 5.295-6.97 5.295-1.796-0.020-3.526-0.394-4.459-0.826l0.56-3.469 0.515 0.246c1.316 0.579 2.167 0.814 3.769 0.814 1.151 0 2.385-0.476 2.396-1.514 0.007-0.679-0.517-1.165-2.077-1.924-1.518-0.74-3.53-1.983-3.505-4.211 0.024-3.012 2.809-5.116 6.765-5.116 1.55 0 2.795 0.339 3.586 0.651l-0.542 3.36-0.359-0.178c-0.74-0.314-1.687-0.617-2.995-0.595-1.568 0-2.293 0.689-2.293 1.333-0.010 0.728 0.848 1.204 2.246 1.923zM46.199 10.285l3.239 15.49h-3.714s-0.368-1.782-0.488-2.322c-0.583 0-4.667-0.008-5.125-0.008-0.156 0.42-0.841 2.331-0.841 2.331h-4.205l5.944-14.205c0.419-1.011 1.138-1.285 2.097-1.285h3.093zM41.263 20.274c0.781 0 2.698 0 3.322 0-0.159-0.775-0.927-4.474-0.927-4.474l-0.27-1.337c-0.202 0.581-0.554 1.52-0.531 1.479 0 0-1.262 3.441-1.594 4.332zM9.723 18.702c-1.648-4.573-5.284-6.991-9.723-8.109l0.053-0.322h6.453c0.87 0.034 1.573 0.326 1.815 1.308z">
        </path>
      </symbol>
      <symbol viewBox="0 0 34 32" id="icon-pinterest">
        <path
          d="M1.356 15.647c0 6.24 3.781 11.6 9.192 13.957-0.043-1.064-0.008-2.341 0.267-3.499 0.295-1.237 1.976-8.303 1.976-8.303s-0.491-0.973-0.491-2.411c0-2.258 1.319-3.945 2.962-3.945 1.397 0 2.071 1.041 2.071 2.288 0 1.393-0.895 3.477-1.356 5.408-0.385 1.616 0.817 2.935 2.424 2.935 2.909 0 4.869-3.708 4.869-8.101 0-3.34-2.267-5.839-6.39-5.839-4.658 0-7.56 3.447-7.56 7.297 0 1.328 0.394 2.264 1.012 2.989 0.284 0.333 0.324 0.467 0.221 0.849-0.074 0.28-0.243 0.955-0.313 1.223-0.102 0.386-0.417 0.524-0.769 0.381-2.145-0.869-3.145-3.201-3.145-5.822 0-4.329 3.679-9.519 10.975-9.519 5.863 0 9.721 4.21 9.721 8.729 0 5.978-3.349 10.443-8.285 10.443-1.658 0-3.217-0.889-3.751-1.899 0 0-0.892 3.511-1.080 4.189-0.325 1.175-0.963 2.349-1.546 3.264 1.381 0.405 2.84 0.625 4.352 0.625 8.48 0 15.355-6.822 15.355-15.238s-6.876-15.238-15.355-15.238c-8.48 0-15.356 6.822-15.356 15.238z">
        </path>
      </symbol>
      <symbol viewBox="0 0 26 28" id="icon-print">
        <path
          d="M0 21.5v-6.5q0-1.234 0.883-2.117t2.117-0.883h1v-8.5q0-0.625 0.438-1.062t1.062-0.438h10.5q0.625 0 1.375 0.313t1.188 0.75l2.375 2.375q0.438 0.438 0.75 1.188t0.313 1.375v4h1q1.234 0 2.117 0.883t0.883 2.117v6.5q0 0.203-0.148 0.352t-0.352 0.148h-3.5v2.5q0 0.625-0.438 1.062t-1.062 0.438h-15q-0.625 0-1.062-0.438t-0.438-1.062v-2.5h-3.5q-0.203 0-0.352-0.148t-0.148-0.352zM6 24h14v-4h-14v4zM6 14h14v-6h-2.5q-0.625 0-1.062-0.438t-0.438-1.062v-2.5h-10v10zM22 15q0 0.406 0.297 0.703t0.703 0.297 0.703-0.297 0.297-0.703-0.297-0.703-0.703-0.297-0.703 0.297-0.297 0.703z">
        </path>
      </symbol>
      <symbol viewBox="0 0 24 24" id="icon-remove">
        <path d="M19 13H5v-2h14v2z"></path>
      </symbol>
      <symbol viewBox="0 0 32 32" id="icon-rss">
        <path
          d="M-0.465347858,2.01048219 C-0.465347858,2.01048219 28.7009958,0.574406533 31,31.3201126 L25.1092027,31.3201126 C25.1092027,31.3201126 26.2597741,8.90749482 -0.465347858,6.89506416 L-0.465347858,2.01048219 L-0.465347858,2.01048219 Z M-0.465347858,12.2127144 C-0.465347858,12.2127144 16.6328276,11.6363594 19.9369779,31.3201126 L14.0472499,31.3201126 C14.0472499,31.3201126 13.3297467,19.6839434 -0.465347858,17.0940884 L-0.465347858,12.2127144 L-0.465347858,12.2127144 Z M2.73614917,25.0304648 C4.79776783,25.0304648 6.47229834,26.7007181 6.47229834,28.766614 C6.47229834,30.8282326 4.79776783,32.5016938 2.73614917,32.5016938 C0.6723919,32.5016938 -1,30.8293019 -1,28.766614 C-1,26.7017874 0.6723919,25.0304648 2.73614917,25.0304648 Z"
          id="rss-Shape"></path>
      </symbol>
      <symbol viewBox="0 0 26 28" id="icon-star">
        <path
          d="M0 10.109q0-0.578 0.875-0.719l7.844-1.141 3.516-7.109q0.297-0.641 0.766-0.641t0.766 0.641l3.516 7.109 7.844 1.141q0.875 0.141 0.875 0.719 0 0.344-0.406 0.75l-5.672 5.531 1.344 7.812q0.016 0.109 0.016 0.313 0 0.328-0.164 0.555t-0.477 0.227q-0.297 0-0.625-0.187l-7.016-3.687-7.016 3.687q-0.344 0.187-0.625 0.187-0.328 0-0.492-0.227t-0.164-0.555q0-0.094 0.031-0.313l1.344-7.812-5.688-5.531q-0.391-0.422-0.391-0.75z">
        </path>
      </symbol>
      <symbol viewBox="0 0 32 32" id="icon-stumbleupon">
        <mask id="stumbleupon-mask-2">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stumbleupon-path-1"></use>
        </mask>
        <path
          d="M31.9250667,16.0373333 C31.9250667,24.8533333 24.7784,32 15.9624,32 C7.14666667,32 0,24.8533333 0,16.0373333 C0,7.2216 7.14666667,0.0749333333 15.9624,0.0749333333 C24.7784,0.0749333333 31.9250667,7.2216 31.9250667,16.0373333 Z M21.9205547,16.3600826 L21.9205547,18.9857015 C21.9205547,19.5214765 21.494073,19.9558236 20.968,19.9558236 C20.441927,19.9558236 20.0154453,19.5214765 20.0154453,18.9857015 L20.0154453,16.4101275 L18.1823358,16.9675798 L16.9525547,16.3839008 L16.9525547,18.9383327 C16.9717372,21.1844666 18.7659562,23 20.976146,23 C23.1984234,23 25,21.1651979 25,18.9019364 L25,16.3600826 L21.9205547,16.3600826 Z M16.9525547,14.2429415 L18.1823358,14.8266205 L20.0154453,14.2691683 L20.0154453,12.9736203 C19.9505401,10.7684323 18.1810219,9 16,9 C13.8268613,9 12.0618102,10.7555866 11.9845547,12.9492669 L11.9845547,18.8684839 C11.9845547,19.404259 11.558073,19.8386061 11.032,19.8386061 C10.505927,19.8386061 10.0794453,19.404259 10.0794453,18.8684839 L10.0794453,16.3600826 L7,16.3600826 L7,18.9019364 C7,21.1651979 8.80131387,23 11.0235912,23 C13.2264234,23 15.0119708,21.1965095 15.0429781,18.9608128 L15.0474453,13.114656 C15.0474453,12.578881 15.473927,12.1445339 16,12.1445339 C16.526073,12.1445339 16.9525547,12.578881 16.9525547,13.114656 L16.9525547,14.2429415 Z"
          id="stumbleupon-Fill-1" mask="url(#stumbleupon-mask-2)"></path>
      </symbol>
      <symbol viewBox="0 0 32 32" id="icon-tumblr">
        <path
          d="M23.852762,25.5589268 C23.2579209,25.8427189 22.1195458,26.089634 21.2697728,26.1120809 C18.7092304,26.1810247 18.2121934,24.3131275 18.1897466,22.9566974 L18.1897466,12.9951133 L24.6159544,12.9951133 L24.6159544,8.15140729 L18.2137967,8.15140729 L18.2137967,0 L13.5256152,0 C13.4486546,0 13.3139736,0.0673405008 13.2963368,0.238898443 C13.0221648,2.73370367 11.8533261,7.11243957 7,8.86168924 L7,12.9951133 L10.2387574,12.9951133 L10.2387574,23.4521311 C10.2387574,27.0307977 12.8794671,32.1166089 19.8508122,31.9979613 C22.2013164,31.9578777 24.8131658,30.9718204 25.3919735,30.1236507 L23.852762,25.5589268">
        </path>
      </symbol>
      <symbol viewBox="0 0 43 32" id="icon-twitter">
        <path
          d="M36.575 5.229c1.756-0.952 3.105-2.46 3.74-4.257-1.644 0.882-3.464 1.522-5.402 1.867-1.551-1.495-3.762-2.429-6.209-2.429-4.697 0-8.506 3.445-8.506 7.694 0 0.603 0.075 1.19 0.22 1.753-7.069-0.321-13.337-3.384-17.532-8.039-0.732 1.136-1.152 2.458-1.152 3.868 0 2.669 1.502 5.024 3.784 6.404-1.394-0.040-2.706-0.386-3.853-0.962-0.001 0.032-0.001 0.064-0.001 0.097 0 3.728 2.932 6.837 6.823 7.544-0.714 0.176-1.465 0.27-2.241 0.27-0.548 0-1.081-0.048-1.6-0.138 1.083 3.057 4.224 5.281 7.946 5.343-2.911 2.064-6.579 3.294-10.564 3.294-0.687 0-1.364-0.036-2.029-0.108 3.764 2.183 8.235 3.457 13.039 3.457 15.646 0 24.202-11.724 24.202-21.891 0-0.334-0.008-0.665-0.025-0.995 1.662-1.085 3.104-2.439 4.244-3.982-1.525 0.612-3.165 1.025-4.885 1.211z">
        </path>
      </symbol>
      <symbol viewBox="0 0 32 32" id="icon-youtube">
        <path
          d="M31.6634051,8.8527593 C31.6634051,8.8527593 31.3509198,6.64879843 30.3919217,5.67824658 C29.1757339,4.40441487 27.8125088,4.39809002 27.1873503,4.32353816 C22.7118278,4 15.9983092,4 15.9983092,4 L15.984407,4 C15.984407,4 9.27104501,4 4.79536595,4.32353816 C4.17017613,4.39809002 2.80745205,4.40441487 1.59082583,5.67824658 C0.631890411,6.64879843 0.319843444,8.8527593 0.319843444,8.8527593 C0.319843444,8.8527593 0,11.4409393 0,14.0290881 L0,16.4554834 C0,19.0436008 0.319843444,21.6317495 0.319843444,21.6317495 C0.319843444,21.6317495 0.631890411,23.8357417 1.59082583,24.8062935 C2.80745205,26.0801566 4.40557339,26.0398591 5.11736986,26.1733699 C7.67602348,26.4187241 15.9913894,26.4946536 15.9913894,26.4946536 C15.9913894,26.4946536 22.7118278,26.4845401 27.1873503,26.1610333 C27.8125088,26.0864501 29.1757339,26.0801566 30.3919217,24.8062935 C31.3509198,23.8357417 31.6634051,21.6317495 31.6634051,21.6317495 C31.6634051,21.6317495 31.9827789,19.0436008 31.9827789,16.4554834 L31.9827789,14.0290881 C31.9827789,11.4409393 31.6634051,8.8527593 31.6634051,8.8527593 Z M12.6895342,19.39582 L12.6880626,10.4095186 L21.3299413,14.9183249 L12.6895342,19.39582 Z"
          id="youtube-Imported-Layers"></path>
      </symbol>
      <symbol viewBox="0 0 26 26" id="logo-small">
        <path
          d="M17.647 12.125h-3.323c-.11 0-.197.087-.197.194v2.327c0 .107.087.193.197.193h3.323c.95 0 1.542-.524 1.542-1.357 0-.795-.594-1.358-1.543-1.358zm-2.62-2.423h3.233c2.51 0 3.988 1.57 3.988 3.296 0 1.35-.915 2.345-1.885 2.78-.155.07-.15.283.01.346 1.128.443 1.94 1.623 1.94 3 0 1.96-1.305 3.512-3.837 3.512h-6.96c-.11 0-.197-.087-.197-.194v-9.03L.237 24.49c-.51.508-.148 1.378.57 1.378h24.254c.446 0 .808-.362.808-.808V.81c0-.72-.87-1.08-1.38-.572L15.03 9.702zm-.703 7.562c-.11 0-.197.087-.197.194v2.56c0 .106.087.193.197.193h3.44c1.05 0 1.682-.542 1.682-1.472 0-.815-.593-1.474-1.68-1.474h-3.442z"
          fill-rule="evenodd"></path>
      </symbol>

      <symbol id="icon-alignleft" viewBox="0 0 448 512" class="svg-inline--fa fa-align-left fa-w-14">
        <path fill="currentColor"
          d="M288 48v32c0 6.627-5.373 12-12 12H12C5.373 92 0 86.627 0 80V48c0-6.627 5.373-12 12-12h264c6.627 0 12 5.373 12 12zM12 220h424c6.627 0 12-5.373 12-12v-32c0-6.627-5.373-12-12-12H12c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12zm0 256h424c6.627 0 12-5.373 12-12v-32c0-6.627-5.373-12-12-12H12c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12zm264-184H12c-6.627 0-12 5.373-12 12v32c0 6.627 5.373 12 12 12h264c6.627 0 12-5.373 12-12v-32c0-6.627-5.373-12-12-12z"
          class=""></path>
      </symbol>
      <symbol id="icon-caret-circle-down" data-icon="caret-circle-down" viewBox="0 0 512 512"
        class="svg-inline--fa fa-caret-circle-down fa-w-16 fa-3x">
        <path fill="currentColor"
          d="M157.1 216h197.8c10.7 0 16.1 13 8.5 20.5l-98.9 98.3c-4.7 4.7-12.2 4.7-16.9 0l-98.9-98.3c-7.7-7.5-2.3-20.5 8.4-20.5zM504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-48 0c0-110.5-89.5-200-200-200S56 145.5 56 256s89.5 200 200 200 200-89.5 200-200z"
          class=""></path>
      </symbol>
      <symbol id="icon-shopping-cart" viewBox="0 0 24 24">
        <path
          d="M20.756 5.345c-0.191-0.219-0.466-0.345-0.756-0.345h-13.819l-0.195-1.164c-0.080-0.482-0.497-0.836-0.986-0.836h-2.25c-0.553 0-1 0.447-1 1s0.447 1 1 1h1.403l1.86 11.164c0.008 0.045 0.031 0.082 0.045 0.124 0.016 0.053 0.029 0.103 0.054 0.151 0.032 0.066 0.075 0.122 0.12 0.179 0.031 0.039 0.059 0.078 0.095 0.112 0.058 0.054 0.125 0.092 0.193 0.13 0.038 0.021 0.071 0.049 0.112 0.065 0.116 0.047 0.238 0.075 0.367 0.075 0.001 0 11.001 0 11.001 0 0.553 0 1-0.447 1-1s-0.447-1-1-1h-10.153l-0.166-1h11.319c0.498 0 0.92-0.366 0.99-0.858l1-7c0.041-0.288-0.045-0.579-0.234-0.797zM18.847 7l-0.285 2h-3.562v-2h3.847zM14 7v2h-3v-2h3zM14 10v2h-3v-2h3zM10 7v2h-3c-0.053 0-0.101 0.015-0.148 0.030l-0.338-2.030h3.486zM7.014 10h2.986v2h-2.653l-0.333-2zM15 12v-2h3.418l-0.285 2h-3.133z">
        </path>
        <path d="M10 19.5c0 0.828-0.672 1.5-1.5 1.5s-1.5-0.672-1.5-1.5c0-0.828 0.672-1.5 1.5-1.5s1.5 0.672 1.5 1.5z">
        </path>
        <path d="M19 19.5c0 0.828-0.672 1.5-1.5 1.5s-1.5-0.672-1.5-1.5c0-0.828 0.672-1.5 1.5-1.5s1.5 0.672 1.5 1.5z">
        </path>
      </symbol>

      <symbol id="icon-shopping-basket" viewBox="0 0 1024 992">
        <path
          d="M1015.5 267.5Q1006 254 990 254H311L259 77q-7-24-19-41t-25.5-24T191 2.5 171 0H34Q21 0 12 9T3 32q0 8 4 15.5T18.5 59 34 63h137q4 0 7.5 1t9.5 8.5T198 95l177 650q2 6 6.5 11.5T392 765t13 3h432q10 0 18.5-6t11.5-15l153-450q5-16-4.5-29.5zM815 704H430L328 318h616zm-63 128q-33 0-56.5 23.5T672 912t23.5 56.5T752 992t56.5-23.5T832 912t-23.5-56.5T752 832zm-288 0q-22 0-40.5 11t-29 29-10.5 40q0 33 23.5 56.5T464 992t56.5-23.5T544 912q0-8-1.5-16t-4.5-15-7.5-13.5-10-12-12-10T495 838t-15-4.5-16-1.5z">
        </path>
        <rect x="0" y="0" width="1024" height="992" fill="rgba(0, 0, 0, 0)"></rect>
      </symbol>

      <symbol id="icon-shopping-bag" viewBox="0 0 832 1024">
        <path
          d="M768 159H577V97q0-26-13-48t-35-35-48-13H353q-15 0-30 5t-26.5 14T276 40.5 262 67t-5 30v62H64q-27 0-45.5 18.5T0 223v736q0 26 18.5 45t45.5 19h704q27 0 45.5-19t18.5-45V223q0-27-18.5-45.5T768 159zM321 97q0-13 9.5-22.5T353 65h128q13 0 22.5 9.5T513 97v62H321V97zm447 862H64V223h193v66q0 3 1 8.5t8.5 14.5 22.5 9q16 0 24-8t8-16v-74h192v69l1.5 7.5 4.5 10 9.5 8L545 321q9 0 15.5-3.5t9.5-8 4.5-9.5 2.5-8v-69h191v736z">
        </path>
      </symbol>

      <symbol id="icon-shopping-briefcase" viewBox="0 0 1024 960">
        <path
          d="M960 159H704V97q0-26-12.5-48t-35-35T608 1H416q-40 0-68 28.5T320 97v62H64q-26 0-45 19T0 223v672q0 26 19 45t45 19h896q26 0 45-19t19-45V223q0-17-8.5-31.5T992 168t-32-9zM384 97q0-13 9.5-22.5T416 65h192q14 0 23 9.5t9 22.5v62H384V97zM64 223h896v225H608v-33q0-17-9-32t-23.5-23.5T544 351h-64q-27 0-45.5 19T416 415v33H64V223zm480 353h-64V415h64v161zM64 895V512h352v64q0 27 18.5 45.5T480 640h64q17 0 31.5-8.5T599 608t9-32v-64h352v383H64z">
        </path>
      </symbol>

      <symbol id="icon-shopping-handbag" viewBox="0 0 1024 1056">
        <path
          d="M1023 959l-84-504q-5-49-44-84t-88-35h-71v-85q0-48-16.5-91.5t-46-75.5-71-50.5T513 15q-64 0-115.5 32T317 133t-29 118v85h-77q-16 0-32 4.5t-30 12-26 18.5-21 24-15 28-8 30L2 958q-5 40 15 62 19 21 54 21h873q23 0 38-7t24-17q20-23 17-58zM352 251q0-72 45.5-122T513 79q35 0 65 13.5t50.5 37 32 55T672 251v85H352v-85zm595 725l-872 1q-12 0-10-11l77-504q2-12 8-23.5t15.5-20T187 405t24-5h77v73q-7 5-13 10.5T265 496t-6.5 15.5T256 528q0 27 18.5 45.5T320 592t45.5-18.5T384 528q0-36-32-55v-73h320v73q-32 19-32 55 0 27 18.5 45.5T704 592t45.5-18.5T768 528q0-36-32-55v-73h71q6 0 12 1.5t12 4 11.5 6 10 7.5 8.5 9 7 11 5 12 3 13l83 503q1 4-2 6.5t-10 2.5z">
        </path>
      </symbol>

      <symbol id="icon-shopping-bag2" viewBox="0 0 28 28">
        <path
          d="M27.453 22l0.547 4.891c0.031 0.281-0.063 0.562-0.25 0.781-0.187 0.203-0.469 0.328-0.75 0.328h-26c-0.281 0-0.562-0.125-0.75-0.328-0.187-0.219-0.281-0.5-0.25-0.781l0.547-4.891h26.906zM26 8.891l1.344 12.109h-26.688l1.344-12.109c0.063-0.5 0.484-0.891 1-0.891h4v2c0 1.109 0.891 2 2 2s2-0.891 2-2v-2h6v2c0 1.109 0.891 2 2 2s2-0.891 2-2v-2h4c0.516 0 0.938 0.391 1 0.891zM20 6v4c0 0.547-0.453 1-1 1s-1-0.453-1-1v-4c0-2.203-1.797-4-4-4s-4 1.797-4 4v4c0 0.547-0.453 1-1 1s-1-0.453-1-1v-4c0-3.313 2.688-6 6-6s6 2.688 6 6z">
        </path>
      </symbol>

      <symbol id="icon-shopping-basket2" viewBox="0 0 32 28">
        <path
          d="M30 12c1.109 0 2 0.891 2 2s-0.891 2-2 2h-0.234l-1.797 10.344c-0.172 0.953-1 1.656-1.969 1.656h-20c-0.969 0-1.797-0.703-1.969-1.656l-1.797-10.344h-0.234c-1.109 0-2-0.891-2-2s0.891-2 2-2h28zM7.578 24.5c0.547-0.047 0.969-0.531 0.922-1.078l-0.5-6.5c-0.047-0.547-0.531-0.969-1.078-0.922s-0.969 0.531-0.922 1.078l0.5 6.5c0.047 0.516 0.484 0.922 1 0.922h0.078zM14 23.5v-6.5c0-0.547-0.453-1-1-1s-1 0.453-1 1v6.5c0 0.547 0.453 1 1 1s1-0.453 1-1zM20 23.5v-6.5c0-0.547-0.453-1-1-1s-1 0.453-1 1v6.5c0 0.547 0.453 1 1 1s1-0.453 1-1zM25.5 23.578l0.5-6.5c0.047-0.547-0.375-1.031-0.922-1.078s-1.031 0.375-1.078 0.922l-0.5 6.5c-0.047 0.547 0.375 1.031 0.922 1.078h0.078c0.516 0 0.953-0.406 1-0.922zM7.438 4.562l-1.453 6.438h-2.063l1.578-6.891c0.406-1.828 2.016-3.109 3.891-3.109h2.609c0-0.547 0.453-1 1-1h6c0.547 0 1 0.453 1 1h2.609c1.875 0 3.484 1.281 3.891 3.109l1.578 6.891h-2.063l-1.453-6.438c-0.219-0.922-1.016-1.563-1.953-1.563h-2.609c0 0.547-0.453 1-1 1h-6c-0.547 0-1-0.453-1-1h-2.609c-0.938 0-1.734 0.641-1.953 1.563z">
        </path>
      </symbol>
      <symbol id="icon-shopbag" viewBox="0 0 32 32">
        <path d="M3.205 3.205v25.59h25.59v-25.59h-25.59zM27.729 27.729h-23.457v-23.457h23.457v23.457z"></path>
        <path
          d="M9.068 13.334c0 3.828 3.104 6.931 6.931 6.931s6.93-3.102 6.93-6.931v-3.732h1.067v-1.066h-3.199v1.066h1.065v3.732c0 3.234-2.631 5.864-5.864 5.864-3.234 0-5.865-2.631-5.865-5.864v-3.732h1.067v-1.066h-3.199v1.066h1.065v3.732z">
        </path>
      </symbol>

      <symbol id="icon-moneyback" viewBox="0 0 32 30">
        <path
          d="M29.477,14.892a0.716,0.716,0,0,1,.864-0.711h1.334c0.577,0,.17-0.491.17-0.491L28.209,7.852a0.214,0.214,0,0,0-.376.032L24.24,13.666s-0.451.515,0.167,0.515h1.349a0.751,0.751,0,0,1,.863.871A11.976,11.976,0,0,1,14.735,27.091,12,12,0,0,1,2.848,15,12,12,0,0,1,14.735,2.906a11.618,11.618,0,0,1,5.013,1.125,1.4,1.4,0,0,0,.6.136,1.434,1.434,0,0,0,1.3-.84A1.466,1.466,0,0,0,20.955,1.4,14.411,14.411,0,0,0,14.735,0,14.89,14.89,0,0,0-.009,15,14.89,14.89,0,0,0,14.735,30,14.9,14.9,0,0,0,29.477,15.058S29.477,14.934,29.477,14.892ZM15.611,13.681c-1.9-.775-2.447-1.242-2.447-2.087,0-.677.5-1.467,1.923-1.467a5.271,5.271,0,0,1,2.228.508,0.691,0.691,0,0,0,.327.084,0.663,0.663,0,0,0,.619-0.431l0.345-.9a0.558,0.558,0,0,0-.294-0.713,13.19,13.19,0,0,0-2.3-.611A0.119,0.119,0,0,1,15.9,7.943L15.9,6.642a0.714,0.714,0,0,0-.717-0.711H14.563a0.714,0.714,0,0,0-.716.711l0,1.368a0.187,0.187,0,0,1-.152.16,3.76,3.76,0,0,0-3.1,3.678c0,2.235,1.816,3.245,3.777,4,1.568,0.626,2.207,1.261,2.207,2.193,0,1.013-.906,1.721-2.2,1.721a7.678,7.678,0,0,1-2.622-.722,0.691,0.691,0,0,0-.3-0.069,0.669,0.669,0,0,0-.633.447l-0.329.907a0.592,0.592,0,0,0,.294.736,11.492,11.492,0,0,0,2.782.787,0.162,0.162,0,0,1,.13.143v1.362a0.715,0.715,0,0,0,.717.711h0.64a0.715,0.715,0,0,0,.717-0.711V21.922a0.133,0.133,0,0,1,.117-0.151,3.934,3.934,0,0,0,3.284-3.877C19.17,15.944,18.106,14.684,15.611,13.681Z">
        </path>
      </symbol>
      <symbol id="icon-freeshipping" viewBox="0 0 17 30">
        <path
          d="M13.5,21.345l3.515,1.835v-10.9L13.5,10.444v-5.8L8.5,0l-5,4.65v5.8l-3.515,1.834v10.9L3.5,21.345V22.86H13.5V21.345h0Zm-5-11.274a2.208,2.208,0,1,1,2.208-2.209A2.209,2.209,0,0,1,8.5,10.071ZM4.657,27.523V24.187H6.4v3.336H4.657ZM7.628,30V24.187H9.371V30H7.628ZM10.6,27.523V24.187h1.743v3.336H10.6Z">
        </path>
      </symbol>
      <symbol id="icon-security" viewBox="0 0 29 29">
        <path
          d="M28.653,23.962a0.757,0.757,0,0,0-.229-0.483L16.856,12.058a8.6,8.6,0,0,0-1.875-9.521,8.864,8.864,0,0,0-12.418,0,8.6,8.6,0,0,0,0,12.26,8.775,8.775,0,0,0,6.208,2.543,8.861,8.861,0,0,0,3.433-.689L16,20.406a0.8,0.8,0,0,0,.592.229l2.071-.072L18.6,22.614a0.769,0.769,0,0,0,.231.58,0.785,0.785,0,0,0,.586.229l2.079-.07L21.421,25.4a0.794,0.794,0,0,0,.231.582,0.764,0.764,0,0,0,.592.228l2.073-.069-0.07,2.048a0.775,0.775,0,0,0,.249.6,0.8,0.8,0,0,0,.541.21c0.029,0,.058,0,0.087,0l3.18-.349a0.789,0.789,0,0,0,.706-0.85ZM7.712,7.621a2.517,2.517,0,0,1-3.53,0,2.439,2.439,0,0,1,0-3.484,2.518,2.518,0,0,1,3.53,0A2.443,2.443,0,0,1,7.712,7.621Zm18.227,16.6a0.606,0.606,0,0,1-.845,0L15.252,14.5A8.28,8.28,0,0,0,16,13.582l9.938,9.811A0.584,0.584,0,0,1,25.939,24.224Z">
        </path>
      </symbol>

      <symbol id="icon-wheel" viewBox="0 0 120 120">
        <path
          d="M60.234,0C27.446,0,0,26.49,0,59.766A60.559,60.559,0,0,0,60.234,120C93.546,120,120,92.518,120,59.766A59.732,59.732,0,0,0,60.234,0Zm0,113.015A53.343,53.343,0,0,1,6.984,59.766c0-29.078,23.914-52.781,53.25-52.781a52.855,52.855,0,0,1,52.782,52.758C113.016,89.078,89.312,113.015,60.234,113.015Zm0-91.922c-21.291,0-39.141,17.267-39.141,38.672a39.47,39.47,0,0,0,39.141,39.14c21.432,0,38.672-17.872,38.672-39.14A38.715,38.715,0,0,0,60.234,21.093ZM91.679,56.25H77.459a17.484,17.484,0,0,0-2.566-6.171L84.945,40.027A31.493,31.493,0,0,1,91.679,56.25ZM63.75,28.321a31.494,31.494,0,0,1,16.223,6.734L69.921,45.107a17.468,17.468,0,0,0-6.171-2.566V28.321h0Zm-7.031-.006V42.544a18.57,18.57,0,0,0-6.51,2.693l-10.1-10.1A32.208,32.208,0,0,1,56.719,28.315ZM35.112,40.084L45.188,50.159a17.034,17.034,0,0,0-2.629,6.091H28.324A31.248,31.248,0,0,1,35.112,40.084Zm-6.784,23.2H42.564a18.228,18.228,0,0,0,2.76,6.422L35.3,79.728A32.012,32.012,0,0,1,28.328,63.281Zm28.39,28.391A32.017,32.017,0,0,1,40.271,84.7L50.3,74.675a18.226,18.226,0,0,0,6.422,2.761V91.672ZM49.172,59.766c0-5.717,5.091-10.594,11.063-10.594A10.555,10.555,0,0,1,67.682,52.3l0.006,0.007,0.007,0.006a10.5,10.5,0,0,1,3.133,7.424c0,5.971-4.876,11.086-10.593,11.086A11.535,11.535,0,0,1,49.172,59.766ZM63.75,91.676V77.442a17.038,17.038,0,0,0,6.091-2.63L79.916,84.888A31.248,31.248,0,0,1,63.75,91.676Zm21.116-11.8-10.1-10.1a18.571,18.571,0,0,0,2.692-6.51H91.684A32.209,32.209,0,0,1,84.866,79.871ZM60.234,52.734a7.031,7.031,0,1,0,7.031,7.031A7.039,7.039,0,0,0,60.234,52.734Z">
        </path>
      </symbol>
      <symbol id="icon-oil" viewBox="0 0 84 120">
        <path
          d="M80.359,38.9L66.927,21.476A17.141,17.141,0,0,0,53.141,15.01H41.534v-4.3C41.889,4.8,36.841,0,31.033,0h-7C18.5,0,13.986,4.44,13.543,10.328q-0.01.132-.01,0.265v4.836A17.191,17.191,0,0,0,0,32.276v70.147A17.558,17.558,0,0,0,17.5,120h49A17.558,17.558,0,0,0,84,102.423V49.637A17.423,17.423,0,0,0,80.359,38.9ZM20.533,10.767c0.184-1.864,1.427-3.759,3.5-3.759h7c1.846,0,3.646,1.538,3.51,3.344-0.007.088-.01,0.176-0.01,0.265v4.4l-14,0V10.767h0ZM66.5,112.969h-49A10.535,10.535,0,0,1,7,102.423V32.276A10.3,10.3,0,0,1,17.284,22.021l35.857,0a10.1,10.1,0,0,1,8.251,3.763L74.823,43.208A10.437,10.437,0,0,1,77,49.638v52.786h0A10.535,10.535,0,0,1,66.5,112.969Zm2.748-65.478L55.894,30.4a3.494,3.494,0,0,0-2.752-1.343H17.5a3.488,3.488,0,0,0-3.477,3.516V95.393A3.468,3.468,0,0,0,17.5,98.885h49a3.468,3.468,0,0,0,3.477-3.49L70,49.665A3.525,3.525,0,0,0,69.248,47.491ZM63,91.877H21V36.083H51.441l11.578,14.8ZM48.353,49.268c-1.8-3.114-3.573-5.7-3.648-5.809a3.493,3.493,0,0,0-5.759,0c-0.075.109-1.849,2.694-3.648,5.809-3.561,6.165-3.973,8.8-3.973,10.251a10.5,10.5,0,1,0,21,0C52.325,58.071,51.913,55.433,48.353,49.268ZM41.825,63.035a3.511,3.511,0,0,1-3.5-3.511c0.028-1.075,1.484-4.138,3.5-7.549,2.015,3.41,3.47,6.472,3.5,7.548A3.512,3.512,0,0,1,41.825,63.035Zm10.5,14.53h-21a3.515,3.515,0,0,0,0,7.031h21A3.515,3.515,0,0,0,52.325,77.565Z">
        </path>
      </symbol>
      <symbol id="icon-funnel" viewBox="0 0 113 120">
        <path
          d="M109.468,0H3.528A3.524,3.524,0,0,0,0,3.516v7.031A10.576,10.576,0,0,0,8.81,20.941L9.023,21.2,5.385,24.818A17.521,17.521,0,0,0,4.3,48.5l7.523,8.988a17.722,17.722,0,0,0,26.049,1.176L39.246,57.3l3.127,3.735v55.446a3.534,3.534,0,0,0,5.49,2.925l21.188-14.062a3.512,3.512,0,0,0,1.573-2.925V61.038l33.563-40.1A10.576,10.576,0,0,0,113,10.547V3.516A3.524,3.524,0,0,0,109.468,0ZM32.88,53.7a10.613,10.613,0,0,1-15.63-.706L9.727,44a10.462,10.462,0,0,1,.65-14.213l3.186-3.17L34.706,51.879Zm31.5,3.818a3.505,3.505,0,0,0-.819,2.251V100.54l-14.125,9.375V59.766a3.506,3.506,0,0,0-.819-2.251L18.13,21.093H94.866Zm41.558-46.968a3.527,3.527,0,0,1-3.531,3.516H10.591a3.527,3.527,0,0,1-3.531-3.516V7.031h98.878v3.516Z">
        </path>
      </symbol>
      <symbol id="icon-engine" viewBox="0 0 125 120">
        <path
          d="M125,68.561a22.042,22.042,0,0,0-10.494-18.8l0.376-.811a3.687,3.687,0,0,0,.2-2.577l-5.426-18.754a3.674,3.674,0,0,0-.518-1.082l3.3-7.107a3.672,3.672,0,0,0,3.1-6.66L88.984,0.345a3.672,3.672,0,0,0-3.1,6.66l-3.3,7.108a3.649,3.649,0,0,0-1.159.3l-17.609,7.8-17.61-7.8a3.648,3.648,0,0,0-1.159-.3L41.745,7a3.672,3.672,0,0,0-3.1-6.66L12.1,12.767a3.676,3.676,0,0,0,1.55,7.005,3.638,3.638,0,0,0,1.545-.345l3.3,7.108a3.668,3.668,0,0,0-.518,1.082L12.552,46.371a3.685,3.685,0,0,0,.061,2.236,22.063,22.063,0,0,0,9.359,42v7.98a11.037,11.037,0,0,0-7.324,10.391v7.349A3.668,3.668,0,0,0,18.311,120h88.378a3.669,3.669,0,0,0,3.663-3.674v-7.349a11.037,11.037,0,0,0-7.325-10.391v-7.98A22.034,22.034,0,0,0,125,68.561ZM92.526,10.111l13.045,6.1,0.231,0.108-3.1,6.66L89.431,16.771Zm-70.464,6.1,13.045-6.1,3.1,6.66L24.926,22.982l-3.1-6.66Zm2.487,15.052,20.221-9.46,14.905,6.6a7.141,7.141,0,0,0,2.892.612h2.485a7.209,7.209,0,0,0,2.92-.618l14.892-6.594,20.067,9.388h0l0.153,0.071,4.579,15.828L94.172,76.12a10.947,10.947,0,0,0-2.131-.21H81.273C95.584,45.576,94.71,47.442,94.861,47.08a10.992,10.992,0,1,0-20.5-7.912H50.641a10.991,10.991,0,1,0-20.292,8.384v0L43.727,75.91H33.362L19.97,47.094Zm26.1,15.25H74.36A11.02,11.02,0,0,0,83.6,53.807L78.9,63.77a19.042,19.042,0,0,0-16.641-9.905,18.36,18.36,0,0,0-16.2,9.808L41.4,53.805A10.989,10.989,0,0,0,50.644,46.516Zm-10.361,0a3.674,3.674,0,1,1,3.662-3.674A3.672,3.672,0,0,1,40.283,46.516Zm40.771-3.674a3.662,3.662,0,1,1,3.662,3.674A3.667,3.667,0,0,1,81.055,42.842ZM73.73,72.235c0,6.858-5.932,11.023-11.475,11.023a11.023,11.023,0,0,1,0-22.045C68.476,61.213,73.73,66.261,73.73,72.235ZM47.614,83.258a18.392,18.392,0,0,0,14.642,7.349,19.318,19.318,0,0,0,15.093-7.349H92.041A3.672,3.672,0,0,1,95.7,86.932V97.955H29.3V86.932a3.672,3.672,0,0,1,3.662-3.674H47.614Zm-40.29-14.7a14.661,14.661,0,0,1,8.367-13.286L26.324,78.154a11.069,11.069,0,0,0-3.716,5.088c-0.212.009-.423,0.016-0.635,0.016A14.689,14.689,0,0,1,7.324,68.561Zm95.7,44.09H21.973v-3.674a3.672,3.672,0,0,1,3.662-3.674H99.365a3.672,3.672,0,0,1,3.662,3.674v3.674Zm-0.635-29.409a11.03,11.03,0,0,0-1.9-3.34l10.887-23.425a14.714,14.714,0,0,1-8.356,26.78C102.815,83.258,102.6,83.251,102.392,83.242ZM62.256,68.561a3.674,3.674,0,1,1-3.662,3.674A3.668,3.668,0,0,1,62.256,68.561Z">
        </path>
      </symbol>
      <symbol id="icon-battery" viewBox="0 0 120 120">
        <path
          d="M95.391,70.312H91.875V66.8a3.516,3.516,0,0,0-7.031,0v3.516H81.328a3.516,3.516,0,0,0,0,7.031h3.516v3.516a3.516,3.516,0,0,0,7.031,0V77.344h3.516A3.516,3.516,0,0,0,95.391,70.312Zm-56.719,0H24.609a3.516,3.516,0,0,0,0,7.031H38.672A3.516,3.516,0,0,0,38.672,70.312Zm74.3,29.2v-50.9a10.546,10.546,0,0,0-3.516-20.489h-3.516V24.609A10.559,10.559,0,0,0,95.391,14.062V10.547A10.559,10.559,0,0,0,84.844,0H35.156A10.559,10.559,0,0,0,24.609,10.547v3.516A10.559,10.559,0,0,0,14.063,24.609v3.516H10.547A10.546,10.546,0,0,0,7.031,48.614v50.9A10.546,10.546,0,0,0,10.547,120h98.906A10.546,10.546,0,0,0,112.969,99.511ZM95.391,21.093a3.52,3.52,0,0,1,3.516,3.516v3.516H84.844V24.609a3.52,3.52,0,0,1,3.516-3.516h7.031ZM31.641,10.547a3.52,3.52,0,0,1,3.516-3.516H84.844a3.52,3.52,0,0,1,3.516,3.516v3.516A10.559,10.559,0,0,0,77.813,24.609v3.516H42.188V24.609A10.559,10.559,0,0,0,31.641,14.062V10.547ZM21.094,24.609a3.52,3.52,0,0,1,3.516-3.516h7.031a3.52,3.52,0,0,1,3.516,3.516v3.516H21.094V24.609ZM10.547,35.156h98.906a3.516,3.516,0,1,1,0,7.031H10.547A3.516,3.516,0,1,1,10.547,35.156Zm95.39,14.062V98.906H14.063V49.219h91.875Zm3.516,63.75H10.547a3.516,3.516,0,0,1,0-7.032h98.906A3.516,3.516,0,0,1,109.453,112.969ZM67.266,70.312H58.892l4.487-8.975a3.516,3.516,0,0,0-6.289-3.145L50.059,72.256A3.515,3.515,0,0,0,53.2,77.343h8.374L57.09,86.318a3.516,3.516,0,1,0,6.289,3.145L70.41,75.4A3.518,3.518,0,0,0,67.266,70.312Z">
        </path>
      </symbol>
      <symbol id="icon-airfilter" viewBox="0 0 106 120">
        <path
          d="M105.858,79.065A10.58,10.58,0,0,0,96.3,70.814L80.561,19.033A10.53,10.53,0,0,0,74.27,0H31.83a10.528,10.528,0,0,0-6.511,18.865L7.942,71.119A10.541,10.541,0,0,0,10.61,91.875H15.5l4.184,8.318a10.548,10.548,0,0,0-5.535,9.26v7.031A3.526,3.526,0,0,0,17.683,120H88.417a3.526,3.526,0,0,0,3.537-3.516v-7.031a10.548,10.548,0,0,0-5.535-9.26L90.6,91.875H95.49C102.246,91.875,106.878,85.705,105.858,79.065ZM88.9,70.781H77.27L69.008,21.093H73.8Zm-18.8,0H56.587V21.093h5.252ZM31.83,7.031H74.27a3.516,3.516,0,1,1,0,7.031H31.83A3.516,3.516,0,1,1,31.83,7.031ZM49.513,21.093V70.781H36l8.262-49.688h5.252Zm-17.485,0h5.064L28.83,70.781H15.5ZM21.22,112.969v-3.516a3.529,3.529,0,0,1,3.529-3.515h56.6a3.529,3.529,0,0,1,3.529,3.515v3.516H21.22Zm2.186-21.094H82.695l-3.537,7.031H26.943ZM95.49,84.844H10.61a3.515,3.515,0,1,1-.011-7.031H95.49A3.523,3.523,0,0,1,99,80.922C98.815,83.291,97.451,84.844,95.49,84.844Z">
        </path>
      </symbol>
    </svg>

    <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
    <div id="previewModal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title">
              Added to shortlist successfully. What is next?
            </h4>
          </div>
          <div class="modal-body"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Aos Animation script -->
  <script src="js/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Footer bottom virtual meeting -->
  <div class="virtual-model-footer" style="display: none">
    <div class="boxModel">
      <div class="modal-content virtual-footer-iframe" id="closepopup" style="display: none; width: 670px">
        <iframe src="" width="100%" height="450"></iframe>
      </div>
      <div class="virtual-footer-section">
        <div class="appointment-section" style="display: none">
          <div class="modal-header">
            <ul class="nav">
              <li class="active">
                <a data-toggle="pill" href="#appointment">Virtual Meeting</a>
              </li>
            </ul>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span>×</span>
            </button>
          </div>
          <div id="loadbody" class="">
            <div class="tab-content">
              <div id="appointment" class="tab-pane fade in active">
                <h4 class="modal-title" id="WarningModalLabel">
                  Appointment for Virtual Meeting
                </h4>
                <div class="modal-body">
                  <form name="submitvirtual_footer" id="submitvirtual_footer" enctype="multipart/form-data">
                    <input name="" type="hidden" value="" />
                    <div class="register-page lead-page">
                      <div class=""></div>
                      <div class="container1">
                        <div class="alert alert-danger alerterror" hidden=""></div>
                        <div class="alert alert-success success" hidden=""></div>
                        <div class="message-error"></div>
                        <div class="fieldset">
                          <div class="row">
                            <div class="">
                              <div class="visit-type-heading"></div>
                              <div class="virtual-form-details-New_footer">
                                <div class="form-group">
                                  <div class="col-sm-7 col-md-7">
                                    <input type="text" class="form-control" id="virtual_mobile_footer"
                                      placeholder="Mobile No." name="virtual_mobile_footer" />
                                  </div>
                                  <div class="col-sm-5 col-md-5 text-right">
                                    <input type="button" class="btn btn-default" id="send_otp" name="send_otp"
                                      onclick="sendOTP_footer();" value="Send OTP" />
                                  </div>
                                </div>
                                <div class="form-group otp_sent_text" style="display: none">
                                  <div class="col-xs-12 col-sm-12 col-md-10">
                                    <p style="color: red; font-size: 12px">
                                      Please Enter the OTP ( One Time Password
                                      sent to the Mobile Number )
                                    </p>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-7 col-md-7">
                                    <input type="text" class="form-control" id="virtual_otp_footer" placeholder="OTP"
                                      name="virtual_otp_footer" />
                                  </div>
                                  <div class="col-sm-5 col-md-5 text-right" style="margin-top: 4%">
                                    <a href="javascript:void();" id="resend_otp" onclick="sendOTP_footer();">Resend
                                      OTP</a>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-md-12">
                                    <div class="accept-privacy-policy form-group">
                                      <label for="accept-privacy-policy-new" class="control-label">By sharing my contact
                                        details, I
                                        authorize # &amp; its
                                        representatives to call me or SMS me.
                                        This consent will override any
                                        registration for DNC / NDNC.</label>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-md-12">
                                    <div class="accept-privacy-policy form-group">
                                      <label for="accept-privacy-policy-new"
                                        class="control-label privacy-lable service-related">This is not for service
                                        related
                                        query</label>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-md-12">
                                    <div class="accept-privacy-policy form-group">
                                      <input id="accept-privacy-policy-virtual" type="checkbox"
                                        name="accept-privacy-policy-new" />
                                      <label for="accept-privacy-policy-new" class="control-label privacy-lable">I
                                        Accept Privacy Policy
                                        <a href="#index.php?route=information/information.info&amp;information_id=3"
                                          class="vagree1 modal-link" data-attr="Privacy Policy">(read)</a></label>
                                      <span class="read" id="read-privacyinfo" style="cursor: pointer"></span>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group actionBtn">
                                  <input type="hidden" name="websiteurl" value="#" />
                                  <input type="hidden" name="region" value="Essco Bathware" />
                                  <input type="hidden" name="current_lang" value="" />
                                  <div class="col-sm-7 col-md-7 pull-left text-left">
                                    <input type="button" class="button-1 nothanks-button btn btn-default"
                                      id="virtual-button-nothanks" value="No Thanks" name="nothanks" />
                                  </div>
                                  <div class="col-sm-5 col-md-5 text-right">
                                    <div id="saveQuery">
                                      <input type="submit" class="button-1 submit-button btn btn-default"
                                        id="virtual-button-new" value="LEAVE A COMMENT" name="submit" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="callback-section" style="display: none">
          <div class="modal-header">
            <ul class="nav">
              <li>
                <a data-toggle="pill" href="#callback">Call back request for purchase assistance</a>
              </li>
            </ul>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span>×</span>
            </button>
          </div>
          <div id="loadbody" class="">
            <div class="tab-content">
              <div id="callback" class="tab-pane fade active">
                <div class="modal-body">
                  <form name="callback_footer" id="callback_footer" enctype="multipart/form-data">
                    <div class="callback-page">
                      <div class="container1">
                        <div class="alert alert-danger alerterror alert-dismissible" style="display: none"></div>
                        <div class="alert alert-success alert-dismissible success" style="display: none"></div>
                        <div class="message-error"></div>
                        <div class="fieldset">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 no-padding rightColumn">
                              <div class="callback_footer-form-footer">
                                <div class="form-group">
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" class="form-control" id="callback_name" placeholder="Name"
                                      name="callback_name" />
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" class="form-control" id="callback_email" placeholder="Email"
                                      name="callback_email" />
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" class="form-control" id="callback_city" placeholder="City"
                                      name="callback_city" />
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-7 col-md-7">
                                    <input type="text" class="form-control" id="callback_mobile"
                                      placeholder="10 digit mobile number" name="callback_mobile" />
                                  </div>
                                  <div class="col-sm-5 col-md-5 text-right">
                                    <input type="button" class="btn btn-default send_otpc" id="send_otp" name="send_otp"
                                      onclick="sendOTP_callback();" value="Send OTP" />
                                  </div>
                                </div>
                                <div class="form-group callback_otp_sent_text" style="display: none">
                                  <div class="col-xs-12 col-sm-12 col-md-10">
                                    <p style="color: red; font-size: 12px">
                                      Please Enter the OTP ( One Time Password
                                      sent to the Mobile Number )
                                    </p>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-7 col-md-7">
                                    <input type="text" class="form-control" id="virtual_otp_footer" placeholder="OTP"
                                      name="callback_otp" />
                                  </div>
                                  <div class="col-sm-5 col-md-5 text-right" style="margin-top: 4%; display: none">
                                    <a href="javascript:void();" id="resend_otp" onclick="sendOTP_callback();">Resend
                                      OTP</a>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-md-12">
                                    <div class="accept-privacy-policy form-group">
                                      <label class="control-label">By sharing my contact details, I
                                        authorize # &amp; its
                                        representatives to call me or SMS me.
                                        This consent will override any
                                        registration for DNC / NDNC.</label>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-md-12">
                                    <div class="accept-privacy-policy form-group">
                                      <input id="accept-privacy-policy-callback" type="checkbox"
                                        name="accept-privacy-policy-new" />
                                      <label class="control-label privacy-lable">I Accept Privacy Policy
                                        <a href="#index.php?route=information/information.info&amp;information_id=3"
                                          class="vagree1 modal-link" data-attr="Privacy Policy">(read)</a></label>
                                      <span class="read" id="read-privacyinfo" style="cursor: pointer"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group actionBtn">
                                  <input type="hidden" name="callback_websiteurl" value="#" />
                                  <input type="hidden" name="region" value="Essco Bathware" />
                                  <input type="hidden" name="current_lang" value="" />
                                  <input type="hidden" name="callback_request_type" value="Not Allocated" />
                                  <input type="hidden" name="callback_date" value="2024-03-02" />

                                  <div class="col-sm-7 col-md-7 pull-left text-left">
                                    <input type="button" class="button-1 nothanks-button btn btn-default"
                                      id="virtual-button-nothanks" value="No Thanks" name="nothanks" />
                                  </div>
                                  <div class="col-sm-5 col-md-5 text-right">
                                    <div id="saveQuery">
                                      <input type="submit" class="button-1 submit-button btn btn-default"
                                        id="callback-button-new" value="Submit" name="submit" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      /* setTimeout(function(){   
    virtual_popup();
  }, 10000); */
      $("#callback-button-new").click(function () {
        if ($("#accept-privacy-policy-callback").is(":checked")) {
          //do some stuff
          return true;
        } else {
          //just show validation errors, dont post
          alert("Please accept privacy policy");
          return false;
        }
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function () {
      $("#virtual-button-new").click(function () {
        if ($("#accept-privacy-policy-virtual").is(":checked")) {
          //do some stuff
          return true;
        } else {
          //just show validation errors, dont post
          alert("Please accept privacy policy");
          return false;
        }
      });
    });
  </script>
  <script type="text/javascript">
    $(function () {
      // Initialize form validation on the registration form.
      // It has the name attribute "registration"
      $("form[name='callback_footer']").validate({
        // Specify validation rules
        rules: {
          callback_name: "required",
          callback_city: "required",
          callback_mobile: "required",
          callback_email: {
            email: true,
          },
          //captcha: "required",
          captcha: {
            required: true,
            remote: {
              url: "index.php?route=common/footer.callbackcpatchvalidate",
              type: "post",
            },
          },
        },

        submitHandler: function (form) {
          $("#callback-button-new").val("loading");
          $("#callback-button-new").prop("disabled", true);
          $.ajax({
            url: "index.php?route=common/footer.callbacksubmit",
            type: "post",
            dataType: "json",
            data: $("form[name='callback_footer']").serialize(),
            success: function (json) {
              if (json["type"] == "success") {
                $("#callback-button-new").val("SUBMIT");
                $("#callback-button-new").prop("disabled", false);
                $.ajax({
                  url: "https://apiservice.#.com/jworld/#_connection.php",
                  type: "POST",
                  data: {
                    name: $("input[name='callback_name']").val(),
                    email_id: $("input[name='callback_email']").val(),
                    cityid: $("input[name='callback_city']").val(),
                    contact_no: $("input[name='callback_mobile']").val(),
                    websiteurl: $("input[name='callback_websiteurl']").val(),
                    request_type: $(
                      "input[name='callback_request_type']"
                    ).val(),
                    comment: "",
                    scheduledt: $("input[name='callback_date']").val(),
                    resource: "Esscobathware",
                  },
                  success: function (msg) {
                    $("form[name='callback_footer']")
                      .find("input[type=text], textarea")
                      .val("");
                    //$("#callback_footer .alert-success").html('<button type="button" class="btn-close" data-bs-dismiss="alert"></button>'+"Enquiry sent successfully!");
                    //$("#callback_footer .alert-success").show();
                    $(".virtual-footer-section .close").trigger("click");
                    $("#content")
                      .parent()
                      .before(
                        '<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-circle-check"></i> Enquiry sent successfully! <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>'
                      );
                  },
                });
                $(".has-error").removeClass("has-error");
                $(".message_box").html("");
                $(".alert-success").hide();
                $(".alert-danger").hide();

                $(".callback_otp_sent_text").hide();
                $("form[name='callback_footer']")
                  .find("input[type=text]")
                  .val("");
                $(".alert-success").html(
                  '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
                  json["message"]
                );
                $(".alert-success").show();
              } else {
                $(".alert-success").hide();
                $(".alert-danger").hide();
                $(".alerterror").html(
                  '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
                  json["message"]
                );
                $(".alerterror").show();
              }
            },
          });
        },
      });
    });

    function sendOTP_callback() {
      $(".alerterror").html("").hide();
      var number = $("#callback_mobile").val();
      $(".send_otpc").text("Resend OTP");
      if (number.length == 10 && number != null) {
        var input = {
          mobile_number: number,
          action: "send_otp",
        };

        $.ajax({
          url: "index.php?route=common/footer.CURLsendsms",
          type: "POST",
          data: input,
          dataType: "json",
          success: function (response) {
            $(".alert-success").html(response.message);
            $(".alert-success").show();
            $(".sent-otp-div").hide();
            $("#verifyOtp").css("display", "block");
            $(".callback_otp_sent_text").show();
          },
        });
      } else {
        $(".alerterror").html("Please enter a valid number!");
        $(".alerterror").show();
      }
    }
  </script>
  <script>
    $(".virtual-model-footer").hide();
    $.cookie("virtual_footer_open", "0");
    /* setInterval(function(){
  virtual_popup();
},10000); */
    function virtual_popup() {
      if (!$.cookie("virtual_footer")) {
        $(".has-error").removeClass("has-error");
        $(".message_box").html("");
        $(".alert-success").hide();
        $(".alert-danger").hide();
        if ($.cookie("virtual_footer_open") != 1) {
          $.cookie("virtual_footer_open", "1", { expires: 1 /*day*/ });
          $(".virtual-footer-section").css({ display: "block" });
          $(".virtual-footer-iframe").css({ display: "none" });
          $(".virtual-model-footer").show();
        }
      }
    }
    $(document).ready(function () {
      $(".nothanks-button").click(function () {
        $(".virtual-model-footer").css({ display: "none" });
        $.cookie("virtual_footer", "1", { expires: 1 /*day*/ });
      });
    });
  </script>
  <script>
    $(function () {
      // Initialize form validation on the registration form.
      // It has the name attribute "registration"
      $("form[name='submitvirtual_footer']").validate({
        // Specify validation rules
        rules: {
          // The key name on the left side is the name attribute
          // of an input field. Validation rules are defined
          // on the right side
          virtual_mobile_footer: {
            number: true, // <-- no such method called "matches"!
            minlength: 10,
            maxlength: 15,
            required: true,
          },
          virtual_otp_footer: {
            number: true, // <-- no such method called "matches"!
            minlength: 4,
            maxlength: 10,
            required: true,
          },
        },
        // Specify validation error messages
        messages: {
          virtual_mobile_footer: "Mandatory",
          virtual_otp_footer: "Mandatory",
        },

        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
          $(".message_box").html("");
          var $parent = $(".virtual-model-footer");
          $.ajax({
            url: "",
            type: "post",
            dataType: "json",
            data: $("form[name='submitvirtual_footer']").serialize(),
            success: function (json) {
              if (json["type"] == "success") {
                $.ajax({
                  url: "https://apiservice.#.com/jworld/#_otp_record_connection.php",
                  type: "POST",
                  data: {
                    contact_no: $(
                      "input[name='virtual_mobile_footer']"
                    ).val(),
                    website: $("input[name='websiteurl']").val(),
                    form_name: "Virtual meeting",
                  },
                  success: function (msg) {
                    console.log("1");
                    console.log(msg);
                  },
                });

                $(".virtual-model-footer").css({ width: "47%" });
                //$('.virtual-model-footer .boxModel .modal-header .close').css({'margin-top':'1%'});
                $(".virtual-footer-iframe iframe").attr(
                  "src",
                  json["parameters"]
                );
                $(".virtual-footer-section").css({ display: "none" });
                $(".virtual-footer-iframe").css({ display: "block" });
                $("form[name='submitvirtual_footer']")
                  .find("input[type=text]")
                  .val("");
              }
              $(".alert-success").html(json["message"]);
              $(".alert-success").show();
              //$(".message_box").html('<div class="alert1 alert-success">'+json['message']+'</div>');
              //$(".message_box").show();
              /* setTimeout(function(){
          $('.message_box', $parent).fadeOut('slow');
        }, 5000); */
            },
          });
        },
      });
    });

    $(".virtual-model-footer .close").click(function () {
      $(".virtual-model-footer").css({ width: "30%" });
      //$('.virtual-model-footer .boxModel .modal-header .close').css({'margin-top':'-20px'});
      $.cookie("virtual_footer_open", "0");
      $(".has-error").removeClass("has-error");
      $(".message_box").html("");
      $(".alert-success").hide();
      $(".alert-danger").hide();
      $(".virtual-model-footer").css({ display: "none" });
      $(".virtual-iframe_footer").css({ display: "none" });
    });
  </script>
  <!-- otp generation -->
  <script type="text/javascript">
    function sendOTP_footer() {
      $(".alerterror").html("").hide();
      var number = $("#virtual_mobile_footer").val();
      if (number.length == 10 && number != null) {
        var input = {
          mobile_number: number,
          action: "send_otp",
        };

        $.ajax({
          url: "index.php?route=common/footer.CURLsendsms",
          type: "POST",
          data: input,
          dataType: "json",
          success: function (response) {
            $(".alert-success").html(response.message);
            $(".alert-success").show();
            $(".sent-otp-div").hide();
            $("#verifyOtp").css("display", "block");
            $(".otp_sent_text").show();
          },
        });
      } else {
        $(".alerterror").html("Please enter a valid number!");
        $(".alerterror").show();
      }
    }

    function sendOTP_callback() {
      $(".alerterror").html("").hide();
      var number = $("#callback_mobile").val();
      $(".send_otpc").val("Resend OTP");
      if (number.length == 10 && number != null) {
        var input = {
          mobile_number: number,
          action: "send_otp",
        };

        $.ajax({
          url: "index.php?route=common/footer.CURLsendsms",
          type: "POST",
          data: input,
          dataType: "json",
          success: function (response) {
            $(".alert-success").html(response.message);
            $(".alert-success").show();
            $(".sent-otp-div").hide();
            $("#verifyOtp").css("display", "block");
            $(".callback_otp_sent_text").show();
          },
        });
      } else {
        $(".alerterror").html("Please enter a valid number!");
        $(".alerterror").show();
      }
    }

    function verifyOTP_footer() {
      $(".alerterror").html("").hide();
      $(".success").html("").hide();
      var otp = $("#virtual_otp_footer").val();
      if (otp.length == 6 && otp != null) {
        var input = {
          otp: otp,
          action: "verify_otp",
        };
        $.ajax({
          url: "index.php?route=common/footer.CURLsendsms",
          type: "POST",
          dataType: "json",
          data: input,
          success: function (response) {
            $("." + response.type).html(response.message);
            $("." + response.type).show();
            $("#virtaul-button-new").removeAttr("disabled");
            $(".otp_sent_text").show();
          },
          error: function () {
            alert("error");
          },
        });
      } else {
        $(".alerterror").html("You have entered wrong OTP.");
        $(".alerterror").show();
      }
    }
    $(document).ready(function () {
      $(".virutalmeet_sliding_btn_text").click(function () {
        /* $('#virtualPopup').css({'display': 'block','opacity':'1'}); */
        $(".has-error").removeClass("has-error");
        //virtual_popup();
      });
    });
  </script>
  <div class="sticky_right_sec1">
    <ul>
      <li class="right-logo">
        <a href="credai_certificate" target="_blank" title="weEndorse">
          <picture>
            <source srcset="images/weEndorse.webp" type="image/webp" />
            <img alt="credai certificate" src="images/weEndorse.png" width="60" height="60" />
          </picture>
        </a>
      </li>
    </ul>
  </div>
  <div class="sticky_right_sec">
    <ul>
      <li class="enquiry">
        <a href="javascript:void(0);" title="Call back request for purchase assistance"><img src="images/enquiry.png"
            width="60" height="60" alt="Call back request for purchase assistance" /></a>
      </li>
      <li class="purchase_assistance">
        <a href="tel:1800120332222" title="Purchase Assistance"><img src="images/callback.png" width="60" height="60"
            alt="Purchase Assistance" /></a>
      </li>
    </ul>
  </div>
  <script>
    /* $(document).ready(function(){
$('.sticky_right_sec li.enquiry').click(function(){
  $('.virtual-model-footer').show();
});
}); */

    $(document).ready(function () {
      $(".enquirytt").click(function () {
        $(".virtual-model-footer .appointment-section").hide();
        $(".virtual-model-footer").show();
        $(".virtual-model-footer .callback-section").show();
      });
      $(".sticky_right_sec li.enquiry").click(function () {
        $(".virtual-model-footer .appointment-section").hide();
        $(".virtual-model-footer").show();
        $(".virtual-model-footer .callback-section").show();
      });
      $(".enquir-pop").click(function () {
        $(".virtual-model-footer .appointment-section").hide();
        $(".virtual-model-footer").show();
        $(".virtual-model-footer .callback-section").show();
      });
      $(".virtualmeet").click(function () {
        $(".virtual-model-footer .callback-section").hide();
        $(".virtual-model-footer").show();
        $(".virtual-model-footer .appointment-section").show();
      });

      $(".sticky_right_sec li.virtual").click(function () {
        $(".virtual-model-footer .callback-section").hide();
        $(".virtual-model-footer").show();
        $(".virtual-model-footer .appointment-section").show();
      });
    });
  </script>
  <!-- Sidebar right sticky -->
</body>

</html>