<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <title>Basic Banking System</title>
</head>
<body>
   <?php include 'navbar.php'; ?>

   <!-- container start -->
     <div class="container-fluid contents">
          <div class="row">
          
             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 bank">
               <a href="http://localhost/php/banking_system"> <img src="imgs/bank_logo.png" alt="Bank logo"> </a> 
             </div>

             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                   <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 option1">
                         <a href="http://localhost/php/banking_system/users.php">
                             <img src="imgs/USERS.gif" alt="users">
                         </a>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 option2">
                         <a href="http://localhost/php/banking_system/transaction.php">
                             <img src="imgs/MONEY TRANSFER.gif" alt="money transfer">
                         </a>
                     </div>
                   </div>

                   <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 option3">
                         <a href="http://localhost/php/banking_system/transaction_history.php">
                             <img src="imgs/TRANSACTION HISTORY.gif" alt="transaction history">
                         </a>
                     </div>
                   </div>
             </div>
          </div>
     </div>
     
   <!-- container end -->

   <?php include 'footer.php'; ?>
</body>
</html>

