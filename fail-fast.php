<?php

function cadastrarUsuario(string $nome, string $email, string $senha): void {
    if (!empty($nome)) {
        if (!empty($email)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if (!empty($senha)) {
                    if (strlen($senha) >= 6) {
                        echo "Usuário cadastrado com sucesso.";
                    } 
                    else {
                        echo "A senha deve ter pelo menos 6 caracteres.";
                    }
                } 
                else {
                    echo "A senha não pode estar vazia.";
                }
            } 
            else {
                echo "E-mail inválido.";
            }
        } 
        else {
            echo "E-mail é obrigatório.";
        }
    } 
    else {
        echo "Nome é obrigatório.";
    }
}

function cadastrar(string $email): void {
    if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Usuário cadastrado";
        } else {
            echo "E-mail inválido.";
        }
    } else {
        echo "E-mail obrigatório.";
    }
}


function processarPedido(string $usuario, string $produto, array $estoque, int $saldo) {
    if ($usuario != null) {
        if ($produto != null) {
            if (isset($estoque[$produto])) {
                if ($estoque[$produto] > 0) {
                    if ($saldo >= 100) {
                        echo "Pedido processado com sucesso.";
                    } else {
                        echo "Saldo insuficiente.";
                    }
                } else {
                    echo "Produto sem estoque.";
                }
            } else {
                echo "Produto inválido.";
            }
        } else {
            echo "Produto não informado.";
        }
    } else {
        echo "Usuário não autenticado.";
    }
}

