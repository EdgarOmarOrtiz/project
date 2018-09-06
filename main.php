<?php

echo "Hello";
/*
$serverName = "assistant.database.windows.net";
$connectionOptions = array(
    "Database" => "assistant",
    "Uid" => "assistantadmin",
    "PWD" => "M@cbook4892"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

$tsql= "SELECT * From Users";


$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ($row['LastName'] . " " . $row['FirstName'] . PHP_EOL);
}
sqlsrv_free_stmt($getResults);*/
?>