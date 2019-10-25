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

function cargarHoras() {
    if (($("#medico").attr("value") == -1) || ($("#fecha").attr("value") == "")) {
        $("#hora").html("<option value='-1' selected='selected'>--Seleccione la hora--</option>");
    } else {
        queryString = "medico" + $("#medico").attr("value") + "&fecha=" + $("#fecha").attr("value");
        url = "../../index.php?accion=consultarHora&" + queryString;
        $("#hora").load(url);
    }
}

function seleccionarHora() {
    if ($("#medico").attr("value") == -1) {
        alert("Debe seleccionar un médico");
    } else if ($("#fecha").attr("value") == "") {
        alert("Debe seleccionar una fecha");
    }


}
