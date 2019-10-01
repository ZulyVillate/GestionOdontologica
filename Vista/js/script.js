function consultarPaciente() {
    url = "../../index.php?accion=consultarPaciente&documento=" + $("#asignarDocumento").attr("value");
    $("#paciente").load(url);
}


$(document).ready(function () {
    $("#frmPaciente").dialog({
        autoOpen: false,
        height: 310,
        witdth: 400,
        modal: true,
        buttons: {
            "Insertar": insertarPaciente,
            "Cancelar": cancelar
        }
    });
});

function mostrarFormulario() {
    documento = "" + $("#asignarDocumento").attr("value");
    $("#pacDocumento").attr("value", documento);
    $("#frmPaciente").dialog("open")
}

function insertarPaciente() {
    $(this).dialog("close");
    queryString = $("#agregarPaciente").serialize();
    url = "index.php?accion=ingresarPaciente&" + queryString;
    $("#paciente").load(url);
}

function cancelar() {
    $(this).dialog("close");
}

