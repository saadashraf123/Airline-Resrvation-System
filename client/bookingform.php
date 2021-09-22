<?php
include("main.php");
error_reporting(0);

session_start();

$query1 = "SELECT * FROM signup WHERE username = '" . $_SESSION['username'] . "'";
$result = mysqli_query($conn,$query1);
$user = mysqli_fetch_array($result);

if(isset($_POST['submit']))
{

    $from=$_SESSION['myCity1'];
    $to=$_SESSION['myCity2'];
    $ddate=$_POST['ddate'];
    $pairline=$_POST['pairline'];
    $pseating=$_POST['pseating'];
    $adult=$_POST['adult'];
    $child=$_POST['child'];
    $infant=$_POST['infant'];
    $fare=$_POST['fare'];
    $rdate=$_POST['rdate'];
    $message=$_POST['message'];
    $fname=$user['fullname'];
    $phone=$user['phonenumber'];
    $email=$user['email'];

    $query="INSERT INTO bookinginfo (fromm, too, ddate, pairline, pseating, adult , child, infant, fare, rdate, message, fname, phone, email) VALUES ('$from', '$to', '$ddate','$pairline', '$pseating', '$adult','$child', '$infant', '$fare', '$rdate','$message', '$fname', '$phone','$email')";

    if (mysqli_query($conn, $query)) {
        $_SESSION['booked']=$adult;
        header('location: login.php');
    }
    else {
    echo "Error: "  . mysqli_error($conn);
    }
}
mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Booking Form</title>

    <!-- <link rel="stylesheet" href="form.css"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
body{
    background-color:teal;
}
#form{
    background-color: #35383A;
    margin:auto;
    padding:20px;
    width:800px;
}
#form h3,h5,h6 , table tr{
    border-bottom: 2px solid teal;
    width:210px;
    padding: 5px;
    color: white;
}
::placeholder{
    color:#fff
}
#input #input-group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input2 #input-group{
    width:195px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input4 #input-group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input4 #input-group1{
    width:615px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input5 h3{
    border-bottom: 2px solid #3399ff;
    width:220px;
    padding: 5px;
}
#input6 #input-group1{
    width:350px;
    margin:5px;
    border:none;
    outline: none;
    background: transparent;
    color:#fff;
    border-bottom: 2px solid grey;
    padding-top:10px;
    font-size: 16px;
}
    </style>
</head>

<body>
    <div class="container">
        <!--container-->

        <form class="form-group" method="post" autocomplete="off">
            <!--form-->
            <h1 class="text-center text-white">Airline Booking Form</h1>

            <div id="form">
                <!--form-->
                <h3>Booking Details</h3>

                <div id="input">
                    <!--input-->

                    <table id="input-group">

                    <?php
                        // session_start();
                        echo"
                            <tr>
                                <td name='too1'>TO :  " .$_SESSION['myCity1']."</td>
                                <td name='from1'>FROM : ".$_SESSION['myCity2']."</td>
                            </tr>";
                    ?>
                    </table>

                    <h5 style="width:180px">Departure Details:</h5>
                    <input type="date" name="ddate" id="input-group" placeholder="Departure Date" min="2021-09-15"
                        max="2021-11-01" required>
                    <select id="input-group" name="pairline" required>
                        <option value="" style="color:teal">Preffered Airline</option>
                        <option value="IndoGo" style="color:teal">IndoGo</option>
                        <option value="PakAirline" style="color:teal">PakAirline</option>
                        <option value="SpaceJet" style="color:teal">SpaceJet</option>
                    </select>
                    <select id="input-group" name="pseating" required>
                        <option value="" style="color:teal" >Preffered Seating</option>
                        <option value="economy class" style="color:teal">Economy Class</option>
                        <option value="business class" style="color:teal">Business Class</option>
                        <option value="first class" style="color:teal">First Class</option>
                    </select>
                </div>
                <!--input-->

                <div id="input2">
                    <!--input2-->
                    <input type="number" id="input-group" name="adult" placeholder="Adult" min="0" required>
                    <input type="number" id="input-group" name="child" placeholder="Children(2-11years)" min="0">
                    <input type="number" id="input-group" name="infant" placeholder="infant(under 2years)" min="0">
                </div>
                <!--input2-->

                <div id="input3">
                    <!--input3-->
                    <h6 id="input-group" style="color:teal; width:160px" >Select Your Fare</h6>
                    <input type="radio" id="input-group" value="One Way" name="fare" required>
                    <label class="text-white" for="input-group">One Way</label>
                    <input type="radio" id="input-group" value="Round Trip" name="fare" required>
                    <label class="text-white" for="input-group">Round Trip</label>
                </div>
                <!--input3-->

                <div id="input4">
                <h5 style="width:150px">Arrival Details:</h5>
                    <!--input4-->
                    <input type="date" id="input-group" name="rdate" placeholder="Return Date" min="2021-10-1"
                        required>
                    <!-- <input type="text" id="input-group" placeholder="Return time"> -->
                    <input type="text" id="input-group1" name="message" placeholder="Any Message">
                </div>
                <!--input4-->

                <div id="input5">
                    <!--input5-->
                    <h5 class="text-white">Personal Details</h5>
                </div>
                <!--input5-->

                <div id="input6">
                    <!--input6-->
                    <?php
                    echo "<b class='text-white'>Fullname:</b><input class='input6' type='text' id='input-group1' value='".$user['fullname']."' readonly></br>";
                    echo "<b class='text-white'>Phone Number :</b><input class='input6' type='text' id='input-group1' value='".$user['phonenumber']."' readonly></br>";
                    echo "<b class='text-white'>Email Address:</b><input class='input6' type='text' id='input-group1' value='".$user['email']."' readonly></br>";
                    ?>
                </div>
                <!--input6-->
                <button id="submitbtn" type="submit" name="submit" class="btn btn-warning text-white" >Submit Form</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div>
            <!--form-->

        </form>
        <!--form-->

    </div>
    <!--container-->
</body>
</html>