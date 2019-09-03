<?php
/**
 * InstrumentIdentifierApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;

/**
 * InstrumentIdentifierApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InstrumentIdentifierApi
{
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return InstrumentIdentifierApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createInstrumentIdentifier
     *
     * Create an Instrument Identifier
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param \CyberSource\Model\CreateInstrumentIdentifierRequest $createInstrumentIdentifierRequest Please specify either a Card, Bank Account or Enrollable Card (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createInstrumentIdentifier($profileId, $createInstrumentIdentifierRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->createInstrumentIdentifierWithHttpInfo($profileId, $createInstrumentIdentifierRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createInstrumentIdentifierWithHttpInfo
     *
     * Create an Instrument Identifier
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param \CyberSource\Model\CreateInstrumentIdentifierRequest $createInstrumentIdentifierRequest Please specify either a Card, Bank Account or Enrollable Card (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createInstrumentIdentifierWithHttpInfo($profileId, $createInstrumentIdentifierRequest)
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling createInstrumentIdentifier');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling InstrumentIdentifierApi.createInstrumentIdentifier, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling InstrumentIdentifierApi.createInstrumentIdentifier, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'createInstrumentIdentifierRequest' is set
        if ($createInstrumentIdentifierRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $createInstrumentIdentifierRequest when calling createInstrumentIdentifier');
        }
        // parse inputs
        $resourcePath = "/tms/v1/instrumentidentifiers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // body params
        $_tempBody = null;
        if (isset($createInstrumentIdentifierRequest)) {
            $_tempBody = $createInstrumentIdentifierRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response',
                '/tms/v1/instrumentidentifiers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteInstrumentIdentifier
     *
     * Delete an Instrument Identifier
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of an Instrument Identifier. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of void, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteInstrumentIdentifier($profileId, $tokenId)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteInstrumentIdentifierWithHttpInfo($profileId, $tokenId);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation deleteInstrumentIdentifierWithHttpInfo
     *
     * Delete an Instrument Identifier
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of an Instrument Identifier. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteInstrumentIdentifierWithHttpInfo($profileId, $tokenId)
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling deleteInstrumentIdentifier');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling InstrumentIdentifierApi.deleteInstrumentIdentifier, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling InstrumentIdentifierApi.deleteInstrumentIdentifier, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'tokenId' is set
        if ($tokenId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tokenId when calling deleteInstrumentIdentifier');
        }
        if ((strlen($tokenId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling InstrumentIdentifierApi.deleteInstrumentIdentifier, must be smaller than or equal to 32.');
        }
        if ((strlen($tokenId) < 16)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling InstrumentIdentifierApi.deleteInstrumentIdentifier, must be bigger than or equal to 16.');
        }

        // parse inputs
        $resourcePath = "/tms/v1/instrumentidentifiers/{tokenId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($tokenId !== null) {
            $resourcePath = str_replace(
                "{" . "tokenId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tokenId),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/tms/v1/instrumentidentifiers/{tokenId}'
            );

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\TmsV1InstrumentIdentifiersDelete409Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAllPaymentInstruments
     *
     * Retrieve all Payment Instruments
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of an Instrument Identifier. (required)
     * @param int $offset Starting Payment Instrument record in zero-based dataset that should be returned as the first object in the array. Default is 0. (optional, default to 0)
     * @param int $limit The maximum number of Payment Instruments that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100. (optional, default to 20)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllPaymentInstruments($profileId, $tokenId, $offset = '0', $limit = '20')
    {
        list($response, $statusCode, $httpHeader) = $this->getAllPaymentInstrumentsWithHttpInfo($profileId, $tokenId, $offset, $limit);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getAllPaymentInstrumentsWithHttpInfo
     *
     * Retrieve all Payment Instruments
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of an Instrument Identifier. (required)
     * @param int $offset Starting Payment Instrument record in zero-based dataset that should be returned as the first object in the array. Default is 0. (optional, default to 0)
     * @param int $limit The maximum number of Payment Instruments that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100. (optional, default to 20)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllPaymentInstrumentsWithHttpInfo($profileId, $tokenId, $offset = '0', $limit = '20')
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling getAllPaymentInstruments');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling InstrumentIdentifierApi.getAllPaymentInstruments, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling InstrumentIdentifierApi.getAllPaymentInstruments, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'tokenId' is set
        if ($tokenId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tokenId when calling getAllPaymentInstruments');
        }
        if ((strlen($tokenId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling InstrumentIdentifierApi.getAllPaymentInstruments, must be smaller than or equal to 32.');
        }
        if ((strlen($tokenId) < 16)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling InstrumentIdentifierApi.getAllPaymentInstruments, must be bigger than or equal to 16.');
        }

        if (!is_null($offset) && ($offset < 0)) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling InstrumentIdentifierApi.getAllPaymentInstruments, must be bigger than or equal to 0.');
        }

        if (!is_null($limit) && ($limit > 100)) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling InstrumentIdentifierApi.getAllPaymentInstruments, must be smaller than or equal to 100.');
        }
        if (!is_null($limit) && ($limit < 1)) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling InstrumentIdentifierApi.getAllPaymentInstruments, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/tms/v1/instrumentidentifiers/{tokenId}/paymentinstruments";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($tokenId !== null) {
            $resourcePath = str_replace(
                "{" . "tokenId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tokenId),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200Response',
                '/tms/v1/instrumentidentifiers/{tokenId}/paymentinstruments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\TmsV1InstrumentIdentifiersPaymentInstrumentsGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getInstrumentIdentifier
     *
     * Retrieve an Instrument Identifier
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of an Instrument Identifier. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInstrumentIdentifier($profileId, $tokenId)
    {
        list($response, $statusCode, $httpHeader) = $this->getInstrumentIdentifierWithHttpInfo($profileId, $tokenId);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getInstrumentIdentifierWithHttpInfo
     *
     * Retrieve an Instrument Identifier
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of an Instrument Identifier. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInstrumentIdentifierWithHttpInfo($profileId, $tokenId)
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling getInstrumentIdentifier');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling InstrumentIdentifierApi.getInstrumentIdentifier, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling InstrumentIdentifierApi.getInstrumentIdentifier, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'tokenId' is set
        if ($tokenId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tokenId when calling getInstrumentIdentifier');
        }
        if ((strlen($tokenId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling InstrumentIdentifierApi.getInstrumentIdentifier, must be smaller than or equal to 32.');
        }
        if ((strlen($tokenId) < 16)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling InstrumentIdentifierApi.getInstrumentIdentifier, must be bigger than or equal to 16.');
        }

        // parse inputs
        $resourcePath = "/tms/v1/instrumentidentifiers/{tokenId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($tokenId !== null) {
            $resourcePath = str_replace(
                "{" . "tokenId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tokenId),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response',
                '/tms/v1/instrumentidentifiers/{tokenId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateInstrumentIdentifier
     *
     * Update a Instrument Identifier
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of an Instrument Identifier. (required)
     * @param \CyberSource\Model\UpdateInstrumentIdentifierRequest $updateInstrumentIdentifierRequest Specify the previous transaction ID to update. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateInstrumentIdentifier($profileId, $tokenId, $updateInstrumentIdentifierRequest)
    {
        list($response, $statusCode, $httpHeader) = $this->updateInstrumentIdentifierWithHttpInfo($profileId, $tokenId, $updateInstrumentIdentifierRequest);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation updateInstrumentIdentifierWithHttpInfo
     *
     * Update a Instrument Identifier
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of an Instrument Identifier. (required)
     * @param \CyberSource\Model\UpdateInstrumentIdentifierRequest $updateInstrumentIdentifierRequest Specify the previous transaction ID to update. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateInstrumentIdentifierWithHttpInfo($profileId, $tokenId, $updateInstrumentIdentifierRequest)
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling updateInstrumentIdentifier');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling InstrumentIdentifierApi.updateInstrumentIdentifier, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling InstrumentIdentifierApi.updateInstrumentIdentifier, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'tokenId' is set
        if ($tokenId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tokenId when calling updateInstrumentIdentifier');
        }
        if ((strlen($tokenId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling InstrumentIdentifierApi.updateInstrumentIdentifier, must be smaller than or equal to 32.');
        }
        if ((strlen($tokenId) < 16)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling InstrumentIdentifierApi.updateInstrumentIdentifier, must be bigger than or equal to 16.');
        }

        // verify the required parameter 'updateInstrumentIdentifierRequest' is set
        if ($updateInstrumentIdentifierRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $updateInstrumentIdentifierRequest when calling updateInstrumentIdentifier');
        }
        // parse inputs
        $resourcePath = "/tms/v1/instrumentidentifiers/{tokenId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($tokenId !== null) {
            $resourcePath = str_replace(
                "{" . "tokenId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tokenId),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($updateInstrumentIdentifierRequest)) {
            $_tempBody = $updateInstrumentIdentifierRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response',
                '/tms/v1/instrumentidentifiers/{tokenId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\TmsV1InstrumentIdentifiersPost200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
