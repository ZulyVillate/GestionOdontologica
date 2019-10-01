function consultarPaciente() {
    url = "../../index.php?accion=consultarPaciente&documento=" + $("#asignarDocumento").attr("value");
    $("#paciente").load(url);
}


