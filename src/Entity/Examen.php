<?php


namespace App\Entity;


class Examen
{
    private $id;
    private $convocatoria;
    private $parte;
    private $tipo;
    private $fecha;
    private $anno;
    private $enunciado_ejercicio;
    private $solucion_ejercicio;
    private $enunciado_test;
    private $solucion_test;

    public function __construct(array $s = null)
    {
        $this-> id = $s["id"] ?? null;
        $this-> convocatoria = $s["convocatoria"] ?? null;
        $this-> parte = $s["parte"] ?? null;
        $this-> tipo = $s["tipo"] ?? null;
        $this-> fecha = $s["fecha"] ?? null;
        $this-> anno = $s["anno"] ?? null;
        $this-> enunciado_ejercicio = $s["enunciado_ejercicio"] ?? null;
        $this-> solucion_ejercicio = $s["solucion_ejercicio"] ?? null;
        $this-> enunciado_test = $s["enunciado_test"] ?? null;
        $this-> solucion_test = $s["solucion_test"] ?? null;
    }

    /**
     * @return mixed|null
     */
    public function getId(): ?mixed
    {
        return $this->id;
    }

    /**
     * @param mixed|null $id
     */
    public function setId(?mixed $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed|null
     */
    public function getConvocatoria(): ?mixed
    {
        return $this->convocatoria;
    }

    /**
     * @param mixed|null $convocatoria
     */
    public function setConvocatoria(?mixed $convocatoria): void
    {
        $this->convocatoria = $convocatoria;
    }

    /**
     * @return mixed|null
     */
    public function getParte(): ?mixed
    {
        return $this->parte;
    }

    /**
     * @param mixed|null $parte
     */
    public function setParte(?mixed $parte): void
    {
        $this->parte = $parte;
    }

    /**
     * @return mixed|null
     */
    public function getTipo(): ?mixed
    {
        return $this->tipo;
    }

    /**
     * @param mixed|null $tipo
     */
    public function setTipo(?mixed $tipo): void
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed|null
     */
    public function getFecha(): ?mixed
    {
        return $this->fecha;
    }

    /**
     * @param mixed|null $fecha
     */
    public function setFecha(?mixed $fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed|null
     */
    public function getAnno(): ?mixed
    {
        return $this->anno;
    }

    /**
     * @param mixed|null $anno
     */
    public function setAnno(?mixed $anno): void
    {
        $this->anno = $anno;
    }

    /**
     * @return mixed|null
     */
    public function getEnunciadoEjercicio(): ?mixed
    {
        return $this->enunciado_ejercicio;
    }

    /**
     * @param mixed|null $enunciado_ejercicio
     */
    public function setEnunciadoEjercicio(?mixed $enunciado_ejercicio): void
    {
        $this->enunciado_ejercicio = $enunciado_ejercicio;
    }

    /**
     * @return mixed|null
     */
    public function getSolucionEjercicio(): ?mixed
    {
        return $this->solucion_ejercicio;
    }

    /**
     * @param mixed|null $solucion_ejercicio
     */
    public function setSolucionEjercicio(?mixed $solucion_ejercicio): void
    {
        $this->solucion_ejercicio = $solucion_ejercicio;
    }

    /**
     * @return mixed|null
     */
    public function getEnunciadoTest(): ?mixed
    {
        return $this->enunciado_test;
    }

    /**
     * @param mixed|null $enunciado_test
     */
    public function setEnunciadoTest(?mixed $enunciado_test): void
    {
        $this->enunciado_test = $enunciado_test;
    }

    /**
     * @return mixed|null
     */
    public function getSolucionTest(): ?mixed
    {
        return $this->solucion_test;
    }

    /**
     * @param mixed|null $solucion_test
     */
    public function setSolucionTest(?mixed $solucion_test): void
    {
        $this->solucion_test = $solucion_test;
    }


}