 <?php $logerr=''; 
session_start();
$conn=mysqli_connect('localhost','avrtechnology','avr@123@tech@123','avrtechn_adminauth');
if(!$conn)
{
	die("connection failed");
}
else
{
if (isset($_POST['submit'])) 
{ 
	$user=$_POST['email'];
 	$pass=$_POST['password'];
	$sql="select * from adminlogin where id='".$user."' and password='".$pass."'";
		
		$result=mysqli_query($conn,$sql);
	
			if(mysqli_num_rows($result)>0)
				{
					if($row=mysqli_fetch_assoc($result))
						{
							header('Location:portalinterface.php');
				
							}
							else
							{
				
								$logerr='Your are not authorized for this';
				
							}
						}
				}
			else
				{
					$logerr='Username or Password is incorrect';
				}
	}			
}
mysqli_close($conn);?>