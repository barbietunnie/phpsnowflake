<?php

include 'idworker.php';
$snowflak = new Snowflak();
for ($i = 0; $i < 1000; $i++)
{
    $id = $snowflak->get_nextid();
    $sequence = $snowflak->get_sequence();
    echo "{$id} - {$sequence}\n";
}