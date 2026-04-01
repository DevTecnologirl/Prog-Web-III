<?php
$dados = ["nome" => null];
if (isset($dados["nome"])) {
    echo "A";
}
if (array_key_exists("nome", $dados)) {
    echo "B";
}
?>