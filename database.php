<?php
function make_connection()
{
  $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $dbname = "todolist";
  $con=new mysqli('localhost:3307','root','','todolist');
if ($con->connect_error)
{
  echo "There is an error in Database connection";
}
return $con;
}
function add_items($value)
{
  $con = make_connection();
  $query = "INSERT INTO `todolist`(id,item,status) VALUES(NULL,'$value','0')";
  $con->query($query);
}
function get_items()
{
  $con = make_connection();
  $query = "SELECT id,item FROM todolist WHERE status = '0'";
  $result = $con->query($query);
  return $result;
}
function get_items_checked()
{
    $con = make_connection();
    $query = "SELECT id,item from todolist WHERE status='1'";
    $result = $con->query($query);
    return $result;
}
function update_items($id)
{
    $con = make_connection();
    $query = "UPDATE todolist set status='1' WHERE id='$id'";
    $result = $con->query($query);
}

function delete_items($id)
{
    $con = make_connection();
    $query = "DELETE from todolist WHERE id='$id'";
    $result = $con->query($query);
}
?>
