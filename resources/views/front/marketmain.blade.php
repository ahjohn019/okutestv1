@extends('master.marketmenu')

@section('title')
OKU Shopping Cart
@endsection

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
      <div class="container text-center">
        <h1 >Welcome To Our Website</h1>
        <p><strong >E-OKU is an awesome place to buy handicraft. Do look and check it out !!</strong></p>
       
        <a href="{{url ('product')}}" class="btn btn-default btn-lg">
        <span class="glyphicon glyphicon-search"></span> Go To Product</a>
       
      </div>
    </div>

<div class="container">
      <!-- Example row of columns -->
     <section>
       <div class="page-header" id="features">
         <h2>Features</h2>
       </div>
      <div class="row">
        <div class="col-lg-4">
          <blockquote>
          <h2>Numerous of choice</h2>
          <p>With OKU Marketplace, there is hundred of items give you choose. We ensure that each of the items are genuinue and high quality levels. </p>
         
          </blockquote>
        </div>
        <div class="col-lg-4">
          <blockquote>
          <h2>Cheaper Handicraft Let You Choose</h2>
          <p>Each of the items are cheaper than you think. Our handicraft is came from disabled organizations and you will be not dissapointed as all of the items are really lower prices.</p>
          
          </blockquote>
       </div>
        <div class="col-lg-4">
          <blockquote>
          <h2>Talented Artist Services Included</h2>
          <p>Besides sell products, we offer a new type of services. This services included massage services, repair equipment and more. Most important is , there are no GST included and is affordable prices.</p>
          
          </blockquote>
        </div>
        <div class="col-lg-4">
          <blockquote>
          <h2>Events </h2>
          <p>We will held the events each of one month, come and participate in our events to enjoy the lowest prices
            of genuinue products thats originally made from disabled people.
          </p>
          
          </blockquote>
        </div>
      </div>
      </div>
     
     </section>
      <hr>

<!-- Slideshow product -->
    <div class="container">
    <section>
    <div class="page-header" id="features">
         <h2>Our Product</h2>
    </div>
    </div>
    </section>
    <!-- #region Jssor Slider Begin -->
    <script src="js/jssor.slider-24.1.5.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/slideshow.js"></script>
    <link rel="stylesheet" href="css/slideshow.css">
    
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">
            <div>
                <img data-u="image" src="../image/gallery1.jpg" />
            </div>
            <div>
                <img data-u="image" src="../image/gallery2.jpg" />
            </div>
            <div>
                <img data-u="image" src="../image/gallery3.jpg" />
            </div>
            <a data-u="any" href="https://www.jssor.com" style="display:none">js slider</a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
   

<!-- call to action -->
<section>
  <div class="page-header" id="features"></div>
<div class = "well">
   <div class ="container text-center">
      <h3>Subscribe to Our Website for get latest updates </h3>
      <p>Enter your email and name</p>       
   
   <form action="" class="form-inline">
     <div class="form-group">
       <label for="email">Email Address</label>
       <input type="text" class="form-control" id="email" placeholder="email">
     </div>
     <div class="form-group">
       <label for="name">Name</label>
       <input type="text" class="form-control" id="name" placeholder="name">
     </div>
     <button type="submit" class="btn btn-warning">Subscribe</button>
     </form>
</div>
</section>

  

@endsection