<?php
/**
 * Created by PhpStorm.
 * User: mazhenyu
 * Date: 28/07/2017
 * Time: 14:51
 */

namespace app\admin\controller;
use houdunwang\core\Controller;
use houdunwang\view\View;



class Entry extends Common {
	/**
	 * 后台默认首页
	 * @return mixed
	 */
	public function index() {

		return View::make();

	}





}