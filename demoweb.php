<?php
	header("Content-type:text/html;charset=utf-8");
	echo "<h2>静夜思</h2>";
	echo "作者:李白<br/>";
	echo "<ul>";
	echo "<li>床前明月光，</li>";
	echo "<li>疑似地上霜。</li>";
	echo "<li>举头望明月，</li>";
	echo "<li>低头思故乡。</li>";
	echo "</ul>";
	
	//if(){}else{}
	$name='ppp';
	$temp=&$name;
	$name='vvv';
	echo '<br/>'.$name;
	echo '<br/>'.$temp;
	
	$x=7;
	$y=2*$x+8;
	
	echo "<br/>".$x;
	echo "<br/>".$y;
	echo "<hr/>";
	
	$x=3;
	$y=24;
	$z=$y;
	
	$y=$x;
	$x=$z;
	echo $x."<br/>".$y."<hr/>";

	$x=9;
	$y=13;
	if($x>$y){echo $x;}else{echo $y;};



?>