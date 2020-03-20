<?php
//when we need to save more then one peace of data, better use array
	$user =['name' => 'Andrius', 'email' => 'test@test.com', 'age' =>35];

	$user = serialize($user); //serialize prepare data to be stored 1) serialize data

	setcookie('user', $user, time() + (86400 * 30));//jei bandysime uzsetinti cookie kaip masyva, gausime klaida, kad turi buti paduotas stringas, o mes paduodame array 2) save to cookie

	$user = unserialize($_COOKIE['user']); // 3)unserialize to use

	echo $user['name'].'<br>';
	print_r($user);
	
