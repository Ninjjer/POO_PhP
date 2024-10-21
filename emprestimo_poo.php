<?php

interface Crud
{
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Usuario implements Crud
{
    protected $nome;
    protected $cep;
    public $countLivros = 0;
    const max_emprestimo = 3;
    public $nomeLivros = [];

    public function create()
    {
        echo "Create";
    }

    public function read()
    {
        echo "Read";
    }

    public function update()
    {
        echo "Update";
    }

    public function delete()
    {
        echo "Delete";
    }

    public function emprestar($livro){
        if($this->countLivro < self::max_emprestimo){
            $this->countLivro++;
            array_push($nomeLivros, $livro->titulo);

        }
    }

    public function devolver(){
        if($this->countLivro>0){
            $this->countLivro--;
        }
    }
}

class Livro implements Crud
{

    protected $titulo;
    protected $autor;

    public function create()
    {
        echo "Create";
    }
    public function read()
    {
        echo "Read";
    }
    public function update()
    {
        echo "Update";
    }
    public function delete()
    {
        echo "Delete";
    }
    static function emprestimo()
    {
        echo "Emprestado";
    }   
    public function cadastro()
    {
        echo "Cadastrado";
    }
    public function listar()
    {
        echo "Listado";
    }
    public function atributos()
    {
        echo "Atributado";
    }
}

$livro= new  Livro("O principe", "Maquiavel");
$usuario1 = new Usuario("Pedro", "79000-000");

static class Biblioteca
{
    static function emprestar($user, $book)
    {
        $user->emprestar($book);
    }
}

Biblioteca::cadastrar($usuario1, $livro)