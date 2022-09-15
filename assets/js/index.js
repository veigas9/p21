
$(document).ready(function () {
    $("#enviar").click(function () {
        var form = new FormData($("#formulario")[0]);
        $.ajax({
            url: 'upload.php',
            type: 'post',
            cache: false,
            processData: false,
            contentType: false,
            data: form,
            timeout: 8000,
            success: function (data) {
                $('#resposta').html(data);
                $('#resposta').addClass('block');
            }
        });
    });

    $("#envia_email").click(function () {
        $.get("enviarEmail.php");
        alert('Disparo de Email realizado com sucesso!');
    });

    $(document).ready(function () {
        $("#bt_editar").click(function () {
            var form = new FormData($("#formEdit")[0]);
            $.ajax({
                url: 'procEditar.php',
                type: 'post',
                //dataType: 'json',
                cache: false,
                processData: false,
                contentType: false,
                data: form,
                timeout: 8000,
                success: function (data) {
                    $('#resposta_editar').html(data);
                    $('#resposta_editar').addClass('block');
                }
            });
        });
    });

    $("#enviar_xls").click(function () {
        var form = new FormData($("#form_xls")[0]);
        $.ajax({
            url: 'uploadXLS.php',
            type: 'post',
            cache: false,
            processData: false,
            contentType: false,
            data: form,
            timeout: 8000,
            success: function (data) {
                $('#resposta_xls').html(data);
                $('#resposta_xls').addClass('block');
            }
        });
    });

    $("#bt_atualiza_base").click(function () {
        var form = new FormData($("#form_atualiza_base")[0]);
        $.ajax({
            url: 'processa.php',
            type: 'post',
            cache: false,
            processData: false,
            contentType: false,
            data: form,
            timeout: 8000,
            success: function (data) {
                $('#resposta_atualiza').html(data);
                $('#resposta_atualiza').addClass('block');
            }
        });
    });

});







