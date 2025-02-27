<?php
/*
Os métodos HTTP (ou verbos HTTP) definem as ações que podem ser realizadas em uma requisição a um servidor. Aqui estão os principais:

Métodos Principais
GET – Obtém dados do servidor (não altera o estado do recurso).
POST – Envia dados para o servidor (geralmente cria um novo recurso).
PUT – Atualiza um recurso existente ou cria um novo se não existir.
PATCH – Atualiza parcialmente um recurso existente.
DELETE – Remove um recurso do servidor.
Métodos Menos Usados
HEAD – Igual ao GET, mas retorna apenas os cabeçalhos da resposta, sem o corpo.
OPTIONS – Retorna os métodos suportados pelo servidor para um determinado recurso.
CONNECT – Estabelece uma conexão de túnel para comunicação segura (usado em proxies).
TRACE – Retorna a requisição recebida pelo servidor (usado para diagnóstico).
*/
/*
$_SERVER é uma superglobal do PHP que contém informações sobre cabeçalhos, caminhos e locais de script. Essa variável fornece detalhes sobre o ambiente do servidor e a requisição feita pelo cliente.

Principais Índices do $_SERVER
Aqui estão algumas das chaves mais úteis dessa superglobal:

Informações sobre o Servidor e o Script
$_SERVER['PHP_SELF'] → Caminho do script em execução.
$_SERVER['SCRIPT_NAME'] → Nome do script executado.
$_SERVER['SCRIPT_FILENAME'] → Caminho completo do script.
$_SERVER['SERVER_NAME'] → Nome do servidor (domínio).
$_SERVER['SERVER_ADDR'] → Endereço IP do servidor.
$_SERVER['SERVER_PORT'] → Porta usada pelo servidor (geralmente 80 ou 443 para HTTPS).
$_SERVER['DOCUMENT_ROOT'] → Diretório raiz do servidor.
Informações sobre a Requisição
$_SERVER['REQUEST_METHOD'] → Método HTTP usado (GET, POST, etc.).
$_SERVER['QUERY_STRING'] → Parâmetros passados na URL.
$_SERVER['REQUEST_URI'] → Caminho completo da requisição.
$_SERVER['HTTP_REFERER'] → URL da página de referência (pode não estar disponível).
$_SERVER['HTTP_USER_AGENT'] → Informações sobre o navegador do cliente.
Endereço IP e Host
$_SERVER['REMOTE_ADDR'] → IP do visitante.
$_SERVER['REMOTE_PORT'] → Porta usada pelo visitante.
$_SERVER['REMOTE_HOST'] → Nome do host do visitante (se disponível).
*/
echo "IP do visitante: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Navegador: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "Página acessada: " . $_SERVER['REQUEST_URI'] . "<br>";