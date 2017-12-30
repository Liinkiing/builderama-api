<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SceneRepository")
 */
class Scene
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=60)
     */
    private $id;

    public function __construct()
    {
        $this->id = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),0, 1) .
            substr(str_shuffle("aBcEeFgHiJkLmNoPqRstUvWxYz0123456789"),0, 31);
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="json_array")
     */
    private $data;

    public function getData()
    {
        return $this->data;
    }

    public function setData($data): Scene
    {
        $this->data = $data;
        return $this;
    }

}
