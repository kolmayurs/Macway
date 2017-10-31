<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }


?>

<?php
    
    $fbpage = file_get_contents('https://graph.facebook.com/1632051467026616/posts?fields=id,full_picture,message,created_time,picture,permalink_url&limit=10&access_token=382736275417259|4b35ec2bb2b9488ea7957bfddab045fd');
    
    $fbdata = json_decode($fbpage, true);

    foreach ($fbdata->data as $fbpost)
    {
		$postID = $fbpost->id;
		$date = date('d-m-Y', strtotime($fbpost['created_time']));
        $post_created = str_replace('-', '.', $date);
        $post_text = $fbpost['message'];
        $post_url = $fbpost['permalink_url'];
        $post_picture = $fbpost['full_picture'];
        $post_fb = 'YES';
        try {

								//insert ignore into database
								$stmt = $db->prepare('INSERT IGNORE INTO newsandmedia (post_text, post_url, post_picture, post_fb) VALUES (:post_text, :post_url, :post_picture, :post_fb)') ;
								$stmt->execute(array(
									':post_text' => $post_text,
									  ':post_url' => $post_url,
									  ':post_picture' => $post_picture,
                    					':post_fb' => $post_fb
								));
								echo 'Successful';

							} catch(PDOException $e) {
							    echo $e->getMessage();
							}

        //Your code here (example output below
        //echo 'Date: '.$post_created;
        //echo 'Text: '.$post_text;
        //echo 'Picture: <img src="'.$post_picture.'">';
		header('Location: news.php?action=fbsync');
    }
	echo 'Successful';
								//redirect to index page
								//header('Location: newsandmedia.php?action=fbsync');
								exit;
	/*https://graph.facebook.com/1632051467026616/feed?fields=message,link,created_time&access_token=382736275417259|9ZC6GeGbrKWK-em9rH2adZm1dHM&limit=10
	
	https://graph.facebook.com/1927580094140417/picture?type=normal&access_token=382736275417259|9ZC6GeGbrKWK-em9rH2adZm1dHM */
?>



