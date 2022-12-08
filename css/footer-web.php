<footer class="landing-footer">
  <div class="footercont">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="fotrsect2">
                <span  class="centr-span">Want To Know What It Will Take To Bring Your Business On Track?</span>
        <h2 class="text-center">Submit Us Your Request & We Will Get Back To You</h2>
            <form method="post" action="thankyou.php">
              <span class="namefeild">
              <input required="required" type="text" name="lan-name" placeholder="Full Name*">
              </span> 
              <span class="phonefeild">
              <input required="required" type="phone" name="lan-number" placeholder="Phone*">
              </span>
              <span class="emailfeild">
              <input required="required" type="email" name="lan-email" placeholder="Email*">
              </span> 
              <span class="webfeild">
              <input required="required" type="text" name="lan-cate" placeholder="Categories">
              </span>
              <span class="textfeild">
              <textarea name="lan-message" placeholder="Message" rows="4"></textarea>
              </span>
              <input type="submit" name="lan-submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End-->
  <div class="footer-wrapper">
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-lg-4 col-md-4">
                <ul class="footer-links left-foter">
                <li><a href="https://logozel.co.uk/privacy-policy.php">Privacy</a></li>
                <li><a href="https://logozel.co.uk/terms-of-service.php">Terms</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-4">
              <p>© 2018 Copyrights Logozel</p>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-4">
              <ul class="footer-links">
                 <li class="rund"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="rund"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="rund"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li class="rund"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--copyright End--> 
    <div class="request-form">
    <div class="requestbx">
      <div class="request-container">
        <div class="row">
          <div class="col-md-6 pinkbx">
            <div class="requst-content"> <img src="https://logozel.co.uk/images/contactinfo.jpg"/>
              <ul class="cbx">
                <li> Schedule a 15 Minute Consultation </li>
                <li>Talk with an expert from our team and get started with simple steps</li>
              </ul>
              <ol>
                <li>Fill The Form</li>
                <li>Get prompt response</li>
              </ol>
            </div>
          </div>
          <div class="col-md-6 graybg">
            <div class="grayfom">
             <form method="post"  action="thankyou.php">
                <h2>Lets Get Started</h2>
                <span class="close-custom">X</span>
                <input type="text"name="name2" placeholder="Your Name*" required />
                <input type="email" name="email2" placeholder="Email Address" required />
                <input type="text" name="number2" placeholder="Phone Number" required />
                <textarea name="message2" placeholder="Message" ></textarea>
                <input class="submit-form" type="submit" name="schedule" value="Schedule now" />
              </form>
              <ul class="">
                <li><img src="images/lock.jpg" alt="" /></li>
                <li><img src="images/bull.jpg" alt=""/></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--request-form ENd-->
   <div class="order-fm"><!--Order-form Start-->
    <div class="requestbx">
      <div class="request-container">
        <div class="row">
          <div class="col-md-6 pinkbx">
            <div class="requst-content"> 
            <img src="images/html.png" alt="" />
              <h2>Starter <br>Web Package</h2>
              <h3><sup>$</sup>70</h3>
              <ul class="p-offers">
							<li>250 Words per Page</li>
			                <li>Timely Delivery</li>
			                <li>Superior Standard Content</li>
			                <li>Professional Industry Specific Writers</li>
			                <li>100% Satisfaction Guarantee</li>
						</ul>
            </div>
          </div>
          <div class="col-md-6 graybg">
            <div class="grayfom">
            <form id="myform" method="get" action="order.php">
                <h2>Order Information</h2>
                <span class="close-order">X</span>
                <input type="text" name="name" class="user_name" placeholder="Your Name*" required />
                <input type="email" name="email" class="user_email" placeholder="Email Address*" required />
                <input type="text" name="number" class="user_phone" placeholder="Phone Number*" required />
                <input type="text" name="package" class="user_package" value="" hidden="true" />
                <input type="text" name="price" class="user_price" value="" hidden="true" />
                <input class="submit-form order_send" type="submit" name="order" value="Order Now" id="order_sender"/>
              </form>
              <img class="paypal-img" src="images/paypal.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--Order-form Start-->
</footer>
</body>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script src="js/ie10-viewport-bug-workaround.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/jquery.marquee.min.js"></script> 
<script src="js/jquery.fancybox.min.js"></script> 
<script src="js/carouselTickermin.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/S6Ptkwu_qA.js"></script> 
<script src="js/jquery.slides.min.js"></script> 
<script type="text/javascript">
          jQuery(document).ready(function(){
			  
         /*===================Order page===============*/
     jQuery('.prv-step').on('click',function(){
         jQuery(this).parent().fadeOut();
               jQuery('.step1').fadeIn();
         jQuery('.point2').removeClass('active-step');
               jQuery('.point1').addClass('active-step');
       });
     jQuery('.next-step').on('click',function(){
        jQuery(this).parent().fadeOut();
        jQuery('.step2').fadeIn();
     jQuery('.point1').removeClass('active-step');
     jQuery('.point2').addClass('active-step');
     });
      /*===================Order page===============*/
		   // Get current path and find target link
  var path = window.location.pathname.split("/").pop();
  
  // Account for home page with empty path
  if ( path == '' ) {
    path = 'index.php';
  }
      
  var target = $('nav a[href="'+path+'"]');
  // Add active class to target link
  target.addClass('active');
		  /*===================custom package page===============*/
		   
		  jQuery('.acordul .leftli').on('click',function(){
			  jQuery(this).parent().toggleClass('active_price');			  
			   var text = jQuery(this).data('ptitle');
			   var price = jQuery(this).data('rel');
			   var li = '<li data-minus="'+price+'">'+text+' $'+price+'<span class="minusval">X</span></li>';
			    jQuery('.package-fill').append(li);
			    var price_plus =  jQuery('.customprice').val();
			    var total_price = Number(price_plus) + Number(price);	
			     jQuery('.customprice').empty().attr('value',total_price);
			 
			  });
		 
		jQuery(document).on('click','.package-fill .minusval',function(){
			
		var minus_price = jQuery(this).parent().data('minus');
			 var total = jQuery('.customprice').val();
			 var minus_value = Number(total)- Number(minus_price);
			 console.log('minus_value');
			 jQuery('.customprice').empty().attr('value',minus_value);
			 jQuery(this).parent().remove();
			});
  
       
		  /*===================custom package page End ===============*/
		  jQuery('span.close-custom,.close-order').on('click',function(){
			  jQuery('.request-form,.order-fm').fadeOut('fast');
		 });
		 jQuery('.rq-fm').on('click',function(){
			  jQuery('.request-form').fadeIn('fast');
		 });
	/*===================order form===============*/
	jQuery('.purplebtn').on('click',function(){
	   var price = jQuery(this).data('price');	
	   
		
		var package_image = jQuery(this).parent().parent().parent().find('img').attr('src');
		jQuery('.order-fm .pinkbx img').attr('src',package_image);
		 var package_title = jQuery(this).parent().parent().parent().find('h2').text();
		 jQuery('.order-fm .pinkbx h2').empty().append(package_title);	 
		 var package_titlesub = jQuery(this).parent().parent().parent().find('h3').text();
		 jQuery('.order-fm .pinkbx h3').empty().append(package_titlesub);		 
		 var package_content = jQuery(this).parent().parent().parent().find('.p-offers').html();
		 jQuery('.order-fm .pinkbx .p-offers').empty().append(package_content);
		 jQuery('.order-fm').fadeIn('fast');
		 jQuery('.package_name').attr('val',package_title);

     //jQuery('.user_package').attr('value',package_title);
     //jQuery('.user_price').attr('value',price);
	 
	  jQuery('.package_price').attr('value',price);
	  jQuery('.user_package').attr('value',package_title);	  
		jQuery('.user_price').attr('value','$'+price);
		});	 
		
		
		

///adeel

$('#order-mail').on('click', function(e) {
 
      e.preventDefault();
          
        $.ajax({
      
            url : 'includes/ajaxsubmitform.php',
            type: "POST",
      async:false,
            data:{
        'sender_name':$(".sender_name").val(),
        'sender_email':$(".sender_email").val(),
        'sender_phone':$(".sender_phone").val(),
        'sender_packege':$(".sender_packege").val(),
        'sender_price':$(".sender_price").val(),
        'business_name':$(".business_name").val(),
        'refernce_ideas':$(".refernce_ideas").val(),
        'brief':$(".brief").val(),
        'target':$(".target_msg").val(),
        'pyament_method':$(".pyament_method").val(),
        },// $(this).serialize(),
              
             success: function (data) {
              debugger;
          var radioValue = $("input[name='payment_method']:checked").val();
        // console.log(radioValue);
         if('stripe' == radioValue){
            jQuery('.stripe-button-el').trigger('click');
           }else{
             jQuery('.paysub').trigger('click');             
             }
    
      
        //alert('2'); 
                 //jQuery('.paysub').trigger('click');
            },
            error: function (jXHR, textStatus, errorThrown) {
                alert('Something wrong');
            }
        });
    
    });


	
// adeel end
		/*===================order form End===============*/	

		/*===================order form End===============*/		  
$("#owl-example-w").owlCarousel({

    items:1,
    loop:true,
    margin:30,
    autoplay:true,
    autoplayTimeout:300000,
    autoplayHoverPause:true,
    nav:true,
   dots: true
});
$("#owl-slide2").owlCarousel({
    items:2,
    loop:true,
	 navigation : true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
	responsive : {
    240 : {
       items:1,
    },
    768: {
      items:2,
	}}
});
$("#owl-logo").owlCarousel({
    items:4,
    loop:true,
    margin:30,
   navigation : true,
    autoplay:true,
    autoplayTimeout:2000,
    nav:true,
    autoplayHoverPause:true

});
$('.slidesecond').marquee({
    duration: 30000,
    delayBeforeStart: 500,
    direction: 'right',
	 gap:0,
    duplicated: true
});
$('.slidefirst').marquee({
    duration: 30000,
	  gap:0,
    delayBeforeStart: 500,
    direction: 'left',
    duplicated: true
});

$(".carouselTicker,.carouselTicker2").carouselTicker({
speed: 1,
delay: 30,
});
$(".carouselright,.carouselright2").carouselTicker({
speed: 1,
delay: 30,
direction: "next",
});

 $(window).load(function() {
	 $('.loader').hide();
   new WOW().init();
 });
 jQuery('.detail-appear').on('click',function(){
	 jQuery(this).parent().parent().parent().next('.details-show').show();
	 });
	 jQuery('.back-show').on('click',function(){
	 jQuery(this).parent().parent().parent().parent().hide();
	 });
	 

      $('#slides').slidesjs({
        width: 940,
        height: 528,
        navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 1800
          }
        },
        play: {
          effect: "fade",
          auto: true
        }
      });

        $('#slides2').slidesjs({
        width: 690,
        height: 430,
        navigation: {
          effect: "fade"
        },
        pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 1800
          }
        },
        play: {
          effect: "fade",
          auto: true
        }
      });
    $('.logo-portfolio,.stationery-portfolio').addClass('hide');
	$('.carouselTicker__item a').on('click',function(){
		var title = $(this).data('title');
		var image = $(this).data('image');	
		var url = $(this).data('url');
		$('.screen-slides img').attr('src',image);
		$('.popup-bg h2').empty().append(title);
		$('.visit-link').attr('href',url);
		$('.popupbox').css('display','flex');
		});
	jQuery('.close-btn').on('click',function(){
		$('.popupbox').css('display','none');
		});
});
    </script> 
<script src="https://www.paypalobjects.com/api/checkout.js"></script> 
<!--Start of Tawk.to Script--> 
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c387ab4361b3372892f9f61/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

 jQuery('a.live_chat_btn').attr('href','javascript:void(Tawk_API.toggle())');


 (function() {
 var CookieToolkit = function( text, acceptText, denyText ) {
  this.text = text;
  this.acceptText = acceptText;
  this.denyText = denyText;
  this.element = null;
  this.init();
 };

 CookieToolkit.prototype = {
  init: function() {
   this.create();
   this.load();
   this.actions();
  },
  load: function() {
   if( localStorage.getItem( "cookie-toolkit-accepted" ) === null ) {
    this._show();
   }
  },
  actions: function() {
   var accept = document.querySelector( "#cookie-toolkit-accept" ),
    deny = document.querySelector( "#cookie-toolkit-deny" ),
    self = this;

    accept.addEventListener( "click", function( e ) {
     e.preventDefault();
     localStorage.setItem( "cookie-toolkit-accepted", "yes" );
     self._hide();
    }, false);

    deny.addEventListener( "click", function( e ) {
     e.preventDefault();
     localStorage.setItem( "cookie-toolkit-accepted", "no" );
     self._hide();
    }, false);
  },
  create: function() {
   var element = document.createElement( "div" );
   this.element = element;
   var html = "<div id='cookie-toolkit-wrap'><div id='cookie-toolkit-text'>" + this.text + "</div>";


   element.id = "cookie-toolkit";
   html += "<div id='cookie-toolkit-btns'><button type='button' id='cookie-toolkit-accept'>" + this.acceptText + "</button>";
   html += "<button type='button' id='cookie-toolkit-deny'>" + this.denyText + "</button></div>";
   html += "</div>";

   element.innerHTML = html;

   document.body.appendChild( element );

  },
  _show: function() {
   var self = this;
   self.element.style.display = "block";
   setTimeout(function() {
    self.element.className = "visible";
   }, 500);
  },
  _hide: function() {
   var self = this;
   self.element.className = "";
   setTimeout(function() {
    self.element.style.display = "none";
   }, 500);
  }
 };

 document.addEventListener( "DOMContentLoaded", function() {
  var toolkit = new CookieToolkit( "We use cookies. Do you want to proceed?", "OK", "No, thanks" );
 });
})();
</script>

<?php include('includes/contctmail.php'); ?>
</html>