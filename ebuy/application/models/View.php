<?php

class View {
	public $name;

	public function render($file) {
		ob_start();
		include(ROOT.$file);
		// echo "dddddddd";
		return ob_get_contents();
	}
	// public function actionIndex() {
	// 	$fc = FrontController::getInstance();

	// 	$view = new View();
	// 	$view->name = "John";

	// 	$result = $view->render('../views/index.php');

	// 	$fc->setBody($result);
	// }
}