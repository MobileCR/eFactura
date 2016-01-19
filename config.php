<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class MyDB extends SQLite3 {

            function __construct() {
                $this->open('test.sqlite');
            }

        }

        $db = new MyDB();
        if (!$db) {
            echo $db->lastErrorMsg();
        } else {
            echo "Opened database successfully\n";
        }
        ?>
    </body>
</html>
