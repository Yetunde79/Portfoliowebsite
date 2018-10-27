<?php
 require('auth.php');

  if (isset($_POST["search"])) {
    $search = $_POST["search"];
  } 
  else {
    $search = null;
  }
	
$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$clients = json_decode($data); // decode the JSON feed
  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Clients</title>
  </head>
  <body>
    
 <div class="container">
        
    <h1>Clients</h1> 
    <p>Enter 'List' to retrieve client list</p>
    <p> Enter Client name and ID to get information on client </p> 

  <form class="form-inline" method="post">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
   
  <?php /*if Clients entered*/
  	if($search =="List" || $search == "list") { ?>
        <table>
            <tbody>
                <tr>
                    <th>Name</th>
                    <th>ID</th>
                </tr>
                <?php foreach ($clients as $client) : ?>
                <tr>
                    <td> <?php echo $client->name; ?> </td>
                    <td> <?php echo $client->id; ?> </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      <?php } ?>
  
    
 <p>  
   <?php  /*if client name is entered*/
      foreach ($clients as $client){
        if($search == $client-> name) {
          	  echo $client->name."<br>";
              echo  'ID: '.$client->id."<br>";
          	  echo  'Email: '.$client->email."<br>";
          	  echo  'Type: '.$client->type."<br>";
          }
 		}
    ?> 
 </p>
  
  
  <p>
   <?php /*if client id is entered*/
      foreach ($clients as $client){
        if($search == $client->id) {
          	  echo  'ID: '.$client->id."<br>";
              echo  'Name: '.$client->name."<br>";
          	  echo  'Email: '.$client->email."<br>";
          	  echo  'Type: '.$client->type."<br>";
          }
 		}
    ?>    
  </p>
    
    <br><br>
    <a href="login.php"><input type="submit" value="Logout"></a>
    
 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>