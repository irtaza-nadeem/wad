<?php

require "db_connection.php";
function getCats()
{
    global $con;
    $getCatQuery = "select * from categories";
    $getCatResult = mysqli_query($con, $getCatQuery);
    while($row = mysqli_fetch_assoc($getCatResult))
    {
        //$id = $row['cat_id'];
        $title = $row['cat_item'];
        echo "<li><a class='nav-link' href='#'>$title</a></li>";
    }
}

function getBrands()
{
    global $con;
    $getCatQuery = "select * from brands";
    $getCatResult = mysqli_query($con, $getCatQuery);
    while($row = mysqli_fetch_assoc($getCatResult))
    {
        //$id = $row['cat_id'];
        $title = $row['brand_title'];
        echo "<li><a class='nav-link' href='#'>$title</a></li>";
    }
}

function getBrands2()
{
    global $con;
    $getCatQuery = "select * from brands";
    $getCatResult = mysqli_query($con, $getCatQuery);
    while($row = mysqli_fetch_assoc($getCatResult))
    {
        //$id = $row['cat_id'];
        $title = $row['brand_title'];
        echo "<option>$title</option>";
    }
}

function getCats2()
{
    global $con;
    $getCatQuery = "select * from categories";
    $getCatResult = mysqli_query($con, $getCatQuery);
    while($row = mysqli_fetch_assoc($getCatResult))
    {
        //$id = $row['cat_id'];
        $title = $row['cat_item'];
        echo "<option>$title</option>";
    }
}