<?php

$dom = new DOMDocument('1.0', 'UTF-8');

//Formata saída XML
$dom->formatOutput = true;

//Nó ID do Usuário
$idNodeValue = $dom->createTextNode(1);
$idNode = $dom->createElement('id');
$idNode->appendChild($idNodeValue);

//Nó de usuario
$userNode = $dom->createElement('user');
$userNode->appendChild($idNode);

//Intancia do Nó principal
$rootNode = $dom->createElement('root');

$rootNode->appendChild($userNode);
$dom->appendChild($rootNode);

$xml = $dom->saveXML();

//Imprime na tela
echo $xml;

//Salva conteúdo em arquivo
$dom->save('./xml/arquivo.xml');
