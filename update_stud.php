<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect:'.mysql_error());
}
mysql_select_db("college",$con);

$std_id =$_REQUEST['std_id'];
$result=mysql_query("select *from student where std_id='$std_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
if(isset($_POST['save']))
{	
	$c_name_save=$_POST['name'];
	$c_address_save=$_POST['address'];
	$c_city_save=$_POST['city'];
	$c_contactno_save=$_POST['contactno'];
	$c_emailid_save=$_POST['emailid'];
	$c_remark_save=$_POST['remark'];

if(($_FILES["image"]["type"]=="image/gif") || ($_FILES["image"]["type"]=="image/jpeg") 
||($_FILES["image"]["type"]=="image/pjpeg") || ($_FILES["image"]["type"]=="image/jpg")&& ($_FILES["image"]["size"]<90000));
{
	if(file_exists("images/".$_FILES["image"]["name"]))
	{
		echo "File Alredy Exit change File Name";
		header('../index.php');
	}
	else
	{
		 $img=$_FILES["image"]["name"];
		move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);

		mysql_query("update student set name='$c_name_save',address='$c_address_save',city='$c_city_save',contactno='$c_contactno_save',emailid='$c_emailid_save',image='$img',remark='$c_remark_save' where std_id='$std_id'");
	header("location:view_stud.php");
	}
}
}
mysql_close($con);
?>
<?php include("head.php")  ?>
<div id="get-touch">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
						<div class="get-touch-heading">
							<h2>Student Update Record</h2> 
							<p>----------------------</p>
						</div>
					</div>
				</div>   
				<div class="content">
	                <div class="row">
                                                
                         <form  enctype="multipart/form-data" name="Reg" method="post">
	                        <div class="col-md-12">
	                            <div class="form-group">
                                    <input type="text" name="name" class="form-control" value="<?php echo $test['name']; ?>"/>
                                    <div class="validation"></div>
                                </div>
	                        </div>
							<div class="col-md-12">
	                            <div class="form-group">
                                    <input type="text" class="form-control" name="address" rows="2" value="<?php echo $test['address']; ?>"  ></textarea>
                                    <div class="validation"></div>
                                </div>
	                        </div>
							<div class="col-md-12">
	                            <div class="form-group">
                                    <input type="text" name="city" class="form-control" value="<?php echo $test['city']; ?>" />
                                    <div class="validation"></div>
                                </div>
	                        </div>
							<div class="col-md-12">
	                            <div class="form-group">
                                    <input type="text" name="contactno" class="form-control" value="<?php echo $test['contactno']; ?>" />
                                    <div class="validation"></div>
                                </div>
	                        </div>
	                        <div class="col-md-12">
	                            <div class="form-group">
                                    <input type="email" class="form-control" name="emailid" value="<?php echo $test['emailid']; ?>"  />
                                    <div class="validation"></div>
                                </div>
	                        </div>
							<div class="col-md-12">
	                            <div class="form-group">
                                    <input type="file" name="image" class="form-control" id="image"  />
                                    <div class="validation"></div>
                                </div>
	                        </div>
	                        <div class="col-md-12">
	                            <div class="form-group">
                                    <input type="text" class="form-control" name="remark" value="<?php echo $test['remark']; ?>" />
                                    <div class="validation"></div>
                                </div>
	                        </div>
	                        
	                        
	                            <center><button  type="submit" name="save">Submit</button></center>
	                        
	                    </form>
	                </div>
            </div>	
	    	</div>
		</div>
<?php include("foot.php"); ?>