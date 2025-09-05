<?php
namespace App\model;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class user
{

    #[Column, GeneratedValue, Id]
    private int $id;
    #[Column]
    private string $name;
    #[Column]
    private string $telefone;

    #[Column]
    private string $email;
    #[Column]
    private string $data;
    #[Column]
    private string $hora;
    #[Column]
    private string $tipo_evento;
    #[column]
    private int $num_convidados;
    #[Column]
    private string $local_evento;
    #[Column]
    private string $criado_em;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): void
    {
        $this->data = $data;
    }

    public function getHora(): string
    {
        return $this->hora;
    }

    public function setHora(string $hora): void
    {
        $this->hora = $hora;
    }

    public function getTipoEvento(): string
    {
        return $this->tipo_evento;
    }

    public function setTipoEvento(string $tipo_evento): void
    {
        $this->tipo_evento = $tipo_evento;
    }

    public function getNumConvidados(): int
    {
        return $this->num_convidados;
    }

    public function setNumConvidados(int $num_convidados): void
    {
        $this->num_convidados = $num_convidados;
    }

    public function getLocalEvento(): string
    {
        return $this->local_evento;
    }

    public function setLocalEvento(string $local_evento): void
    {
        $this->local_evento = $local_evento;
    }

    public function getMensagem(): string
    {
        return $this->mensagem;
    }

    public function setMensagem(string $mensagem): void
    {
        $this->mensagem = $mensagem;
    }
    public function getCriadoEm(): string
    {
        return $this->criado_em;
    }
    public function save(): void
    {
        $em = Database::getEntityManager();
        $em->persist($this);
        $em->flush();
    }

}