<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;

abstract class Controller
{
    public function getCount($tableName)
{
    global $conn;

    $table = ($tableName);
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    $totalCount = mysqli_num_rows($result);
    return $totalCount;

}
}
