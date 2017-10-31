<?php
//include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if(isset($_GET['delregion'])){ 

		$stmt = $db->prepare('DELETE FROM findusatregion WHERE RegionID = :RegionID') ;
		$stmt->execute(array(':RegionID' => $_GET['delregion']));

		header('Location: findusat-region.php?action=deleted');
		exit;
} 

?>

<?php include 'head.php';?>
<script language="JavaScript" type="text/javascript">
  function delregion(id, title)
  {
      if (confirm("Are you sure you want to delete '" + title + "'"))
      {
        window.location.href = 'findusat-region.php?delregion=' + id;
      }
  }
  </script>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="images/profile.png" style="width:50px;"></i> <span>Macway</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <?php include 'sidebar.php';?>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
       <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View / Edit / Delete Region</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  	<?php 
	//show message from add / edit page
	if(isset($_GET['action'])){ 
		echo '<h3>Region '.$_GET['action'].'.</h3>'; 
	} 
	?>


                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Region</th>
                          <th>Operations</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php
		try {

			$stmt = $db->query('SELECT RegionID, Region FROM findusatregion ORDER BY RegionID');
			while($row = $stmt->fetch()){
				
				echo '<tr>';
				echo '<th scope="row">'.$row['RegionID'].'</th>';
				echo '<td>'.$row['Region'].'</td>';
				?>

				<td>
					<a href="edit-findusat-region.php?id=<?php echo $row['RegionID'];?>">Edit</a> 
						| <a href="javascript:delregion('<?php echo $row['RegionID'];?>','<?php echo $row['Region'];?>')">Delete</a>
				</td>
				
				<?php 
				echo '</tr>';

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

              <div class="clearfix"></div>
        </div>
          
        <!-- /page content -->

        <!-- footer content 
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
      footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>

