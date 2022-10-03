function submenu(link){




var parametros = {
    "codigo": link
    };  

   // alert("Este es submenu"+link);
   // console.log("test"+link);




    $.ajax({
        data: parametros,
        url: "mantenimiento/principal.php",
        type: 'post',
         beforeSend: function () {//elemento que queramos poner mientras ajax carga
           $("#resultado").html("Procesando, espere por favor...");
         },
         success: function (response) {//resultado de la función
          $("#resultado").html(response);
          
           }
        });

    

}