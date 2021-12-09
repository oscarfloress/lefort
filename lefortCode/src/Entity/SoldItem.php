<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SoldItem
 *
 * @ORM\Table(name="sold_item", indexes={@ORM\Index(name="sale_id", columns={"sale_id"})})
 * @ORM\Entity
 */
class SoldItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="sale_id", type="integer", nullable=false)
     */
    private $saleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="department", type="string", length=30, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=17, scale=2, nullable=false)
     */
    private $price;


}
