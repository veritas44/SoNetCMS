<?php

$notificationText = " has posted the following comment on the <a href=\"http://" . $_SERVER['HTTP_HOST'] . "/groups/id/$parentId\">$row->name</a> group's <a href=\"$messageURL\">image gallery:</a><br><br><div style=\"font-style:italic; color:#8a8a8a;\">" . preg_replace("/\\n/", "<br>", htmlentities(unsanitize_string($body))) . "</div><br><a href=\"$messageURL\">Click here</a> to view the entire gallery and read all the comments.";

?>