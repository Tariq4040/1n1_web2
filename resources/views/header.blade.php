
<header class="header-area" style="position: fixed;top:0px'">
    
    <div class="top-header-area">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="top-header-content">
              <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +92-111-000-222</span>
              </a>
              <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <span>Email: brainbrick@gmail.com</span>
              </a>
            </div>
          </div>

          <div class="col-6">
            <div class="top-header-content">
              @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 sm:block">
              
              <a href="{{ route('admin.login') }}" class="mr-2 text-md text-gray-800 underline" &nbsp >Admin Login </a>

              @auth
                  <a href="{{ url('/home') }}" class="text-md text-gray-800 underline">Home</a>
              @else
                  <a href="{{ route('login') }}" class="text-md text-gray-800 underline">User Login</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 text-md text-gray-800 underline">Register</a>
                  @endif
                  
              @endauth
          </div>
      @endif
            </div>
          </div>

    {{-- //////login,register and admin login Code --}}

     {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
      @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              
              <a href="{{ route('admin.login') }}" class="mr-5 text-md text-gray-800 underline" &nbsp >Admin Login </a>

              @auth
                  <a href="{{ url('/home') }}" class="text-md text-gray-800 underline">Home</a>
              @else
                  <a href="{{ route('login') }}" class="text-md text-gray-800 underline">|User Login</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 text-md text-gray-800 underline">Register</a>
                  @endif
                  
              @endauth
          </div>
      @endif
 --}}
    </div>

    </div>
    </div>
    </div>
    
    
    <div class="main-header-area">
    <div class="classy-nav-container breakpoint-off">
    <div class="container">
    
    <nav class="classy-navbar justify-content-between" id="hamiNav">
    
    <a class="nav-brand" href="/"><img src="img/core-img/xlogo.png.pagespeed.ic.cpOUPeRNvj.png" alt=""></a>
    
    <div class="classy-navbar-toggler">
    <span class="navbarToggler"><span></span><span></span><span></span></span>
    </div>
    
    <div class="classy-menu">
    
    <div class="classycloseIcon">
    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
    </div>
    
    <div class="classynav">
    <ul id="nav">
        <li class="active1"><a href="{{ route('homePage') }}">Home</a></li>
        <li class="active2"><a href="{{ route('servicesPage') }}">Services</a></li>
        <li><a href="{{ route('hostingPage') }}">Hosting</a></li>
    </ul>
    
    {{-- <div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
    <a href="#" class="btn hami-btn live--chat--btn"><i class="fa fa-comments" aria-hidden="true"></i> Live Chat</a>
    </div> --}}
    </div>
    
    </div>
    </nav>
    </div>
    </div>
    </div>
    </header>
