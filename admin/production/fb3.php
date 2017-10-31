<?php //include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }


?>

<?php
function file_get_contents_curl($url) {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
      curl_setopt($ch, CURLOPT_URL, $url);
      $data = curl_exec($ch);
      curl_close($ch);
      return $data;
      }


$page_ID = '1632051467026616';
    $access_token = '382736275417259|9ZC6GeGbrKWK-em9rH2adZm1dHM';
    $number_of_posts = '25';
    
    $fbpage = file_get_contents_curl('https://graph.facebook.com/v2.7/'.$page_ID.'?fields=posts.limit('.$number_of_posts.'){id,full_picture,message,created_time,picture,permalink_url}&access_token='.$access_token);
    
    echo $fbpage;
    $fbdata = json_decode($fbpage, True);

    if ($fbdata['posts']['data'])
{

    foreach ($fbdata['posts']['data'] as $fbpost)
    {
		$postID = $fbpost->id;
		$date = date('d-m-Y', strtotime($fbpost['created_time']));
        $post_created = str_replace('-', '.', $date);
        $post_text = $fbpost['message'];
        $post_url = $fbpost['permalink_url'];
        $post_picture = $fbpost['full_picture'];
        try {

								//insert ignore into database
								$stmt = $db->prepare('INSERT IGNORE INTO newsandmedia (post_text, post_url, post_picture) VALUES (:post_text, :post_url, :post_picture)') ;
								$stmt->execute(array(
									':post_text' => $post_text,
									  ':post_url' => $post_url,
									  ':post_picture' => $post_picture
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

}
	echo 'UnSuccessful';
								//redirect to index page
								//header('Location: newsandmedia.php?action=fbsync');
								//exit;
	/*https://graph.facebook.com/1632051467026616/feed?fields=message%2Clink%2Ccreated_time&access_token=382736275417259|9ZC6GeGbrKWK-em9rH2adZm1dHM&limit=10
	
	https://graph.facebook.com/1927580094140417/picture?type=normal&access_token=382736275417259|9ZC6GeGbrKWK-em9rH2adZm1dHM */
?>



