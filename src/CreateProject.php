<?php


namespace ZelFramework\Console;


class CreateProject
{
	
	protected $dirs = [
		'config',
		'public',
		'src',
		'src/Controller',
		'src/Entity',
		'src/Repository',
		'src/Service',
		'src/Helper',
		'tests',
		'templates',
	];
	
	protected $files = [
		'.env' => '.env',
		'.htaccess' => '.htaccess',
		'public/index.php' => 'index.php',
		'src/Controller/HomeController.php' => 'HomeController.php',
		'templates/base.html.twig' => 'base.html.twig',
		'config/cli-config.php' => 'cli-config.php',
		'bootstrap.php' => 'bootstrap.php',
		'config/router.yaml' => 'config/router.yaml',
	];
	
	public static function init()
	{
		$cp = new CreateProject();
		$cp->createDirs();
		$cp->copyFiles();
	}
	
	public function createDirs()
	{
		foreach ($this->dirs as $name)
			if (!file_exists($name))
				mkdir($name);
	}
	
	public function copyFiles()
	{
		foreach ($this->files as $name => $content)
			copy(__DIR__ . '/files/' . $content, __DIR__ . '/../../../../' . $name);
	}
	
}