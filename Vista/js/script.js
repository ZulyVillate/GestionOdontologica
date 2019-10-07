function consultarPaciente() {
    url = "../../index.php?accion=consultarPaciente&documento=" + $("#asignarDocumento").attr("value");
    $("#paciente").load(url);
}

function mostrarFormulario() {
    documento = "" + $("#asignarDocumento").attr("value");
    $("#pacDocumento").attr("value", documento);
}

function insertarPaciente() {
    queryString = $("#agregarPaciente").serialize();
    url = "../../index.php?accion=ingresarPaciente&" + queryString;
    $("#paciente").load(url);
}
