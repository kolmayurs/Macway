<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }
?>
<?php include 'head.php';?>	
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
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="right_col" role="main">
          <div class="">
           <!-- <div class="page-title">
              <div class="title_left">
                <h3>Form Validation</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>-->
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit User<small>&nbsp;</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  	<?php

	//if form has been submitted process it
	if(isset($_POST['submit'])){


            $findusatID = $_POST['findusatID'];
            $findusatplacename = $_POST['findusatplacename'];
            $findusatplaceaddress = $_POST['findusatplaceaddress'];
            $findusatregion = $_POST['findusatregion'];
            //very basic validation

            if($findusatplacename ==''){
              $error[] = 'Please enter Findus Place Name';
            }


            if($findusatplaceaddress ==''){
              $error[] = 'Please enter Findus Place Address';
            }


            if($findusatregion ==''){
              $error[] = 'Please enter Findus  Region';
            }

		if(!isset($error)){

			try {

		

					//update into database
					$stmt = $db->prepare('UPDATE findusat SET findusatplacename = :findusatplacename, findusatplaceaddress = :findusatplaceaddress, findusatregion = :findusatregion  WHERE findusatID = :findusatID') ;
					$stmt->execute(array(
            ':findusatID' => $findusatID,
						':findusatplacename' => $findusatplacename,
            ':findusatplaceaddress' => $findusatplaceaddress,
            ':findusatregion' => $findusatregion
					));



				//redirect to index page
				header('Location: findusat.php?action=updated');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	?>


	<?php
	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo $error.'<br />';
		}
	}

		try {

			$stmt = $db->prepare('SELECT findusatID, findusatFile, findusatplacename, findusatplaceaddress, findusatregion FROM findusat WHERE findusatID = :findusatID') ;
			$stmt->execute(array(':findusatID' => $_GET['id']));
			$row = $stmt->fetch(); 

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}

	?>


                           <form class="form-horizontal form-label-left" novalidate  action='' method='post' enctype="multipart/form-data">
                           <input type='hidden' name='findusatID' value='<?php echo $row['findusatID'];?>'>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="findusatFile">Findus Image
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="findusatFile" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" type='text' name='findusatFile' value='<?php echo $row['findusatFile'];?>' placeholder="Enter findusatFile Here" required="required"  disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="findusatplacename" class="control-label col-md-3">Findus Place Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="findusatplacename" type='text' name='findusatplacename' value='<?php echo $row['findusatplacename'];?>' placeholder="Enter Findus Place Name" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="findusatplaceaddress" class="control-label col-md-3">Findus Place Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="findusatplaceaddress" type='text' name='findusatplaceaddress' value='<?php echo $row['findusatplaceaddress'];?>' placeholder="Enter Findus Place Address" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="findusatregion" class="control-label col-md-3">Findus Region</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="findusatregion" class="form-control" onChange="addregion(this.value)">
                            <option value="">Select Region</option>
                          <?php
                              try {

                                $stmt = $db->query('SELECT RegionID, Region FROM findusatregion ORDER BY RegionID');
                                while($row = $stmt->fetch()){
                                  
                                  echo '<option value="'.$row['Region'].'">'.$row['Region'].'</option>';

                                }

                              } catch(PDOException $e) {
                                  echo $e->getMessage();
                              }
                            ?>
                            <option value="findusat-region">Add Region</option>
                        </select>
                      </div>
                    </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" name='submit' class="btn btn-success">Add Findus Details</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- /top tiles -->

          
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
    <script type="text/javascript">
      function addcategory(val){
        if(val == "findusat-category")
        {
          window.location.href= "add-findusat-category.php";
        }
      }
    </script>
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


</html>	
