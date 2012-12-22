<?php

$content = file_get_contents("http://www.kickstarter.com/projects/ouya/ouya-a-new-kind-of-video-game-console");

$total = substr($content, strpos($content, "\">$")+3, 15);
$total = substr($total, 0, strpos($total, '<'));
$total = str_replace(',', '', $total);

$return = array('total_users'=>$total);
echo json_encode($return);

exit;