<?php
require_once 'inc/inc_main.php';

echo '<pre>';
$query = $db->query("SELECT * FROM users");
$rows = $db->num_rows($query);
if ($rows) {
    while ($rec = $db->fetch($query)) {
        print_r($rec);
    }
} else {
    echo "Data not found.";
}
echo '</pre>';
