<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EstudianteOfertaRepository")
 */
class EstudianteOferta
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Ofertas", inversedBy="estudiantes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idEstudiante;

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

    public function getIdEstudiante(): ?Ofertas
    {
        return $this->idEstudiante;
    }

    public function setIdEstudiante(?Ofertas $idEstudiante): self
    {
        $this->idEstudiante = $idEstudiante;

        return $this;
    }
}
