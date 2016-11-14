<?php
	include_once("../db/conexao.php");

if(isset($_POST['bandwidth']) && isset($_POST['boostclock']) && isset($_POST['brand']) && 
isset($_POST['buswidth']) && isset($_POST['driver']) && 
isset($_POST['gpu']) && isset($_POST['gpuclock']) && isset($_POST['io']) && 
isset($_POST['memoryclock']) && isset($_POST['memorysize']) && isset($_POST['minimumpowersupply']) && 
isset($_POST['model']) && isset($_POST['recommendedpowersupply']) && isset($_POST['realeasedate']) && 
isset($_POST['shaders']) && isset($_POST['technology']) && isset($_POST['transistors']) && 
isset($_POST['website']) && isset($_POST['imagem'])){

		$bandwidth = $_POST['bandwidth'];
		$boostclock = $_POST['boostclock'];
		$brand = $_POST['brand'];
		$buswidth = $_POST['buswidth'];
		$driver = $_POST['driver'];
		$gpu = $_POST['gpu'];
		$gpuclock = $_POST['gpuclock'];
		$io = $_POST['io'];
		$memoryclock = $_POST['memoryclock'];
		$memorysize = $_POST['memorysize'];
		$minimumpowersupply = $_POST['minimumpowersupply'];
		$model = $_POST['model'];
		$recommendedpowersupply = $_POST['recommendedpowersupply'];
		$realeasedate = $_POST['realeasedate'];
		$shaders = $_POST['shaders'];
		$technology = $_POST['technology'];
		$transistors = $_POST['transistors'];
		$website = $_POST['website'];
		$imagem = $_POST['imagem'];

		$conexao = new DBConnector();

		$result = $conexao->query("INSERT INTO  tb_vga (Bandwidth, Boost Clock, Brand, Bus Width, Driver, GPU, GPU Clock, IO, Memory Clock, Memory Size, Minimum Power Supply, Model, Recommended Power Supply, Realease Date, Shaders, Technology, Transistors, Website, Imagem) VALUES ('".$bandwidth."', '".$boostclock."', '".$brand."', '".$buswidth."', '".$driver."', '".$gpu."', '".$gpuclock."', '".$io."', '".$memoryclock."', '".$memorysize."', '".$minimumpowersupply."', '".$model."', '".$recommendedpowersupply."', '".$realeasedate."', '".$shaders."', '".$technology."', '".$transistors."', '".$website."', '".$imagem."' )");

		header('Location: ../home.php');
}

?>