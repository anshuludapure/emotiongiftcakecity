

<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->

 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<!-- Mobile viewport optimized: h5bp.com/viewport -->

<meta name="viewport" content="width=device-width">

<meta charset="UTF-8" />

<meta name="google-site-verification" content="o_DksiVWGT-alAfxX752i97USpBDdeNT_bWr0QyP1UI" />

emotiontitle
<base href="http://www.emotiongift.com/" />
metakeyword
metadescription
<meta name='svg-x-verification' content='6d0f79cfc09a645bf9d59b2eb596cb63a9006667'/>


<link href="http://www.emotiongift.com/image/data/slider/Screenshot_4.png" rel="icon" />



<link rel="stylesheet" type="text/css" href="catalog/view/theme/pav_bikestore/stylesheet/bootstrap.css" />

<link rel="stylesheet" type="text/css" href="catalog/view/theme/pav_bikestore/stylesheet/stylesheet.css" />

<style type="text/css">

	
	

	
	
</style>


<link rel="stylesheet" type="text/css" href="catalog/view/theme/pav_bikestore/stylesheet/font.css" />

<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>



<link rel="stylesheet" type="text/css" href="catalog/view/theme/pav_bikestore/stylesheet/pavmegamenu.css" media="screen" />


<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/colorbox/colorbox.css" media="screen" />


<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />


<link rel="stylesheet" type="text/css" href="catalog/view/theme/pav_bikestore/stylesheet/font-awesome.min.css" />


<link rel="stylesheet" type="text/css" href="catalog/view/theme/pav_bikestore/stylesheet/bootstrap-responsive.css" />

<link rel="stylesheet" type="text/css" href="catalog/view/theme/pav_bikestore/stylesheet/theme-responsive.css" />






<script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>


<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>


<script type="text/javascript" src="catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>


<script type="text/javascript" src="catalog/view/javascript/common.js"></script>


<script type="text/javascript" src="catalog/view/theme/pav_bikestore/javascript/common.js"></script>


<script type="text/javascript" src="catalog/view/javascript/jquery/bootstrap/bootstrap.min.js"></script>





<script type="text/javascript" src="catalog/view/javascript/jquery/jquery.total-storage.min.js"></script>


<script type="text/javascript" src="catalog/view/javascript/jquery/jquery.cycle.js"></script>


<script type="text/javascript" src="catalog/view/javascript/jquery/colorbox/jquery.colorbox-min.js"></script>


<script type="text/javascript" src="catalog/view/javascript/jquery/tabs.js"></script>


<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

   

   

    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.js"></script>

 


<script>

 $(document).ready(function() {

 var myArr = [];

 

 $.ajax({

   type: "GET",

   url: "states.xml", // change to full path of file on server

   dataType: "xml",

   success: parseXml,

   complete: setupAC,

   failure: function(data) {

     alert("XML File could not be found");

   }

 });

 

 function parseXml(xml)

 {

   //find every query value

   $(xml).find("state").each(function()

   {

     myArr.push($(this).attr("label"));

   });

 }

 

 function setupAC() {

   $("input#searchBox").autocomplete({

   source: myArr,

   minLength: 1,

   select: function(event, ui) {

     $("input#searchBox").val(ui.item.value);

     $("#searchForm").submit();

   }

  });

 }

});

</script>



<!--[if lt IE 9]>


<script src="catalog/view/javascript/html5.js"></script>


<![endif]-->






<script type="text/javascript" src="js/script.js"></script>

 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-44335927-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
jsonlt
</head>

<body class="fs12 page-category none"  >

<section id="page-container">

<section id="header">

		<div class="container">

			<div class="row-fluid">

				<div class="span2">

				  
				  <div id="logo"><a href="http://www.emotiongift.com"><img src="http://www.emotiongift.com/image/data/slider/Screenshot_2.png" title="Emotiongift.com" alt="Emotiongift.com" /></a></div>



				  
				

				</div>



				<div class="header-right span7 offset3 pull-right ">

					<div class="login clearfix">

						
						Welcome visitor you can <a href="http://www.emotiongift.com/index.php?route=account/login">login</a> or <a href="http://www.emotiongift.com/index.php?route=account/register">create an account</a>.
						


					</div>

					<div class="wrap-link clearfix">					

						<div class="currency pull-left">

							<form action="http://www.emotiongift.com/index.php?route=module/currency" method="post" enctype="multipart/form-data">
  <div id="currency">                <a title="INR"><b> ₹</b></a>
                        <a title="US Dollar" onclick="$('input[name=\'currency_code\']').attr('value', 'USD'); $(this).parent().parent().submit();">$</a>
                <input type="hidden" name="currency_code" value="" />
    <input type="hidden" name="redirect" value="http://www.emotiongift.com/Cake" />
  </div>
</form>

							 <div class="">

								 <div id="">				

									
								 </div>

							</div>

						</div> 

						<div class="language pull-left">

							
						</div> 

						<div class="links pull-right">

							<a class="first" href="http://www.emotiongift.com/index.php?route=common/home">Home</a>

							<a href="http://www.emotiongift.com/index.php?route=account/wishlist" id="wishlist-total">Wish List (0)</a>

							<a href="http://www.emotiongift.com/index.php?route=account/account">My Account</a>

							<a href="http://www.emotiongift.com/index.php?route=checkout/cart">Shopping Cart</a>

							<a class="last" href="http://www.emotiongift.com/index.php?route=checkout/checkout">Checkout</a>

						</div>

					</div>

					

					<div class="cart-top pull-right">

						<div id="cart">
  <div class="heading">
    <h4>Shopping Cart</h4>
    <a><span id="cart-total">1 item(s) - 1,899.00 ₹</span></a></div>
  <div class="content">
        <div class="mini-cart-info">
      <table>
                <tr>
          <td class="image">            <a href="http://www.emotiongift.com/index.php?route=product/product&amp;product_id=5582"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine010-55x46.jpg" alt="Cream Rose Cake 1kg" title="Cream Rose Cake 1kg" /></a>
            </td>
          <td class="name"><a href="http://www.emotiongift.com/index.php?route=product/product&amp;product_id=5582">Cream Rose Cake 1kg</a>
            <div>
                          </div></td>
          <td class="quantity">x&nbsp;1</td>
          <td class="total">1,899.00 ₹</td>
          <td class="remove"><img src="catalog/view/theme/pav_bikestore/image/remove-small.png" alt="Remove" title="Remove" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=5582::' : $('#cart').load('index.php?route=module/cart&remove=5582::' + ' #cart > *');" /></td>
        </tr>
                      </table>
    </div>
    <div class="mini-cart-total">
      <table>
                <tr>
          <td class="right"><b>Sub-Total:</b></td>
          <td class="right">1,899.00 ₹</td>
        </tr>
                <tr>
          <td class="right"><b>Total:</b></td>
          <td class="right">1,899.00 ₹</td>
        </tr>
              </table>
    </div>
    <div class="checkout"><a href="http://www.emotiongift.com/index.php?route=checkout/cart">View Cart</a> | <a href="http://www.emotiongift.com/index.php?route=checkout/checkout">Checkout</a></div>
      </div>
</div>
					</div>

				</div>



				

			</div>

		</div>

</section>



<section id="mainnav">

	<div class="container">

		<div class="mainnav-inner">

			<div class="row-fluid">

				<div class="row-fluid">

				

<nav id="mainmenu" class="span9">	<div class="navbar">

<div class="navbar-inner"><a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">

	  <span class="icon-bar"></span>

	  <span class="icon-bar"></span>

	  <span class="icon-bar"></span>

	</a>

	<div id="logoMobile"><a href="http://www.emotiongift.com"><img src="catalog/view/theme/pav_bikestore/image/mlogo.png" title="Emotiongift.com" alt="Emotiongift.com" /> <span>emotiongift.com</span></a></div>

	<div id="mobileChart">

					<ul>

					<li>

						<div class="currency pull-left">

							<form action="http://www.emotiongift.com/index.php?route=module/currency" method="post" enctype="multipart/form-data">
  <div id="currency">                <a title="INR"><b> ₹</b></a>
                        <a title="US Dollar" onclick="$('input[name=\'currency_code\']').attr('value', 'USD'); $(this).parent().parent().submit();">$</a>
                <input type="hidden" name="currency_code" value="" />
    <input type="hidden" name="redirect" value="http://www.emotiongift.com/Cake" />
  </div>
</form>

							 <div class="">

								 <div id="">				

									
								 </div>

							</div>

						</div> 

					</li>

					<li id="topSearchMob">

						<input type="checkbox" id="inputSearchBx" name="inputSearchBx">

						<label for="inputSearchBx" class="showSearchMb">

							<i class="icon icon-search "></i>

							<i class="icon icon-remove"></i>

						</label>

						<div id="search" class="span3">

							<i class="icon icon-search"></i>

							<div class="button-search">Search</div>

							<input type="text" name="search" id="searchBox" placeholder="Search" value="" >

						</div>

					</li>

					<li>

						<div class="cart-top">

							<a href="javascript:void(0);" class="myCartMob"></a>

							<div id="cart">
  <div class="heading">
    <h4>Shopping Cart</h4>
    <a><span id="cart-total">1 item(s) - 1,899.00 ₹</span></a></div>
  <div class="content">
        <div class="mini-cart-info">
      <table>
                <tr>
          <td class="image">            <a href="http://www.emotiongift.com/index.php?route=product/product&amp;product_id=5582"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine010-55x46.jpg" alt="Cream Rose Cake 1kg" title="Cream Rose Cake 1kg" /></a>
            </td>
          <td class="name"><a href="http://www.emotiongift.com/index.php?route=product/product&amp;product_id=5582">Cream Rose Cake 1kg</a>
            <div>
                          </div></td>
          <td class="quantity">x&nbsp;1</td>
          <td class="total">1,899.00 ₹</td>
          <td class="remove"><img src="catalog/view/theme/pav_bikestore/image/remove-small.png" alt="Remove" title="Remove" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=5582::' : $('#cart').load('index.php?route=module/cart&remove=5582::' + ' #cart > *');" /></td>
        </tr>
                      </table>
    </div>
    <div class="mini-cart-total">
      <table>
                <tr>
          <td class="right"><b>Sub-Total:</b></td>
          <td class="right">1,899.00 ₹</td>
        </tr>
                <tr>
          <td class="right"><b>Total:</b></td>
          <td class="right">1,899.00 ₹</td>
        </tr>
              </table>
    </div>
    <div class="checkout"><a href="http://www.emotiongift.com/index.php?route=checkout/cart">View Cart</a> | <a href="http://www.emotiongift.com/index.php?route=checkout/checkout">Checkout</a></div>
      </div>
</div>
						</div>

					</li>

					<li class="dropdown userPrWrp">

			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon icon-user"></i> <span class="caret"></span></a>

			          <ul class="dropdown-menu pull-right">

			            <li><a class="first" href="http://www.emotiongift.com/index.php?route=common/home">Home</a></li>

			            <li><a href="http://www.emotiongift.com/index.php?route=account/wishlist" id="wishlist-total">Wish List (0)</a></li>

			            <li><a href="http://www.emotiongift.com/index.php?route=account/account">My Account</a></li>

			            <li><a href="http://www.emotiongift.com/index.php?route=checkout/cart">Shopping Cart</a></li>

			            <li><a class="last" href="http://www.emotiongift.com/index.php?route=checkout/checkout">Checkout</a></li>

			          </ul>

			        </li>

			        </ul>

				</div>

	<div class="nav-collapse collapse">

	

<ul class="nav navbar-navf megamenu"><li class="homepage">

					<a href="">

					<span class="menu-title">Home</span></a>

					</li><li class="parent dropdown ">

					<a class="dropdown-toggle" data-toggle="dropdown" href="Cake/SpecialCake"><span class="menu-title">Designer Cakes</span><b class="caret"></b></a><div class="dropdown-menu level1"><div class="dropdown-menu-inner"><div class="row-fluid"><div class="span12 mega-col" data-colwidth="12" data-type="menu"><div class="mega-col-inner"><ul><li class=" "><a href="anniversaries"><span class="menu-title">Anniversaries Cake</span></a></li> 

					<li class=" "><a href="valentinecakes"><span class="menu-title">Valentine Cake</span></a></li> 

					<li class=" "><a href="cartooncakes"><span class="menu-title">Cartoon Cakes</span></a></li> 
					<li class=" "><a href="Cake/1-kg-cakes"><span class="menu-title">1kg Cakes</span></a></li> 
					<li class=" "><a href="Cake/half-kg-cake"><span class="menu-title">half kg Cakes</span></a></li> 
					<li class=" "><a href="Cake"><span class="menu-title">Special Cakes</span></a></li> 

					</ul></div></div></div></div></div></li>
					
					
					
					
					<li class="parent dropdown ">

					<a class="dropdown-toggle" data-toggle="dropdown" href="http://www.emotiongift.com/flowers/combo">

					<span class="menu-icon" style="background:url('http://www.emotiongift.com/image/data/icons/Flowers-Heart-Roses-icon.png') no-repeat;">  <span class="menu-title">Flowers Combo</span><b class="caret"></b></span></a><div class="dropdown-menu level1"><div class="dropdown-menu-inner"><div class="row-fluid"><div class="span12 mega-col" data-colwidth="12" data-type="menu"><div class="mega-col-inner"><ul><li class=" "><a href="flowers/combo"><span class="menu-title">Flowers Gift Combo</span></a></li><li class=" "><a href="flowers/BasketArrangement"><span class="menu-title">Basket Arrangements</span></a></li><li class=" "><a href="flowers/bunch"><span class="menu-title">Bunches</span></a></li><li class=" "><a href="flowers/combo"><span class="menu-title">Popular combos</span></a></li><li class=" "><a href="flowers/GlassVaseArrangements"><span class="menu-title">Glass Vase Arrangements</span></a></li><li class=" "><a href="flowers/PremiumArrangements"><span class="menu-title">Premium Arrangements</span></a></li></ul></div></div></div></div></div></li><li class="parent dropdown ">

					<a class="dropdown-toggle" data-toggle="dropdown" href="Generic-gifts"><span class="menu-title">Occasion</span><b class="caret"></b></a><div class="dropdown-menu mega-cols cols3"><div class="dropdown-menu-inner"><div class="row-fluid"><div class="mega-col span3 col-1" data-type="menu"><div class="mega-col-inner"><ul><li class="parent dropdown-submenu mega-group"><a class="dropdown-toggle" data-toggle="dropdown" href="Anniversaries"><span class="menu-title">Wedding Anniversaries</span><b class="caret"></b></a><div class="dropdown-mega level2"><div class="dropdown-menu-inner"><div class="row-fluid"><div class="span12 mega-col" data-colwidth="12" data-type="menu"><div class="mega-col-inner"><ul><li class=" "><a href="gift-under-500"><span class="menu-title">Gifts Under 500</span></a></li><li class=" "><a href="Divinity"><span class="menu-title">Divinity</span></a></li><li class=" "><a href="SweetsandMeethai"><span class="menu-title">Sweets &amp; Meethai</span></a></li><li class=" "><a href="Flowersinabox"><span class="menu-title">Flowers in a box</span></a></li><li class=" "><a href="FoodGiftBasket"><span class="menu-title">Food Gift Basket</span></a></li></ul></div></div></div></div></div></li></ul></div></div><div class="mega-col span3 col-2" data-type="menu"><div class="mega-col-inner"><ul><li class="parent dropdown-submenu mega-group"><a class="dropdown-toggle" data-toggle="dropdown" href="Birthday"><span class="menu-title">Birthday</span><b class="caret"></b></a><div class="dropdown-mega level2"><div class="dropdown-menu-inner"><div class="row-fluid"><div class="span12 mega-col" data-colwidth="12" data-type="menu"><div class="mega-col-inner"><ul><li class=" "><a href="Birthday"><span class="menu-title">For Him</span></a></li><li class=" "><a href="ForKids"><span class="menu-title">For Kids</span></a></li><li class=" "><a href="Gift-for-her"><span class="menu-title">For Her</span></a></li><li class=" "><a href="HomeandGarden"><span class="menu-title">For Homemaker</span></a></li><li class=" "><a href="MidnightProducts"><span class="menu-title">Surprice Midnight</span></a></li><li class=" "><a href="personalized-gifts"><span class="menu-title">Personalized Gifts</span></a></li></ul></div></div></div></div></div></li></ul></div></div><div class="mega-col span6 col-3" data-type="menu"><div class="mega-col-inner"><ul><li class="parent dropdown-submenu mega-group"><a class="dropdown-toggle" data-toggle="dropdown" href="Congratulations"><span class="menu-title">Congratulations</span><b class="caret"></b></a><div class="dropdown-mega mega-cols cols2"><div class="dropdown-menu-inner"><div class="row-fluid"><div class="mega-col span6 col-1" data-type="menu"><div class="mega-col-inner"><ul><li class=" "><a href="Fragrance"><span class="menu-title">Fragrance</span></a></li><li class=" "><a href="Lucky-Bamboo"><span class="menu-title">Lucky Bamboo</span></a></li><li class=" "><a href="GetWellSoon"><span class="menu-title">Get Well Soon</span></a></li><li class=" "><a href="IamSorry"><span class="menu-title">I am Sorry</span></a></li><li class=" "><a href="Chocolates"><span class="menu-title">Chocolates</span></a></li><li class=" "><a href="GiftsforTopMetros"><span class="menu-title">Gifts Top Metros</span></a></li></ul></div></div><div class="mega-col span6 col-2" data-type="menu"><div class="mega-col-inner"><ul><li class=" "><a href="soft-toys"><span class="menu-title">soft toys</span></a></li><li class=" "><a href="Love"><span class="menu-title">Show Love</span></a></li><li class=" "><a href="Cosmetichamper"><span class="menu-title">Cosmetic hamper</span></a></li><li class=" "><a href="plants"><span class="menu-title">Plants</span></a></li><li class=" "><a href="MUGS"><span class="menu-title">Mugs</span></a></li></ul></div></div></div></div></div></li></ul></div></div></div></div></div></li><li class="parent dropdown ">



					<a class="dropdown-toggle" data-toggle="dropdown" href="Gift-for-her"><span class="menu-title">Girls</span><b class="caret"></b></a><div class="dropdown-menu level1"><div class="dropdown-menu-inner"><div class="row-fluid"><div class="mega-col span12" data-type="menu"><div class="mega-col-inner"><ul><li class=" "><a href="soft-toys"><span class="menu-title">soft toys</span></a></li><li class=" "><a href="Chocolates"><span class="menu-title">Chocolates Hamper</span></a></li><li class=" "><a href="cushion"><span class="menu-title">Cushion</span></a></li><li class=" "><a href="Generic-gifts?sort=p.price&amp;order=ASC"><span class="menu-title">low price gift</span></a></li><li class=" "><a href="Generic-gifts?page=7"><span class="menu-title">popular in Girls</span></a></li><li class=" "><a href="Generic-gifts?page=10"><span class="menu-title">Really beautiful</span></a></li><li class=" "><a href="plants"><span class="menu-title">Living Gifts</span><span class="menu-desc">Let your love live..</span></a></li></ul></div></div></div></div></div></li><li class="parent dropdown ">

					<a class="dropdown-toggle" data-toggle="dropdown" href="http://www.emotiongift.com/emotiongift/gift-for-him"><span class="menu-title">Boys</span><b class="caret"></b></a><div class="dropdown-menu level1"><div class="dropdown-menu-inner"><div class="row-fluid"><div class="span12 mega-col" data-colwidth="12" data-type="menu"><div class="mega-col-inner">

					<ul><li class=" "><a href="belts-for-him"><span class="menu-title">Belts</span></a></li><li class=" "><a href="drinking-accessories"><span class="menu-title">drinking accessories</span></a></li><li class=" "><a href="photo-frames"><span class="menu-title">photo frames</span></a></li><li class=" "><a href="clock"><span class="menu-title">clock</span></a></li><li class=" "><a href="tshirt"><span class="menu-title">Tshirts</span></a></li><li class=" "><a href="love"><span class="menu-title">Love</span></a></li></ul></div></div></div></div></div></li><li class="parent dropdown ">

					<a class="dropdown-toggle" data-toggle="dropdown" href="Cake"><span class="menu-title">cake</span><b class="caret"></b></a><div class="dropdown-menu level1"><div class="dropdown-menu-inner"><div class="row-fluid"><div class="span12 mega-col" data-colwidth="12" data-type="menu"><div class="mega-col-inner"><ul><li class=" "><a href="Cake/Egglesscake"><span class="menu-title">Eggless Cake</span></a></li><li class=" "><a href="Cake/FiveStarCake"><span class="menu-title">Five star cake</span></a></li><li class=" "><a href="Cake/RegularCake"><span class="menu-title">Regular cake</span></a></li><li class=" "><a href="Cake/SpecialCake"><span class="menu-title">Special Cake</span></a></li><li class=" "><a href="Chocolates"><span class="menu-title">Chocolates Hamper</span></a></li></ul></div></div></div></div></div></li></ul></div></div>

</div></nav>					

				<div id="search" class="span3">

					<div class="button-search"></div>

					<input type="text" name="search" id="searchBox" placeholder="Search" value="" >

				</div>

			</div>

				

		</div>

		 <div class="top-search">

	 
                    </div>

</div>

	</div>

</section>

 


<script>

				 

 $(document).ready(function() {

 var myArr = [];

 

 $.ajax({

   type: "GET",

   url: "city.xml", // change to full path of file on server

   dataType: "xml",

   success: parseXml,

   complete: setupAC,

   failure: function(data) {

     alert("XML File could not be found");

   }

 });

 

 function parseXml(xml)

 {

   //find every query value

   $(xml).find("state").each(function()

   {

     myArr.push($(this).attr("label"));

   });

 }

 

 function setupAC() {

   $("input#searchBoxCity").autocomplete({

   source: myArr,

   minLength: 1,

   select: function(event, ui) {

     $("input#searchBoxCity").val(ui.item.value);

     $("#searchForm").submit();

   }

  });

 }

});



function catgPage(){

var catid = $('select#cat').val();

var cityname = $('#searchBoxCity').val();

 

if(catid == 1){
	
 window.location="http://www.emotiongift.com/cities/cake/cake-"+cityname.toLowerCase()+".html";

}

if(catid == 2){

 window.location="http://www.emotiongift.com/flowers/bunch";

}

if(catid == 3){

 window.location="http://www.emotiongift.com/Cake/Egglesscake";

}

if(catid == 4){
if(cityname != ""){
	window.location="http://www.emotiongift.com/cities/flowers-cake-"+cityname.toLowerCase()+".html";
}else{
	window.location="http://www.emotiongift.com/flowers/combo";
}

}

if(catid == 5){

 window.location="http://www.emotiongift.com/Cake/SpecialCake";



}

if(catid == 6){

 window.location="http://www.emotiongift.com/valentinecakes";


}

if(catid == 7){
 window.location="http://www.emotiongift.com/cartooncakes";

}

if(catid == 8){
 window.location="http://www.emotiongift.com/Cake/SpecialCake";

}

}

</script>

<div class="container quickSearchWrpBox">

		<div id="quickSearchWrp">

			<h3>Quick Search</h3>

			<div class="quickSearchRow">

				<div class="quickSr">Quick Search</div>

				<div class="categoriesCol">

					<label for="cat">Category</label>

					<div>

						<select name="cat" id="cat">

				            <option value="" disabled="" >Select Category</option>

				            <option value="1">Special Cakes</option>

				            <option value="2">Flowers</option>

				            <option value="3">Eggless Cake </option>

				            <option value="4" selected="selected">Combo Gifts </option>

				            <option value="5">2 - 3 tier cakes</option>   

							<option value="6">Valentine Cakes</option>   

							<option value="7">Cartoon Cakes</option>   							
							
							<option value="8">Designer Cakes</option>
				        </select>

					</div>

				</div>

				<div>

					<label for="searchBoxCity">City</label>

					<div class="frmSearch">

				        <input type="text" id="searchBoxCity"  placeholder="City Name">

				        <input id="last_name_hidden" type="hidden">

				        <div id="suggesstion-box" ></div>

				    </div>

				</div>

				<div>

					 <button class="go-search " onclick="catgPage()">GO</button>

				</div>

			</div>

		</div>

</div>



<section id="sys-notification"><div class="container"><div id="notification"></div></div></section>

<section id="columns"><div class="container"><div class="row-fluid"><div class="breadcrumb">
        <a href="http://www.emotiongift.com/index.php?route=common/home">Home</a>
         &raquo; <a href="http://www.emotiongift.com/Cake">Online Cake Home Delivery Shop</a>
      </div>
<div>
	<div class="span3">
		<div id="column-left" class="sidebar">
    <div class="box category">
  <div class="box-heading"><h3><span>Categories</span></h3></div>
  <div class="box-content">
    <ul class="box-category">
            <li class="">
                <a href="http://www.emotiongift.com/anniversaries">anniversaries</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/flowers/combo">Best Seller</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/Birthday">Birthday</a>
                      </li>
            <li class="haschild">
                <a href="http://www.emotiongift.com/Cake">Cake</a>
                        <ul>
                    <li>
                        <a href="http://www.emotiongift.com/Cake/Egglesscake"> Eggless cake</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Cake/FiveStarCake"> Five Star Cake</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Cake/RegularCake"> Regular Cake</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Cake/SpecialCake"> Special Cake</a>
                      </li>
                  </ul>
              </li>
			 <li>
                        <a href="http://www.emotiongift.com/Cake/Egglesscake"> Eggless cake</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Cake/FiveStarCake"> Five Star Cake</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Cake/RegularCake"> Regular Cake</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Cake/SpecialCake"> Special Cake</a>
                      </li>  
            <li class="">
                <a href="http://www.emotiongift.com/Chocolates">Chocolates</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/ChristmasDayCourier">Christmas Day Courier</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/Congratulations">Congratulations</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/Cosmetichamper">Cosmetic hamper</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/CustomiseThali">Customise Thali</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/Divinity">Divinity</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/DryfruitsandMewa">Dryfruits &amp; Mewa</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/Flowersinabox">Flowers in a box</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/FoodGiftBasket">Food Gift Basket</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/ForHim">For Him</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/ForKids">For Kids</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/Fragrance">Fragrance</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/Generic-gifts">Generic Gifts</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/GetWellSoon">Get Well Soon</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/GiftCenter">Gift Center</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/gift-under-500">Gift under 500</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/GiftsforTopMetros">Gifts for Top Metros</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/GoodluckPlant">Good luck Plant</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/HomeandGarden">Home &amp; Garden</a>
                      </li>
            <li class="haschild">
                <a href="http://www.emotiongift.com/Home-decore">Home D�cor</a>
                        <ul>
                    <li>
                        <a href="http://www.emotiongift.com/Home-decore/coaters"> Coaters</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Home-decore/crockery"> Crockery</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Home-decore/cup_tea_set"> Cup and tea set</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Home-decore/curtains"> Curtains</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Home-decore/home-appliances"> Home Appliances</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Home-decore/home-furnishing"> Home furnishing</a>
                      </li>
                  </ul>
              </li>
            <li class="">
                <a href="http://www.emotiongift.com/HomeDecor">Home Decor</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/HomeFurnishing">Home Furnishing</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/HouseWarming">House Warming</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/IamSorry">I am Sorry</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/LeatherItems" class="active">Leather Items</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/LindtChocolateHampers">Lindt Chocolate Hampers</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/Love">Love</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/Lucky-Bamboo">Lucky-Bamboo</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/MidnightProducts">Midnight Products</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/mobiles">Mobile</a>
                      </li>
            <li class="haschild">
                <a href="http://www.emotiongift.com/Mothersday">Mothers day</a>
                        <ul>
                    <li>
                        <a href="http://www.emotiongift.com/Mothersday/BasketArrangement"> Basket Arrangement</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Mothersday/BunchesandBouquet"> Bunches and Bouquet</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Mothersday/ExclusiveArrangements"> Exclusive Arrangements</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Mothersday/Flowerswithcake"> Flowers with cake</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Mothersday/Flowerswithchoclates"> Flowers with choclates</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Mothersday/Flowerswithdryfruites"> Flowers with dryfruites</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Mothersday/FlowersWithFreshFruits"> Flowers With Fresh Fruits</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Mothersday/Flowerswithsweets"> Flowers with sweets</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Mothersday/GlassVase"> Glass Vase</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Mothersday/Midnight-mother-Products"> Midnight Products</a>
                      </li>
                  </ul>
              </li>
            <li class="">
                <a href="http://www.emotiongift.com/mothers-day-classic">mothers day classic</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/MothersdaySpecial">Mothers day Special</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/MUGS">MUGS</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/NewBorn">New Born</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/NewBornBaby">New Born Baby</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/new-year-gift">New year Emotional gift</a>
                      </li>
            <li class="haschild">
                <a href="http://www.emotiongift.com/index.php?route=product/category&amp;path=92">Occasion</a>
                        <ul>
                    <li>
                        <a href="http://www.emotiongift.com/index.php?route=product/category&amp;path=92_94"> Anniversary Gifts</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/index.php?route=product/category&amp;path=92_93"> Birthday</a>
                      </li>
                  </ul>
              </li>
            <li class="">
                <a href="http://www.emotiongift.com/personalized-gifts">Personalized Gifts</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/plants">Plants</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/SweetsandMeethai">Sweets &amp; Meethai</a>
                      </li>
            <li class="haschild">
                <a href="http://www.emotiongift.com/toys">Toys</a>
                        <ul>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Action-Figures"> Action Figures</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Art-Craft-Toys"> Art Craft Toys</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Baby-Rattles"> Baby Rattles</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Baby-Toys"> Baby Toys</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Blocks-Building-Sets"> Blocks  Building Sets</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Board-Games"> Board Games</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Card-Games"> Card Games</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Cars-Trains-Bikes"> Cars Trains Bikes</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Dolls-Doll-Houses"> Dolls-Doll Houses</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Learning-Educational-Toys "> Learning Educational Toys </a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Musical-Instruments-Toys"> Musical Instruments Toys</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Puzzles"> Puzzles</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Remote-Control-Toys"> Remote Control Toys</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Role-Play-Toys"> Role Play Toys</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/softtoys"> Soft Toys</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/toys/Toy-Guns-Weapons"> Toy Guns  Weapons</a>
                      </li>
                  </ul>
              </li>
            <li class="">
                <a href="http://www.emotiongift.com/valentine-day-gifts">Valentine Gift</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/Wedding">Wedding</a>
                      </li>
            <li class="haschild">
                <a href="http://www.emotiongift.com/flowers">Flowers</a>
                        <ul>
                    <li>
                        <a href="http://www.emotiongift.com/flowers/BasketArrangement"> Basket Arrangement</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/flowers/bunch"> bunch</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/flowers/combo"> combo</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/flowers/GlassVaseArrangements"> Glass Vase Arrangements</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/flowers/PremiumArrangements"> Premium Arrangements</a>
                      </li>
                  </ul>
              </li>
            <li class="haschild">
                <a href="http://www.emotiongift.com/Gift-for-her">Gift for her</a>
                        <ul>
                    <li>
                        <a href="http://www.emotiongift.com/Gift-for-her/Bags"> Bags</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Gift-for-her/salwar-suites"> fabdeal suites</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Gift-for-her/Jewellery"> Jewellery</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Gift-for-her/Leggings-for-her"> Leggings for her</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Gift-for-her/perfumes"> perfumes</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Gift-for-her/sarees-for-gift"> sarees and salwar</a>
                      </li>
                    <li>
                        <a href="http://www.emotiongift.com/Gift-for-her/silk_sarees"> silk sarees</a>
                      </li>
                  </ul>
              </li>
            <li class="">
                <a href="http://www.emotiongift.com/gift-for-him">Gift for him</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/soft-toys">Soft Toys</a>
                      </li>
            <li class="">
                <a href="http://www.emotiongift.com/ganesh-idols">Ganesh Idols</a>
                      </li>
          </ul>
  </div>
</div>
    <div class="box box-produce dark ">
  <div class="box-heading"><h3><span>Bestsellers</span></h3></div>
  <div class="box-content">
    <div class="box-product">
			  				 				  <div class="row-fluid">
				 
			  <div class="product-block span3"><div class="product-inner">
			  
								<div class="image">
							    	<a href="http://www.emotiongift.com/Dimpy-Stuff-Light-Pink-Cream-Bear-Couple-Soft-Toy-20-cm"><img src="http://www.emotiongift.com/image/cache/data/Dimpy-Stuff-Light-Pink-&amp;-Cream-Bear-Couple-Soft-Toy-20-cm-75x62.jpg" title="Dimpy Stuff Light Pink &amp; Cream Bear Couple Soft Toy-20 cm" alt="Dimpy Stuff Light Pink &amp; Cream Bear Couple Soft Toy-20 cm"></a>
		      </div>
								<div class="name">
						
		    	<a href="http://www.emotiongift.com/Dimpy-Stuff-Light-Pink-Cream-Bear-Couple-Soft-Toy-20-cm">Dimpy Stuff Light Pink &amp; Cream Bear Couple Soft Toy-20 cm</a></div>
				<div class="description">
					

Product Summary of Dimpy Stuff Light Pink &amp; Cream Bear...
				</div>
												<div class="price-cart">
								<div class="price">
				  				  325.00 INR				  				</div>
								<div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('402');" class="button"></div>
			</div>
			  <div class="wishlist-compare">
					  <a class="wishlist" onclick="addToWishList('402');" title="Add to Wish List">Add to Wish List</a>
					  <a class="compare" onclick="addToCompare('402');" title="Add to Compare">Add to Compare</a>
			 </div>
			  </div></div>
			  
			 			
			  				  
			  <div class="product-block span3"><div class="product-inner">
			  
								<div class="image">
							    	<a href="http://www.emotiongift.com/New-Year-Photo-Mug"><img src="http://www.emotiongift.com/image/cache/data/New-Year-Photo-Mug-75x62.jpg" title="New Year Photo Mug" alt="New Year Photo Mug"></a>
		      </div>
								<div class="name">
						
		    	<a href="http://www.emotiongift.com/New-Year-Photo-Mug">New Year Photo Mug</a></div>
				<div class="description">
					Keep the memories of the year passed, on these creative new ...
				</div>
												<div class="price-cart">
								<div class="price">
				  				  499.00 INR				  				</div>
								<div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('316');" class="button"></div>
			</div>
			  <div class="wishlist-compare">
					  <a class="wishlist" onclick="addToWishList('316');" title="Add to Wish List">Add to Wish List</a>
					  <a class="compare" onclick="addToCompare('316');" title="Add to Compare">Add to Compare</a>
			 </div>
			  </div></div>
			  
			 			
			  				  
			  <div class="product-block span3"><div class="product-inner">
			  
								<div class="image">
							    	<a href="http://www.emotiongift.com/New-Year-Photo-Mug-1"><img src="http://www.emotiongift.com/image/cache/data/New-Year-Photo-Mug-1-75x62.jpg" title="New Year Photo Mug 1" alt="New Year Photo Mug 1"></a>
		      </div>
								<div class="name">
						
		    	<a href="http://www.emotiongift.com/New-Year-Photo-Mug-1">New Year Photo Mug 1</a></div>
				<div class="description">
					Keep the memories of the year passed, on these creative new ...
				</div>
												<div class="price-cart">
								<div class="price">
				  				  499.00 INR				  				</div>
								<div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('317');" class="button"></div>
			</div>
			  <div class="wishlist-compare">
					  <a class="wishlist" onclick="addToWishList('317');" title="Add to Wish List">Add to Wish List</a>
					  <a class="compare" onclick="addToCompare('317');" title="Add to Compare">Add to Compare</a>
			 </div>
			  </div></div>
			  
			 				 </div>
							
			  
    </div>
  </div>
   </div>
    <div id="banner0" class="banner">
  </div>
<script type="text/javascript"><!--
$(document).ready(function() {
	$('#banner0 div:first-child').css('display', 'block');
});

var banner = function() {
	$('#banner0').cycle({
		before: function(current, next) {
			$(next).parent().height($(next).outerHeight());
		}
	});
}

setTimeout(banner, 2000);
//--></script>  </div>	</div>
	
 
<div class="span9">
<div id="content">  
 
  replace_need
    <!--<h2>Refine Search</h2>-->
  <div class="category-list">
            <ul>
                        <li><a href="http://www.emotiongift.com/Cake/1-kg-cakes">1 kg cakes</a></li>
                        <li><a href="http://www.emotiongift.com/Cake/anniversaries">Anniversaries cakes</a></li>
                        <li><a href="http://www.emotiongift.com/Cake/cartooncakes">Cartoon cakes</a></li>
                </ul>
        <ul>
                        <li><a href="http://www.emotiongift.com/Cake/Egglesscake">Eggless cake</a></li>
                        <li><a href="http://www.emotiongift.com/Cake/FiveStarCake">Five Star Cake</a></li>
                        <li><a href="http://www.emotiongift.com/Cake/half-kg-cake">Half kg Cakes</a></li>
                </ul>
        <ul>
                        <li><a href="http://www.emotiongift.com/Cake/RegularCake">Regular Cake</a></li>
                        <li><a href="http://www.emotiongift.com/Cake/SpecialCake">Special Cake</a></li>
                        <li><a href="http://www.emotiongift.com/Cake/valentinecakes">Valentine Cakes</a></li>
                </ul>
          </div>
      <div class="product-filter">
    <div class="display">
		<span>Display:</span>
		<span>List</span>
		<a onclick="display('grid');">Grid</a>
	</div>
     <div class="sort"><span>Sort By:</span>
      <select onchange="location = this.value;">
                        <option value="http://www.emotiongift.com/Cake?sort=p.sort_order&order=ASC" selected="selected">Default</option>
                                <option value="http://www.emotiongift.com/Cake?sort=pd.name&order=ASC">Name (A - Z)</option>
                                <option value="http://www.emotiongift.com/Cake?sort=pd.name&order=DESC">Name (Z - A)</option>
                                <option value="http://www.emotiongift.com/Cake?sort=p.price&order=ASC">Price (Low &gt; High)</option>
                                <option value="http://www.emotiongift.com/Cake?sort=p.price&order=DESC">Price (High &gt; Low)</option>
                                <option value="http://www.emotiongift.com/Cake?sort=rating&order=DESC">Rating (Highest)</option>
                                <option value="http://www.emotiongift.com/Cake?sort=rating&order=ASC">Rating (Lowest)</option>
                                <option value="http://www.emotiongift.com/Cake?sort=p.model&order=ASC">Model (A - Z)</option>
                                <option value="http://www.emotiongift.com/Cake?sort=p.model&order=DESC">Model (Z - A)</option>
                      </select>
    </div>
	<div class="limit"><span>Show:</span>
      <select onchange="location = this.value;">
                        <option value="http://www.emotiongift.com/Cake?limit=25">25</option>
                                <option value="http://www.emotiongift.com/Cake?limit=36" selected="selected">36</option>
                                <option value="http://www.emotiongift.com/Cake?limit=50">50</option>
                                <option value="http://www.emotiongift.com/Cake?limit=75">75</option>
                                <option value="http://www.emotiongift.com/Cake?limit=100">100</option>
                      </select>
    </div>
   <div class="product-compare"><a href="http://www.emotiongift.com/index.php?route=product/compare" id="compare-total">Product Compare (0)</a></div>
  </div>
   <div class="pagination"><div class="links"> <b>1</b>  <a href="http://www.emotiongift.com/Cake?page=2">2</a>  <a href="http://www.emotiongift.com/Cake?page=2">&gt;</a> <a href="http://www.emotiongift.com/Cake?page=2">&gt;|</a> </div><div class="results">Showing 1 to 36 of 55 (2 Pages)</div></div>
  
<div class="product-list"> <div class="row-fluid">
    			  <!-- <div class="row-fluid"> -->
	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/chocolate-cake-valentine"><img src="http://www.emotiongift.com/image/cache/data/cakes/245897,xcitefun-happy-birthday-cakes-3-240x200.jpg" title="1/2 kg chocolate cake" alt="1/2 kg chocolate cake" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/245897,xcitefun-happy-birthday-cakes-3.jpg" class="colorbox product-zoom" rel="colorbox" title="1/2 kg chocolate cake"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/chocolate-cake-valentine">1/2 kg chocolate cake</a></div>
      <div class="description">Tasty &amp; Yummy soft chocolate cake for every occassion .&...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                599.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 599.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('5608');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('5608');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('5608');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/2-tier-chocolate-cake-2kg_1"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine037-240x200.jpg" title="2-tier-chocolate-cake-2kg_1" alt="2-tier-chocolate-cake-2kg_1" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/vcake/Valentine037.jpg" class="colorbox product-zoom" rel="colorbox" title="2-tier-chocolate-cake-2kg_1"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/2-tier-chocolate-cake-2kg_1">2-tier-chocolate-cake-2kg_1</a></div>
      <div class="description">Celebrate birthdays, anniversaries, wedding days, etc. with ...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                2,699.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 2,699.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('6609');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('6609');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('6609');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<span class="product-label-special label">Sale</span>
    	    	<a href="http://www.emotiongift.com/Cake/butterfly-and-flower-cake-4kg_1"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine042-240x200.jpg" title="3 tier cartoon cake and flower 4kf" alt="3 tier cartoon cake and flower 4kf" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/vcake/Valentine042.jpg" class="colorbox product-zoom" rel="colorbox" title="3 tier cartoon cake and flower 4kf"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/butterfly-and-flower-cake-4kg_1">3 tier cartoon cake and flower 4kf</a></div>
      <div class="description">Flowers and butterflies both are great hits with kids as wel...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                <span class="price-old">4,999.00 ₹</span> <span class="price-new">4,299.00 ₹</span>
                        <br />
        <span class="price-tax">Ex Tax: 4,299.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('6615');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('6615');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('6615');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 	 <!-- </div> -->
	 				
    			  <!-- <div class="row-fluid"> -->
	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/cute-heart-shape-cake-half-kg"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine033-240x200.jpg" title="cute-heart-shape-cake-half-kg" alt="cute-heart-shape-cake-half-kg" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/vcake/Valentine033.jpg" class="colorbox product-zoom" rel="colorbox" title="cute-heart-shape-cake-half-kg"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/cute-heart-shape-cake-half-kg">cute-heart-shape-cake-half-kg</a></div>
      <div class="description">A yes for all the chocoholics ! Rich in chocolate, this cake...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                849.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 849.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('6605');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('6605');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('6605');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake?product_id=5595"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine023-240x200.jpg" title="Designer Rose Cake 2kg" alt="Designer Rose Cake 2kg" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/vcake/Valentine023.jpg" class="colorbox product-zoom" rel="colorbox" title="Designer Rose Cake 2kg"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake?product_id=5595">Designer Rose Cake 2kg</a></div>
      <div class="description">A beautiful cake of floral perfection ! Deliver your heartfe...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                3,699.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 3,699.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('5595');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('5595');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('5595');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/gorgeous-cake-2kg_1"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine035-240x200.jpg" title="gorgeous cake-2kg_1" alt="gorgeous cake-2kg_1" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/vcake/Valentine035.jpg" class="colorbox product-zoom" rel="colorbox" title="gorgeous cake-2kg_1"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/gorgeous-cake-2kg_1">gorgeous cake-2kg_1</a></div>
      <div class="description">Make any occasion extra special. Add a lot of fun and elegan...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                2,499.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 2,499.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('6607');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('6607');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('6607');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 	 <!-- </div> -->
	 				
    			  <!-- <div class="row-fluid"> -->
	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake?product_id=5577"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine005-240x200.jpg" title="Heart Gift Cake 2kg" alt="Heart Gift Cake 2kg" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/vcake/Valentine005.jpg" class="colorbox product-zoom" rel="colorbox" title="Heart Gift Cake 2kg"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake?product_id=5577">Heart Gift Cake 2kg</a></div>
      <div class="description">Sprinkle Sweetness, pack your heart and deliver it to the mo...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                3,299.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 3,299.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('5577');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('5577');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('5577');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/honey-forgive-me-1kg_1"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine039-240x200.jpg" title="honey-forgive-me-1kg_1" alt="honey-forgive-me-1kg_1" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/vcake/Valentine039.jpg" class="colorbox product-zoom" rel="colorbox" title="honey-forgive-me-1kg_1"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/honey-forgive-me-1kg_1">honey-forgive-me-1kg_1</a></div>
      <div class="description">Indulge your love in the classic flavours of vanilla butter ...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                1,199.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 1,199.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('6611');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('6611');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('6611');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/italian-almond-cake-1kg_1"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine040-240x200.jpg" title="italian-almond-cake-1kg_1" alt="italian-almond-cake-1kg_1" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/vcake/Valentine040.jpg" class="colorbox product-zoom" rel="colorbox" title="italian-almond-cake-1kg_1"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/italian-almond-cake-1kg_1">italian-almond-cake-1kg_1</a></div>
      <div class="description">Add a little nutty flavor to your celebrations. Get 1 kg of ...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                1,299.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 1,299.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('6612');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('6612');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('6612');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 	 <!-- </div> -->
	 				
    			  <!-- <div class="row-fluid"> -->
	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/mango-cake-half-kg_1"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine034-240x200.jpg" title="mango cake half-kg_1" alt="mango cake half-kg_1" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/vcake/Valentine034.jpg" class="colorbox product-zoom" rel="colorbox" title="mango cake half-kg_1"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/mango-cake-half-kg_1">mango cake half-kg_1</a></div>
      <div class="description">Get a fresh fluffy and delicious cake with amazing flavour a...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                799.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 799.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('6606');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('6606');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('6606');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake?product_id=5592"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine020-240x200.jpg" title="Red Rose Love Cake 1kg" alt="Red Rose Love Cake 1kg" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/vcake/Valentine020.jpg" class="colorbox product-zoom" rel="colorbox" title="Red Rose Love Cake 1kg"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake?product_id=5592">Red Rose Love Cake 1kg</a></div>
      <div class="description">In this season of love, choose the right way to say I love y...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                1,800.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 1,800.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('5592');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('5592');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('5592');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake?product_id=5578"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine006-240x200.jpg" title="Red Velvet Heart Cake 1kg" alt="Red Velvet Heart Cake 1kg" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/vcake/Valentine006.jpg" class="colorbox product-zoom" rel="colorbox" title="Red Velvet Heart Cake 1kg"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake?product_id=5578">Red Velvet Heart Cake 1kg</a></div>
      <div class="description">Get a lovely and charming cake to declare your love. Mesmeri...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                1,899.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 1,899.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('5578');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('5578');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('5578');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 	 <!-- </div> -->
	 				
    			  <!-- <div class="row-fluid"> -->
	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/take-a-step-2kg_1"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine036-240x200.jpg" title="take-a-step-2kg_1" alt="take-a-step-2kg_1" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/vcake/Valentine036.jpg" class="colorbox product-zoom" rel="colorbox" title="take-a-step-2kg_1"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/take-a-step-2kg_1">take-a-step-2kg_1</a></div>
      <div class="description">Add a little bit of sweets and double the happiness. On the ...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                2,499.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 2,499.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('6608');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('6608');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('6608');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/redvelvetfreshcream"><img src="http://www.emotiongift.com/image/cache/data/cakes/SpecialCake/red-velvet-fresh-cream-cake-1kg-for-corp_1-240x200.jpg" title="1 kg Red velvet fresh cream cake" alt="1 kg Red velvet fresh cream cake" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/SpecialCake/red-velvet-fresh-cream-cake-1kg-for-corp_1.jpg" class="colorbox product-zoom" rel="colorbox" title="1 kg Red velvet fresh cream cake"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/redvelvetfreshcream">1 kg Red velvet fresh cream cake</a></div>
      <div class="description">red velvet fresh cream 1 kg
.....</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                1,399.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 1,399.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('6656');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('6656');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('6656');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/blackforestcake-valentine"><img src="http://www.emotiongift.com/image/cache/data/cakes/black-forest-cake-240x200.jpg" title="1/2 half kg black forest cake" alt="1/2 half kg black forest cake" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/black-forest-cake.jpg" class="colorbox product-zoom" rel="colorbox" title="1/2 half kg black forest cake"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/blackforestcake-valentine">1/2 half kg black forest cake</a></div>
      <div class="description">A delight black forest cake for every occassion to celebrate...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                599.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 599.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('5606');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('5606');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('5606');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 	 <!-- </div> -->
	 				
    			  <!-- <div class="row-fluid"> -->
	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/2kgBlackforestCake"><img src="http://www.emotiongift.com/image/cache/data/flowers/2kg Blackforest Cake-240x200.jpg" title="2kg Black forest Cake" alt="2kg Black forest Cake" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/2kg Blackforest Cake.jpg" class="colorbox product-zoom" rel="colorbox" title="2kg Black forest Cake"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/2kgBlackforestCake">2kg Black forest Cake</a></div>
      <div class="description">2 Kg Black Forest Cake.....</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                2,399.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 2,399.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3838');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3838');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3838');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/2kgChocolateCake"><img src="http://www.emotiongift.com/image/cache/data/flowers/2kg Chocolate Cake-240x200.jpg" title="2kg Chocolate Cake" alt="2kg Chocolate Cake" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/2kg Chocolate Cake.jpg" class="colorbox product-zoom" rel="colorbox" title="2kg Chocolate Cake"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/2kgChocolateCake">2kg Chocolate Cake</a></div>
      <div class="description">2 KG Chocolate Cake......</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                2,399.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 2,399.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3839');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3839');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3839');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/2kgPineappleCake"><img src="http://www.emotiongift.com/image/cache/data/flowers/2kg Pineapple Cake-240x200.jpg" title="2kg Pineapple Cake" alt="2kg Pineapple Cake" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/2kg Pineapple Cake.jpg" class="colorbox product-zoom" rel="colorbox" title="2kg Pineapple Cake"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/2kgPineappleCake">2kg Pineapple Cake</a></div>
      <div class="description">2kg Pineapple Cake......</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                2,399.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 2,399.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3837');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3837');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3837');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 	 <!-- </div> -->
	 				
    			  <!-- <div class="row-fluid"> -->
	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/AlphabetShapeCake"><img src="http://www.emotiongift.com/image/cache/data/flowers/shape3-240x200.jpg" title="Alphabet Shape Cake" alt="Alphabet Shape Cake" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/shape3.jpg" class="colorbox product-zoom" rel="colorbox" title="Alphabet Shape Cake"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/AlphabetShapeCake">Alphabet Shape Cake</a></div>
      <div class="description">Mouth watering Delicious cake in alphabet shape 2kg......</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                2,749.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 2,749.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3841');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3841');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3841');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/black-forest-1kg"><img src="http://www.emotiongift.com/image/cache/data/cakes/images-240x200.jpg" title="Black Forest 1 kg" alt="Black Forest 1 kg" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/images.jpg" class="colorbox product-zoom" rel="colorbox" title="Black Forest 1 kg"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/black-forest-1kg">Black Forest 1 kg</a></div>
      <div class="description">Black Forest 1 kg
.....</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                1,149.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 1,149.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('6638');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('6638');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('6638');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/BlackforestCake-FiveStarBakery"><img src="http://www.emotiongift.com/image/cache/data/flowers/BlackforestCakeFiveStar-240x200.jpg" title="Blackforest Cake- Five Star Bakery" alt="Blackforest Cake- Five Star Bakery" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/BlackforestCakeFiveStar.jpg" class="colorbox product-zoom" rel="colorbox" title="Blackforest Cake- Five Star Bakery"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/BlackforestCake-FiveStarBakery">Blackforest Cake- Five Star Bakery</a></div>
      <div class="description">1Kg Black Forest Cake from Five Star Bakery......</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                3,799.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 3,799.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3828');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3828');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3828');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 	 <!-- </div> -->
	 				
    			  <!-- <div class="row-fluid"> -->
	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake?product_id=5581"><img src="http://www.emotiongift.com/image/cache/data/cakes/vcake/Valentine009-240x200.jpg" title="Blue Rose Cake 2kg" alt="Blue Rose Cake 2kg" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/vcake/Valentine009.jpg" class="colorbox product-zoom" rel="colorbox" title="Blue Rose Cake 2kg"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake?product_id=5581">Blue Rose Cake 2kg</a></div>
      <div class="description">A blue rose cake is a unique gift to add to the celebration ...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                3,499.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 3,499.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('5581');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('5581');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('5581');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/ButterscotchCakeCake28"><img src="http://www.emotiongift.com/image/cache/data/flowers/Butterscotch Cake28-240x200.jpg" title="Butterscotch Cake Cake28" alt="Butterscotch Cake Cake28" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/Butterscotch Cake28.jpg" class="colorbox product-zoom" rel="colorbox" title="Butterscotch Cake Cake28"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/ButterscotchCakeCake28">Butterscotch Cake Cake28</a></div>
      <div class="description">1kg Butterscotch Cake......</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                1,199.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 1,199.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3831');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3831');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3831');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/CarShapeCake"><img src="http://www.emotiongift.com/image/cache/data/flowers/shape11-240x200.jpg" title="Car Shape Cake" alt="Car Shape Cake" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/shape11.jpg" class="colorbox product-zoom" rel="colorbox" title="Car Shape Cake"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/CarShapeCake">Car Shape Cake</a></div>
      <div class="description">Delicious cake in the shape of car 3.5kg......</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                4,449.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 4,449.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3846');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3846');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3846');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 	 <!-- </div> -->
	 				
    			  <!-- <div class="row-fluid"> -->
	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/ChocolateCake-FiveStarBakery"><img src="http://www.emotiongift.com/image/cache/data/flowers/ChocolateCakeFiveStar-240x200.jpg" title="Chocolate Cake- Five Star Bakery" alt="Chocolate Cake- Five Star Bakery" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/ChocolateCakeFiveStar.jpg" class="colorbox product-zoom" rel="colorbox" title="Chocolate Cake- Five Star Bakery"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/ChocolateCake-FiveStarBakery">Chocolate Cake- Five Star Bakery</a></div>
      <div class="description">1KG Chocolate Cake from Five Star Bakery......</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                3,799.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 3,799.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3829');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3829');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3829');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/ChocolateCake-EL"><img src="http://www.emotiongift.com/image/cache/data/flowers/ELChocolateCake-240x200.jpg" title="Chocolate Cake-EL" alt="Chocolate Cake-EL" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/ELChocolateCake.jpg" class="colorbox product-zoom" rel="colorbox" title="Chocolate Cake-EL"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/ChocolateCake-EL">Chocolate Cake-EL</a></div>
      <div class="description">Eggless 1 kg Chocolate cake.....</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                1,199.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 1,199.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3825');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3825');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3825');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/ChocolateTruffleCake-1kg"><img src="http://www.emotiongift.com/image/cache/data/flowers/Truffle cake367-240x200.jpg" title="Chocolate Truffle Cake- 1kg" alt="Chocolate Truffle Cake- 1kg" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/Truffle cake367.jpg" class="colorbox product-zoom" rel="colorbox" title="Chocolate Truffle Cake- 1kg"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/ChocolateTruffleCake-1kg">Chocolate Truffle Cake- 1kg</a></div>
      <div class="description">1kg Chocolate Truffle cake.....</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                1,199.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 1,199.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3832');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3832');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3832');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 	 <!-- </div> -->
	 				
    			  <!-- <div class="row-fluid"> -->
	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/dark-chocolate"><img src="http://www.emotiongift.com/image/cache/data/cakes/dark-chocolate-cake-1kg-gifts-online-shopping-kerala-240x200.jpg" title="Dark chocolate 1 kg" alt="Dark chocolate 1 kg" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/dark-chocolate-cake-1kg-gifts-online-shopping-kerala.jpg" class="colorbox product-zoom" rel="colorbox" title="Dark chocolate 1 kg"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/dark-chocolate">Dark chocolate 1 kg</a></div>
      <div class="description">Dark chocolate 1 kg
.....</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                1,199.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 1,199.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('6637');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('6637');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('6637');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/half-kg-dark"><img src="http://www.emotiongift.com/image/cache/data/cakes/dark-chocolate-cake-1kg-gifts-online-shopping-kerala-240x200.jpg" title="Dark chocolate- 1/2 kg" alt="Dark chocolate- 1/2 kg" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/dark-chocolate-cake-1kg-gifts-online-shopping-kerala.jpg" class="colorbox product-zoom" rel="colorbox" title="Dark chocolate- 1/2 kg"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/half-kg-dark">Dark chocolate- 1/2 kg</a></div>
      <div class="description">Dark chocolate- 1/2 kg
.....</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                625.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 625.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('6642');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('6642');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('6642');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/DollShapeCake"><img src="http://www.emotiongift.com/image/cache/data/flowers/shape10-240x200.jpg" title="Doll Shape Cake" alt="Doll Shape Cake" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/shape10.jpg" class="colorbox product-zoom" rel="colorbox" title="Doll Shape Cake"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/DollShapeCake">Doll Shape Cake</a></div>
      <div class="description">Send this beautiful doll-shaped cake for your beautiful doll...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                4,449.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 4,449.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3848');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3848');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3848');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 	 <!-- </div> -->
	 				
    			  <!-- <div class="row-fluid"> -->
	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/DoubleNumberShapeCake"><img src="http://www.emotiongift.com/image/cache/data/flowers/shape4-240x200.jpg" title="Double Number Shape Cake" alt="Double Number Shape Cake" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/shape4.jpg" class="colorbox product-zoom" rel="colorbox" title="Double Number Shape Cake"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/DoubleNumberShapeCake">Double Number Shape Cake</a></div>
      <div class="description">Double Number Shape Cake 3.5kg......</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                4,949.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 4,949.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3842');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3842');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3842');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/FootballShapeCake"><img src="http://www.emotiongift.com/image/cache/data/flowers/shape5-240x200.jpg" title="Football Shape Cake" alt="Football Shape Cake" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/shape5.jpg" class="colorbox product-zoom" rel="colorbox" title="Football Shape Cake"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/FootballShapeCake">Football Shape Cake</a></div>
      <div class="description">A football shape cake for football lover 2.5kg......</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                3,399.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 3,399.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3843');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3843');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3843');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/FruitCake-FruitCake123"><img src="http://www.emotiongift.com/image/cache/data/flowers/Fruit Cake123-240x200.jpg" title="Fruit Cake-Fruit Cake123" alt="Fruit Cake-Fruit Cake123" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/Fruit Cake123.jpg" class="colorbox product-zoom" rel="colorbox" title="Fruit Cake-Fruit Cake123"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/FruitCake-FruitCake123">Fruit Cake-Fruit Cake123</a></div>
      <div class="description">1 kg Fresh fruit cake.....</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                1,199.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 1,199.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3836');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3836');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3836');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 	 <!-- </div> -->
	 				
    			  <!-- <div class="row-fluid"> -->
	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/Guitarshapedcake"><img src="http://www.emotiongift.com/image/cache/data/flowers/shape7-240x200.jpg" title="Guitar shaped cake" alt="Guitar shaped cake" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/flowers/shape7.jpg" class="colorbox product-zoom" rel="colorbox" title="Guitar shaped cake"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/Guitarshapedcake">Guitar shaped cake</a></div>
      <div class="description">A Guitar shape cake for music lover. 3.5kg......</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                4,449.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 4,449.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('3845');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('3845');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('3845');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/blackforestcake-valentine"><img src="http://www.emotiongift.com/image/cache/data/cakes/black-forest-cake-240x200.jpg" title="half kg black forest cake" alt="half kg black forest cake" /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/black-forest-cake.jpg" class="colorbox product-zoom" rel="colorbox" title="half kg black forest cake"><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/blackforestcake-valentine">half kg black forest cake</a></div>
      <div class="description">A delight black forest cake for every occassion to celebrate...</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                599.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 599.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('5607');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('5607');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('5607');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 				
    	    <div class="span4 product-block">
    	
            <div class="image">    	<a href="http://www.emotiongift.com/Cake/half-butterscotch"><img src="http://www.emotiongift.com/image/cache/data/cakes/butterscotch-240x200.jpg" title="half kg butterscotch " alt="half kg butterscotch " /></a>
      	      	<a href="http://www.emotiongift.com/image/data/cakes/butterscotch.jpg" class="colorbox product-zoom" rel="colorbox" title="half kg butterscotch "><span class="icon-zoom-in"></span></a>
      	      </div>
            <div class="name"><a href="http://www.emotiongift.com/Cake/half-butterscotch">half kg butterscotch </a></div>
      <div class="description">Half kg butterscotch cake
.....</div>
	  	 <div class="group-item"> 
	  <div class="price-cart">
            <div class="price">
                625.00 ₹                        <br />
        <span class="price-tax">Ex Tax: 625.00 ₹</span>
              </div>
               	  
      <div class="cart">
        <input type="button" value="Buy Now" onclick="addToCart('6658');" class="button" />
      </div>     
	  </div>
	  </div>
	  <div class="wishlist-compare">
		  <a class="wishlist" onclick="addToWishList('6658');" title="Add to Wish List" >Add to Wish List</a>
		  <a class="compare"  onclick="addToCompare('6658');" title="Add to Compare" >Add to Compare</a>
	 </div>
    </div>
	 	 <!-- </div> -->
	 				
      </div>
  </div>
 <div class="product-filter">
    <div class="display"><b>Display:</b> List <b>/</b> <a onclick="display('grid');">Grid</a></div>
   <div class="product-compare"><a href="http://www.emotiongift.com/index.php?route=product/compare" id="compare-total">Product Compare (0)</a></div>
  </div>
   <div class="pagination"><div class="links"> <b>1</b>  <a href="http://www.emotiongift.com/Cake?page=2">2</a>  <a href="http://www.emotiongift.com/Cake?page=2">&gt;</a> <a href="http://www.emotiongift.com/Cake?page=2">&gt;|</a> </div><div class="results">Showing 1 to 36 of 55 (2 Pages)</div></div>
      	<div class="content-bottom"> 
			
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/555ff7eb19120cff1850b82c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->		</div>
</div>
<script type="text/javascript"><!--
function display(view) {
	if (view == 'list') {
		$('.product-grid').attr('class', 'product-list');
		
		$('.product-list div.product_block').each(function(index, element) {
			html  = '<div class="right">';
			html += '  <div class="cart">' + $(element).find('.cart').html() + '</div>';
			html += '  <div class="wishlist">' + $(element).find('.wishlist').html() + '</div>';
			html += '  <div class="compare">' + $(element).find('.compare').html() + '</div>';
			html += '</div>';			
			
			html += '<div class="left">';
			
			var image = $(element).find('.image').html();
			
			if (image != null) { 
				html += '<div class="image">' + image + '</div>';
			}
			
			var price = $(element).find('.price').html();
			
			if (price != null) {
				html += '<div class="price">' + price  + '</div>';
			}
					
			html += '  <div class="name">' + $(element).find('.name').html() + '</div>';
			html += '  <div class="description">' + $(element).find('.description').html() + '</div>';
			
			var rating = $(element).find('.rating').html();
			
			if (rating != null) {
				html += '<div class="rating">' + rating + '</div>';
			}
				
			html += '</div>';
						
			$(element).html(html);
		});		
		
		$('.display').html('<span style="float: left;">Display:</span><a class="list active">List</a><a class="grid"  onclick="display(\'grid\');">Grid</a>');
	
		$.totalStorage('display', 'list'); 
	} else {
		$('.product-list').attr('class', 'product-grid');
		
		$('.product-grid div.product_block').each(function(index, element) {
			html = '';
			
			var image = $(element).find('.image').html();
			
			if (image != null) {
				html += '<div class="image">' + image + '</div>';
			}
			
			html += '<div class="name">' + $(element).find('.name').html() + '</div>';
			html += '<div class="description">' + $(element).find('.description').html() + '</div>';
			
			var price = $(element).find('.price').html();
			
			if (price != null) {
				html += '<div class="price">' + price  + '</div>';
			}
			
			var rating = $(element).find('.rating').html();
			
			if (rating != null) {
				html += '<div class="rating">' + rating + '</div>';
			}
						
			html += '<div class="cart">' + $(element).find('.cart').html() + '</div>';
			html += '<div class="wishlist">' + $(element).find('.wishlist').html() + '</div>';
			html += '<div class="compare">' + $(element).find('.compare').html() + '</div>';
			
			$(element).html(html);
		});	
					
		$('.display').html('<span style="float: left;">Display:</span><a class="list" onclick="display(\'list\');">List</a><a class="grid active">Grid</a>');
	
		$.totalStorage('display', 'grid');
	}
}

/* view = $.totalStorage('display'); */

if (1 == 1) {
	display('grid');
} else {
	display('grid');
}
//--></script> 
<script type="text/javascript"><!--
$(document).ready(function() {
	$('.colorbox').colorbox({
		overlayClose: true,
		opacity: 0.5,
		rel: false,
		onLoad:function(){
			$("#cboxNext").remove(0);
			$("#cboxPrevious").remove(0);
			$("#cboxCurrent").remove(0);
		}
	});
	 
});
//--></script>
</div> 
</div>



</div></div></section>
<section id="footer">
		<div class="footer-top">
		<div class="container">
							<div class="row-fluid">	
				<div class="span9"><div class="box pav-custom  ">
<div class="box-content"><div class="listmenu navbar">
<ul class="nav">
	<li><a href="http://www.emotiongift.com/city/flowers-delivery-in-indore.html"><img border="0" src="http://www.emotiongift.com/image/data/icons/Hearts-icon.png" />Indore</a></li>
	<li><a href="http://www.emotiongift.com/city/flowers-delivery-in-mumbai.html">Mumbai</a></li>
	<li><a href="http://www.emotiongift.com/city/flowers-delivery-in-ahmdabad.html" target="_blank">Ahmdabad </a></li>
	<li><a href="http://www.emotiongift.com/city/flowers-delivery-in-bhopal.html" target="_blank">Bhopal</a></li>
	<li><a href="http://www.emotiongift.com/city/flowers-delivery-in-delhi.html" target="_blank">Delhi</a></li>
	<li><a href="http://www.emotiongift.com/city/flowers-delivery-in-kanpur.html" target="_blank">Kanpur</a></li>
	<li><a href="http://www.emotiongift.com/city/flowers-delivery-in-manglore.html" target="_blank">Mangalore</a></li>
	<li><a href="http://www.emotiongift.com/city/flowers-delivery-in-bangalore.html" target="_blank">Banglore</a></li>
	<li><a href="http://www.emotiongift.com/city/flowers-delivery-in-manipal.htm" target="_blank">Manipal</a></li>
</ul>
</div>
</div>
</div>
</div>
					
								
				<div class="span3"><div class="box pav-custom  ">
<div class="box-content"><div class="social">
<h4 class="pull-left">Follow us on</h4>

<div class="custom_follow"><a class="facebook" href="#">facebook</a> <a class="twitter" href="#">twitter</a> <a class="mail" href="#">Mails</a> <a class="rss" href="#">rss</a></div>
</div>
</div>
</div>
</div>
				</div>	
					</div>
	</div>
		<div class="footer-center">
		<div class="container"><div class="row-fluid">
		  			<div class="column span3">
				<div class="box">
					<h3>Information</h3>
					<ul class="list">
					  					  <li><a href="http://www.emotiongift.com/index.php?route=information/information&amp;information_id=7">Cancellation</a></li>
					  					  <li><a href="http://www.emotiongift.com/Coupon-partner">Coupon partner of emotiongift</a></li>
					  					  <li><a href="http://www.emotiongift.com/courier-item-pin-code-list1">courier item pin code list</a></li>
					  					  <li><a href="http://www.emotiongift.com/testimonial">Feedback</a></li>
					  					  <li><a href="http://www.emotiongift.com/helppayumoney">How to pay with Payumoney</a></li>
					  					  <li><a href="http://www.emotiongift.com/payment">Payment Page</a></li>
					  					  <li><a href="http://www.emotiongift.com/paypal">Paypal page</a></li>
					  					  <li><a href="http://www.emotiongift.com/index.php?route=information/information&amp;information_id=8">Refund and returns</a></li>
					  					  <li><a href="http://www.emotiongift.com/city-list">send flowers to india</a></li>
					  					  <li><a href="http://www.emotiongift.com/about_us">About Us</a></li>
					  					  <li><a href="http://www.emotiongift.com/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>
					  					  <li><a href="http://www.emotiongift.com/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>
					  					  <li><a href="http://www.emotiongift.com/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
					  					</ul>
				</div>
			</div>
		  		  
		<div class="column span3">
			<div class="box">
				<h3>Customer Service</h3>
				<ul class="list">
				  <li><a href="http://www.emotiongift.com/index.php?route=information/contact">Contact Us</a></li>
				  <li><a href="http://www.emotiongift.com/index.php?route=account/return/insert">Returns</a></li>
				  <li><a href="http://www.emotiongift.com/index.php?route=information/sitemap">Site Map</a></li>
				   <li><a href="http://www.emotiongift.com/index.php?route=product/manufacturer">Brands</a></li>
				  <li><a href="http://www.emotiongift.com/index.php?route=account/voucher">Gift Vouchers</a></li>
				</ul>
			</div>
		</div>
		  
		<!-- <div class="column span3">
			<div class="box">
			<h3></h3>
			<ul class="list">
			  <li><a href="http://www.emotiongift.com/index.php?route=product/manufacturer"></a></li>
			  <li><a href="http://www.emotiongift.com/index.php?route=account/voucher"></a></li>
			  <li><a href="http://www.emotiongift.com/index.php?route=affiliate/account"></a></li>
			  <li><a href="http://www.emotiongift.com/index.php?route=product/special"></a></li>
			</ul>
		  </div>
		</div>-->
		  
		<div class="column span3">
			<div class="box">
				<h3>My Account</h3>
				<ul class="list">
				  <li><a href="http://www.emotiongift.com/index.php?route=account/account">My Account</a></li>
				  <li><a href="http://www.emotiongift.com/index.php?route=account/order">Order History</a></li>
				  <li><a href="http://www.emotiongift.com/index.php?route=account/wishlist">Wish List</a></li>
				  <li><a href="http://www.emotiongift.com/index.php?route=account/newsletter">Newsletter</a></li>
				  <li><a href="http://www.emotiongift.com/index.php?route=product/special">Specials</a></li>
				</ul>
			</div>
		</div>
		  
				<div class="column span3">
			<div class="box contact-us">
				<h3>Contact Us</h3>
				<ul>
	<li class="members">EmotionGift have 277&nbsp;guests and 26&nbsp;members online</li>
	<li class="phone">Phone: +91 <a href="tel:8533976452" onclick="sendmsg();">8533976452</a></li>
	<li class="phone">whatapp: +91 <a href="tel:8533976452" onclick="sendmsg();">8533976452</a></li>
	<li class="phone">Service partner&nbsp;- www.zomato.com&nbsp;</li>
	<li class="email">Email: support@emotiongift.com</li>
	<li class="email"><a href="http://www.emotiongift.com/Coupon-partner">Coupon Partner</a>: <a href="http://www.couponraja.in" target="_blank">couponraja.com</a> , <a href="http://www.compareraja.in" target="_blank">compareraja.com</a>,<a href="http://www.couponcanny.in" target="_blank">couponcanny.in</a>,</li>
</ul>
		</div>
		</div>
		 
		 </div> 
	</div></div>
	
 <!-- Modal -->
 <div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Choose City</h4>
      </div>
      <div class="modal-body">
        <table>
            <tr>
                <td width="100"><a href="http://www.emotiongift.com/agra">Agra</a> |</td> 
                <td width="100"><a href="http://www.emotiongift.com/agra">Indore</a> |</td> 
                <td width="100"><a href="http://www.emotiongift.com">Rest India</a></td>
            </tr>
        </table>
         
      </div>
    </div>
  </div>
</div>
  
      
<script type="text/javascript">
var hurl = document.URL;
/*
if( hurl == "http://www.emotiongift.com/"){
       if($.cookie('popup') != 1){
	   $.cookie('popup', '1');
	   
 $('#overlay').modal('show');
}
 
 }
 */
</script>
		<div class="footer-bottom">
		<div class="container">
						<div class="row-fluid">	
				<div class="span12"><div class="box pav-custom  ">
<div class="box-content"><div style=" background-color:#fff;">
<p style="margin: 0px; padding: 6px 0px; color: rgb(44, 43, 43); font-family: Arial, Helvetica, sans-serif; line-height: normal;  background-color:#fff;"><font face="Verdana" size="2"><b><span style="background-color: rgb(255, 255, 0);">Why choose Emotiongift.com ?</span></b></font></p>

<p style="margin: 0px; padding: 6px 0px; color: rgb(44, 43, 43); font-family: Arial, Helvetica, sans-serif; line-height: normal;  background-color:#fff;"><font face="Verdana"><span style="font-size: 8pt;"><img align="left" alt="same day delivery" border="0" height="35" src="http://www.emotiongift.com/tick1.gif" style="border: none;" width="20" />Same day delivery in all major and 2 tier cities.</span></font><br />
&nbsp;</p>

<p style="margin: 0px; padding: 6px 0px; color: rgb(44, 43, 43); font-family: Arial, Helvetica, sans-serif; line-height: normal;  background-color:#fff;"><font face="Verdana"><font face="Verdana"><span style="font-size: 8pt;"><img align="left" alt="Gifting Expert" border="0" height="35" src="http://www.emotiongift.com/tick1.gif" style="border: none;" width="20" />Zomato Services: Zomato helped us to grow and help our customer care to arrange deliveries.</span></font></font></p>

<p style="margin: 0px; padding: 6px 0px; color: rgb(44, 43, 43); font-family: Arial, Helvetica, sans-serif; line-height: normal;  background-color:#fff;"><font face="Verdana"><font face="Verdana"><span style="font-size: 8pt;">www.zomato.com<br />
<br />
<img align="left" alt="best logistic" border="0" height="35" src="http://www.emotiongift.com/tick1.gif" style="border: none;" width="20" />All-India Logistics: W</span></font><font face="Verdana" style="font-size: 8pt;">e understand that logistics is the backbone of good services .We have Franchise covering almost 200 cities all India. So you may send gifts to Jammu kashmir or tamil nadu - we cover them all, often delivering your gifts in a matter of hours! Same day delivery is available for major metros for orders placed by 10:30 AM IST. Tie-up with Blue Dart couriers, as well as Indian Post, allows us to deliver non-perishables to more than 2500 locations all over the country.</font></font></p>

<p style="margin: 0px; padding: 6px 0px; color: rgb(44, 43, 43); font-family: Arial, Helvetica, sans-serif; line-height: normal;"><font face="Verdana"><font face="Verdana"><span style="font-size: 8pt;"><img align="left" alt="Free Gift Card" border="0" height="35" src="http://www.emotiongift.com/tick1.gif" style="border: none;" width="20" />Free Greeting Card: We understand that you need to personalize your gift with your unique words for loved ones. So we offer a Free Greeting Card with most gifts, which are handwritten with your message, and delivered along with your gifts. Be it Rakhi or Diwali, Valentine or Mother's day, we have a greeting card to suit the occasion and complement your gift.</span></font></font></p>

<p style="margin: 0px; padding: 6px 0px; color: rgb(44, 43, 43); font-family: Arial, Helvetica, sans-serif; line-height: normal;"><font face="Verdana"><font face="Verdana"><span style="font-size: 8pt;"><img align="left" alt="Secure Payments" border="0" height="35" src="http://www.emotiongift.com/tick1.gif" style="border: none;" width="20" />Secure Payments: We accept all major credit cards (both International and Indian), along with 35+ Netbanking options, Debit Cards and more. You can pay with peace of mind, knowing that transactions are processed on a 128 bit SSL encrypted payment gateway.&nbsp;</span></font></font></p>

<p style="margin: 0px; padding: 6px 0px; color: rgb(44, 43, 43); font-family: Arial, Helvetica, sans-serif; line-height: normal;"><img align="left" alt="Secure Payments" border="0" height="35" src="http://www.emotiongift.com/tick1.gif" style="opacity: 0.9; color: rgb(44, 43, 43); font-family: Verdana; font-size: 10.6666669845581px; line-height: normal; border: none;" width="20" /></p>

<div><span style="font-size: 8pt; font-family: Verdana; color: rgb(44, 43, 43); line-height: normal;">Commitment to Excellence: get touch with us on support@emotiongift.com. call us &nbsp;</span><strong style="color: rgb(110, 111, 112); font-family: verdana, Arial, sans-serif; font-size: 11px; background-color: rgb(247, 247, 247);">8533976452</strong><span style="font-size: 8pt; font-family: Verdana; color: rgb(44, 43, 43); line-height: normal;">!</span></div>

<p style="margin: 0px; padding: 6px 0px; color: rgb(44, 43, 43); font-family: Arial, Helvetica, sans-serif; line-height: normal;"><font face="Verdana"><font face="Verdana"><span style="font-size: 8pt;">&nbsp;</span></font></font></p>

<p style="margin: 0px; padding: 6px 0px; color: rgb(44, 43, 43); font-family: Arial, Helvetica, sans-serif; line-height: normal;"><font face="Verdana"><span style="font-family: Verdana; font-size: 8pt;"><i>Happy Gifting!</i></span></font></p>
</div>
</div>
</div>
</div>
				</div>	
			
		</div>
	</div>
	
	<!--
	OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
	Please donate via PayPal to donate@opencart.com
	//-->
	<div id="powered"><div class="container"><div class="copyright pull-left">
			emotiongift.com © 2014-2017. 		<!-- Design By <a href="http://www.pavothemes.com" title="pavethemes - opencart themes clubs">PavoThemes</a>
	-->
	</div>
	<!-- <div class="paypal pull-right"><img src="image/data/paypal.png" alt=""><a href="#"></a></div> //-->
	
	</div></div>
</section>
<style>
#popup
{
	width:560px;
	height:360px;
	background:#00CC33;
	color:#fff;
	padding:20px;
	position:absolute;
	top:0%;
	left:50%;
	margin-top:-500px;
	margin-left:-250px;
}
#popup h1
{
	margin:0px;
	padding:0px;
}



</style>
<div id="callNowSticky">
	<a  href="tel:8533976452" onclick="sendmsg();">
		<div class="whatsappCnt">
			<i class="whatsappIcon"></i>
			<span>Whatsapp</span>
		</div>
		<div class="callICnt">
			<i class="callIcon"></i>
			<span>Call</span>
		</div>
		<div class="numberCnt">
			8533976452
			<span>will resposnd in 5 minutes</span>
		</div>
	</a>
 </div>

<script type="text/javascript">
$(document).ready(function() {
	
	/*jQuery('#payu').attr('checked', true);
	jQuery('#flat.flat').attr('checked', true);
	jQuery('#check1').prop('checked', false); */
	$("input[name='check_shipping_address']:checkbox").prop('checked',false);
	
    jQuery('.cart .button').on('click', function() {
    confirm("Thanks ! Click OK to Complete Order.");
 
    });
	
});
</script>
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</section> 
<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/69114/script.js');
</script>
</body></html>