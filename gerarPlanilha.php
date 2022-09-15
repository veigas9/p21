<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php

    $xml = simplexml_load_file('xml/torcedores.xml');

        $arquivo = 'torcedores.xls';
        $html = '';
        $html .= '<table border="1">';

        $html .= '<tr>';
        $html .= '<td><b>nome</b></td>';
        $html .= '<td><b>documento</b></td>';
        $html .= '<td><b>cep</b></td>';
        $html .= '<td><b>endereco</b></td>';
        $html .= '<td><b>bairro</b></td>';
        $html .= '<td><b>cidade</b></td>';
        $html .= '<td><b>uf</b></td>';
        $html .= '<td><b>telefone</b></td>';
        $html .= '<td><b>email</b></td>';
        $html .= '<td><b>ativo</b></td>';
        $html .= '</tr>';



    foreach ($xml->torcedor as $torcedor) {
        $html .= '<tr>';
        $html .= '<td>' . $torcedor['nome'] . '</td>';
        $html .= '<td>' . $torcedor['documento'] . '</td>';
        $html .= '<td>' . $torcedor['cep'] . '</td>';
        $html .= '<td>' . $torcedor['endereco'] . '</td>';
        $html .= '<td>' . $torcedor['bairro'] . '</td>';
        $html .= '<td>' . $torcedor['cidade'] . '</td>';
        $html .= '<td>' . $torcedor['uf'] . '</td>';
        $html .= '<td>' . $torcedor['telefone'] . '</td>';
        $html .= '<td>' . $torcedor['email'] . '</td>';
        $html .= '<td>' . $torcedor['ativo'] . '</td>';
        $html .= '</tr>';
    }
        $html .= '</table>';

        header('Content-Disposition: attachment; filename=' . $arquivo);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');

        echo $html;


    ?>
</body>

</html>
