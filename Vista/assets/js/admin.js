function toggleDemo() {
  halfmoon.toggleDarkMode();
}

window.onload = toggleDemo;

function reply_click(id_borrar) {
  document.getElementById('mostrarPeliculaBorrar').value = document.getElementById(id_borrar).value;
  document.getElementById('obtenerNombre').value = document.getElementById(id_borrar).value;
  // alert(document.getElementById(id_borrar).value);
}

function editar_click(id_editar) {

  document.getElementById('peliculaE').value = document.getElementById(id_editar).value;
  // document.getElementById('EditarId').value = document.getElementById(id_editar).value;
  for (var i = 0; i < passedArray.length; i++) {
    // alert(passedArray[i][5]);
    if (passedArray[i][1] == document.getElementById(id_editar).value) {
      var myArray = passedArray[i][3].split(":");
      document.getElementById('clasificacionE').value = passedArray[i][2];
      // alert(passedArray[i][0]);
      document.getElementById('horasE').value = myArray[0];
      document.getElementById('minutosE').value = myArray[1];
      document.getElementById('sinopsisE').value = passedArray[i][4];
      // document.getElementById('fileE').src = passedArray[i][5];
      document.getElementById('fileE').src = "../../movies/" + passedArray[i][5];
      // document.getElementById('fileE').value = passedArray[i][5];
      document.getElementById('EditarId').value = passedArray[i][5];
      document.getElementById('idEditar').value = passedArray[i][0];

      break;
    }
  }


  function obtener_id_borrar_sala(id_borrar_sala) {
    alert('dsds');
    document.getElementById('borrarSala').value = document.getElementById(id_borrar_sala).value;
    // alert(document.getElementById(id_borrar).value);
  }

}

function obtenerPelicula(idPelicula) {
  document.getElementById('IdPeliculaSeleccion').value = document.getElementById(idPelicula).value;
}

// document.getElementById("borrarSala").disabled = true;
// document.getElementById("IdPeliculaSeleccion").disabled = true;

// function obtenerSala(idSala) {
//   alert(document.getElementById(idSala).value);
//   document.getElementById('IdSalaSeleccion').value = document.getElementById(idSala).value;
// }