<?php
/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 28/07/2017
 * Time: 15:35
 */

namespace houdunwang\view;


class View {
	public static function __callStatic( $name, $arguments ) {
		return call_user_func_array([new Base(),$name],$arguments);
	}
}