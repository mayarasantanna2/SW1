<?php
class Produto {
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($nomeProduto, $precoProduto = 0, $quantidadeInicial = 0) {
        $this->nome = $nomeProduto;
        $this->preco = $precoProduto;
        $this->quantidade = $quantidadeInicial;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($novoPreco) {
        if($novoPreco >= 0) {
            $this->preco = $novoPreco;
        } else {
            echo "O preço não pode ser negativo";
        }
    }

    public function adicionarEstoque($quantidade) {
        if($quantidade > 0) {
            $this->quantidade += $quantidade;
            echo "Foram adicionados $quantidade itens ao estoque";
        } else {
            echo "Por favor, informe uma quantidade válida para adicionar";
        }
    }

    public function removerEstoque($quantidade) {
        if($quantidade > 0) {
            if($quantidade <= $this->quantidade) {
                $this->quantidade -= $quantidade;
            }
        } else {
            echo "Por favor, informe uma quantidade válida para remover";
        }
    }

    public function mostrarDetalhes() {
        echo "<h3>Informações do Produto</h3>";
        echo "Nome:  $this->nome <br>";
        echo "Preço:  R$ " . number_format($this->preco, 2,',','.') ."<br>";
        echo "Estoque:  $this->quantidade unidades<br>";
    }
}
?>