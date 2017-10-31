<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }


?>

<?php
$page_ID = '1632051467026616';
    $access_token = '382736275417259|4b35ec2bb2b9488ea7957bfddab045fd';
    $number_of_posts = '25';
    
    $fbpage = file_get_contents('https://graph.facebook.com/v2.7/'.$page_ID.'?fields=posts.limit('.$number_of_posts.'){id,full_picture,message,created_time,picture,permalink_url}&access_token='.$access_token);
    
    $fbdata = json_decode($fbpage);

    foreach ($fbdata->posts->data as $fbpost)
    {
		$postID = $fbpost->id;
		$date = date('d-m-Y', strtotime($fbpost->created_time));
        $post_created = str_replace('-', '.', $date);
        $post_text = $fbpost->message;
        $post_url = $fbpost->permalink_url;
        $post_picture = $fbpost->full_picture;
        $post_fb = 'YES';
        try {

								//insert ignore into database
								$stmt = $db->prepare('INSERT IGNORE INTO newsandmedia (postID, post_text, post_url, post_picture, post_fb) VALUES (:postID,:post_text, :post_url, :post_picture, :post_fb)') ;
								$stmt->execute(array(
									':postID' => $postID,
									':post_text' => $post_text,
									  ':post_url' => $post_url,
									  ':post_picture' => $post_picture,
                    					':post_fb' => $post_fb
								));
								

							} catch(PDOException $e) {
							    echo $e->getMessage();
							}

        //Your code here (example output below
        //echo 'Date: '.$post_created;
        //echo 'Text: '.$post_text;
        //echo 'Picture: <img src="'.$post_picture.'">';
		header('Location: newsandmedia.php?action=fbsync');
    }
	echo 'Successful';
								//redirect to index page
								//header('Location: newsandmedia.php?action=fbsync');
								exit;
	/*https://graph.facebook.com/1632051467026616/feed?fields=message%2Clink%2Ccreated_time&access_token=382736275417259|9ZC6GeGbrKWK-em9rH2adZm1dHM&limit=10
	
	https://graph.facebook.com/1927580094140417/picture?type=normal&access_token=382736275417259|9ZC6GeGbrKWK-em9rH2adZm1dHM */
?>



