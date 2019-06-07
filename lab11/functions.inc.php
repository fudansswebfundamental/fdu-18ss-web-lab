<?php

function findByContinent($result){
        while($row = $result->fetch_assoc()) {
            $imgid = $row['ImageID'];
            $path = $row['Path'];
            $title = $row['Title'];
            $continent = $row['ContinentCode'];
            echo "<li>
              <a href='detail.php?id=$imgid' class='img-responsive'>
                <img src='images/square-medium/$path' alt='$continent' style='width: 225px;height: 225px'>
                <div class='caption'>
                  <div class='blur'></div>
                  <div class='caption-text'>
                    <h1>$title</h1>
                  </div>
                </div>
              </a>
            </li>";
        }


//    $sql='SELECT ImageID,Path,Title,ContinentCode FROM ImageDetails';
//    $result=mysqli_query($conn,$sql);
//    while($row = $result->fetch_assoc()) {
//        $imgid = $row['ImageID'];
//        $path = $row['Path'];
//        $title = $row['Title'];
//        $continent = $row['ContinentCode'];
//        if ($continent1 || $continent2) {
//            if ($continent1 == $continent || $continent2 == $continent) {



//        } else {
//        echo "<li>
//              <a href='detail.php?id=$imgid' class='img-responsive'>
//                <img src='images/square-medium/$path' alt='$continent'style='width: 225px;height: 225px'>
//                <div class='caption'>
//                  <div class='blur'></div>
//                  <div class='caption-text'>
//                    <h1>$title</h1>
//                  </div>
//                </div>
//              </a>
//            </li>";
//        }
//    }

}

function generateLink($url, $label, $class) {
   $link = '<a href="' . $url . '" class="' . $class . '">';
   $link .= $label;
   $link .= '</a>';
   return $link;
}


function outputPostRow($number)  {
    include("travel-data.inc.php");
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