<?php
	include_once("../db/conexao.php");
	
	if(isset($_POST['nome']) && isset($_POST['bandwidth']) && isset($_POST['boostclock']) && isset($_POST['brand']) && 
	isset($_POST['buswidth']) && isset($_POST['driver']) && 
	isset($_POST['gpu']) && isset($_POST['gpuclock']) && isset($_POST['io']) && 
	isset($_POST['memoryclock']) && isset($_POST['memorysize']) && isset($_POST['minimumpowersupply']) && 
	isset($_POST['model']) && isset($_POST['recommendedpowersupply']) && isset($_POST['releasedate']) && 
	isset($_POST['shaders']) && isset($_POST['technology']) && isset($_POST['transistors']) && 
	isset($_POST['website'])){

		$nome = $_POST['nome'];
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
		$releasedate = $_POST['releasedate'];
		$shaders = $_POST['shaders'];
		$technology = $_POST['technology'];
		$transistors = $_POST['transistors'];
		$website = $_POST['website'];
		//$imagem = $_POST['imagem'];

		$conexao = new DBConnector();

		$sql = $conexao->query("INSERT INTO  tb_vga(nome, bandwidth, boostclock, brand, buswidth, driver, gpu, gpuclock, io, memoryclock, memorysize, minimumpowersupply, model, recommendedpowersupply, releasedate, shaders, technology, transistors, website) VALUES ('".$nome."','".$bandwidth."', '".$boostclock."', '".$brand."', '".$buswidth."', '".$driver."', '".$gpu."', '".$gpuclock."', '".$io."', '".$memoryclock."', '".$memorysize."', '".$minimumpowersupply."', '".$model."', '".$recommendedpowersupply."', '".$releasedate."', '".$shaders."', '".$technology."', '".$transistors."', '".$website."')");

		header('Location: ../home.php?pagina=admin&action=1&msg=2');

}else{
	echo "error";
}

?>