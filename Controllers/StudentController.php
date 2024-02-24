<?php

class StudentController{

	public function home($params) {
        $view = new StudentView("home");
        $view->render();
    }
	
}