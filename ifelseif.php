<?php
	$percentage = 22;
	if ($percentage >= 80 && $percentage <= 100) 
	{
		echo "merit";
	}
	 elseif ($percentage >= 60 && $percentage < 79) 
	{
		echo "2st division";
	}
	 elseif ($percentage >= 45 && $percentage < 59) 
	{
		echo "2nd division";
	} 
	 elseif ($percentage >= 33 && $percentage < 44) 
	{
		echo "3rd division";
	}
	 elseif ($percentage < 33) 
	{
		echo "fail";
	} else 
	{echo "please enter valid percentage";}
  ?>