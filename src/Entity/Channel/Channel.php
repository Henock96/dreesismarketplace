<?php

declare(strict_types=1);

namespace App\Entity\Channel;

use Doctrine\ORM\Mapping as ORM;
use Odiseo\SyliusVendorPlugin\Entity\VendorAwareInterface;
use Odiseo\SyliusVendorPlugin\Entity\VendorInterface;
use Odiseo\SyliusVendorPlugin\Entity\VendorsTrait;
use Sylius\Component\Core\Model\Channel as BaseChannel;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_channel")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_channel')]
class Channel extends BaseChannel implements VendorAwareInterface
{
    use VendorsTrait{
        __construct as private initializeVendorsCollection;
    }
    public function __construct()
    {
        parent::__construct();
        $this->initializeVendorsCollection();
    }

    public function getVendor(): ?VendorInterface
    {
        // TODO: Implement getVendor() method.
    }

    public function setVendor(?VendorInterface $vendor): void
    {
        // TODO: Implement setVendor() method.
    }
}
