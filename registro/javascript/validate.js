function validarform(){
    var nom =document.getElementById("nombre").value;
    var ape =document.getElementById("apellidop").value;
    var ape =document.getElementById("apellidom").value;
    var edad =document.getElementById("edad").value;


    if(nom==="" || apep==="" || apem===""){
        alert("Ingrese los datos por favor");
    }
//     if(edad<19){
//         alert('Tú edad debe ser mayor');return false;
//     }
//     if (edad.length>2){ //si el texo es menor a 2
// 		alert('Coloca tú edad');
// 	}

}