<?php

declare(strict_types=1);

namespace App\Entity\Addressing;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Addressing\Model\Country as BaseCountry;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_country")
 */
class Country extends BaseCountry
{
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private ?string $flag;

    /**
     * @return string|null
     */
    public function getFlag(): ?string
    {
        return $this->flag;
    }

    /**
     * @param string|null $flag
     */
    public function setFlag(?string $flag): void
    {
        $this->flag = $flag;
    }
}
