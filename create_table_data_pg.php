<?php 
include 'connect_db_pg.php';

//Create a table containing the data
$tb = 'CREATE TABLE Data(
pair varchar(15),
date_time int,
high NUMERIC(9, 8),
low NUMERIC(9, 8),
open NUMERIC(9, 8),
close NUMERIC(9, 8),
volume float,
quoteVolume float,
weightedAverage NUMERIC(9, 8),
PRIMARY KEY (pair, date_time)
)';

$result = pg_query($conn, $tb);

 if($result) {
    echo "Table Data created successfully";
    echo '<br>';
} else {
    echo "Error creating table";
    echo '<br>';
}