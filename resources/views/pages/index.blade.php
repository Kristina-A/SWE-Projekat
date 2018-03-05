@extends('layouts.app')

@section('content')
  <!-- LOGIN -->
  <div id="loginModal" class="modal">       
    <form class="modal-content col s12" action="" method="post">
      <div class="row center">
        <h4>Log in to INT</h4>        
        <div class="divider"></div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
          <input id="password" type="password">
          <label for="password">Password</label>
        </div>         
        <div class="col s12 right-align">
          <a href="#">Forgot password?</a>
        </div>
      </div>
      <div class="row center-align">
        <button class="btn s12 cyan waves-effect waves-light" type="submit" name="action">Log In
          <i class="material-icons right">send</i>
        </button>
      </div>
      <div class="row center-align">
        <div class="divider"></div>
        <h5>Don't have an account?</h5>
        <a class="waves-effect waves-light btn white cyan-text modal-trigger modal-close" href="#registerModal">Join</a></li>
      </div>
    </form>
  </div> 
  
  <!-- REGISTER -->

  <div id="registerModal" class="modal">
    <form class="modal-content col s12" action="" method="post">
        <div class="row center">
          <h4>Join INT</h4>
          <div class="divider"></div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6">
            <input id="firstName" type="text">
            <label for="firstName">First Name</label>
          </div>          
          <div class="input-field col s12 m6">     
            <input id="lastName" type="text">
            <label for="lastName">Last Name</label>
          </div>
          <div class="input-field col s12">
            <input id="email" type="email">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
            <input id="password" type="password">
            <label for="password">Password</label>
          </div>    
        </div>
        <div class="row center-align">
            <button class="btn s12 cyan waves-effect waves-light" type="submit" name="action">Register
              <i class="material-icons right">send</i>
            </button>
        </div>
        <div class="divider"></div>
        <div class="row center-align">
          <h5>Already have an account?</h5>
          <a class="waves-effect waves-light btn white cyan-text modal-trigger modal-close" href="#loginModal">Log In</a></li>
        </div>
      </form>
  </div>

  <!-- NAVIGATION -->
  <div class="navbar-fixed">    
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo left">Logo</a>
          <ul class="right">            
            <li><a href="#section1" class="hide-on-small-only">Section 1</a></li>
            <li><a href="#section2" class="hide-on-small-only">Section 2</a></li>
            <li><a class="waves-effect waves-light btn cyan modal-trigger" href="#registerModal">Join</a></li>
            <li><a class="waves-effect waves-light btn white cyan-text modal-trigger" href="#loginModal">Log In</a></li>
          </ul>
        </div>
    </nav>
  </div>

  <!-- FIRST PARALLAX -->
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center cyan-text text-lighten-2">Parallax Template</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a class="waves-effect waves-light btn-large cyan lighten-1 modal-trigger" href="#registerModal">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/background1.jpg')}}" alt="Unsplashed background img 1"></div>
  </div>

  <!-- FIRST SECTION -->
  <div class="container">
    <div id="section1" class="section scrollspy">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- SECOND PARALLAX -->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/background2.jpg')}}" alt="Unsplashed background img 2"></div>
  </div>

  <!-- SECOND SECTION -->
  <div class="container">
    <div id="section2" class="section scrollspy">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>

  <!-- THIRD PARALLAX -->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{asset('img/background3.jpg')}}" alt="Unsplashed background img 3"></div>
  </div>

  <!-- FOOTER -->
  <footer class="page-footer cyan">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">PH Link</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">PH Link</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made using <a class="white-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>  
  <script>
    (function($){
      $(function(){
        $('.parallax').parallax();
        $('.modal').modal();
        $('.scrollspy').scrollSpy();
      }); // end of document ready
    })(jQuery); // end of jQuery name space
  </script>
@endsection