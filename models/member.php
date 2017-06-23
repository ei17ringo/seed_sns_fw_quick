<?php

	class Member {
		// プロパティ
		private $dbconnect = '';

		//　コンストラクタ
		function __construct(){
			// DB接続ファイルを読み込む
			require('dbconnect.php');

			// DB接続設定の値をプロパティに代入
			$this->dbconnect = $db;
		}

		function create(){
			var_dump("model member の create");


			// SQL文の作成
			$sql = "INSERT INTO `members`(`member_id`, `nick_name`, `email`, `password`, `picture_path`, `created`, `modified`) VALUES (null,'test','test@email','test','',now(),now())";

			// SQL文の実行
			// $this->dbconnect
			mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
		}

		function update(){

		}

	}

?>