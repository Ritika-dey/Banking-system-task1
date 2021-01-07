<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSFER MONEY</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
     @import url('https://fonts.googleapis.com/css2?family=Carter+One&display=swap');
     h2{
        margin:60px;
        font-family: 'Carter One', cursive;
        text-align:center;
        text-shadow:2px 2px 4px black;
     }
     .container{
         width:70%;
         background-color:#d9d9d9;
         padding:30px;
         margin:20px auto;
     }
     .container label{
         font-size:20px;
     }
     @media(max-width:600px){
         h2{
             margin:30px;
             font-size:25px;
         }
         .container{
             width:90%;
             margin:35px auto;
         }
     }
    </style>
</head>
<body>

   <!-- navbar start -->
   <?php include 'navbar.php' ?>
   <!-- navbar end -->

   <!-- heading -->
   <h2>TRANSFER MONEY</h2>
   <!-- heading end -->

   <?php
        $data = mysqli_connect('localhost','root','','banking_system');
        if ($data->connect_error) {
           die("Connection failed: " . $data->connect_error);
        }

        $sql = "SELECT * FROM user_detail";
        $result = mysqli_query($data , $sql); 
        $result1 = mysqli_query($data , $sql)
    ?>

    <!-- container start -->
    <div class="container">
       <form action="record.php" method="POST">
           <div class="form-group">
             <label for="to">Transfer To :</label>
             <select name="to" id="to" class="form-control" required>
              <?php while( $row = mysqli_fetch_assoc($result) ) { ?> 
                <option value = <?php echo $row['id']; ?> > <?php echo $row["name"]; ?> </option>
              <?php } ?>    
             </select>

            <br>
             
             <label for="from">Transfer From :</label>
             <select name="from" id="from" class="form-control" required>
                <?php while( $row = mysqli_fetch_assoc($result1) ) { ?> 
                  <option value = <?php echo $row['id']; ?> > <?php echo $row["name"]; ?> </option>
                <?php } ?>
             </select>

            <br>

            <label for="amount">Amount :</label> <br>
            <input type="text" id="amount" name="amount" class="form-control" placeholder="Enter amount to be transfered" required>
            
            <br>

            <input type="submit" name="submit" id="submit" class="btn btn-primary">
           </div>
       </form>
    </div>
    <!-- container end -->


    <!-- footer start -->
    <?php include 'footer.php'; ?>
    <!-- footer end -->
</body>
</html>



