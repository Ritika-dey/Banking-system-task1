 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Users Detail</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     <link rel="stylesheet" href="style/users.css">
 </head>
 <body>
    <!-- navigation bar -->
      <?php include 'navbar.php'; ?>    
    <!-- navbar end -->

    <!-- container start -->
      <?php
         $data = mysqli_connect('localhost','root','','banking_system');
         $result = mysqli_query($data , "SELECT * from user_detail");

        echo "<div class=\"container\">
            <div class=\"table-responsive\">
             <table class=\"table table-hover\">" ;
        
        echo "<thead><tr class=\"first-row\"><td>#</td><td>NAME</td><td>ACCOUNT_NO.</td><td>DETAILS</td></tr></thead>";
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tbody><tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['account_no']."</td><td>
            <a href=\"http://localhost/php/banking_system/user.php?id='".$row['id']."';\"><button class=\"btn btn-primary\">
            VIEW</button></a></td></tr></tbody>";
        }
        echo "</table>
            </div>
         </div>";
      ?>
   <!-- container end -->

   <!-- footer -->
   <?php include 'footer.php'; ?>
   <!-- footer end -->
 </body>
 </html>