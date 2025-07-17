$(document).ready(function() {

    $("#registro_for").validate({

        rules:{
            nombre: {
                required: true, 
                minlenght: 4
        },
        
        contra: {
            required: true,
            minlenght: 6
        },
        correo: {
            required: true,
            email: true
        },
        telefono: {
            required: true,
            number: true,
            minlenght: 8,
            maxlenght: 11
        }
    },

    
        messages:{ 
            nombre: {
                required: "El nombre de usuario es requerido", 
                minlenght: "Es necesario minimo 4 caracteres"
            },
            contra: {
                required: "Es requerida la contraseña", 
                minlenght: "Minimo 6 caractes"
            },
            correo:{
                required: "El correo es requerido", 
                email: "El correo nos es valido"
            },
            telefono: {
                required: "El telefono es requerido",
                number: "Solo se acepta dijitos numericos",
                minlenght: "El numero tiene que tener minimo 8 caracteres", 
                maxlenght: "El numero tiene que tener maximo de 11 carateres"
            }
        }
    });
});


$('#check').change(function() {
    if($(this).is(":checked")){
        document.getElementById("nueva_").disabled=false; 
        document.getElementById("nueva_").required=true;
    }else{   
        document.getElementById("nueva_").disabled=true; 
        document.getElementById("nueva_").value=""; 
        document.getElementById("nueva_").required=false;
    }
});


$('#check_eli').change(function() {
    if($(this).is(':checked')){
        document.getElementById("block_uno").disabled=false; 
        document.getElementById("block_dos").disabled=false;
    }else{
        document.getElementById("block_uno").disabled=true;
        document.getElementById("block_dos").disabled=true;
        document.getElementById("block_uno").value="";
        document.getElementById("block_dos").value="";
    }
});