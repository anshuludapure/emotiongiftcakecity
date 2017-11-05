<?php
$db_addr = 'localhost';		// address of MySQL server.
$db_user = 'root';		// Username to access server.
$db_pass = '';		// Password access server.
$db_name = 'cities';	// Name of database to connect to.
$con=mysqli_connect("localhost","root","","cities");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM statelist");

$filename = "samplepage1.php";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
while($row = mysqli_fetch_array($result)) {
  echo $row['city_name'] . " " . $row['state'];
  echo "<br>";
  $pagename = "cake-".strtolower($row['city_name']).".html";



 $text_to_add = '<div class="category-info">'."<h2>www.emotiongift.com home delivers the cakes in <b>".$row['city_name']."</b> "."Call/whatsapp "."<b><a href='tel:8533976452' onclick='sendmsg();'>8533976452</a></b>". " For lowest price of fresh  and delicious cake and flowers in <b>".$row['city_name']."</b>"."</h2><br><h1> Cake Shop in ".$row['city_name']."</h1>
    </h2><!-- <h2>  Make your special occasions with beautiful and sweeter with fresh  and delicious 
cakes delivered to you.Send a sweet sentiment to your special person with a beautiful flowers bouquet with cake.</h2>--></div>" ;

$re_description = str_replace('replace_need',$text_to_add ,$contents);
$meta_description_to_add = '<meta name="description" content="Cake home Delivery in '.$row['city_name'].',flowers with cake in '.$row['city_name'].',cake shops in '.$row['city_name'].'" />';
 
$meta_meta_to_add = '<meta name="keywords" content="Deliver cakes  '.$row['city_name'].',Flowers, Cake in '.$row['city_name'].',Cake Delivery   '.$row['city_name'].',Low Price Combo Gifts in '.$row['city_name'].'" />';
 
$re_meta_description = str_replace('metadescription',$meta_meta_to_add ,$re_description);

$re_meta_keyword = str_replace('metakeyword',$meta_description_to_add ,$re_meta_description);

$title_to_add = "<title>Cake Shop ".$row['city_name']." , Cake Delivery  ".$row['city_name']."</title>";
$re_with_title = str_replace('emotiontitle',$title_to_add ,$re_meta_keyword);



$jsonlitstring = '<script type=\'application/ld+json\'> 
{
  "@context": "http://www.schema.org",
  "@type": "LocalBusiness",
  "name": "emotiongift cake shop",
  "image" : "http://www.emotiongift.com/image/data/slider/Screenshot_2.png",
  "telephone" : "8533976452",
  "url": "http://www.emotiongift.com",
  "sameAs": [
    "http://www.emotiongift.com/cities/cake/cake-mumbai.html"
  ],
  "logo": "http://www.emotiongift.com/image/data/slider/Screenshot_2.png",
  "description": "cake home delivery , designer cake, photo cake, Anniversary cake ,midnight delivery",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Gandhi Chowk",
    "addressLocality": "'.$row['city_name'].'",
    "addressRegion": "'.$row['state'].'",
    "addressCountry": "india"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "'.$row['latitude'].'",
    "longitude": "'.$row['longitude'].'"
  },
  "review" : {
    "@type" : "Review",
    "reviewRating" : {
      "@type" : "Rating",
      "ratingValue" : "5"
    },
	"author" : "Cake shop"
  },
  "priceRange" : "₹550 - ₹5540",
  "hasMap": "https://www.google.co.in/maps/@18.96,72.82,15z",
  "openingHours": "Mo 08:00-21:30 Tu, We, Th, Fr, Sa, Su -"
 
}
 </script>
';



$citybasedpage = str_replace('jsonlt', $jsonlitstring ,$re_with_title);


/*
$onload_body_function = ' onload="counthits();"';
$bodload_function = str_replace('bodyloadfunction',$onload_body_function,$re_with_title );
*/
// $citybasedpage = str_ireplace('mumbai',strtolower($row['city_name']),$re_with_title);
$file = fopen($pagename,"w");
echo fwrite($file,$citybasedpage);
fclose($file);
 
}

mysqli_close($con);
?>
 