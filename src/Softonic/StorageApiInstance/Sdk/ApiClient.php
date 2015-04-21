<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */
namespace Softonic\StorageApiInstance\Sdk;

use Softonic\StorageApiInstance\Sdk\Exceptions\BadRequestException;
use Softonic\StorageApiInstance\Sdk\Exceptions\MalformedResponseException;
use Softonic\StorageApiInstance\Sdk\Exceptions\NotFoundException;
use Softonic\StorageApiInstance\Sdk\Exceptions\TimeoutException;
use Softonic\StorageApiInstance\Sdk\Exceptions\UnexpectedResponseException;

class ApiClient implements ApiClientInterface
{
    const QUERY_TIMEOUT = 5;
    public static $POST = "POST";
    public static $GET = "GET";
    public static $PUT = "PUT";
    public static $PATCH = "PATCH";
    public static $DELETE = "DELETE";

    private $base_url;


    /**
     * @param string $base_url the address of the API server
     */
    function __construct($base_url = null)
    {
        $this->base_url = $base_url;
    }

    /**
     * @param string $base_url the address of the API server
     */
    public function setBaseUrl($base_url)
    {
        $this->base_url = $base_url;
    }


    /**
     * @param string $resource_path path to method endpoint
     * @param string $method method to call
     * @param array $query_params parameters to be place in query URL
     * @param array $post_data parameters to be placed in POST body
     * @param array $header_params parameters to be place in request header
     * @throws BadRequestException
     * @throws MalformedResponseException
     * @throws NotFoundException
     * @throws TimeoutException
     * @throws UnexpectedResponseException
     *
     * @return mixed
     */
    public function callAPI(
        $resource_path,
        $method,
        $query_params,
        $post_data,
        $header_params
    ) {

        $headers = array();

        if ($header_params != null) {
            foreach ($header_params as $key => $val) {
                $headers[] = "$key: $val";
            }
        }

        if (is_object($post_data) or is_array($post_data)) {
            $post_data = json_encode($this->sanitizeForSerialization($post_data));
        }

        $url = $this->base_url . $resource_path;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_TIMEOUT, self::QUERY_TIMEOUT);
        // return the result on success, rather than just TRUE
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        if (!empty($query_params)) {
            $url = ($url . '?' . http_build_query($query_params));
        }

        if ($method == self::$POST) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        } elseif ($method == self::$PUT) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        } elseif ($method == self::$PATCH) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        } elseif ($method == self::$DELETE) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        } elseif ($method != self::$GET) {
            throw new BadRequestException('Method ' . $method . ' is not recognized.');
        }

        curl_setopt($curl, CURLOPT_URL, $url);

        // Make the request
        $response = trim(curl_exec($curl));
        $response_info = curl_getinfo($curl);

        // Handle the response
        switch($response_info['http_code']) {
            case 201:

            case 200:
                $data = json_decode($response, true);
                if (json_last_error() != JSON_ERROR_NONE) {
                    throw new MalformedResponseException('Error during decoding response: ' . json_last_error());
                }

                return $data;

            case 0:
                throw new TimeoutException(
                    'TIMEOUT: api call to ' . $url . ' took more than '.self::QUERY_TIMEOUT.'s to return'
                );

            case 400:
                throw new BadRequestException('Unauthorized API request to ' . $url);

            case 404:
                throw new NotFoundException('Resource not found ' . $url);

            default:
                throw new UnexpectedResponseException('Unexpected error', $response_info['http_code']);

        }
    }

    /**
     * Build a JSON POST object
     */
    protected function sanitizeForSerialization($data)
    {
        if (is_scalar($data) || null === $data) {
            $sanitized = $data;
        } else {
            if ($data instanceof \DateTime) {
                $sanitized = $data->format(\DateTime::ISO8601);
            } else {
                if (is_array($data)) {
                    foreach ($data as $property => $value) {
                        $data[$property] = $this->sanitizeForSerialization($value);
                    }
                    $sanitized = $data;
                } else {
                    if (is_object($data)) {
                        $values = array();
                        foreach (array_keys($data::$swaggerTypes) as $property) {
                            $values[$property] = $this->sanitizeForSerialization($data->$property);
                        }
                        $sanitized = $values;
                    } else {
                        $sanitized = (string)$data;
                    }
                }
            }
        }

        return $sanitized;
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     * @param string $value a string which will be part of the path
     * @return string the serialized object
     */
    public static function toPathValue($value)
    {
        return rawurlencode($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the query, by imploding comma-separated if it's an object.
     * If it's a string, pass through unchanged. It will be url-encoded
     * later.
     * @param object $object an object to be serialized to a string
     * @return string the serialized object
     */
    public static function toQueryValue($object)
    {
        if (is_array($object)) {
            return implode(',', $object);
        } else {
            return $object;
        }
    }

    /**
     * Just pass through the header value for now. Placeholder in case we
     * find out we need to do something with header values.
     * @param string $value a string which will be part of the header
     * @return string the header string
     */
    public static function toHeaderValue($value)
    {
        return $value;
    }

}

