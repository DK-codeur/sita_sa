<!DOCTYPE html>
<?php include_once 'views/includes/html-nojs.php'?>
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?= WEBSITE_TITLE .' | '. ucfirst($page); ?></title>

    <style>
        body, html {
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.gallery {
  overflow: hidden;
  height: 100%;
  width: 100%;
  display: block;
  margin: 0;
  padding: 0;
  position: relative;
}

.imgWrap {
  cursor:pointer;
  float: left;
  width: 20%;
  height: 100%;
  overflow: hidden;
  position: relative;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  -webkit-transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  -moz-transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  -o-transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.imgWrap:last-child {
  float: left;
}

.current {
  width: 36%;
  -webkit-transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
     -moz-transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
       -o-transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
          transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.notCurrent {
  width: 16%;
  -webkit-transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
     -moz-transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
       -o-transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
          transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.current-full {
  width: 100%;
  -webkit-transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  -moz-transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  -o-transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}



.current-full .full-content {
  visibility: visible;
}

.full-content {
  visibility: hidden;
  background: rgba(0, 0, 0, 0.6);
  height: 100%;
  width: 100%;
}

.notCurrent-full {
  width: 0%;
  -webkit-transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  -moz-transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  -o-transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

/******************************
Image Gallery
******************************/
.images ul li {
  float: left;
  width: 150px;
  height: 125px;
  list-style: none;
  margin: 40px 40px 40px 40px;
  opacity: 1;
  box-shadow: #000 0px 0px 5px 0px;
  -webkit-animation: scale 3s ease-in-out infinite alternate;
}

.images ul li:hover {
  opacity: 1.0;
}

/******************************
Button Close
******************************/
.current-full .close {
  visibility:visible;
}


.close {
width: 44px;
height: 44px;
line-height: 44px;
position: absolute;
right: 0;
top: 0;
text-decoration: none;
text-align: center;
opacity: 0.65;
padding: 0 0 18px 10px;
color: white;
font-style: normal;
font-size: 28px;
font-family: Arial, Baskerville, monospace;
}

    </style>
</head>
<body>


<div class="clv_main_wrapper index_v2">
    
    <?php include_once 'views/includes/header.php'?>

	
    <!--header-->
		<div class="breadcrumb_wrapper">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4">
						<div class="breadcrumb_inner">
							<h3>test</h3>
						</div>
					</div>
				</div>
			</div>

        </div>
        
		<!--groupe-->
		<div class="container my-5">
        <div class="gallery">
   <div class="imgWrap imgWrap1" style="background-image:url(http://lorempixel.com/1920/1080/fashion/9); ">
      <div class="full-content">
         <!--Image Gallery Begins-->
         <div class="images">
            <ul class="gallery">
               <li>
                  <a href="http://lorempixel.com/1200/800/fashion/1" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/fashion/1"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/fashion/2" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/fashion/2"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/fashion/3" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/fashion/3"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/fashion/4" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/fashion/5"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/fashion/5" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/fashion/5"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/fashion/6" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/fashion/6"/>
                  </a>
               </li>
			   <li>
               <a href="http://lorempixel.com/1200/800/fashion/7" 
                  class="with-caption image-link" >
               <img src="http://lorempixel.com/150/125/fashion/7"/>
               </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/fashion/8" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/fashion/8"/>
                  </a>
               </li>
               <li>             
                  <a href="http://lorempixel.com/1200/800/fashion/9" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/fashion/9"/>
                  </a>
               </li>
            </ul>
            <!--Image Gallery Ends-->   
         </div>
      </div>
   </div>
   <!-- .imgWrap -->
   <div class="imgWrap imgWrap2" style="background-image:url(http://lorempixel.com/1920/1080/sports/2);">
      <div class="full-content">
         <div class="images">
            <ul class="gallery">
               <li>
                  <a href="http://lorempixel.com/1200/800/sports/1" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/sports/1"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/sports/2" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/sports/2"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/sports/3" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/sports/3"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/sports/4" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/sports/5"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/sports/5" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/sports/5"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/sports/6" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/sports/6"/>
                  </a>
               </li>
			    <li>
               <a href="http://lorempixel.com/1200/800/sports/7" 
                  class="with-caption image-link" >
               <img src="http://lorempixel.com/150/125/sports/7"/>
               </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/sports/8" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/sports/8"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/sports/9" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/sports/9"/>
                  </a>
               </li>
            </ul>
         </div>
         <!--Image Gallery Ends--> 
      </div>
   </div>
   <div class="imgWrap imgWrap3" style="background-image:url(http://lorempixel.com/1920/1080/people/9);">
      <div class="full-content">
         <div class="images">
            <ul class="gallery">
               <li>
                  <a href="http://lorempixel.com/1200/800/people/1" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/people/1"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/people/2" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/people/2"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/people/3" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/people/3"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/people/4" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/people/5"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/people/5" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/people/5"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/people/6" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/people/6"/>
                  </a>
               </li>
                <li>
			   <a href="http://lorempixel.com/1200/800/people/7" 
                  class="with-caption image-link" >
               <img src="http://lorempixel.com/150/125/people/7"/>
               </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/people/8" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/people/8"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/people/9" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/people/9"/>
                  </a>
               </li>
            </ul>
         </div>
         <!--Image Gallery Ends--> 
      </div>
   </div>
   <div class="imgWrap imgWrap4" style="background-image:url(http://lorempixel.com/1920/1080/nature/5);">
      <div class="full-content">
         <div class="images">
            <ul class="gallery">
               <li>
                  <a href="http://lorempixel.com/1200/800/nature/1" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nature/1"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/nature/2" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nature/2"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/nature/3" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nature/3"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/nature/4" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nature/4"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/nature/5" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nature/5"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/nature/6" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nature/6"/>
                  </a>
               </li>
               <li>
			  <a href="http://lorempixel.com/1200/800/nature/7" 
                  class="with-caption image-link" >
               <img src="http://lorempixel.com/150/125/nature/7"/>
               </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/nature/8" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nature/8"/>
                  </a>
               </li>
            </ul>
         </div>
         <!--Image Gallery Ends--> 	   
      </div>
   </div>
   <div class="imgWrap imgWrap5" style="background-image:url(http://lorempixel.com/1920/1080/nightlife/5);">
      <div class="full-content">
         <div class="images">
            <ul class="gallery">
               <li>
                  <a href="http://lorempixel.com/1200/800/nightlife/1" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nightlife/1"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/nightlife/2" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nightlife/2"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/nightlife/3" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nightlife/3"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/nightlife/4" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nightlife/5"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/nightlife/5" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nightlife/5"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/nightlife/6" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nightlife/6"/>
                  </a>
               </li>
            <li>
		   <a href="http://lorempixel.com/1200/800/nightlife/7" 
                  class="with-caption image-link" >
               <img src="http://lorempixel.com/150/125/nightlife/7"/>
               </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/nightlife/8" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nightlife/8"/>
                  </a>
               </li>
               <li>
                  <a href="http://lorempixel.com/1200/800/nightlife/9" 
                     class="with-caption image-link" >
                  <img src="http://lorempixel.com/150/125/nightlife/9"/>
                  </a>
               </li>
            </ul>
         </div>
         <!--Image Gallery Ends--> 	   	   
      </div>
   </div>
</div>
<div id="close" title="Close (Esc)" class="mfp-close">×</div>

        </div>

		
    <?php include_once 'views/includes/footer.php' ?>
    <?php include_once 'views/includes/contact-popup.php' ?>
    <?php include_once 'views/includes/scripts.php' ?>
</div>

<script>
var full=false;

$('.imgWrap').hover(function () {
 // $(this).css('width', '36%');
   $(this).addClass('current');
  //$(this).siblings().css('width', '16%');  
   $(this).siblings().addClass('notCurrent');
}, function () {
  //$('.imgWrap').css('width', '20%');  
  $('.imgWrap').siblings().removeClass('notCurrent');
  $('.imgWrap').removeClass('current');
 });

$('.imgWrap').click(function () {  
  
  if(!full){
    full = true;
    // $(this).css('width', '100%');
    $(this).addClass('current-full');
  //$(this).siblings().css('width', '0%');  
   $(this).siblings().addClass('notCurrent-full');
  }
});

$('.mfp-close').click(function () {
  full = false;
  $('.imgWrap').siblings().removeClass('notCurrent-full');
  $('.imgWrap').removeClass('current-full');
 
});


$('.gallery').magnificPopup({
  delegate: 'a',
  type: 'image',
  removalDelay: 300,
  mainClass: 'mfp-fade',
  gallery: {
    enabled: true,
    navigateByImgClick: true,
    preload: [0,1]
  }
});

</script>





</body>
</html> 