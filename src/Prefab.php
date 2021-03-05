<?php

/*

	Copyright (c) 2009-2019 F3::Factory/Bong Cosca, All rights reserved.

	This file is part of the Fat-Free Framework (http://fatfreeframework.com).

	This is free software: you can redistribute it and/or modify it under the
	terms of the GNU General Public License as published by the Free Software
	Foundation, either version 3 of the License, or later.

	Fat-Free Framework is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
	General Public License for more details.

	You should have received a copy of the GNU General Public License along
	with Fat-Free Framework.  If not, see <http://www.gnu.org/licenses/>.

*/

namespace F3;

//! Factory class for single-instance objects
abstract class Prefab {

	/**
	*	Return class instance
	*	@return static
	**/
	static function instance() 
    {

		if ( ! Registry::exists($class = get_called_class())) {
			$reflection = new \ReflectionClass($class);
			$args = func_get_args();
			Registry::set($class, $args ? $reflection->newinstanceargs($args) : new $class);
		}

		return Registry::get($class);
	}

}