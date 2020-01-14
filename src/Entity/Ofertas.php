<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OfertasRepository")
 * @ApiResource()
 */
class Ofertas
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $NombreEmpresa;

    /**
     * @ORM\Column(type="text")
     */
    private $Conocimientos;

    /**
     * @ORM\Column(type="text")
     */
    private $Descripcion;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Salario;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Horarios;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\OfoPas", inversedBy="ofertas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $OfoPas;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tiempo", inversedBy="ofertas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Tiempo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CarreraRelacionada", inversedBy="ofertas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $CarreraRelacionada;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Horarios", inversedBy="ofertas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $TiempoHorarios;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Dias", inversedBy="ofertas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Dias;

    

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EstudianteOferta", mappedBy="idEstudiante")
     */
    private $estudiantes;

    public function __construct()
    {
        $this->estudiantes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreEmpresa(): ?string
    {
        return $this->NombreEmpresa;
    }

    public function setNombreEmpresa(string $NombreEmpresa): self
    {
        $this->NombreEmpresa = $NombreEmpresa;

        return $this;
    }

    public function getConocimientos(): ?string
    {
        return $this->Conocimientos;
    }

    public function setConocimientos(string $Conocimientos): self
    {
        $this->Conocimientos = $Conocimientos;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripcion(string $Descripcion): self
    {
        $this->Descripcion = $Descripcion;

        return $this;
    }

    public function getSalario(): ?float
    {
        return $this->Salario;
    }

    public function setSalario(?float $Salario): self
    {
        $this->Salario = $Salario;

        return $this;
    }

    public function getHorarios(): ?\DateTimeInterface
    {
        return $this->Horarios;
    }

    public function setHorarios(\DateTimeInterface $Horarios): self
    {
        $this->Horarios = $Horarios;

        return $this;
    }

    public function getOfoPas(): ?OfoPas
    {
        return $this->OfoPas;
    }

    public function setOfoPas(?OfoPas $OfoPas): self
    {
        $this->OfoPas = $OfoPas;

        return $this;
    }

    public function getTiempo(): ?Tiempo
    {
        return $this->Tiempo;
    }

    public function setTiempo(?Tiempo $Tiempo): self
    {
        $this->Tiempo = $Tiempo;

        return $this;
    }

    public function getCarreraRelacionada(): ?CarreraRelacionada
    {
        return $this->CarreraRelacionada;
    }

    public function setCarreraRelacionada(?CarreraRelacionada $CarreraRelacionada): self
    {
        $this->CarreraRelacionada = $CarreraRelacionada;

        return $this;
    }

    public function getTiempoHorarios(): ?Horarios
    {
        return $this->TiempoHorarios;
    }

    public function setTiempoHorarios(?Horarios $TiempoHorarios): self
    {
        $this->TiempoHorarios = $TiempoHorarios;

        return $this;
    }

    public function getDias(): ?Dias
    {
        return $this->Dias;
    }

    public function setDias(?Dias $Dias): self
    {
        $this->Dias = $Dias;

        return $this;
    }

  

    /**
     * @return Collection|EstudianteOferta[]
     */
    public function getEstudiantes(): Collection
    {
        return $this->estudiantes;
    }

    public function addEstudiante(EstudianteOferta $estudiante): self
    {
        if (!$this->estudiantes->contains($estudiante)) {
            $this->estudiantes[] = $estudiante;
            $estudiante->setIdEstudiante($this);
        }

        return $this;
    }

    public function removeEstudiante(EstudianteOferta $estudiante): self
    {
        if ($this->estudiantes->contains($estudiante)) {
            $this->estudiantes->removeElement($estudiante);
            // set the owning side to null (unless already changed)
            if ($estudiante->getIdEstudiante() === $this) {
                $estudiante->setIdEstudiante(null);
            }
        }

        return $this;
    }
}
