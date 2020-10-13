@include('ecomerce.css')
    
<body>
<!-- header -->

    @include('ecomerce.header') 
<!-- //header -->
<!-- banner -->
    <div class="banner">
        <div class="w3l_banner_nav_left">
            <nav class="navbar nav_bottom">
             <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header nav_2">
                  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
               </div> 
               <!-- Collect the nav links, forms, and other content for toggling -->
              @include('ecomerce.sidenavbar')  
        <!-- flexSlider -->
        @include('ecomerce.slider')
            <!-- //flexSlider -->
        </div>
        <div class="clearfix"></div>
    </div>
<!-- banner -->
    @include('ecomerce.banner')
<!-- top-brands -->
@include('ecomerce.topbrands')
<!-- //top-brands -->
<!-- fresh-vegetables -->
    
<!-- //fresh-vegetables -->
<!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="w3agile_newsletter_left">
                <h3>sign up for our newsletter</h3>
            </div>
            <div class="w3agile_newsletter_right">
                <form action="#" method="post">
                    <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="submit" value="subscribe now">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //newsletter -->
<!-- footer -->
@include('ecomerce.footer')
<!-- //footer -->
@include('ecomerce.js')