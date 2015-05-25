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
 * Snapshot Domain object
 */
class Snapshot
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $size;
    /**
     * @var string
     */
    protected $provisioningState;
    /**
     * @var boolean
     */
    protected $bootable;
    /**
     * @var string
     */
    protected $osType;
    /**
     * @var string
     */
    protected $cpuHotPlug;
    /**
     * @var string
     */
    protected $ramHotPlug;
    /**
     * @var string
     */
    protected $nicHotPlug;
    /**
     * @var string
     */
    protected $nicHotUnPlug;
    /**
     * @var string
     */
    protected $creationTimestamp;
    /**
     * @var string
     */
    protected $modificationTimestamp;
    /**
     * @var string
     */
    protected $region;

    /**
     * Creates a new {\Profibricks\Sdk\Snapshot}.
     *
     * @param string $id
     * @param string $description
     * @param string $name
     * @param string $size
     * @param string $provisioningState
     * @param boolean $bootable
     * @param string $osType
     * @param string $cpuHotPlug
     * @param string $ramHotPlug
     * @param string $nicHotPlug
     * @param string $nicHotUnPlug
     * @param string $creationTimestamp
     * @param string $modificationTimestamp
     * @param string $region
     */
    public function __construct($id, $description, $name, $size, $provisioningState, $bootable, $osType, $cpuHotPlug, $ramHotPlug, $nicHotPlug, $nicHotUnPlug, $creationTimestamp, $modificationTimestamp, $region)
    {
        $this->id = $id;
        $this->description = $description;
        $this->name = $name;
        $this->size = $size;
        $this->provisioningState = $provisioningState;
        $this->bootable = $bootable;
        $this->osType = $osType;
        $this->cpuHotPlug = $cpuHotPlug;
        $this->ramHotPlug = $ramHotPlug;
        $this->nicHotPlug = $nicHotPlug;
        $this->nicHotUnPlug = $nicHotUnPlug;
        $this->creationTimestamp = $creationTimestamp;
        $this->modificationTimestamp = $modificationTimestamp;
        $this->region = $region;
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
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return boolean
     */
    public function getBootable()
    {
        return $this->bootable;
    }

    /**
     * @return string
     */
    public function getCpuHotPlug()
    {
        return $this->cpuHotPlug;
    }

    /**
     * @return string
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getModificationTimestamp()
    {
        return $this->modificationTimestamp;
    }

    /**
     * @return string
     */
    public function getNicHotPlug()
    {
        return $this->nicHotPlug;
    }

    /**
     * @return string
     */
    public function getNicHotUnPlug()
    {
        return $this->nicHotUnPlug;
    }

    /**
     * @return string
     */
    public function getOsType()
    {
        return $this->osType;
    }

    /**
     * @return string
     */
    public function getProvisioningState()
    {
        return $this->provisioningState;
    }

    /**
     * @return string
     */
    public function getRamHotPlug()
    {
        return $this->ramHotPlug;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }
}
