<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }


?>

  <?php include 'head.php';?>
  <script type="text/javascript">
      function addregion(val){
        if(val == "findusat-region")
        {
          window.location.href= "add-findusat-region.php";
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
                    <h2>Add Find Us Details<small>&nbsp;</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  	<?php

					//if form has been submitted process it
					if(isset($_POST['submit'])){

						$findusatimage = $_FILES['findusatimage']['name'];
            $findusatplacename = $_POST['findusatplacename'];
            $findusatplaceaddress = $_POST['findusatplaceaddress'];
            $findusatregion = $_POST['findusatregion'];
						//very basic validation
						if($findusatimage ==''){
							$error[] = 'Please select Findus Image File.';
						}

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
              $target = "uploads/findusat/";
              $target = $target . basename($findusatimage);
							try {

								//insert into database
								$stmt = $db->prepare('INSERT INTO findusat (findusatFile, findusatplacename, findusatplaceaddress, findusatregion) VALUES (:findusatFile, :findusatplacename, :findusatplaceaddress, :findusatregion)') ;
								$stmt->execute(array(
									':findusatFile' => $findusatimage,
									':findusatplacename' => $findusatplacename,
                  ':findusatplaceaddress' => $findusatplaceaddress,
                  ':findusatregion' => $findusatregion
								));

                if(move_uploaded_file($_FILES['findusatimage']['tmp_name'], $target))
                {

                // Tells you if its all ok
                echo "The file ". basename( $findusatimage). " has been uploaded, and your information has been added to the directory";
                }
                else {

                // Gives and error if its not
                echo "Sorry, there was a problem uploading your file.";
                }

								//redirect to index page
								header('Location: findusat.php?action=added');
								exit;

							} catch(PDOException $e) {
							    echo $e->getMessage();
							}

						}

					}

					//check for any errors
					if(isset($error)){
						foreach($error as $error){
							echo '<p><code>'.$error.'</code></p>';
						}
					}
					?>
				                    <form class="form-horizontal form-label-left" novalidate  action='' method='post' enctype="multipart/form-data">

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="findusatimage">Findus Image 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="findusatimage" name='findusatimage' value='<?php if(isset($error)){ echo $_POST['findusatimage'];}?>' placeholder="Please select Findus Image file" required="required" class="form-control col-md-7 col-xs-12 filestyle"  data-input="false">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="findusatplacename" class="control-label col-md-3">Findus Place Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="findusatplacename" type='text' name='findusatplacename' value='<?php if(isset($error)){ echo $_POST['findusatplacename'];}?>' placeholder="Enter Findus Place Name" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="findusatplacename" class="control-label col-md-3">Findus Place Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="findusatplaceaddress" type='text' name='findusatplaceaddress' value='<?php if(isset($error)){ echo $_POST['findusatplaceaddress'];}?>' placeholder="Enter Findus Place Address" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
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
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
	
  </body>
</html>

