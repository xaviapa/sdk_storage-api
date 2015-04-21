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
namespace Softonic\StorageApiInstance\Sdk\Services;

use Softonic\StorageApiInstance\Sdk\APIClientInterface;

/**
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */
class UploadrequestsApi
{
    function __construct(APIClientInterface $api_client)
    {
        $this->api_client = $api_client;
    }

   

    /**
     * read
     * Fetches a single resource
     *
     * @param integer $id_uploadrequests Upload Request ID
     *
     * @return mixed
     */
    public function read($id_uploadrequests)
    {

        //parse inputs
        $resource_path = "/uploadrequests/{id_uploadrequests}";
        $resource_path = str_replace("{format}", "json", $resource_path);
        $method = "GET";

        $query_params = array();
        $header_params = array();
        $header_params['Accept'] = 'application/json';
        $header_params['Content-Type'] = 'application/json';

        if($id_uploadrequests != null) {
             $resource_path = str_replace("{" . "id_uploadrequests" . "}",
                $this->api_client->toPathValue($id_uploadrequests), $resource_path);
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
     * create
     * Creates a new resource
     *
     * @param array $data possible keys are described below
     *
     * download_url, string: Download url (required)
     * file_type, string: File type (required)
     * callback_url, string: Callback url (required)
     *
     * @return mixed
     */
    public function create(array $data)
    {

        //parse inputs
        $resource_path = "/uploadrequests";
        $resource_path = str_replace("{format}", "json", $resource_path);
        $method = "POST";

        $query_params = array();
        $header_params = array();
        $header_params['Accept'] = 'application/json';
        $header_params['Content-Type'] = 'application/json';

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

