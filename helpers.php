<?php

if ( ! function_exists('controller'))
{
 	/**
 	 * Add a controller to routes
 	 *
 	 * @param string $uri
 	 * @param string $controller
 	 * @param array $names
 	 * @return void
 	 */   
    function controller($uri, $controller, $names = [])
    {
        return app('router')->controller($uri, $controller, $names);
    }
}

if ( ! function_exists('controllers'))
{
	/**
	 * Add multiple controllers to routes
	 *
	 * @param array $controllers
	 * @return void
	 */
	function controllers(array $controllers)
	{
		return app('router')->controllers($controllers);
	}
}

if ( ! function_exists('input'))
{
	/**
	 * Retreive the input of a form
	 *
	 * @param string $name
	 * @return void
	 */
	function input($name = null)
	{
		if (is_null($name))
		{
			return \Input::all();
		}
		else
		{
			return \Input::get($name);
		}
	}
}

if ( ! function_exists('user'))
{
	function user()
	{
		return app('guard')->user();
	}
}