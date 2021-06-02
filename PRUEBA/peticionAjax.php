<html>
    <head>
        <title>Ejemplo</title>
        <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
        <script>



            function proceso(valorCaja1, valorCaja2){

                //array asociativo para guardar los datos
             var parametros = {

                "valorCaja1" : valorCaja1,
                "valorCaja2" : valorCaja2
            };

            $.ajax({

                 data: parametros,
                 url: 'suma.php', 
                 type: 'post',
                 beforeSend: function(){
                     //Antes de enviar la petición
                 $("#resultado").html("Procesando los datos...");
                },
                 success: function(response){

                     //Mostramos los datos
                    $("#resultado").html(response)
                }
             })
            };
       </script>
    </head>
<body>
    introduce valor 1: <input type="text" name ="caja_texto" id="valor1" value="0"/><br/>
    introduce valor 2: <input type="text" name ="caja_texto" id="valor2" value="0"/><br/>
    Realiza suma <input type="button" value="calcular" onclick="proceso($('#valor1').val(),$('#valor2').val()); return false;"/><br/>
    Resultado: <span id="resultado">0</span>
</body>