<?php

namespace ZelFramework\Console;


class Console
{
	
	static $commands = [
		'create-project' => 'ZelFramework\Console\CreateProject::init'
	];
	
	public static function command($argv)
	{
		foreach (self::$commands as $cmd => $function) {
			if ($cmd === $argv[1])
				$function($argv);
		}
	}
	
}