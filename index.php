
<?php

include './app/header/head.php';

?>
        <div class="container">
            <h5>Importar XML no Sistema</h5>
            <form id="formulario" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="formFile" class="form-label">Escolha XML</label>
                <input class="form-control" type="file" name="arquivo[]" multiple="multiple">
                <p class="subtitle secondary-color">
                    Obs. Escolha o XML que deseja importar
                </p>
                <input id="enviar" name="enviar" type="button" value="Importar">
            </form>
                <div id="resposta" class="alert alert-success" style="display: none"></div>
        </div>

             <!--Gera Planilha-->
            <div class="mb-3">
                <h5>Gera excel apartir do XML escolhido</h5>
                <a href="./gerarPlanilha.php" class="btn btn-primary">Gerar Planilha</a>

                <!--Carregar planilha no Sistema-->
                <h5 class="bloco">Carregar excel no sitema</h5>
                <form id="form_xls" enctype="multipart/form-data">
                    <label for="formFile" class="form-label">Selecione o arquivo:</label>
                    <input class="form-control" type="file" name="arquivo" />
                    <input id="enviar_xls" type="button" value="Enviar" class="btn btn-dark mt-2" />
                    <p class="subtitle secondary-color">
                        Obs.Importe aqui a planilha gerada<br>
                        *O arquivo deve estar no formato XML do Excel
                    </p>
                </form>
                <div id="resposta_xls" class="alert alert-success" style="display: none;"></div>
            </div>
            <hr>
            <!--Upload do Excel-->
            <div class="mb-3">
                <h5 class="bloco">Upload do Excel atualizando base de dados</h5>
                <form id="form_atualiza_base" enctype="multipart/form-data">
                    <label for="formFile" class="form-label">Arquivo Excel</label>
                    <input class="form-control " type="file" name="arquivo">
                    <input id="bt_atualiza_base" type="button" value="Enviar" class="btn btn-dark mt-2">
                </form>
                <div id="resposta_atualiza" class="alert alert-success" style="display: none;"></div>
            </div>

<?php
            include './app/footer/footer.php';

