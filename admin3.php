<?php
$server="localhost";
$username="root";
$password="";
$connect_mysql=mysqli_connect($server,$username,$password) or die ("Connection Failed!");
$mysql_db=mysqli_select_db($connect_mysql, "seda") or die ("Could not Connect to Database");

$query = "SELECT * FROM bookings";
$result=mysqli_query($connect_mysql, $query) or die("Query Failed : ".mysqli_error());


$accounts = "SELECT * FROM accounts";
$users=mysqli_query($connect_mysql, $accounts) or die("Query Failed : ".mysqli_error());


$availability = "SELECT * FROM availability";
$avail=mysqli_query($connect_mysql, $availability) or die("Query Failed : ".mysqli_error());

$rooms = "SELECT * FROM rooms";
$users=mysqli_query($connect_mysql, $accounts) or die("Query Failed : ".mysqli_error());
?>

<script>
    
</script> 

<html>
     <head>
	<title>Seda Hotel</title>
	
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="icon" type="image/png" href="img/sedalogo.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
   
    <body id="adminbg">
        <div id="MainContainer">
            <div id="Header">
                    <div id="NavBar">
                        <ul>
                        <li style="color: white;">Admin Page</li>
                        </ul> 
                    </div>    
                    <div id="logo"><img src="img/logo2.png" width="70px" hieght="auto"></div>                
            </div>
        </div> 
        
         <div id="admin-wrapper" >
            <div id="page-inner">
                
                  <div class="fluid-container" style="padding: 30px; margin-top: 100px; ">
                    <center>
                    <ul class="nav nav-tabs" role="tablist">
                        <li style="color: white;"><a href="admin1.php" ><h4 id="textcolor">Users</h4></a></li>
                        <li style="color": white;><a href="admin2.php" ><h4 id="textcolor">Pendings</h4></a></li>
                        <li style="color: white;"><a href="admin5.php" ><h4 id="textcolor">Bookings</h4></a></li>
                        <li style="color": white;><a href="admin6.php" ><h4 id="textcolor">Rejects</h4></a></li>
                        <li class="active" ><a href="admin3.php" ><h4 id="textcolor">Occupied</h4></a></li>
                        <li style="color: white;"><a href="admin4.php" ><h4 id="textcolor">Rooms</h4></a></li>
                    </ul>
                    </center>
                </div>
                
                    <div class="tab-content" style="background-color: beige; color: #170a02;">
                      <div role="tabpanel" class="tab-pane fade in active" id="profile" style="overflow: auto; padding: 0 55px;">
                        <table id="table" class="table table-hover">  
                            <thead> 
                              <tr id="panel-heading" style="font-size: 16spx;">
                                        <th>Room No.</th>
                                        <th>Check-in</th>
                                        <th>Check-out</th>
                                        <th>Name of Guest</th>
                                        <th colspan=2>Action</th>
                                    </tr>
                            </thead>
                            <tbody>
                                
                              <?php while($rows=mysqli_fetch_array($avail)) {                                     ?>
                                    <tr> 
                                        <td><?php echo $rows['room_num'] ?></td>
                                        <td><?php echo $rows['check_in'] ?></td>
                                        <td><?php echo $rows['check_out'] ?></td>
                                        <td><?php echo $rows['fname'] ?></td>
                                        <td><a href="deleteAvailability.php?room_num=<?php echo $rows['room_num']; ?>&check_in= <?php echo $rows['check_in'];?>&check_out= <?php echo $rows['check_out'];?>">Delete</a></td>
                                            <?php } ?>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                 <div>
		  	           
                    </div>   
                
                    
                    </div>
                </div>
            </div>
    </body>
</html>
