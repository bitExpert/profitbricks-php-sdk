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
 * Profitbricks API client interface
 */
interface Client
{
  /**
   * Returns all datacenters.
   *
   * @return \Profitbricks\Sdk\Datacenter[]
   */
  public function getAllDataCenters();

  /**
   * Returns all snapshots.
   *
   * @return \Profitbricks\Sdk\Snapshot[]
   */
  public function getAllSnapshots();
}
