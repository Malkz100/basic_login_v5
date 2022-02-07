
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
      <script src="admin.js" type="text/javascript"></script>

  </head>

  <body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">


            <!-- Navigation Links -->
            <ul class="navbar-nav px-3">
                <li class="sm:-my-px sm:flex">
                    <a class="navbar-brand nav-item" href="">
Link
                    </a>
                </li>
            </ul>


      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">


            <!-- Authentication -->
<!--            <form method="POST" action="">-->
<!---->
<!--                <x-jet-dropdown-link href="{{ route('logout') }}"-->
<!--                                     onclick="event.preventDefault();-->
<!--                                                this.closest('form').submit();">-->
<!--                    {{ __('Log Out') }}-->
<!--                </x-jet-dropdown-link>-->
<!--            </form>-->
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">

              <li class="nav-item">
                <a class="nav-link" href="">
                  <span data-feather="home"></span>
Front End
                </a>
              </li>

            <li class="nav-item">
                <a class="nav-link" href="" >
                    <span data-feather="star"></span>
Events
                </a>
            </li>

                <li class="nav-item">
                    <a class="nav-link" href="">
                        <span data-feather="home"></span>
Venues
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">
                        <span data-feather="camera"></span>
Venue Pic
                    </a>
                </li>

              <li class="nav-item">
                <a class="nav-link" href="">
                  <span data-feather="users"></span>
Artists
                </a>
              </li>

                <li class="nav-item">
                    <a class="nav-link" href="">
                        <span data-feather="camera"></span>
Artist Pic
                    </a>
                </li>

              <li class="nav-item">
                <a class="nav-link" href="">
                  <span data-feather="music"></span>
Genres
                </a>
              </li>



                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Bookings</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>

              <li class="nav-item">
                  <a class="nav-link" href="">
                      <span data-feather="users"></span>
Customers
                  </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="">
                      <span data-feather="tag"></span>
Bookings
                  </a>
              </li>
            </ul>


          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3 class="h3">Dashboard</h3>
          </div>
            <div class="container">
            <!-- Page Content -->
            <main>
                <?php include 'customer-crud-table.php' ?>;
            </main>
            </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


    <script>
      //Script to set current nav-item to 'active'
      $(document).ready(function() {

          var url = [location.protocol, '//', location.host, location.pathname].join('');

          $('.nav-item.active').removeClass('active');
          $('.nav-item a[href="' + url  + '"]').parent().addClass('active');
          $(this).parent().addClass('active').siblings().removeClass('active');
      });
  </script>

  </body>
</html>


