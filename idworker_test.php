<?php

include 'idworker.php';
$snowflak = new Snowflake();
$st = microtime(true);
for ($i = 0; $i < 10000; $i++)
{
    $id = $snowflak->get_nextid();
    $sequence = $snowflak->get_sequence();
    echo "{$id} - {$sequence}\n";
}
echo "time:" . (microtime(true) - $st) . "\n";