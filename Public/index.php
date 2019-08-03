<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 7/20/2019
 * Time: 1:11 AM
 */

main::start();

class main {

    static public function start() {

        $file = fopen("sagar.csv","r");

        while(! feof($file))
        {
            $record = fgetcsv($file);

            $records[] =$record;
        }

        fclose($file);
        Print_r ($records);
    }
   }

echo "<html><body><table>\n\n";
$f = fopen("sagar.csv", "r");
while (($line = fgetcsv($f)) !== false) {
    echo "<tr>";
    foreach ($line as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";

main::start("sagar.csv");
