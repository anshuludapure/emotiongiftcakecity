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

$result = mysqli_query($con,"SELECT * FROM cities");
 $xmlfile = '<?xml version="1.0" encoding="UTF-8"?>
	        <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
while($row = mysqli_fetch_array($result)) {
  echo $row['city_name'] . " " . $row['state'];
  echo "<br>";
   $pagename = "http://www.onlinecake.net/cities/cake/cake-".strtolower($row['city_name']).".html";
 
 
  $xmlfile .= "<url>
                <loc>".$pagename."</loc>
                <lastmod>2017-03-27T23:55:42+01:00</lastmod>
                <changefreq>monthly</changefreq>
                <priority>0.8</priority>
            </url>";
}
$xmlfile .= "</urlset>";
$file = fopen("sitemap5.xml","w");
echo fwrite($file,$xmlfile);
fclose($file);
mysqli_close($con);
?>
 