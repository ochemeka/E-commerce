 <?php 
	$member = get_user_id($_SESSION['username']);
	$member_part = mysqli_fetch_array($member);
	
	/*$member = get_user_pid($_SESSION['']);
	$member_part = mysqli_fetch_array($member);
	*/
	
	
	/*$ewallet = get_ewallet_pid($_SESSION['']);
	$ewallet_part = mysqli_fetch_array($ewallet);*/
 ?>
 
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--><br />
        </div>
        <div class="pull-left info">
          <p>Welcome <?php echo $member_part['firstname'];?><br /><?php //echo $member_part['lastname'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="../index.php">
            <i class="fa fa-dashboard"></i> <span>Back Home</span> <li><!--<a href="../index.php"><i class="fa fa-circle-o"></i>Back Home</a></li>-->
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
        </li>
        
        
       
        
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Manage Testimony</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="testimony.php"><i class="fa fa-circle-o"></i>Testimony</a></li>
           
          </ul>
        </li>
		
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span> Manage Transaction</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="transaction_history.php"><i class="fa fa-circle-o"></i> Transaction History</a></li>
           
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span> Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="profile.php"><i class="fa fa-circle-o"></i>Profile</a></li>
			<li><a href="changepassword.php"><i class="fa fa-circle-o"></i>Change password</a></li>
          
			<li><a href="logout.php"><i class="fa fa-circle-o"></i>Logout</a></li>
          </ul>
        </li>
		
	<!--<li class="treeview">
          <a href="logout.php">
            
            
          </a>
          
        </li>	-->
		
		<!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="form.php"><i class="fa fa-circle-o"></i> General Elements</a></li>
            
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="data.php"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>-->
        
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
