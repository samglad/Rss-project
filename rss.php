<?php
// fetch_data.php
$rss_url = 'https://anchor.fm/s/eff9f688/podcast/rss';
$rss = simplexml_load_file($rss_url);
echo json_encode($rss);
?>
