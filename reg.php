<?php include("head.php"); ?>
<div id="get-touch">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
						<div class="get-touch-heading">
							<h2>Student Registration</h2> 
							<p>----------------------</p>
						</div>
					</div>
				</div>   
<form  action="insert_stud.php" method="post" name="Reg" enctype="multipart/form-data">
				<div class="content">
	                <div class="row">
                                                
                         <form action="" method="post" role="form" >
	                        <div class="col-md-12">
	                            <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Student Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                                    <div class="validation"></div>
                                </div>
	                        </div>
							<div class="col-md-12">
	                            <div class="form-group">
                                    <textarea class="form-control" name="address" rows="2" data-rule="required" data-msg="Please write something for us" placeholder="Student Address" required></textarea>
                                    <div class="validation"></div>
                                </div>
	                        </div>
							<div class="col-md-12">
	                            <div class="form-group">
                                    <input type="text" name="city" class="form-control" id="city" placeholder="Student City" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                                    <div class="validation"></div>
                                </div>
	                        </div>
							<div class="col-md-12">
	                            <div class="form-group">
                                    <input type="text" name="contactno" class="form-control" id="contactno" placeholder="Student Contactno" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                                    <div class="validation"></div>
                                </div>
	                        </div>
	                        <div class="col-md-12">
	                            <div class="form-group">
                                    <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Student Email" data-rule="email" data-msg="Please enter a valid email" required />
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
                                    <input type="text" class="form-control" name="remark" id="subject" placeholder="Student Remark" data-msg="Please enter at least 8 chars of subject" required />
                                    <div class="validation"></div>
                                </div>
	                        </div>
	                        
	                        <div class="submit">
	                            <center><button class="btn btn-primary" type="submit">Submit</button></center>
	                        </div>
	                    </form>
	                </div>
            </div>	
	    	</div>
		</div>

<?php include("foot.php"); ?>					