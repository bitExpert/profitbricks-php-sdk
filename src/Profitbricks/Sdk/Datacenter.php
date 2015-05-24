<?php

/*
 * This file is part of the Profitbricks PHP SDK.
 *
 * (c) bitExpert AG
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Profitbricks\Sdk;

/**
 * Datacenter Domain object.
 */
class Datacenter
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $version;

    /**
     * Creates a new {@link \Profitbricks\Sdk\Datacenter},
     *
     * @param string $id
     * @param string $name
     * @param string $version
     */
    public function __construct($id, $name, $version)
    {
        $this->id = $id;
        $this->name = $name;
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}
