<?php
foreach (glob("*.html") as $filename) {
    echo "<a href=\"$filename\">$filename</a><br>";
}
?>