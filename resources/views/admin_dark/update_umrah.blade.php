<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    E-Jawlah : Admin Management System
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/pro2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="" class="simple-text logo-normal">
          E-JAWLAH AMS
          <h6 style="color:grey" >Admin Management System</h6>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="{{ route('admin.main') }}">
              <i class="material-icons">dashboard</i>
              <p>Main</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin.list.admin') }}">
              <i class="material-icons">person</i>
              <p>Admin</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin.list.cust') }}">
              <i class="material-icons">sports_golf</i>
              <p>Customer</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="{{ route('admin.list.umrah') }}">
              <i class="material-icons">content_paste</i>
              <p>Umrah Package</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.list.order') }}">
              <i class="material-icons">ballot</i>
              <p>Order List</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="{{ route('admin.create.umrah') }}">
              <i class="material-icons">queue</i>
              <p>Umrah Create</p>
            </a>
          </li>
         
         
        
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)"></a>
          </div>
          
        </div>
      </nav>
      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
     
      
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/usericon.jpg" />
                  </a>
                </div>
                <div class="card-body">
                @auth
                  <h6 class="card-category">Administrator</h6>
                  <h4 class="card-title">{{ Auth::user()->name }}</h4>
                  <p class="card-description">
                  {{ Auth::user()->fullname }}
                  </p>
                  <p class="card-description">{{ Auth::user()->email }}</p>
                  <p class="card-description">{{ Auth::user()->tel }}</p>
                  <a role="button" href="{{ route('logout') }}" class="btn btn-primary btn-round"
                  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @endauth
                                    
                </div>
              </div>            
    </div>
  </div>

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Update Package</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                <form class="text-center  p-4" action="{{route('update.umrah', $umrah->id)}}" method = "POST">
                @csrf
                    
                <div class="row">
                      <div class="2">
                        <div class="form-group">
                        <label class="bmd-label-floating">ID:  {{ $umrah->id }}</label>
                         
                        </div>
                      </div>
                      </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">AGENCY</label>
                          <input type="text" class="form-control mb-4" value="{{ $umrah->agency }}" name = "agency"> 
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <label class="bmd-label-floating">PACKAGE</label>
                        <input type="text" class="form-control mb-4" value="{{ $umrah->package }}" name = "package">
                         
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">PRICE</label>
                          <input type="number"  class="form-control mb-4" value="{{ $umrah->price }}" name = "price">
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">FLIGHT</label>
                          <input type="text"  class="form-control mb-4" value="{{ $umrah->flight }}" name = "flight">
                        </div>
                      </div>
                     
                    </div>
                    
                    <button type="submit" class="btn btn-primary pull-right">UPDATE</button>
                    
                  </form>
                </div>
              </div>
            </div>
            
        </div>
      </div>
     
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
      <i class="fa fa-user fa-2x " style="color:grey"> </i>
      </a>
      <ul class="dropdown-menu">
        
        <div class="card card-profile">
                <div class="card-avatar">
                 
                </div>
        <div class="card-body">
                  &nbsp
                  @auth
                  <h6 class="card-category">Administrator</h6>
                  <h4 class="card-title">{{ Auth::user()->name }}</h4>
                  <p class="card-description">
                  {{ Auth::user()->fullname }}
                  </p>
                  <p class="card-description">{{ Auth::user()->email }}</p>
                  <p class="card-description">{{ Auth::user()->tel }}</p>
                  <a role="button" href="{{ route('logout') }}" class="btn btn-primary btn-round"
                  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @endauth
                                    
                </div>
      </ul>
    </div>
  </div>

  
<!-- EndModal -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>