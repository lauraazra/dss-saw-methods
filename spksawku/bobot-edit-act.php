<?php
require "include/conn.php";
$id = $_POST['kdkriteria'];
$criteria = $_POST['kriteria'];
$attribute = $_POST['attribute'];
$weight = $_POST['bobot'];

$sql = "UPDATE criteria SET kriteria='$criteria',bobot='$weight',atribut='$attribute' WHERE kdKriteria='$id'";
$result = $db->query($sql);
header("location:./bobot.php");
