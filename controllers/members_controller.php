<?php

//モデルファイルの読み込み
require ('models/member.php');

// コントローラーのクラスをインスタンス化
$controller = new MembersController();

// アクション名によって実行するメソッドを変える
switch ($action) {
	case 'signup':
		$controller->signup();
		break;
	case 'login':
		$controller->login();
		break;
	case 'check':
		$controller->check();
		break;
	case 'thanks':
		$controller->thanks();
		break;
	
	default:
		# code...
		break;
}

class MembersController {

	// members/signup というURLで呼び出される
	function signup(){
		echo 'm signup';

		$resouce = 'members';
		$action = 'signup';

		include('views/layouts/application.php');

	}

	// members/login
	function login(){
		echo 'm login';

		$resouce = 'members';
		$action = 'login';

		include('views/layouts/application.php');

	}

	// members/check
	function check(){
		echo 'm check';

		$resouce = 'members';
		$action = 'check';

		include('views/layouts/application.php');

	}

	// members/check
	function thanks(){
		echo 'm thanks';

		//モデルを呼び出す
		$member = new Member();
		//登録処理の実行
		$member->create();

		$resouce = 'members';
		$action = 'thanks';

		include('views/layouts/application.php');

	}

	// members/logout
	function logout(){
		echo 'm logout';

		

	}

}


?>