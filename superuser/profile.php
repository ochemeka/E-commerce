<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/pagination.php"); ?>
<?php //include_once("../includes/formvalidator.php"); ?>
<?php //include('../includes/image_upload_functions.php');

?>
<?php
confirm_logged_in();
$pagetitle="edituser"; 
?>
 
<?php include("includes/header.php"); ?>
<?php 
	$member = get_user_id($_SESSION['username']);
	$member_part = mysqli_fetch_array($member);
	
	// $ewallet = get_ewallet_id($_SESSION['username']);
	//$ewallet_part = mysqli_fetch_array($ewallet);
 ?>
 <?php 
if (isset($_POST['submit'])) {
$errors = array();
$db_images = "";

			
								  //memcode,firstname,lastname,gender,email,address,state,city,phone
								 
			$required_fields = array('firstname','lastname','email','gender','address','city','phone','state');
			foreach($required_fields as $fieldname) {
				if (!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]))) { 
					$errors[] = $fieldname; 
				}
			}
			//include("../includes/image_upload_app1.php");
			//if(strlen($db_images) < 7){ $errors[] = "No image upload"; }

			if (empty($errors)) {
				// Perform Inssert
				//$passport = $db_images;
				$user = $_SESSION['user_id'];
				//$memcode = stripslashes($_REQUEST['memcode']);
				//$memcode = mysqli_real_escape_string($connection,$_POST['memcode']);
				$firstname = stripslashes($_REQUEST['firstname']);
				$firstname = mysqli_real_escape_string($connection,$_POST['firstname']);
				$lastname= stripslashes($_REQUEST['lastname']);
				$lastname = mysqli_real_escape_string($connection,$_POST['lastname']);
				$email = stripslashes($_REQUEST['email']);
				$email = mysqli_real_escape_string($connection,$_POST['email']);
				$phone= stripslashes($_REQUEST['phone']);
				$phone = mysqli_real_escape_string($connection,$_POST['phone']);
				$gender = stripslashes($_REQUEST['gender']);
				$gender = mysqli_real_escape_string($connection,$_POST['gender']);
				$address = stripslashes($_REQUEST['address']);
				$address = mysqli_real_escape_string($connection,$_POST['address']);
				$city= stripslashes($_REQUEST['city']);
				$city = mysqli_real_escape_string($connection,$_POST['city']);
				$state = stripslashes($_REQUEST['state']);
				$state = mysqli_real_escape_string($connection,$_POST['state']);
				

				
				


					
						$query = 	"UPDATE newmember_tbl SET 
						firstname = '{$firstname}',
							lastname = '{$lastname}',
							email = '{$email}',
							phone = '{$phone}',
							gender = '{$gender}',
							address = '{$address}',
							city = '{$city}',
							state = '{$state}'
						WHERE id = '{$user}'  
						ORDER BY id DESC";
						
						
         
				$result = mysqli_query($connection,$query);
				if ($result) {
				echo "<script type='text/javascript'>alert('Member data Successfully Updated !')</script>";
				redirect_to('profile.php');
					
				} else {
					// Display error message.
					echo "<p>Subject creation failed.</p>";
					echo "<p>" . mysqli_error($connection) . "</p>";
				}

				} 
			else {
				// Errors occurred
				$message = "There were " . count($errors) . " errors in the form.";
			}
			
			


} // end: if (isset($_POST['submit']))
?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include("includes/sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <small><!--Preview--></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Profile</li>
       
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">&nbsp;</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!--<form role="form"  method="post" enctype="multipart/form-data">-->
				<form method="post" enctype="multipart/form-data">
			
			<?php if (!empty($message)) {
				echo "<p class=\"message\">" . $message. "</p>";
			} ?><?php
			// output a list of the fields that had errors
			if (!empty($errors)) {
				echo "<p class=\"errors\">";
				echo "Please review the following fields:<br />";
				foreach($errors as $error) {
					echo " - " . $error . "<br />";
				}
				echo "</p>";
			}
			?>
			
              <div class="box-body">
                <div class="form-group">
                 
                 
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">firstname:&nbsp;<em style="color:#0033FF;"><?php echo $member_part['firstname']; ?></em></label>
                  <input type="text" class="form-control" name="firstname" id="" value="<?php echo $member_part['firstname']; ?>" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">lastname:&nbsp;<em style="color:#0033FF;"><?php echo $member_part['lastname']; ?></em></label>
                  <input type="text" class="form-control" id="" name="lastname" value="<?php echo $member_part['lastname']; ?>">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">gender:&nbsp;<em style="color:#0033FF;"><?php echo $member_part['gender']; ?></em></label>
                  <input type="text" class="form-control" id="" name="gender" value="<?php echo $member_part['gender']; ?>"  readonly="">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">email:&nbsp;<em style="color:#0033FF;"><?php echo $member_part['email']; ?></em></label>
                  <input type="text" class="form-control" id="" name="email" value="<?php echo $member_part['email']; ?>" >
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">address:&nbsp;<em style="color:#0033FF;"><?php echo $member_part['address']; ?></em></label>
                  <input type="text" class="form-control" id="" name="address" value="<?php echo $member_part['address']; ?>">
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1">state:&nbsp;<em style="color:#0033FF;"><?php echo $member_part['state']; ?></em></label>
                  <input type="text" class="form-control" id="" name="state" value="<?php echo $member_part['state']; ?>" >
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1">city:&nbsp;<em style="color:#0033FF;"><?php echo $member_part['city']; ?></em></label>
                  <input type="text" class="form-control" id="" name="city" value="<?php echo $member_part['city']; ?>" >
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1">phone:&nbsp;<em style="color:#0033FF;"><?php echo $member_part['phone']; ?></em></label>
                  <input type="text" class="form-control" id="" name="phone" value="<?php echo $member_part['phone']; ?>">
                </div>
                
				
          </div>
                
				
                <!--<div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>-->
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          
          

       
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    <!--  <b>Version</b> 2.3.8-->
    </div>
    <strong>Powered by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">NFM</a>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
