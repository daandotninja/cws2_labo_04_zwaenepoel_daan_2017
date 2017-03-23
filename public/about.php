<?php 
	
	// /**
	//  * Includes
	//  * ----------------------------------------------------------------
	//  */

		// config & functions
		require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem( 'templates');
		$twig = new Twig_Environment($loader);
		require_once 'config.php';
		require_once 'functions.php';

		$db = getDatabase();


  //       $stmt1 = $db->prepare('SELECT * FROM items');
		// $stmt1->execute();
		// $items = $stmt1->fetchAll(PDO::FETCH_ASSOC);

		// $stmt2 = $db->prepare('SELECT * FROM occasies WHERE type= ? ');
		// $stmt2->execute(array("houtblazer"));
		// $houtblazers = $stmt2->fetchAll(PDO::FETCH_ASSOC);

  
  //       $stmt3 = $db->prepare('SELECT * FROM occasies WHERE type=?');
  //       $stmt3->execute(array("koperblazer"));
  //       $koperblazers = $stmt3->fetchAll(PDO::FETCH_ASSOC);




	// /**
	// * No action to handle: show our page itself
	// * ----------------------------------------------------------------
	// */

		// Get all todo items from databases
	
		//$what = $items['what'];
		$url = $_SERVER['PHP_SELF'];
		$tpl = $twig->loadTemplate('about.twig');

		echo $tpl->render(array(
			// 'houtblazers' => $houtblazers,
   //          'koperblazers' => $koperblazers,
   //          'items'=> $items
		));

 ?>