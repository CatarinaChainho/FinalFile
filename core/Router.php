<?php

class Router
{
	public $routes = [
		'GET' => [],
		'POST' => []
	];

	public static function load($file)
	{
		$router = new static;

		require $file;

		return $router;
	}

	/**
	 * Defines a new GET route
	 * 
	 * @param  String $uri
	 * @param  String $controller
	 * @return Void
	 */
	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}

	/**
	 * Defines a new POST route
	 * 
	 * @param  String $uri
	 * @param  String $controller
	 * @return Void
	 */
	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType)
	{
		if (array_key_exists($uri, $this->routes[$requestType])) {
			return $this->routes[$requestType][$uri];
		}

		throw new Exception('No route defined for this URI.');
	}
}