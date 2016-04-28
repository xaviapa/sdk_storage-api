<?php
/**
 * FilesApi
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\StorageApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Softonic\StorageApiSdk\Client\Api;

use \Softonic\StorageApiSdk\Configuration;
use \Softonic\StorageApiSdk\ApiClient;
use \Softonic\StorageApiSdk\ApiException;
use \Softonic\StorageApiSdk\ObjectSerializer;

/**
 * FilesApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\StorageApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FilesApi
{

    /**
     * API Client
     * @var \Softonic\StorageApiSdk\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Softonic\StorageApiSdk\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://v1.storage.priv.sftapi.com.dev');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Softonic\StorageApiSdk\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Softonic\StorageApiSdk\ApiClient $apiClient set the API client
     * @return FilesApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * readFile
     *
     * Fetches a single File
     *
     * @param string $id_files SHA-1 hash of the file (required)
     * @return \Softonic\StorageApiSdk\Client\Model\File
     * @throws \Softonic\StorageApiSdk\ApiException on non-2xx response
     */
    public function readFile($id_files)
    {
        list($response, $statusCode, $httpHeader) = $this->readFileWithHttpInfo ($id_files);
        return $response; 
    }


    /**
     * readFileWithHttpInfo
     *
     * Fetches a single File
     *
     * @param string $id_files SHA-1 hash of the file (required)
     * @return Array of \Softonic\StorageApiSdk\Client\Model\File, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\StorageApiSdk\ApiException on non-2xx response
     */
    public function readFileWithHttpInfo($id_files)
    {
        
        // verify the required parameter 'id_files' is set
        if ($id_files === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_files when calling readFile');
        }
  
        // parse inputs
        $resourcePath = "/files/{id_files}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($id_files !== null) {
            $resourcePath = str_replace(
                "{" . "id_files" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_files),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Softonic\StorageApiSdk\Client\Model\File'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Softonic\StorageApiSdk\ObjectSerializer::deserialize($response, '\Softonic\StorageApiSdk\Client\Model\File', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Softonic\StorageApiSdk\ObjectSerializer::deserialize($e->getResponseBody(), '\Softonic\StorageApiSdk\Client\Model\File', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
