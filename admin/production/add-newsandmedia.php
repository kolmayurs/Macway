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
                    <h2>Add News and Media<small>&nbsp;</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  	<?php

					//if form has been submitted process it
					if(isset($_POST['submit'])){

            $i = 1;
            $stmt = $db->query('SELECT * FROM newsandmedia');
            while($row = $stmt->fetch()){
              $i++;
            }

            $postID = ++$i;
						$post_picture = $_FILES['post_picture']['name'];
            $post_text = $_POST['post_text'];
            $post_url = $_POST['post_url'];
						//very basic validation
						if($post_picture ==''){
							$error[] = 'Please select Image File.';
						}

						if($post_text ==''){
							$error[] = 'Please enter content';
						}


            if($post_url ==''){
              $error[] = 'Please enter URL';
            }


						if(!isset($error)){
              $target = "uploads/newsandmedia/";
              $target = $target . basename($post_picture);
							try {

								//insert into database
								$stmt = $db->prepare('INSERT INTO newsandmedia (postID, post_text, post_url, post_picture) VALUES (:postID, :post_text, :post_url, :post_picture)') ;
								$stmt->execute(array(
									':postID' => $postID,
									':post_text' => $post_text,
                  ':post_url' => $post_url,
                  ':post_picture' => $post_picture
								));

                if(move_uploaded_file($_FILES['post_picture']['tmp_name'], $target))
                {

                // Tells you if its all ok
                echo "The file ". basename( $post_picture). " has been uploaded, and your information has been added to the directory";
                }
                else {

                // Gives and error if its not
                echo "Sorry, there was a problem uploading your file.";
                }

								//redirect to index page
								header('Location: newsandmedia.php?action=added');
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="post_picture">Image 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="post_picture" name='post_picture' value='<?php if(isset($error)){ echo $_POST['post_picture'];}?>' placeholder="Please select Image File" required="required" class="form-control col-md-7 col-xs-12 filestyle"  data-input="false">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="post_text" class="control-label col-md-3">Content</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="post_text" type='text' name='post_text' value='<?php if(isset($error)){ echo $_POST['post_text'];}?>' placeholder="Please enter content" class="form-control col-md-7 col-xs-12" required="required"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="post_url" class="control-label col-md-3">URL</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="post_url" type='text' name='post_url' value='<?php if(isset($error)){ echo $_POST['post_url'];}?>' placeholder="Please enter URL" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" name='submit' class="btn btn-success">Add</button>
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

