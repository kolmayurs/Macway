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

            $testimonialID = $_POST['testimonialID'];
             $testimonialName = $_POST['testimonialName'];
            $testimonialTitle = $_POST['testimonialTitle'];
            $testimonialDescription = $_POST['testimonialDescription'];
            $testimonialRating = $_POST['testimonialRating'];
            //very basic validation

            if($testimonialName ==''){
              $error[] = 'Please enter Testimonial  Name';
            }


            if($testimonialTitle ==''){
              $error[] = 'Please enter Testimonial Title';
            }


            if($testimonialRating ==''){
              $error[] = 'Please enter Testimonial rating';
            }


		if(!isset($error)){

			try {

		

					//update into database
					$stmt = $db->prepare('UPDATE testimonial SET testimonialName =:testimonialName, testimonialTitle = :testimonialTitle, testimonialDescription = :testimonialDescription, testimonialRating = :testimonialRating  WHERE testimonialID = :testimonialID') ;
					$stmt->execute(array(
            ':testimonialID' => $testimonialID,
            ':testimonialName' => $testimonialName,
						':testimonialTitle' => $testimonialTitle,
            ':testimonialDescription' => $testimonialDescription,
            ':testimonialRating' => $testimonialRating
					));



				//redirect to index page
				header('Location: testimonial.php?action=updated');
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

			$stmt = $db->prepare('SELECT testimonialID, testimonialFile, testimonialName, testimonialTitle, testimonialDescription, testimonialRating FROM testimonial WHERE testimonialID = :testimonialID') ;
			$stmt->execute(array(':testimonialID' => $_GET['id']));
			$row = $stmt->fetch(); 

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}

	?>


                           <form class="form-horizontal form-label-left" novalidate  action='' method='post' enctype="multipart/form-data">
                           <input type='hidden' name='testimonialID' value='<?php echo $row['testimonialID'];?>'>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="testimonialFile">Image
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="testimonialFile" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" type='text' name='testimonialFile' value='<?php echo $row['testimonialFile'];?>' placeholder="Enter testimonialFile Here" required="required"  disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="testimonialName" class="control-label col-md-3">Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="testimonialName" type='text' name='testimonialName' value='<?php echo $row['testimonialName'];?>' placeholder="Enter Testimonial Name" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label for="testimonialTitle" class="control-label col-md-3">Title</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="testimonialTitle" type='text' name='testimonialTitle' value='<?php echo $row['testimonialTitle'];?>' placeholder="Enter Findus Place Name" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="testimonialDescription" class="control-label col-md-3">Description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="testimonialDescription" type='text' name='testimonialDescription' value='<?php echo $row['testimonialDescription'];?>' placeholder="Enter Findus Place Address" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="testimonialRating" class="control-label col-md-3">Rating</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="testimonialRating" class="form-control">
                            <option value="<?php echo $row['testimonialRating'];?>"><?php echo $row['testimonialRating'];?></option>
                            <option value="0.5">0.5</option>
                            <option value="1">1</option>
                            <option value="1.5">1.5</option>
                            <option value="2">2</option>
                            <option value="2.5">2.5</option>
                            <option value="3">3</option>
                            <option value="3.5">3.5</option>
                            <option value="4">4</option>
                            <option value="4.5">4.5</option>
                            <option value="5">5</option>
                        </select>
                      </div>
                    </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" name='submit' class="btn btn-success">Update Testimonial</button>
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
        if(val == "testimonial-category")
        {
          window.location.href= "add-testimonial-category.php";
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
