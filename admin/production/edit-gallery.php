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


            $galleryID = $_POST['galleryID'];
            $gallerytag = $_POST['gallerytag'];
            $gallerycategory = $_POST['gallerycategory'];
            //very basic validation

            if($gallerytag ==''){
              $error[] = 'Please enter gallery image tag line';
            }

            if($gallerycategory ==''){
              $error[] = 'Please enter gallery image category';
            }

		if(!isset($error)){

			try {

		

					//update into database
					$stmt = $db->prepare('UPDATE gallery SET galleryTag = :galleryTag, gallerycategory = :gallerycategory  WHERE galleryID = :galleryID') ;
					$stmt->execute(array(
						':galleryTag' => $gallerytag,
						':galleryID' => $galleryID,
            ':gallerycategory' => $gallerycategory
					));



				//redirect to index page
				header('Location: gallery.php?action=updated');
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

			$stmt = $db->prepare('SELECT galleryID, galleryFile, galleryTag, gallerycategory FROM gallery WHERE galleryID = :galleryID') ;
			$stmt->execute(array(':galleryID' => $_GET['id']));
			$row = $stmt->fetch(); 

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}

	?>




				                    <form class="form-horizontal form-label-left" novalidate  action='' method='post'>
                      <input type='hidden' name='galleryID' value='<?php echo $row['galleryID'];?>'>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="galleryimage">galleryFile 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="galleryimage" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" type='text' name='galleryimage' value='<?php echo $row['galleryFile'];?>' placeholder="Enter galleryFile Here" required="required"  disabled>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="gallerytag" class="control-label col-md-3">Gallery Image Tag Line</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="gallerytag" type='text' name='gallerytag' value='<?php echo $row['galleryTag'];?>' placeholder="Enter gallery image tag line" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="gallerycategory" class="control-label col-md-3">Gallery Image Category</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="gallerycategory" value='<?php echo $row['gallerycategory'];?>' class="form-control" onChange="addcategory(this.value)">
                            <option value="">Select Category</option>
                          <?php
                              try {

                                $stmt = $db->query('SELECT categoryID, category FROM gallerycategory ORDER BY categoryID');
                                while($row = $stmt->fetch()){

                                  if($row['gallerycategory'] == $row['category']){
                                    echo '<option value="'.$row['category'].'" selected>'.$row['category'].'</option>';
                                  }
                                  else{
                                    echo '<option value="'.$row['category'].'">'.$row['category'].'</option>';
                                  }
                                  

                                }
                                

                              } catch(PDOException $e) {
                                  echo $e->getMessage();
                              }
                            ?>
                            <option value="OTHERS">OTHERS</option>
                            <option value="gallery-category">Add Category</option>
                        </select>
                      </div>
                    </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type='submit' name='submit' value='Update gallery' class="btn btn-success">Update gallery</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      function addcategory(val){
        if(val == "gallery-category")
        {
          window.location.href= "add-gallery-category.php";
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
