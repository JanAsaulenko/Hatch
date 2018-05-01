<?php
$tdid=$_POST['id'];
$tdnews=$_POST['news'];
if ( isset ( $_POST['submit'] ) )
{
    echo '<input type="text" name="idup" value='.$tdid.'>';
    echo '<input type="text" name="textup" value='.$tdnews.'>';
}
?>