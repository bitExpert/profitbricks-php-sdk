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

class ApiClient implements Client
{
  /**
   * @var string
   */
  protected $username;
  /**
   * @var string
   */
  protected $password;
  /**
   * @var string
   */
  protected $endpoint;

  /**
   * Creates a new {\Profitbricks\Sdk\Client}.
   *
   * @param string $username
   * @param string $password
   * @param string $endpoint
   */
  public function __construct($username, $password, $endpoint = 'https://api.profitbricks.com/1.2')
  {
    $this->username = $username;
    $this->password = $password;
    $this->endpoint = $endpoint;
  }

  /**
   * {@inheritDoc}
   */
  public function getAllDataCenters()
  {
    $response = array();
    try {
      $response = $this->request('getAllDataCenters');
      foreach ($response as $key => $datacenter) {
        $response[$key] = new Datacenter(
          $datacenter->dataCenterId,
          $datacenter->dataCenterName,
          $datacenter->dataCenterVersion
        );
      }
    } catch (\SoapFault $e) {
      $response = array();
    }

    return $response;
  }

  /**
   * {@inheritDoc}
   */
  public function getAllSnapshots()
  {
    $response = array();
    try {
      $response = $this->request('getAllSnapshots');
      foreach ($response as $key => $snapshot) {
        $response[$key] = new Snapshot(
          $snapshot->snapshotId,
          $snapshot->description,
          $snapshot->snapshotName,
          $snapshot->snapshotSize,
          $snapshot->provisioningState,
          $snapshot->bootable,
          $snapshot->osType,
          $snapshot->cpuHotPlug,
          $snapshot->ramHotPlug,
          $snapshot->nicHotPlug,
          $snapshot->nicHotUnPlug,
          $snapshot->creationTimestamp,
          $snapshot->modificationTimestamp,
          $snapshot->region
        );
      }
    } catch (\SoapFault $e) {
      $response = array();
    }

    return $response;
  }

  /**
   * Calls the $method on the Profitbricks API endpoint and returns the result.
   *
   * @param string $method
   * @param array $data
   * @return mixed
   * @throws \SoapFault
   */
  protected function request($method, array $data = array())
  {
    $auth = base64_encode($this->username . ':' . $this->password);
    $header = "Authorization: Basic $auth";
    $opts = array(
      'http' => array(
        'method' => 'GET',
        'header' => $header
      )
    );
    $ctx = stream_context_create($opts);

    $client = new \SoapClient(
      $this->endpoint . '/wsdl',
      array(
        'location' => $this->endpoint,
        'exceptions' => 1,
        'stream_context' => $ctx,
        'trace' => true
      )
    );

    $response = call_user_func_array(array($client, $method), $data);
    if (isset($response->return)) {
      return $response->return;
    }

    return null;
  }
}
