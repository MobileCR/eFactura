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

$sql = <<<EOF
      SELECT * FROM prueba;
EOF;

$ret = $db->query($sql);
while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
    echo "ID = " . $row['id'] . "\n";
    echo "nombre= " . $row['nombre'] . "\n";
}
echo "Operation done successfully\n";
$db->close();
