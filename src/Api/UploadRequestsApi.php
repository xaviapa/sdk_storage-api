<?php
/**
 * UploadRequestsApi
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\StorageApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Restful API based on CoreAPI technology
 *
 * Add your description here
 *
 * OpenAPI spec version: 2.0.87-7
 * Contact: XXXXXXXXX@softonic.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\StorageApiSdk\Api;

use \Softonic\StorageApiSdk\Configuration;
use \Softonic\StorageApiSdk\ApiClient;
use \Softonic\StorageApiSdk\ApiException;
use \Softonic\StorageApiSdk\ObjectSerializer;

/**
 * UploadRequestsApi Class Doc Comment
 *
 * @category Class
 * @package  Softonic\StorageApiSdk
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UploadRequestsApi
{

    /**
     * API Client
     *
     * @var \Softonic\StorageApiSdk\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Softonic\StorageApiSdk\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Softonic\StorageApiSdk\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://storage.sftapi.com');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Softonic\StorageApiSdk\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Softonic\StorageApiSdk\ApiClient $apiClient set the API client
     *
     * @return UploadRequestsApi
     */
    public function setApiClient(\Softonic\StorageApiSdk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createUploadRequest
     *
     * Creates a new UploadRequest
     *
     * @param \Softonic\StorageApiSdk\Model\UploadRequest $body  (optional)
     * @return void
     * @throws \Softonic\StorageApiSdk\ApiException on non-2xx response
     */
    public function createUploadRequest($body = null)
    {
        list($response) = $this->createUploadRequestWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createUploadRequestWithHttpInfo
     *
     * Creates a new UploadRequest
     *
     * @param \Softonic\StorageApiSdk\Model\UploadRequest $body  (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\StorageApiSdk\ApiException on non-2xx response
     */
    public function createUploadRequestWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/upload-requests";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/upload-requests'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation readUploadRequest
     *
     * Fetches a single UploadRequest
     *
     * @param int $id_upload_requests Upload Request ID (required)
     * @return \Softonic\StorageApiSdk\Model\UploadRequest
     * @throws \Softonic\StorageApiSdk\ApiException on non-2xx response
     */
    public function readUploadRequest($id_upload_requests)
    {
        list($response) = $this->readUploadRequestWithHttpInfo($id_upload_requests);
        return $response;
    }

    /**
     * Operation readUploadRequestWithHttpInfo
     *
     * Fetches a single UploadRequest
     *
     * @param int $id_upload_requests Upload Request ID (required)
     * @return Array of \Softonic\StorageApiSdk\Model\UploadRequest, HTTP status code, HTTP response headers (array of strings)
     * @throws \Softonic\StorageApiSdk\ApiException on non-2xx response
     */
    public function readUploadRequestWithHttpInfo($id_upload_requests)
    {
        // verify the required parameter 'id_upload_requests' is set
        if ($id_upload_requests === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_upload_requests when calling readUploadRequest');
        }
        // parse inputs
        $resourcePath = "/upload-requests/{id_upload_requests}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id_upload_requests !== null) {
            $resourcePath = str_replace(
                "{" . "id_upload_requests" . "}",
                $this->apiClient->getSerializer()->toPathValue($id_upload_requests),
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
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Softonic\StorageApiSdk\Model\UploadRequest',
                '/upload-requests/{id_upload_requests}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Softonic\StorageApiSdk\Model\UploadRequest', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Softonic\StorageApiSdk\Model\UploadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
