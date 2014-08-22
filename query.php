<?php
    if (isset($_GET['query'])) {
         if ($_GET['query'] != "") {
            mysql_connect("127.0.0.1", "root", "fghn94nv2-03dc$#dhjsk334056mv4jfowndiau");
	        mysql_select_db("umass");
	   
	        $sql = "SELECT * FROM organizations WHERE name LIKE '%" . $_GET['query'] .  "%'";
	        $result = mysql_query($sql);
	   
	        while ($row = mysql_fetch_row($result)) {
	           echo '<a href="' . $row[4] . '">';
	           echo '<div id="result">';
	           echo '<div id="resultTitle">';
	           echo $row[1];
	           echo '</div>';
	           echo '<div id="descShort">';
	           echo $row[2];
	           echo '</div>';
	           echo '</div>';
	           echo '</a>';
           }
        }
    }
?>