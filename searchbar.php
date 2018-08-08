<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.4/jquery.flexslider.min.js"></script>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.4/flexslider.min.css" tpye="text/css">
  
<style type="text/css">
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: false
  });
.slider-wrapper {
  position: relative;
}

.inputs-wrapper {
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%,-50%);
}

.flex-direction-nav {
 display: none;
}
</style>
</head>


<body>
<section id="featured" class="bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 slider-wrapper">
                <div id="main-slider" class="main-slider flexslider">
                    <ul class="slides">
                      <li>
                        <img src="http://via.placeholder.com/350x150" alt="" />
                      </li>
                      <li>
                        <img src="http://via.placeholder.com/350x150" alt="" />
                      </li>
                      <li>
                        <img src="http://via.placeholder.com/350x150.jpg" alt="" />
                      </li>
                    </ul>
                </div>
                <div class="inputs-wrapper">
                  <input type="text" name="bar" id="bar" placeholder="Search Your Result">
                  <input type="submit" name="submit" id="submit" value="search">                 </div>
            </div>
        </div>
    </div>  
</section>
</body>

</html>