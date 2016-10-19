<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Vue.js</title>
</head>



<style>
	
	html  {
		font-family: sans-serif;
		font-size: 14px;
	}
	.intro {
		display: block;
		width: 100%;
		max-width: 1170px;
		text-align: center;
		margin: 0 auto;
		position: relative;
	}

	.logo	{
		width: 100px;
	}

	.intro img {
		display: inline-block;

		width: 132px;

	}
	.intro h1 {
		font-weight: 300;
		font-size: 36px;
	}

	.partice {
		
		max-width: 20%;
		position: relative;
		margin: 0 auto;
		text-align: left;
		margin-top: 40px;

	}

	.partice a {
		color: #838383;
		display: inline-block;
		width: auto;
		margin: 5px 5px;

	}

	.partice .title {
		font-size: 20px;
		color: #42b983;
		text-align: center;
		margin-bottom: 40px;
	}

</style>

<body>

	

	<div class="intro">


		<img src="https://vuejs.org/images/logo.png" alt="" />

		<h1>The Progressive <br />
			JavaScript Framework

		</h1>


		<div class="partice">
			<div class="title">My Pratice</div>



			<?php 


			$dir  = './';
			$files = scandir($dir);

			foreach ($files as $key => $value) {
				if ($value == '..' || $value == '.' ||  $value == 'index.php' ||  $value == '.DS_Store'  ||  $value == '._.DS_Store'   
					) continue;
					echo '<a href="http://'.$_SERVER['HTTP_HOST']. '/vue.js/' .$value.'">'.$value.'</a> ';
			}

			?>
		</div>
	</div>





</body>
</html>
