<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
 <!-- navbar start -->
    <?php include 'navbar.php'; ?>
 <!-- navbar end -->

 <!-- container start -->

   <?php
       $data = mysqli_connect('localhost','root','','banking_system');

       $sql = "SELECT * FROM transaction_history";
       $rs = mysqli_query($data , $sql);
       echo "<div class=\"container\">
       <div class=\"table-responsive\">
         <table class=\"table table-striped\">
           <thead>
              <tr><th>#</th>
              <th>SENDER</th>
              <th>RECEIVER</th>
              <th>AMOUNT</th>
              <th>DATE & TIME</th> </tr>
              </thead>";

       while($row = mysqli_fetch_assoc($rs))
       {
         echo  "<tbody>
             <tr><td>".$row['id']."</td>
             <td>".$row['sender']."</td>
             <td>".$row['receiver']."</td>
             <td>".$row['amount']."</td>
             <td>".$row['date-time']."</td></tr>
           </tbody>";
       }
    echo "  </table>
       </div>
    </div>";
    ?>
 <!-- container end -->
</body>
</html>