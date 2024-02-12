<?php 

?>
<html style="background-color: #333;">
<head><title><?php echo time();?></title>
<style>
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


<body>
<center style="position: relative;top: 50px;">
<div>
<img style="width:55px;" src="imgs/t.png"><br>
<label class="thefake" style="color: white;font-weight: bold;font-size: 16px;letter-spacing: 5px;">ABRAVANEL</label>
</div>
<br><br><br>
<form method="POST" action="painel.php">
<input type="text" id="usuario" name="usuario" required="" autocomplete="off" placeholder="Usuario" style="width: 25%;height: 7%;text-align: center;font-size: 15px;font-weight: 600;outline: none;"><br><br>
<input type="password" id="senha" name="senha" required="" autocomplete="off" placeholder="Senha" style="width: 25%;height: 7%;text-align: center;font-size: 15px;font-weight: 600;outline: none;"><br><br>
<button type="submit" style="width: 25%;font-size: 12px;font-weight: 600;background-color: #666;border: navajowhite;color: white;cursor: pointer;padding: 15px 15px 15px 15px;">Entrar</button>
</form>
</center>
</body>
</html>