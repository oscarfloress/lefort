<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sale
 *
 * @ORM\Table(name="sale", indexes={@ORM\Index(name="customer_id", columns={"customer_id"})})
 * @ORM\Entity
 */
class Sale
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
     * @ORM\Column(name="customer_id", type="integer", nullable=false)
     */
    private $customerId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sale_date", type="datetime", nullable=false)
     */
    private $saleDate;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=17, scale=2, nullable=false)
     */
    private $total;


}
