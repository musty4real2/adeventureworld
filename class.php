<?php

class pclass{
	
public $regno;
public $table;
public $field;
public $value;
public $regid;

/*****************************************************************************************************************************************************/
public function countclient($table){
	$this->table=$table;
	$count="SELECT  COUNT(`id`) AS `figure` FROM `{$this->table}`";
	$count=@mysql_query($count);
	
	while($row=mysql_fetch_array($count)){
		$figure=$row['figure'];
		return $figure;
		}
	}
/*****************************************************************************************************************************************************/

/*****************************************************************************************************************************************************/


public function counter(){
	$file="count.txt";
	if(is_file($file)==false)
	{
		touch($file);
		$open=fopen($file, "w");
		fwrite($open, "0");
		fclose($open);
	}
	$open=fopen($file, "f");
	$size=filesize($file);
	$count=fread($open, $size);
	fclose($open);
	$open=fopen($file, "w");
	$count++;
	fwrite($open, $count);
	fclose($open);
	echo $count;
	
	}
/*****************************************************************************************************************************************************/


	public function coupleRegConfirm($table, $field, $value){
		$this->table=$table;
		$this->field=$field;
		$this->value=$value;
		
		
		$fetch="SELECT * FROM `{$this->table}` WHERE `$this->field`='{$this->value}'";
		$query=@mysql_query($fetch) or die("<p class='msg error'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".mysql_error()."</p>");
		return $query;
		}
/*****************************************************************************************************************************************************/


		public function registeredMaleCouple(){
			$list=@mysql_query("SELECT * FROM `male_couple`") or die(mysql_error());
			return $list;
			}
/*****************************************************************************************************************************************************/
		public function registeredFemaleCouple($regid){
			$this->regid=$regid;
			$list=@mysql_query("SELECT * FROM `female_couple` WHERE `regid`='{$this->regid}'") or die(mysql_error());
			return $list;
			}

}
?>