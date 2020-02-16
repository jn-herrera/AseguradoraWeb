<?php
class Connection
{
 

public static function runQuery($query)
	{
	//"localhost","root","olivetti24","chatbot"
	$link = mysqli_connect("localhost","root","","aseguradora");

		if (!$link) {
			echo "Error: connect a MySQL." . PHP_EOL;
			echo "error: " . mysqli_connect_errno() . PHP_EOL;
		
			exit;
		}
        mysqli_set_charset($link, "utf8");
		$result = mysqli_query($link ,$query);
		mysqli_insert_id($link);

	    mysqli_close($link);

		return $result;
	}
public static function runQueryId($query)
	{
	//"localhost","root","olivetti24","chatbot"
	$link = mysqli_connect("localhost","iesa2019","Iesa2019","iesa2019_aseguradora");

		if (!$link) {
			echo "Error: connect a MySQL." . PHP_EOL;
			echo "error: " . mysqli_connect_errno() . PHP_EOL;
		
			exit;
		}
        mysqli_set_charset($link, "utf8");
		mysqli_query($link ,$query);
		$result = mysqli_insert_id($link);

	    mysqli_close($link);

		return $result;
	}

}
?>