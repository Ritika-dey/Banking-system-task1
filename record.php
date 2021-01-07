<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Coiny&display=swap');
    .img-rounded{
        width:30%;
        height:40%;
        display:block;
        margin:0 auto;
    }
    .container h2{
        text-align:center;
        font-family: 'Coiny', cursive;
    }
    .container button{
        display:block;
        margin:0 auto;
    }
   </style>
</head>
<body>
    <!-- navbar start -->
    <?php include 'navbar.php'; ?>
    <!-- navbar end -->
    <?php

    if(isset($_POST['submit']))
      {
        
        $data = mysqli_connect('localhost','root','','banking_system');
        $sender = $_POST['from'];
        $receiver = $_POST['to'];
        $amount = $_POST['amount'];

        //fetching data of sender
        $sql1 = "SELECT * FROM user_detail WHERE id = $sender";
        $result = mysqli_query($data , $sql1) or die(mysqli_error($data));
        $row1 = mysqli_fetch_array($result);

        //fetching data of receiver
        $sql2 = "SELECT * FROM user_detail WHERE id = $receiver";
        $result = mysqli_query($data , $sql2) or die(mysqli_error($data));
        $row2 = mysqli_fetch_array($result);

        echo "<div class=\"container\">";
            if ($amount <= 0) {
                echo "<div class=\"d-flex justify-content-center\">
                <img src=\"imgs/oops!.png\" alt=\"oops image\" class=\"img-rounded\">
                <h2>Transaction is not possible due to negative or zero amount ...!!</h2>
                </div>";
            }
            else if($row1 !== null && $amount > $row1['balance']){ 
                echo "<div class=\"d-flex justify-content-center\">
                <img src=\"imgs/low_balance.png\" alt=\"low balance image\" class=\"img-rounded\">
                <h2>Insufficient balance in senders account ...!!</h2>
                </div>";
            }
            else if($row1 !== null && $row2 !== null && $row1['name'] == $row2['name'])
            {
                echo "<div class=\"d-flex justify-content-center\">
                <img src=\"imgs/same_user.png\" alt=\"same user image\" class=\"img-rounded\">
                <h2>Transaction is not possible between same user ...!!</h2>
                </div>";
            }
            else{
                //balance updation of sender
                $new_bal_sender = $row1['balance'] - $amount;
                $rs = mysqli_query($data , "UPDATE `user_detail` SET `balance`=$new_bal_sender WHERE id= $sender");
                
                //balance updation of receiver
                $new_bal_receiver = $row2['balance'] + $amount;
                $rs = mysqli_query($data , "UPDATE `user_detail` SET `balance`=$new_bal_receiver WHERE id= $receiver");

                //tranction table updation
                $sender_name = $row1['name'];
                $receiver_name = $row2['name'];
                $sql = "INSERT INTO `transaction_history` (`sender` , `receiver` , `amount`) VALUES('$sender_name' , '$receiver_name' , '$amount')";
                $rs = mysqli_query($data , $sql);

                echo "<div class=\"d-flex justify-content-center\">
                <img src=\"imgs/Sucessful.png\" alt=\"sucess image\" class=\"img-rounded\">
                <h2>Transaction Sucessful ...!!</h2>
                <a href=\"http://localhost/php/banking_system/transaction_history.php\"><button class=\"btn btn-primary\">Transaction History</button></a>
                </div>";
           }
        echo "</div>";

        
      }

    ?> 
</body>
</html>
