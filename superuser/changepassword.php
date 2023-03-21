<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/pagination.php"); ?>
<?php include_once("../includes/formvalidator.php"); ?>
<?php include('../includes/image_upload_functions.php');

?>
<?php
confirm_logged_in();
$pagetitle="Profile"; 
?>
<?php 
	/*$member = get_user_pid($_SESSION['userpid']);
	$member_part = mysqli_fetch_array($member);*/

$member = get_user_id($_SESSION['username']);
	$member_part = mysqli_fetch_array($member);
	
	$ewallet = get_ewallet_pid($_SESSION['']);
	$ewallet_part = mysqli_fetch_array($ewallet);
 ?>
 
<?php




// START FORM PROCESSING
if (isset($_POST['submit'])) { // Form has been submitted.
$errors = array();

		$required_fields = array('password','pass_nw','pass_nw2');
			foreach($required_fields as $fieldname) {
				if (!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]))) { 
					$errors[] = $fieldname; 
				}
			}
			
		$pass1 = stripslashes($_REQUEST['password']);
		$pass1 = mysqli_real_escape_string($connection,$_POST['password']);
		$hashed_pass1 = md5($pass1);
		$pass2 = stripslashes($_REQUEST['pass_nw']);
		$pass2 = mysqli_real_escape_string($connection,$_POST['pass_nw']);
		$hashed_pass2 = md5($pass2);
		$pass3 = stripslashes($_REQUEST['pass_nw2']);
		$pass3 = mysqli_real_escape_string($connection,$_POST['pass_nw2']);
		$hashed_pass3 = md5($pass3);
		$passmail = mysqli_real_escape_string($connection,$_POST['pass_nw2']);
		if ($pass2 != $pass3){
			echo "<script type='text/javascript'>alert('Confirm Password Do Not Match!')</script>";
			redirect_to(SITE_PATH."changepassword.php");
			 }else{

		if ( empty($errors) ) {
			// Check database to see if username and the hashed password exist there.
			$query = "SELECT * ";
			$query .= "FROM newmember_tbl ";
			$query .= "WHERE password = '{$hashed_pass1}' ";
			$query .= "AND id = '{$_SESSION['user_id']}' ";
			$query .= "LIMIT 1";
			$result_set = mysqli_query($connection,$query);
			confirm_query($result_set);
			if (mysqli_num_rows($result_set) == 1) {
				// username/password authenticated
				// and only 1 match
				
							$query = 	"UPDATE newmember_tbl SET 
							password = '{$hashed_pass3}', 
							temp_pass = '{$passmail}' 
						WHERE id = {$_SESSION['user_id']}";
			$result = mysqli_query($connection,$query);
			if (mysqli_affected_rows($connection) == 1) {
					// Success!
					echo "<script type='text/javascript'>alert('Password Change Successfully!')</script>";
					
					redirect_to(SITE_PATH."superuser/dashboard.php");
				} else {
					// Display error message.
					echo "<p>Error.</p>";
					echo "<p>" . mysqli_error($connection) . "</p>";
				}


			} else {
				// username/password combo was not found in the database
				echo "<script type='text/javascript'>alert('Incorrect Old Password!')</script>";
			}			
		}
}
	}
?> 
 
<?php include("includes/header.php"); ?>
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
		 <?php if (!empty($message)) {echo "<div class='error'>" . $message . "</div>";} ?>
            <?php if (!empty($errors)) { display_errors($errors); } 
			if(isset($_GET['status'])){
			echo $msg="Update Successful";
			}
			?>
              <div class="box-body">
                <div class="form-group">
                 
                  <!--<input type="hidden" class="form-control" name="memcode" id="" value="" placeholder="<?php //echo $member_part['memcode']; ?>" readonly="">-->
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Old Password &nbsp;<em style="color:#0033FF;"></em></label>
                 <input name="password" type="password" placeholder="Enter Old Password" class="form-control" /><br  />									
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">New Password: &nbsp;<em style="color:#0033FF;"></em></label>
                  <input name="pass_nw" type="password" placeholder="Enter New Password" class="form-control"/>
                </div>
				
				<div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password: &nbsp;<em style="color:#0033FF;"></em></label>
                  <input name="pass_nw2" type="password" placeholder="Enter New Password" class="form-control"/> 
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
