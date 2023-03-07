        
        <html>
        <head>
            <link rel="shortcut icon" type="image/png" href="imgs/favicon.png">

        <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>URBAN AMENITIES</title>
      <link rel="stylesheet" href="cssmain/bootstrap.min.css">
      <link rel="stylesheet" href="cssmain/style.css">
      <link rel="stylesheet" href="cssmain/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   </head>
   <body>
      <div id="header" class="header">
         <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
               <a class="navbar-brand" href="#"><img src="imgs/logo.png" alt="#" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="show-menu">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                         <a class="nav-link" href="admin.php">View Providers</a>
                     </li>
                    
                     <li class="nav-item">
                        <a class="nav-link" href="admin_bookings.php">View Bookings</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="admin_feed.php">Manage Feedbacks</a>
                     </li>
                     
                     <li class="nav-item">
                        <a class="nav-link active" href="logout.php">Logout</a>
                     </li>
                     
                  </ul>
               </div>
            </div>
         </nav>
      </div>

        <!-- <h2 class="text-center" style="margin-top: 20px">Home Services</h2> -->
        <hr>
        <div class="container" style="margin-top:20px; margin-bottom: 60px;">
        

        
<div class="table-responsive">
                    <table id="providers" class="table">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Profession</th>                               
                                <th>Email</th></tr>
                        </thead><tbody>
                            <tr>
                            
                </tr>
            </tbody>
        </table>
        


        <?php
        include "conn.php";
        require_once 'scripts/helpers.php'; 
                        
            
                $sql = "SELECT id,photo,name,adder1,adder2,profession,email FROM providers";
                $statement = $conn->prepare($sql);  
                $statement->execute();  
                $providers = $statement->fetchall();

                
                if($providers){
                    foreach($providers as $key) {
                        echo"<div class='table-responsive'>";
                        echo"<table id='providers' class='table'>";
                        //echo "<img src='images/".$row['image']."' >";

                        echo"<tr><td><img style='height: 60px;' src='images/".$key['photo']."'></td>";
                        echo "<td>"."$key[name]</td>"."<td>$key[adder1]"." "."<td>$key[profession]</td>"."<td>$key[email]"." "."</td></tr><br>";


                        // echo"<td><a href='delete_emp.php?id='"."$key[id]"."><i class='material-icons'"."style='font-size:30px;'>&#xe872;</i></a></td>";
                    }
                }else{
                    echo"NO RECORDS EXISTENT";
                }
            
        
        ?>

    
        </form>
        </html>
