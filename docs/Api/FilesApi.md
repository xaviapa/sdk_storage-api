# Softonic\StorageApiSdk\FilesApi

All URIs are relative to *https://storage.sftapi.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**readFile**](FilesApi.md#readFile) | **GET** /files/{id_files} | Fetches a single File


# **readFile**
> \Softonic\StorageApiSdk\Model\File readFile($id_files)

Fetches a single File

Fetches a single File

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: storage_api_access_code
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_application
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_implicit
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: storage_api_password
Softonic\StorageApiSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Softonic\StorageApiSdk\Api\FilesApi();
$id_files = "id_files_example"; // string | SHA-1 hash of the file

try {
    $result = $api_instance->readFile($id_files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->readFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_files** | **string**| SHA-1 hash of the file |

### Return type

[**\Softonic\StorageApiSdk\Model\File**](../Model/File.md)

### Authorization

[storage_api_access_code](../../README.md#storage_api_access_code), [storage_api_application](../../README.md#storage_api_application), [storage_api_implicit](../../README.md#storage_api_implicit), [storage_api_password](../../README.md#storage_api_password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

