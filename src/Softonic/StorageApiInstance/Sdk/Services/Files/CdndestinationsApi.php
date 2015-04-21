<?php
/**
 *  Copyright 2011 Wordnik, Inc.
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
namespace Softonic\StorageApiInstance\Sdk\Services\Files;

use Softonic\StorageApiInstance\Sdk\APIClientInterface;

/**
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */
class CdndestinationsApi
{
    function __construct(APIClientInterface $api_client)
    {
        $this->api_client = $api_client;
    }

   

    /**
     * delete
     * Deletes a resource
     *
     * @param string $id_files SHA-1 hash of the file
     * @param string $id_cdndestinations CDN destination where the file is uploaded
     *
     * @return mixed
     */
    public function delete($id_files, $id_cdndestinations)
    {

        //parse inputs
        $resource_path = "/files/{id_files}/cdndestinations/{id_cdndestinations}";
        $resource_path = str_replace("{format}", "json", $resource_path);
        $method = "DELETE";

        $query_params = array();
        $header_params = array();
        $header_params['Accept'] = 'application/json';
        $header_params['Content-Type'] = 'application/json';

        if($id_files != null) {
             $resource_path = str_replace("{" . "id_files" . "}",
                $this->api_client->toPathValue($id_files), $resource_path);
        }
        if($id_cdndestinations != null) {
             $resource_path = str_replace("{" . "id_cdndestinations" . "}",
                $this->api_client->toPathValue($id_cdndestinations), $resource_path);
        }
        if (!isset($data)) {
            $data = array();
        }
        $response = $this->api_client->callAPI($resource_path, $method,
                                              $query_params, $data,
                                              $header_params);


        if(!$response){
            return null;
        }

        return $response;


    }


    /**
     * find
     * List of resources
     *
     * @param string $id_files SHA-1 hash of the file
     *
     * @return mixed
     */
    public function find($id_files)
    {

        //parse inputs
        $resource_path = "/files/{id_files}/cdndestinations";
        $resource_path = str_replace("{format}", "json", $resource_path);
        $method = "GET";

        $query_params = array();
        $header_params = array();
        $header_params['Accept'] = 'application/json';
        $header_params['Content-Type'] = 'application/json';

        if($id_files != null) {
             $resource_path = str_replace("{" . "id_files" . "}",
                $this->api_client->toPathValue($id_files), $resource_path);
        }
        if (!isset($data)) {
            $data = array();
        }
        $response = $this->api_client->callAPI($resource_path, $method,
                                              $query_params, $data,
                                              $header_params);


        if(!$response){
            return null;
        }

        return $response;


    }


}
