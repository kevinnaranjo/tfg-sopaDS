<?php


namespace App\Entity;


use Symfony\Component\Validator\Constraints as Assert;

class Prueba
{

    private $id;
    /**
     * @Assert\Length(max="200")
     */
    private $campo;

    /**
     * Prueba constructor.
     * @param array|null $s
     */
    public function __construct(array $s = null)
    {
        $this-> id = $s["id"] ?? null;
        $this-> campo = $s["campo"] ?? null;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId(?mixed $id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCampo()
    {
        return $this->campo;
    }

    /**
     * @param mixed $campo
     */
    public function setCampo(?mixed $campo)
    {
        $this->campo = $campo;
    }
}