<?php
$f = __DIR__ . '/application/config/routes.php';
$c = file_get_contents($f);
$needle = "\$route['admin-reject-new-listing/(:any)'] = 'dbd/Users/rejectNewListing/\$1';";
if (strpos($c, $needle) === false) {
    echo "NOTFOUND\n";
    exit(1);
}
if (strpos($c, "\$route['writer']") !== false) {
    echo "ALREADY_PRESENT\n";
    exit(0);
}
$insert = "\n\$route['writer'] = 'Writer/index';\n\$route['writer/(:any)'] = 'Writer/\$1';\n";
$c = str_replace($needle, $needle . $insert, $c);
file_put_contents($f, $c);
echo "OK\n";
