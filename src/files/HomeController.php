<?php


namespace App\Controller;


use ZelFramework\Kernel\Bundle\Controller\AbstractController;

class HomeController extends AbstractController
{
	
	/**
	 * @Route("/", name="home_view")
	 */
	public function homeView()
	{
		return $this->render('base');
	}
	
}