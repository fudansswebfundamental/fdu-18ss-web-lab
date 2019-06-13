<?php
//Fill this place
include 'functions.inc.php';
//****** Hint ******
//connect database and fetch data here
$conn=mysqli_connect('localhost','root','3226925898@@');
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
<!--    --><?php //include 'left.inc.php'; ?>



    <!-- Page Content -->
    <main class="container">
        <div class="panel panel-default">
          <div class="panel-heading">Filters</div>
          <div class="panel-body">
            <form action="Lab11.php" method="get" class="form-horizontal">
              <div class="form-inline">
              <select name="continent" class="form-control" id="continentss">
                <option value="0">Select Continent</option>

                <?php
                //Fill this place

                //****** Hint ******
                //display the list of continents

                $result=mysqli_query($conn,"SELECT * FROM continents");
                while($row = $result->fetch_assoc()) {
                  echo '<option value=' . $row['ContinentCode'] . ' >' . $row['ContinentName'] . '</option>';
                }

                ?>
              </select>

              <select name="country" class="form-control" id="countries">
                <option value="0">Select Country</option>
                <?php 
                //Fill this place

                //****** Hint ******
                /* display list of countries */
                if (!isset($_GET['con'])){
                    $result=mysqli_query($conn,"SELECT * FROM countries");
                }
                else{
                    $con=$_GET['con'];
                    $result=mysqli_query($conn,"SELECT * FROM countries WHERE Continent=$conn");
                }
                while($row1 = $result->fetch_assoc()) {
                  echo '<option value=' . $row1['ISO'] . '>' . $row1['CountryName'] . '</option>';
               }
                ?>
              </select>    
              <input type="text"  placeholder="Search title" class="form-control" name="title">

              <input type="submit" class="btn btn-primary" value="Filter"></input>

              </div>
            </form>
<?php

?>
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


                $conn=mysqli_connect('localhost','root','3226925898@@');
                mysqli_select_db($conn,"travel");

                if (!isset($_GET['continent'])){}
                else {
                    $continent = $_GET['continent'];
                    $country=$_GET['country'];
                    $title=$_GET['title'];

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
                        echo "<li style='padding: 5px'>";
                        echo "<a href=\"detail.php?id=????\" class=\"img-responsive\">";
                        echo "<img src=$ppath alt=\"????\"  width='210px' height='160px'>";
                        echo "<div class=\"caption\">";
                        echo "<div class=\"blur\">";
                        echo "<p>$title</p>";
                        echo " <div class=\"caption-text\">";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</a>";
                        echo "</li>";
                    }
                }

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