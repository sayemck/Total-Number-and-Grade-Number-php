<form action="" method="get">
	Bangla:<br/>
    <input type="text" name="char1" id="char"/><br/>
    English:<br/>
     <input type="text" name="char2" id="char"/><br/>
     Math:<br/>
      <input type="text" name="char3" id="char"/><br/>
      Computer:<br/>
       <input type="text" name="char4" id="char"/><br/>
      Psychology:<br/>
        <input type="text" name="char5" id="char"/><br/>
    <input type="submit" name="submit" value="submit"/>
</form>
<?php
if(isset($_GET['submit'])){
	$num1 = $_GET['char1'];
	$num2 = $_GET['char2'];
	$num3 = $_GET['char3'];
	$num4 = $_GET['char4'];
	$num5 = $_GET['char5'];
	if($num1>=33 && $num2>=33 && $num3>=33 && $num4>=33 && $num5>=33)
	  {
		  $sum = $num1+$num2+$num3+$num4+$num5;
		  $sum;
		  if($sum>300 && $sum<=350)
		  {
			  print "A+"."<br/>";
			  echo "Total Number :".$sum;
		  }
		  elseif($sum>250 && $sum<=299)
		  {
			  print "B+"."<br/>";
			  echo "Total Number :".$sum;
		  }
		  elseif($sum>200 && $sum<=249)
		  {
			  print "C+"."<br/>";
			  echo "Total Number :".$sum;
		  }
	  }
	  else{
		  print "Fail";
	  }
}
?>
