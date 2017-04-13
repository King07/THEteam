<?php 

$url = "https://d1qh70jus598uk.cloudfront.net/api/v1/experience/searchWithOthers?fieldset=reactsearch&page=1&pagesize=16&query=a&subcategory.items%5B%5D=home-dinners&version=1.137.0-c969a7f";


$url2 = "https://d1qh70jus598uk.cloudfront.net/api/v1/experience/searchWithOthers?duration.items%5B%5D=half-day&duration.items%5B%5D=less-than-3-hours&fieldset=reactsearch&guests=1&location.city=amsterdam&location.country=the%20netherlands&page=1&pagesize=16&price.items%5B%5D=cheap&price.items%5B%5D=medium-priced&subcategory.items%5B%5D=activities&subcategory.items%5B%5D=food-tours-tastings&subcategory.items%5B%5D=home-dinners&subcategory.items%5B%5D=tours&version=1.137.0-c969a7f";


function httpGet( $url )
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url); // set url
  curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); // set browser/user agent
  //curl_setopt($ch, CURLOPT_HEADERFUNCTION, 'read_header'); // get header
  $resp = curl_exec($ch);
  curl_close($ch);
  return $resp;
}

function dumpArray( $array )
{
	echo "<pre>";
	print_r( $array );
	echo "</pre>";
	return;
}


dumpArray(httpGet($url));


 ?>