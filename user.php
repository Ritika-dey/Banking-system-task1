<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER DETAIL</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Carter+One&display=swap');
        *{
            padding: 0;
            margin: 0;
         }
        .container
        {
            height:70vh;
            margin: 50px auto;
            background-color: rgba(0,0,0,0.9);
        }
        .div1{
            background-color:rgb(192,188,188);
            height:100%;
        }
        .div1 img{
            display:block;
            margin:40px auto;
            width:50%;
            height:40%;
            box-shadow: 4px 4px 10px #000000;
        }
        .div2{
            color:white;
            padding:20px; 
            font-family: 'Carter One', cursive;
        }
        .div2 h3{
            font-size:20px;
        }
        @media(max-width:600px){
            .container{
                height:auto;
            }
            .div2 h3{
                font-size:15px;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Container start -->
    <div class="container">
      <div class="col-xs-12 col-lg-4 col-sm-4 col-md-4 div1">
         <img src="imgs/user.png" alt="User image">
        <center> <a href="http://localhost/php/banking_system/transaction.php?"><button class="btn btn-primary">Transact</button></a></center>

      </div>
      <div class="col-xs-12 col-lg-8 col-sm-8 col-md-8 div2">
        <?php
           $data = mysqli_connect('localhost','root','','banking_system');
           $id = $_GET['id'];
           $sql = "SELECT * from user_detail where id =$id";
           $result = mysqli_query($data , $sql);

           if(!$result)
           {
               echo "<h1> Could not run query due to some error : ".mysqli_error($data)."</h1>";
               exit;
           }

           if($row = mysqli_fetch_assoc($result))
           {
               echo "<h2>Name : ".$row['name']."</h2>";
               echo "<h3>Account No. : ".$row['account_no']."</h3>";
               echo "<h3>Balance : ".$row['balance']."/-</h3>";
               echo "<h3>Address : ".$row['address']."</h3>";
               echo "<h3>Contact No. : ".$row['contact_no']."</h3>";
           }
        ?>
      </div>
    </div>
    <!-- Container End -->

    <!-- footer -->
    <?php include 'footer.php'; ?>
    <!-- footer end -->
</body>
</html>