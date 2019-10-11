<?php
namespace src\app\http\controller;

interface Controller
{
    public function index();
    public function listar();
    public function  criar();
    public function deletar();
    public function editar();
}

