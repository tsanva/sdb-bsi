<?php

function queryTable($query)
	{
    require '../model/db_connection.php';

    openConn();
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}