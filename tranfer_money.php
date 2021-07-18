<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "internship";
// Create connection
$connection = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customer where customer_id=$from";
    $query = mysqli_query($connection,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from customer where customer_id=$to";
    $query = mysqli_query($connection,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balence']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balence'] - $amount;
                $sql = "UPDATE customer set balence=$newbalance where customer_id=$from";
                mysqli_query($connection,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balence'] + $amount;
                $sql = "UPDATE customer set balence=$newbalance where customer_id=$to";
                mysqli_query($connection,$sql);
                
                $sender = $sql1['customer_name'];
                $receiver = $sql2['customer_name'];
                                     
                           
                $sql = "INSERT INTO tr(sender,receiver,amount)VALUES('$sender','$receiver','$amount')";
                 
                $query=mysqli_query($connection,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                 
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>DISPLAY CUSTOMER</title>
  <div class="f">
    <nav class="n">
      <img src="b.jpg" class="na">
<h2 class="logo">ASYA BANK</h2>
 <a href="index.html" class="order1">HOME</a>
 <a href="contact.php" class="order">CONTACT</a>

</nav>
</div>
</nav>


    <style type="text/css">
        table{
            color: springgreen;
        }
        label{
            color: springgreen;
        }
      h1{
            color: #32CD32;
        }
    button{
      border:none;
      background: #d9d9d9;
    }
      button:hover{
      background-color:#32CD32;
      transform: scale(1.1);
      color:white;
    }


.n{
    position: absolute;
    top: 0.5cm;
    right: 0.5cm;
    height: 8%;
    left: 0.5cm;
    background-color: white;
    }
  .f{
border: 2px solid black;
position: absolute;
top: 0cm;
bottom: 17.2cm;
left: 0.5cm;
right: 0.5cm;
  
  }


  .n h2{
    position: relative;
    left: 9%;
    top: -0.6cm;
    width: 7cm;
    padding-left: 0.5cm;
    background-color: white;
    
    color:#DA70D6;
    font-weight: bold;
    cursor: pointer;
    font-size: 0.8cm;
  }
  h2:hover{
    text-decoration: underline;
    color: black;
  }

    .order{
    position: absolute;
    top: 0.1cm;
    font-size: 0.42cm;
    left: 65%;
  }
  .order1{
    position: absolute;
    left: 85%;
    top: 0.1cm;
    font-size: 0.42cm;
  }
.order:hover{
  opacity: 1;
    padding: 0.35cm;
    top: -0.1cm;
    background-color: #DA70D6;
    color: black;
    border-radius: 0.2cm;
    
}
.order1:hover{
  opacity: 1;
    padding: 0.35cm;
    top: -0.1cm;
    background-color: #DA70D6;
    color: black;
    border-radius: 0.2cm;
    
}
  .na{
    width:2cm; 
    height:1cm;
    position: absolute;
    top: 0cm;
    left: 3%;
  }

.to.active {
  background-color: #5F9EA0;
  color: white;
}
.tr{
  padding: 0.5cm;
  background-color: #9ee6d8;
  color: #DA70D6;
  margin-top: 2cm;
}
.tr:hover {
  background-color: #5F9EA0;
  color: black;
}

.tr.active {
  background-color: #5F9EA0;
  color: white;
}
table, th, td {
  border: 1px solid black;
}
td{
  color: purple;
  text-align: center;
  font-size: 0.5cm;
  padding: 0.2cm;
}
td:hover{
  background-color:   #FF8C00;
  color: black;
  font-size: 0.6cm;
}
.a1{
  position: absolute;
  top: 2.5cm;
  left:4.5cm; 
}th{
    font-size: 0.5cm;
    padding: 0.2cm;
    color: black;
}

  .build{
    background-image: url(monn.png);
    background-size: cover;
    width: 98%;
    position: absolute;
    top: 2cm;
    border: 0.1cm solid #DA70D6;
    left: 0.05cm;
    width: 99%;
   
  height: 35cm

  }
  .container{
    background-color: white;
    border: 2px solid purple;
    position: absolute;
    top: 3cm;
    left: 11cm;
    width: 18cm;
    height: 15cm

  }
  .heading{
    position: relative;
    left: 6.5cm;
    font-size: 1cm;
    color: purple;
  }
  .heading:hover{
    color: black;
    text-decoration: underline;

  }
  .l{
    position: relative;
    color: black;
    font-size: 0.7cm;
    top: 2cm;
    left: 2cm;
  }
  .fc{
    color: purple;
    padding: 0.2cm;
    position: relative;
    top: 2cm;
    left: 2.6cm;
     border: 2px solid purple;
    font-size: 0.5cm;
  }
   .fc1{
    color: purple;
    padding: 0.2cm;
    padding-right: 0.9cm;
    position: relative;
    top: 3cm;
    left: 3.4cm;
    border: 2px solid purple;
    font-size: 0.5cm;
  }
  .am{
        position: relative;
    color: black;
    font-size: 0.7cm;
    top: 3cm;
    left: 2cm;
  }
  .btn{
    position: relative;
    top: 4cm;
    left: 7.8cm;
    font-size: 0.6cm;
    padding: 0.3cm;
  }
}
    </style>
</head>

<body>
 <div class="build">
</div>
  <div class="container">
        <h1 class="heading">Transaction</h1>
            <?php
               

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "internship";
// Create connection
$connection = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customer where customer_id=$sid";
                $result=mysqli_query($connection,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($connection);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="a1">
                <tr>
                    <th class="tc">Id</th>
                    <th class="tc">Name</th>
                    <th class="tc">Email</th>
                    <th class="tc">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['customer_id'] ?></td>
                    <td class="py-2"><?php echo $rows['customer_name'] ?></td>
                    <td class="py-2"><?php echo $rows['customer_email'] ?></td>
                    <td class="py-2"><?php echo $rows['balence'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label class="l">Transfer To:</label>
        <select name="to" class="fc" required>
            <option value="" disabled selected >Choose</option>
            <?php
           

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "internship";
// Create connection
$connection = new mysqli ($host, $dbusername, $dbpassword, $dbname);

                $sid=$_GET['id'];
                $sql = "SELECT * FROM customer where customer_id!=$sid";
                $result=mysqli_query($connection,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($connection);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['customer_id'];?>" >
                
                    <?php echo $rows['customer_name'] ;?> (Balance: 
                    <?php echo $rows['balence'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label class="am">Amount:</label>
            <input type="number" class="fc1" name="amount" required>   
            <br><br>
                <div class="tc2" >
            <button class="btn" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
    </div>
</body>
</html>