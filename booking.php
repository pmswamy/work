<?php 
	if(isset($_POST['var']))
	{
		booking::Create($_POST['id']);
	}	//Booking::Create();

	class booking
	{

		 public static function Create($lid)
		{
		if (session_status() === PHP_SESSION_NONE) session_start();
   				include_once 'dbconn.php';
  					
   				$uid=$_SESSION['user'];
   				$records=mysql_query("select * from table_listing where listing_id='$lid'");
   				$listdetails=mysql_fetch_assoc($records);
   				$bprice=$listdetails['listing_price'];

 			if(mysql_query("insert into table_booking(booking_listing_id,booking_user_id,booking_amount)values($lid,$uid,$bprice)"))
 				{
 					echo "1";
 				}
 				else
 				{
 					echo "0";
   				}

    		
			}
			
			public static function display()
			{
				if (session_status() === PHP_SESSION_NONE) session_start();
				include 'dbconn.php';
				
				$uid=$_SESSION['user'];
				$sql="select* from table_booking where booking_user_id='$uid'order by booking_id desc";
				$records=mysql_query($sql);
				
				while ($table_booking=mysql_fetch_assoc($records))
				{
					echo "<table >";
					echo "<tr>"."<td>"."Booking_Id:"."</td><td>".$table_booking['booking_id']."</td></tr>";
					echo "<tr>"."<td>"."Booking_Listing_Id:"."</td><td>".$table_booking['booking_listing_id']."</td></tr>";
					echo "<tr>"."<td>"."Booking_User_Id:"."</td><td>".$table_booking['booking_user_id']."</td></tr>";
					echo "<tr>"."<td>". "Booking_Amount:"."</td><td>".$table_booking['booking_amount']."</td></tr>";
					echo "---------------------------------------";
				}
					echo"</table>";
			}
		
	}


?>
    		