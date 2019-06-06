<?php
include 'travel-data.inc.php';




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chapter 12</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/captions.css" />

</head>

<body>
    <?php include 'header.inc.php'; ?>
    
    <!-- Page Content -->
    <main class="container">
     

        <div class="btn-group countryButtons" role="group" aria-label="...">
              <a role="button" class="btn btn-default" href="list.php">All</a>
           
              <?php   
              /* you will need to fill this place with appropriate PHP */
              /* hint: use array and loop */
              //the next line is an example
              //<a href="list.php?country=Canada" role="button" class="btn btn-default"> Canada</a> 
              $arr=[
                      "list.php?country=Canada"=>"Canada",
                  "list.php?country=Germany"=>"Germany",
                  "list.php?country=Greece"=>"Greece",
                  "list.php?country=Italy"=>"Italy",
                  "list.php?country=United Kingdom"=>"United Kingdom",
                  "list.php?country=United States"=>"United States"
              ];

              foreach($arr as $key=>$value){
                  echo "<a href='$key' role='button' class='btn btn-default'>$value</a>";
              };

              ?>
                     
        </div>               
           
        

		<ul class="caption-style-2">
         
          <?php   
          /* you will need to fill this place with appropriate PHP */ 
          /* hint: use array and loop */
          //the next lines are one of the elements
          //you need to fill the elements with data provided

          $href1=array("detail.php?id=22","detail.php?id=54","detail.php?id=7","detail.php?id=19","detail.php?id=46","detail.php?id=6","detail.php?id=60","detail.php?id=58","detail.php?id=75","detail.php?id=77","detail.php?id=27","detail.php?id=2","detail.php?id=24","detail.php?id=13","detail.php?id=101","detail.php?id=102");
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