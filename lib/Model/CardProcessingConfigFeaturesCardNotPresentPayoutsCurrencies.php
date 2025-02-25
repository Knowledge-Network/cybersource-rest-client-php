<?php
/**
 * CardProcessingConfigFeaturesCardNotPresentPayoutsCurrencies
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
 * CardProcessingConfigFeaturesCardNotPresentPayoutsCurrencies Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CardProcessingConfigFeaturesCardNotPresentPayoutsCurrencies implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CardProcessingConfig_features_cardNotPresent_payouts_currencies';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'enabledCardPresent' => 'bool',
        'enabledCardNotPresent' => 'bool',
        'merchantId' => 'string',
        'terminalId' => 'string',
        'terminalIds' => 'string[]',
        'serviceEnablementNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'enabledCardPresent' => null,
        'enabledCardNotPresent' => null,
        'merchantId' => null,
        'terminalId' => null,
        'terminalIds' => null,
        'serviceEnablementNumber' => null
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
        'enabled' => 'enabled',
        'enabledCardPresent' => 'enabledCardPresent',
        'enabledCardNotPresent' => 'enabledCardNotPresent',
        'merchantId' => 'merchantId',
        'terminalId' => 'terminalId',
        'terminalIds' => 'terminalIds',
        'serviceEnablementNumber' => 'serviceEnablementNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'enabledCardPresent' => 'setEnabledCardPresent',
        'enabledCardNotPresent' => 'setEnabledCardNotPresent',
        'merchantId' => 'setMerchantId',
        'terminalId' => 'setTerminalId',
        'terminalIds' => 'setTerminalIds',
        'serviceEnablementNumber' => 'setServiceEnablementNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'enabledCardPresent' => 'getEnabledCardPresent',
        'enabledCardNotPresent' => 'getEnabledCardNotPresent',
        'merchantId' => 'getMerchantId',
        'terminalId' => 'getTerminalId',
        'terminalIds' => 'getTerminalIds',
        'serviceEnablementNumber' => 'getServiceEnablementNumber'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['enabledCardPresent'] = isset($data['enabledCardPresent']) ? $data['enabledCardPresent'] : null;
        $this->container['enabledCardNotPresent'] = isset($data['enabledCardNotPresent']) ? $data['enabledCardNotPresent'] : null;
        $this->container['merchantId'] = isset($data['merchantId']) ? $data['merchantId'] : null;
        $this->container['terminalId'] = isset($data['terminalId']) ? $data['terminalId'] : null;
        $this->container['terminalIds'] = isset($data['terminalIds']) ? $data['terminalIds'] : null;
        $this->container['serviceEnablementNumber'] = isset($data['serviceEnablementNumber']) ? $data['serviceEnablementNumber'] : null;
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
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets enabledCardPresent
     * @return bool
     */
    public function getEnabledCardPresent()
    {
        return $this->container['enabledCardPresent'];
    }

    /**
     * Sets enabledCardPresent
     * @param bool $enabledCardPresent Indicates whether the card-present transaction is activated for the selected currency. If both enabledCardPresent and enabledCardNotPresent are set to null, then enabledCardPresent will have the value of enabled.
     * @return $this
     */
    public function setEnabledCardPresent($enabledCardPresent)
    {
        $this->container['enabledCardPresent'] = $enabledCardPresent;

        return $this;
    }

    /**
     * Gets enabledCardNotPresent
     * @return bool
     */
    public function getEnabledCardNotPresent()
    {
        return $this->container['enabledCardNotPresent'];
    }

    /**
     * Sets enabledCardNotPresent
     * @param bool $enabledCardNotPresent Indicates whether the card-present transaction is activated for the selected currency. If both enabledCardPresent and enabledCardNotPresent are set to null, then enabledCardNotPresent will have the value of enabled.
     * @return $this
     */
    public function setEnabledCardNotPresent($enabledCardNotPresent)
    {
        $this->container['enabledCardNotPresent'] = $enabledCardNotPresent;

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
     * @param string $merchantId Merchant ID assigned by an acquirer or a processor. Should not be overriden by any other party.
     * @return $this
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets terminalId
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminalId'];
    }

    /**
     * Sets terminalId
     * @param string $terminalId The 'Terminal Id' aka TID, is an identifier used for with your payments processor. Depending on the processor and payment acceptance type this may also be the default Terminal ID used for Card Present and Virtual Terminal transactions.
     * @return $this
     */
    public function setTerminalId($terminalId)
    {
        $this->container['terminalId'] = $terminalId;

        return $this;
    }

    /**
     * Gets terminalIds
     * @return string[]
     */
    public function getTerminalIds()
    {
        return $this->container['terminalIds'];
    }

    /**
     * Sets terminalIds
     * @param string[] $terminalIds Applicable for Prisma (prisma) processor.
     * @return $this
     */
    public function setTerminalIds($terminalIds)
    {
        $this->container['terminalIds'] = $terminalIds;

        return $this;
    }

    /**
     * Gets serviceEnablementNumber
     * @return string
     */
    public function getServiceEnablementNumber()
    {
        return $this->container['serviceEnablementNumber'];
    }

    /**
     * Sets serviceEnablementNumber
     * @param string $serviceEnablementNumber Service Establishment Number (a.k.a. SE Number) is a unique ten-digit number assigned by American Express to a merchant that accepts American Express cards. 10 digit number provided by acquirer currency. This may be unique for each currency, however it depends on the way the processor is set up for the merchant.
     * @return $this
     */
    public function setServiceEnablementNumber($serviceEnablementNumber)
    {
        $this->container['serviceEnablementNumber'] = $serviceEnablementNumber;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


