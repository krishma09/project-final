<?php
class conclass{
	public function getdata($query)
	{
		$con=MYSQL_connect('localhost','root','');
		MYSQL_select_db('knowledge',$con);
		$res=MYSQL_query($query,$con);
		return $res;
	}
}

 ?>