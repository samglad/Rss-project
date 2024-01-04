<?php
// Server-Side: PHP Code to Fetch the RSS Feed
$rss_url = '$rss_url = 'https://anchor.fm/s/eff9f688/podcast/rss';
$rss = simplexml_load_file($rss_url);
$feed = json_encode($rss);
?>