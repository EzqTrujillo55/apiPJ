<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostulacionesRepository")
 */
class Postulaciones
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaPostu;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idEstudiante;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ofertas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idOferta;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaPostu(): ?\DateTimeInterface
    {
        return $this->fechaPostu;
    }

    public function setFechaPostu(\DateTimeInterface $fechaPostu): self
    {
        $this->fechaPostu = $fechaPostu;

        return $this;
    }

    public function getIdEstudiante(): ?User
    {
        return $this->idEstudiante;
    }

    public function setIdEstudiante(?User $idEstudiante): self
    {
        $this->idEstudiante = $idEstudiante;

        return $this;
    }

    public function getIdOferta(): ?Ofertas
    {
        return $this->idOferta;
    }

    public function setIdOferta(?Ofertas $idOferta): self
    {
        $this->idOferta = $idOferta;

        return $this;
    }

    public function getNombreEstudiante(): ?string
    {
        return $this->nombreEstudiante;
    }

    public function setNombreEstudiante(string $nombreEstudiante): self
    {
        $this->nombreEstudiante = $nombreEstudiante;

        return $this;
    }

    public function getNombreOferta(): ?string
    {
        return $this->nombreOferta;
    }

    public function setNombreOferta(string $nombreOferta): self
    {
        $this->nombreOferta = $nombreOferta;

        return $this;
    }
}
