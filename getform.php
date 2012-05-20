<?php 
header('Content-Type:text/html; charset=UTF-8');

error_reporting(E_ALL);
$fn_raw=$_POST["fn"];
$ln_raw=$_POST["ln"];
$fn_clean=mysql_real_escape_string($fn_raw);
$ln_clean=mysql_real_escape_string($ln_raw);

$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//mysql_query("CREATE DATABASE IF NOT EXISTS rr_trial",$con);

if(!(mysql_select_db("rr_trial", $con)))
	{
	die('Could not find database: ' . mysql_error());
	}
	

/*mysql_query("CREATE TABLE IF NOT EXISTS names
                (
                ID int NOT NULL Auto_Increment,
                LAST_NAME varchar(80) NOT NULL,
                FIRST_NAME varchar(80) NOT NULL,
                Primary Key (ID)
                )",$con);
*/
mysql_set_charset('utf8', $con);

if(!mysql_query("INSERT INTO names (ID, FIRST_NAME, LAST_NAME)
            VALUES (NULL, '$fn_clean', '$ln_clean')"))
	{
	die('Could not find table: ' . mysql_error());
	}


mysql_close($con);

echo ('Submission succeeded.')

?>