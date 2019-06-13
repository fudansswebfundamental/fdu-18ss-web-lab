<?php
//Fill this place
include 'functions.inc.php';
//****** Hint ******
//connect database and fetch data here
$conn = new mysqli('localhost','root','ESuZ9BG5NCGjMjCc');
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

mysqli_select_db($conn,"travel");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lab11</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    

    <link rel="stylesheet" href="css/captions.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />    

</head>

<body>
    <?php include 'header.inc.php'; ?>
    


    <!-- Page Content -->
    <main class="container">
        <div class="panel panel-default">
          <div class="panel-heading">Filters</div>
          <div class="panel-body">
            <form action="Lab11.php" method="get" class="form-horizontal">
              <div class="form-inline">
              <select name="continent" class="form-control">
                <option value="0">Select Continent</option>
                <?php
                //Fill this place

                //****** Hint ******
                //display the list of continents

                $result = mysqli_query($conn,"SELECT * FROM continents");
                while($row = $result->fetch_assoc()) {
                  echo '<option value=' . $row['ContinentCode'] . '>' . $row['ContinentName'] . '</option>';
                }

                ?>
              </select>     
              
              <select name="country" class="form-control">
                <option value="0">Select Country</option>
                <?php 
                //Fill this place

                //****** Hint ******
                /* display list of countries */

                if (!isset($_GET['con'])){
                    $result = mysqli_query($conn,"SELECT * FROM countries");
                }
                else{
                    $con=$_GET['con'];
                    $result = mysqli_query($conn,"SELECT * FROM countries WHERE Continent=$conn");
                }
                while($row1 = $result->fetch_assoc()) {
                    echo '<option value=' . $row1['ISO'] . '>' . $row1['CountryName'] . '</option>';
                }
                ?>
              </select>    
              <input type="text"  placeholder="Search title" class="form-control" name=title>
              <button type="submit" class="btn btn-primary">Filter</button>
              </div>
            </form>

          </div>
        </div>     
                                    

		<ul class="caption-style-2">
            <?php 
            //Fill this place

            //****** Hint ******
            /* use while loop to display images that meet requirements ... sample below ... replace ???? with field data
            <li>
              <a href="detail.php?id=????" class="img-responsive">
                <img src="images/square-medium/????" alt="????">
                <div class="caption">
                  <div class="blur"></div>
                  <div class="caption-text">
                    <p>????</p>
                  </div>
                </div>
              </a>
            </li>
            */


            $conn = mysqli_connect('localhost','root','ESuZ9BG5NCGjMjCc');
            mysqli_select_db($conn,"travel");

            if (!isset($_GET['continent'])){

            }
            else {
                $continent = $_GET['continent'];
                $country = $_GET['country'];
                $title = $_GET['title'];

                if ($continent=='0') {
                    if ($country=='0'){
                        if ($title==''){
                            $result = mysqli_query($conn, "SELECT * FROM imageDetails");
                        }
                        else{
                            $result = mysqli_query($conn, "SELECT * FROM imageDetails WHERE Title LIKE '%$title%'");
                        }
                    }
                    else{
                        $result = mysqli_query($conn, "SELECT * FROM imageDetails WHERE CountryCodeISO='$country'");
                    }
                }
                else{
                    $result = mysqli_query($conn, "SELECT * FROM imageDetails WHERE ContinentCode='$continent'");
                }

                while ($row = $result->fetch_assoc()) {
                    $image = $row["Path"];
                    $title = $row["Title"];
                    $ppath = 'images/square-medium/' . $image;
                    echo "<li>
                           <a href=\"detail.php?id=????\" class=\"img-responsive\">
                            <img src=$ppath alt=\"????\">
                            <div class=\"caption\">
                    <div class=\"blur\"></div>
                    <div class=\"caption-text\">
                     <p>$title</p>
                    </div>
                    </div>
                   </a>
                 </li>";
                }
            }
            /*$href1=array("detail.php?id=22","detail.php?id=54","detail.php?id=7","detail.php?id=19","detail.php?id=46","detail.php?id=6","detail.php?id=60","detail.php?id=58","detail.php?id=75","detail.php?id=77","detail.php?id=27","detail.php?id=2","detail.php?id=24","detail.php?id=13","detail.php?id=101","detail.php?id=102");
                        $src1=array("6114850721.jpg","9495574327.jpg","5856697109.jpg","5855729828.jpg","8711645510.jpg","6114907897.jpg","9504609042.jpg","9498358806.jpg","8710513053.jpg","8710247776.jpg","6114867983.jpg","6592914823.jpg","6114960821.jpg","6596048341.jpg","21587937686.jpg","22182041615.jpg");
                        $alt1=array("View of Cologne","Arch of Septimus Severus","Lunenburg Port","British Museum","Temple of Hephaistos","At the top of Sulpher Mountain","Pazzi Chapel at Santa Croce","Florence Duomo","Ancient Theatre of Dionysos","Dusk on Santorini","New National Gallery","Calgary Downtown","Downtown Frankfurt","Central Park","Seattle Scene","Millennium Park Chicago");
                        $href1length=count($href1);
                        for($x=0;$x<$href1length;$x++){
                            echo "<li>
                            <a href=\"$href1[$x]\" class=\"img-responsive\">
                            <img src=\"images/square/$src1[$x]\" alt=\"$alt1[$x]\">
                            <div class=\"caption\">
                                <div class=\"blur\"></div>
                                <div class=\"caption-text\">
                                    <h1>$alt1[$x]</h1>
                                </div>
                            </div>
                                </a>
                        </li>        ";
                        }*/
            ?>
       </ul>       

      
    </main>
    
    <footer>
        <div class="container-fluid">
                    <div class="row final">
                <p>Copyright &copy; 2017 Creative Commons ShareAlike</p>
                <p><a href="#">Home</a> / <a href="#">About</a> / <a href="#">Contact</a> / <a href="#">Browse</a></p>
            </div>            
        </div>
        

    </footer>
    
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>