<?php
	$json = file_get_contents("http://twitter.com/status/user_timeline/tareq_cse.json?count=10", true);
	$decode = json_decode($json, true);
 
	echo "<img src=\"".$decode[0][user][profile_image_url]."\"</img><br>"; //getting the profile image
	echo "Name: ".$decode[0][user][name]."<br>"; //getting the username
	echo "Web: ".$decode[0][user][url]."<br>"; //getting the web site address
	echo "Location: ".$decode[0][user][location]."<br>"; //user location
	echo "Updates: ".$decode[0][user][statuses_count]."<br>"; //number of updates
	echo "Follower: ".$decode[0][user][followers_count]."<br>"; //number of followers
	echo "Following: ".$decode[0][user][friends_count]."<br>"; // following
	echo "Description: ".$decode[0][user][description]."<br>"; //user description
?>