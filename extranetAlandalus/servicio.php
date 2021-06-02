
<?php
session_start();
 
//VARIABLES DE ACCESO AL DOCUMENTO XML:

$keyAPI = "4p8i5do6antq";

$fichero = "http://api.tiempo.com/index.php?api_lang=es&localidad=106&affiliate_id=$keyAPI";

	
//DECLARACION DE ARRAYS
$var1 = array(0=>"Temp min."); //ARRAY TEMPMIN, ALMACENAMOS LA TEMPERATURA MINIMA
$var2 = array(0=>"Temp max."); //ARRAY TEMPMAX, ALMACENAMOS LA TEMPERATURA MAXIMA
$var3 = array(0=>"Viento.");  //ARRAY VIENTO, ALMACENAMOS EL ID DEL ICONO DEL VIENTO
$var3_des = array(0=>"Desc. Vento"); //ARRAY DES_VIENTO, ALMACENAMOS LA DESCRIPCION DEL VIENTO
$var4 = array(0=>"Simbolo."); //ARRAY SIMBOLO, ALMACENAMOS EL ID DEL ICONO DEL TIEMPO
$var4_des = array(0=>"Desc. Simbolo"); //ARRAY DES_SIMBOLO, ALMACENAMOS LA DESCRIPCION DEL TIEMPO
$var5 = array(0=>"Dia."); //ARRAY DIA, ALMACENAMOS EL DIA DE LA SEMANA
$array = array();
	
	
	

	if($xml = simplexml_load_file($fichero)){
		
	$i=0;
	$nday=4; // Aqui tenemos las predicciones para 4 dias
	$url= $xml->location->interesting->url;
	$array=explode('-', $url);
	
	foreach ($xml->location->var as $var) {

		switch ($i) {
			case 0: 
				$j=0;
				for($j=0; $j<$nday; $j++){$var1 = $var1 + array($j+1=>htmlentities($xml->location->var[$i]->data->forecast[$j]->attributes()->value,ENT_COMPAT,'UTF-8'));}
			break;
			case 1:
				$j=0;
				for($j=0; $j<$nday; $j++){$var2 = $var2 + array($j+1=>htmlentities($xml->location->var[$i]->data->forecast[$j]->attributes()->value,ENT_COMPAT,'UTF-8'));}
			break;
			case 2:
				$j=0;
				for($j=0; $j<$nday; $j++){$var3 = $var3 + array($j+1=>htmlentities($xml->location->var[$i]->data->forecast[$j]->attributes()->idB,ENT_COMPAT,'UTF-8'));
										  $var3_des = $var3_des + array($j+1=>htmlentities($xml->location->var[$i]->data->forecast[$j]->attributes()->value,ENT_COMPAT,'UTF-8'));}
			break;
			case 3: 
				$j=0;
				for($j=0; $j<$nday; $j++){$var4 = $var4 + array($j+1=>htmlentities($xml->location->var[$i]->data->forecast[$j]->attributes()->id,ENT_COMPAT,'UTF-8'));
										  $var4_des = $var4_des + array($j+1=>htmlentities($xml->location->var[$i]->data->forecast[$j]->attributes()->value,ENT_COMPAT,'UTF-8'));}
			break;
			case 4: 
				$j=0;
				for($j=0; $j<$nday; $j++){$var5 = $var5 + array($j+1=>htmlentities($xml->location->var[$i]->data->forecast[$j]->attributes()->value,ENT_COMPAT,'UTF-8'));}
			break;
		}//switch
		$i++;
	}//foreach

	//Creamos variables de sesión para utilizar los datos del clima en otra página:

	$_SESSION['clima']['maxima'] = $var2;
	$_SESSION['clima']['viento'] = $var3;
	$contador = 0;


	for($i=1; $i<$nday+1; $i++){

	
	   if(($var2[$i]>=45) || ($var3[$i]>=103)){ //Si la temperatura máxima es de 45 en adelante o hay vientos huracanados de 103km/h o más

		$contador ++;
		
		echo '<div class="alerta">                
			   <div>
			   <img class="imagenTarjeta" src="./img/imgClima/tiempo/'.$var4[$i].'.gif" width="70px" alt="'.$var4_des[$i].'" title="'.$var4_des[$i].'/>
				 
			   </div>
			   <div class="texto">
				   <h6>'.$var5[$i].'</h6>
				   <p>Maxima:<span>'.$var2[$i].'</span></br>
					   Mínima:<span>'.$var1[$i].'</span></br>
					   <span>'.$var3_des[$i].'</span>
				   </p>
			   </div>                                      
		   </div>'; 
	   }else{

		echo '<div class="tarjeta">                
		<div>
		<img class="imagenTarjeta" src="./img/imgClima/tiempo/'.$var4[$i].'.gif" width="70px" alt="'.$var4_des[$i].'" title="'.$var4_des[$i].'/>
		  
		</div>
		<div class="texto">
			<h6>'.$var5[$i].'</h6>
			<p>Maxima:<span>'.$var2[$i].'</span></br>
				Mínima:<span>'.$var1[$i].'</span></br>
				<span>'.$var3_des[$i].'</span>
			</p>
		</div>                                      
	</div>';


	   }
		
		 
	};
	
	if($contador >= 1){$_SESSION['notificacion'] = "1";}else{$_SESSION['notificacion'] = "2";}

}

  

?>