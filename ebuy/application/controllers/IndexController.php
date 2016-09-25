<?php

class IndexController implements IController {

	public function actionIndex() {
		$fc = FrontController::getInstance();

		$params=$fc->getParams();
		$view = new View();
		$view->name = $params->name;
		$view->age = $params->age;

		$result = $view->render('/application/views/home/index.php');
		$fc->setBody($result);
	}
}