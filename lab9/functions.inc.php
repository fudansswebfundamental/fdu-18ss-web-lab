<?php

function generateLink($url, $label, $class) {
   $link = '<a href="list.php?country=' . $url . '" role="button" class="' . $class . '">';
   $link .= $label;
   $link .= '</a>';
   return $link;
}


function outputPostRow($number)  {
    include("travel-data.inc.php");
    $images=$GLOBALS['images'];
    $img=$images[$number];
    $imgpath = $img["path"];
    $imgalt = $img["title"];
    echo "<li>
                 <a href='detail.php?id=$number' class='img-responsive'>
                 	<img src='images/square/$imgpath' alt='$imgalt'>
                 	<div class='caption'>
                 		<div class='blur'>
                 		</div>
                 		<div class='caption-text'>
                 			<h1>$imgalt</h1>
                 		</div>
                 	</div>
                 </a>
			 </li>";
}

/*
  Function constructs a string containing the <img> tags necessary to display
  star images that reflect a rating out of 5
*/
function constructRating($rating) {
    $imgTags = "";
    
    // first output the gold stars
    for ($i=0; $i < $rating; $i++) {
        $imgTags .= '<img src="images/star-gold.svg" width="16" />';
    }
    
    // then fill remainder with white stars
    for ($i=$rating; $i < 5; $i++) {
        $imgTags .= '<img src="images/star-white.svg" width="16" />';
    }    
    
    return $imgTags;    
}

?>