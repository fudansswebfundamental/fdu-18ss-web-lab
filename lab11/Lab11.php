<?php
//Fill this place
$con = new mysqli("localhost", "root", "yang200068", "travel");
if ($con->connect_error) {
    echo "数据库连接失败" . $con->connect_error;
} else {
    //echo "<script>window.alert('数据库连接成功')</script>";
}

//****** Hint ******
//connect database and fetch data here
$images = array();
$sql = "Select ImageId,Title,Description,Path from imagedetails";
$result = $con->query($sql);
while ($row = $result->fetch_assoc()) {
    $temp = array("imageId" => $row['ImageId'], "title" => $row['Title'], "description" => $row['Description'], "path" => $row['Path']);
    array_push($images, $temp);
}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Lab11</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>


        <link rel="stylesheet" href="css/captions.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css"/>

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
                            $sql = "select ContinentCode,ContinentName from continents";
                            $result = $con->query($sql);
                            //****** Hint ******
                            //display the list of continents
                            while ($row = $result->fetch_assoc()) {
                                $continent_code = $row["ContinentCode"];
                                $continent_name = $row['ContinentName'];
                                echo "<option value=$continent_code>$continent_name</option>";
                            }
                            ?>
                        </select>
                        <select name="country" class="form-control">
                            <option value="0">Select Country</option>
                            <?php
                            //Fill this place
                            $sql = "select CountryName,ISO from countries";
                            $result = $con->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value=' . $row['ISO'] . '>' . $row['CountryName'] . '</option>';
                            }
                            //****** Hint ******
                            /* display list of countries */
                            ?>
                        </select>
                        <input type="text" placeholder="Search title" class="form-control" name=title>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </form>

            </div>
        </div>


        <ul class="caption-style-2">
            <?php
            if (isset($_GET['country']) && isset($_GET['continent'])) {
                $countryName = $_GET['country'];
                $continentName = $_GET['continent'];
                if ($continentName == '0' && $countryName == '0') {
                    foreach ($images as $key => $values) {
                        $imageId = $values['imageId'];
                        $src = "images/square-medium/" . $values['path'];
                        $title = $values['title'];
                        $description = $values['description'];
                        echo "<li>";
                        echo "<a href='detail.php?id=$imageId' class='img-responsive' style='height: 225px;width: 225px;'>";
                        echo "<img src='$src' alt='$title'>";
                        echo "<div class='caption'>";
                        echo "<div class='blur'></div>";
                        echo "<div class='caption-text'>";
                        echo "<p>$description</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</a>";
                        echo "</li>";
                    }
                } else {
                    $sql = "select * from imagedetails where ContinentCode='$continentName' or  CountryCodeISO='$countryName';";
                    $result = $con->query($sql);
                    $not_existed = true;
                    while ($row = $result->fetch_assoc()) {
                        $not_existed = false;
                        $imageId = $row['ImageID'];
                        $src = "images/square-medium/" . $row['Path'];
                        $title = $row['Title'];
                        $description = $row['Description'];
                        echo "<li>";
                        echo "<a href='detail.php?id=$imageId' class='img-responsive'style='height: 225px;width: 225px;'>";
                        echo "<img src='$src' alt='$title'>";
                        echo "<div class='caption'>";
                        echo "<div class='blur'></div>";
                        echo "<div class='caption-text'>";
                        echo "<p>$description</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</a>";
                        echo "</li>";
                    }
                    if ($not_existed) {
                        echo "<h1>无相关搜索结果</h1>";
                    }
                }
            }
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


    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    </body>

    </html>
<?php
//print_r($selectedCountry);
?>