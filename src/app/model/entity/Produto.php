<?php
namespace src\app\model\entity;

class Produto
{
    /*@id
     * Colunm(type="integer", nullabe=false)
     * @GenerateValue(strategy="Auto"
     */
       
    private $idProduto;
    /*
     * @Colunm(type="string", length=50,nullabe=False)
     */
    private $nome;
    /**
     * @Column(type="string", length=150, options={"default":null})
     */
    private $descricao;
    /**
     * @Column(type="float", nullable=false, options={"default":0})
     */
    private $precoCusto;
    /**
     * @Column(type="float", nullable=false, options={"default":0})
     */
    private $precoVenda;
    /**
     * @Column(type="string", length=50, nullable=false, options={"default":"Fornecedor"})
     */
    private $fornecedor;
    /**
     * @Column(type="string", length=15, nullable=false, options={"default":"Tipo"})
     */
    private $tipo;
    /**
     * @Column(type="string", length=50, nullable=false, options={"default":"ATIVO"})
     */
    private $status;
    
    /**
     * @return mixed
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return mixed
     */
    public function getPrecoCusto()
    {
        return $this->precoCusto;
    }

    /**
     * @return mixed
     */
    public function getPrecoVenda()
    {
        return $this->precoVenda;
    }

    /**
     * @return mixed
     */
    public function getFornecedor()
    {
        return $this->fornecedor;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param mixed $drescricao
     */
    public function setDescricao($descricao)
    {
        $this->drescricao = $descricao;
    }

    /**
     * @param mixed $prercoCusto
     */
    public function setPrercoCusto($precoCusto)
    {
        $this->prercoCusto = $precoCusto;
    }

    /**
     * @param mixed $precoVenda
     */
    public function setPrecoVenda($precoVenda)
    {
        $this->precoVenda = $precoVenda;
    }

    /**
     * @param mixed $fornecedor
     */
    public function setFornecedor($fornecedor)
    {
        $this->fornecedor = $fornecedor;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

}

