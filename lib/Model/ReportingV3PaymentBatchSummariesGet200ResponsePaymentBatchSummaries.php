<?php
/**
 * ReportingV3PaymentBatchSummariesGet200ResponsePaymentBatchSummaries
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
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

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * ReportingV3PaymentBatchSummariesGet200ResponsePaymentBatchSummaries Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3PaymentBatchSummariesGet200ResponsePaymentBatchSummaries implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3PaymentBatchSummariesGet200Response_paymentBatchSummaries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currencyCode' => 'string',
        'paymentSubTypeDescription' => 'string',
        'startTime' => '\DateTime',
        'endTime' => '\DateTime',
        'salesCount' => 'int',
        'salesAmount' => 'string',
        'creditCount' => 'int',
        'creditAmount' => 'string',
        'accountName' => 'string',
        'accountId' => 'string',
        'merchantId' => 'string',
        'merchantName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currencyCode' => null,
        'paymentSubTypeDescription' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'salesCount' => 'int32',
        'salesAmount' => null,
        'creditCount' => 'int32',
        'creditAmount' => null,
        'accountName' => null,
        'accountId' => null,
        'merchantId' => null,
        'merchantName' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'currencyCode' => 'currencyCode',
        'paymentSubTypeDescription' => 'paymentSubTypeDescription',
        'startTime' => 'startTime',
        'endTime' => 'endTime',
        'salesCount' => 'salesCount',
        'salesAmount' => 'salesAmount',
        'creditCount' => 'creditCount',
        'creditAmount' => 'creditAmount',
        'accountName' => 'accountName',
        'accountId' => 'accountId',
        'merchantId' => 'merchantId',
        'merchantName' => 'merchantName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'currencyCode' => 'setCurrencyCode',
        'paymentSubTypeDescription' => 'setPaymentSubTypeDescription',
        'startTime' => 'setStartTime',
        'endTime' => 'setEndTime',
        'salesCount' => 'setSalesCount',
        'salesAmount' => 'setSalesAmount',
        'creditCount' => 'setCreditCount',
        'creditAmount' => 'setCreditAmount',
        'accountName' => 'setAccountName',
        'accountId' => 'setAccountId',
        'merchantId' => 'setMerchantId',
        'merchantName' => 'setMerchantName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'currencyCode' => 'getCurrencyCode',
        'paymentSubTypeDescription' => 'getPaymentSubTypeDescription',
        'startTime' => 'getStartTime',
        'endTime' => 'getEndTime',
        'salesCount' => 'getSalesCount',
        'salesAmount' => 'getSalesAmount',
        'creditCount' => 'getCreditCount',
        'creditAmount' => 'getCreditAmount',
        'accountName' => 'getAccountName',
        'accountId' => 'getAccountId',
        'merchantId' => 'getMerchantId',
        'merchantName' => 'getMerchantName'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['paymentSubTypeDescription'] = isset($data['paymentSubTypeDescription']) ? $data['paymentSubTypeDescription'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['salesCount'] = isset($data['salesCount']) ? $data['salesCount'] : null;
        $this->container['salesAmount'] = isset($data['salesAmount']) ? $data['salesAmount'] : null;
        $this->container['creditCount'] = isset($data['creditCount']) ? $data['creditCount'] : null;
        $this->container['creditAmount'] = isset($data['creditAmount']) ? $data['creditAmount'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['merchantId'] = isset($data['merchantId']) ? $data['merchantId'] : null;
        $this->container['merchantName'] = isset($data['merchantName']) ? $data['merchantName'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets currencyCode
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     * @param string $currencyCode
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets paymentSubTypeDescription
     * @return string
     */
    public function getPaymentSubTypeDescription()
    {
        return $this->container['paymentSubTypeDescription'];
    }

    /**
     * Sets paymentSubTypeDescription
     * @param string $paymentSubTypeDescription
     * @return $this
     */
    public function setPaymentSubTypeDescription($paymentSubTypeDescription)
    {
        $this->container['paymentSubTypeDescription'] = $paymentSubTypeDescription;

        return $this;
    }

    /**
     * Gets startTime
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     * @param \DateTime $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets endTime
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     * @param \DateTime $endTime
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets salesCount
     * @return int
     */
    public function getSalesCount()
    {
        return $this->container['salesCount'];
    }

    /**
     * Sets salesCount
     * @param int $salesCount
     * @return $this
     */
    public function setSalesCount($salesCount)
    {
        $this->container['salesCount'] = $salesCount;

        return $this;
    }

    /**
     * Gets salesAmount
     * @return string
     */
    public function getSalesAmount()
    {
        return $this->container['salesAmount'];
    }

    /**
     * Sets salesAmount
     * @param string $salesAmount
     * @return $this
     */
    public function setSalesAmount($salesAmount)
    {
        $this->container['salesAmount'] = $salesAmount;

        return $this;
    }

    /**
     * Gets creditCount
     * @return int
     */
    public function getCreditCount()
    {
        return $this->container['creditCount'];
    }

    /**
     * Sets creditCount
     * @param int $creditCount
     * @return $this
     */
    public function setCreditCount($creditCount)
    {
        $this->container['creditCount'] = $creditCount;

        return $this;
    }

    /**
     * Gets creditAmount
     * @return string
     */
    public function getCreditAmount()
    {
        return $this->container['creditAmount'];
    }

    /**
     * Sets creditAmount
     * @param string $creditAmount
     * @return $this
     */
    public function setCreditAmount($creditAmount)
    {
        $this->container['creditAmount'] = $creditAmount;

        return $this;
    }

    /**
     * Gets accountName
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
     * Sets accountName
     * @param string $accountName
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets accountId
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     * @param string $accountId
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets merchantId
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     * @param string $merchantId
     * @return $this
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets merchantName
     * @return string
     */
    public function getMerchantName()
    {
        return $this->container['merchantName'];
    }

    /**
     * Sets merchantName
     * @param string $merchantName
     * @return $this
     */
    public function setMerchantName($merchantName)
    {
        $this->container['merchantName'] = $merchantName;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


