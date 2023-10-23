<?php

$conn = mysqli_connect('localhost','root','','Shoes');

if (!$conn) {
    echo "Connection Failed";
}