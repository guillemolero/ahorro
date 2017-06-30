/**
 * Created by Portatil on 30/06/2017.
 */

$(document).ready(


    $("#crearCuenta").click(function(){

        ingresosFijos = $("#ingresosFijos").val();
        gastosFijos = $("#gastosFijos").val();
        ahorro = $("#ahorro").val();
        vivir = $("#vivir").val();
        ocio = $("#ocio").val();

        var datos = [ingresosFijos, gastosFijos, ahorro, vivir, ocio];

       $.ajax({
           url: "functions/create.php",
           type: "post",
           data: datos,
           success: function() {
               $("#resultado").html('Cuenta creada correctamente.');
           }
       });
    });

);