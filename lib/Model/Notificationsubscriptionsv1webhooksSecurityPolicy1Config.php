<?php
/**
 * Notificationsubscriptionsv1webhooksSecurityPolicy1Config
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
 * Notificationsubscriptionsv1webhooksSecurityPolicy1Config Class Doc Comment
 *
 * @category    Class
 * @description Optional configuration object for if your API or server requires oAuth for an incoming webhook.
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Notificationsubscriptionsv1webhooksSecurityPolicy1Config implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'notificationsubscriptionsv1webhooks_securityPolicy_1_config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'oAuthTokenExpiry' => 'string',
        'oAuthURL' => 'string',
        'oAuthTokenType' => 'string',
        'additionalConfig' => '\CyberSource\Model\Notificationsubscriptionsv1webhooksSecurityPolicy1ConfigAdditionalConfig'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'oAuthTokenExpiry' => null,
        'oAuthURL' => null,
        'oAuthTokenType' => null,
        'additionalConfig' => null
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
        'oAuthTokenExpiry' => 'oAuthTokenExpiry',
        'oAuthURL' => 'oAuthURL',
        'oAuthTokenType' => 'oAuthTokenType',
        'additionalConfig' => 'additionalConfig'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'oAuthTokenExpiry' => 'setOAuthTokenExpiry',
        'oAuthURL' => 'setOAuthURL',
        'oAuthTokenType' => 'setOAuthTokenType',
        'additionalConfig' => 'setAdditionalConfig'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'oAuthTokenExpiry' => 'getOAuthTokenExpiry',
        'oAuthURL' => 'getOAuthURL',
        'oAuthTokenType' => 'getOAuthTokenType',
        'additionalConfig' => 'getAdditionalConfig'
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
        $this->container['oAuthTokenExpiry'] = isset($data['oAuthTokenExpiry']) ? $data['oAuthTokenExpiry'] : null;
        $this->container['oAuthURL'] = isset($data['oAuthURL']) ? $data['oAuthURL'] : null;
        $this->container['oAuthTokenType'] = isset($data['oAuthTokenType']) ? $data['oAuthTokenType'] : null;
        $this->container['additionalConfig'] = isset($data['additionalConfig']) ? $data['additionalConfig'] : null;
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
     * Gets oAuthTokenExpiry
     * @return string
     */
    public function getOAuthTokenExpiry()
    {
        return $this->container['oAuthTokenExpiry'];
    }

    /**
     * Sets oAuthTokenExpiry
     * @param string $oAuthTokenExpiry Token expiration for the oAuth server.
     * @return $this
     */
    public function setOAuthTokenExpiry($oAuthTokenExpiry)
    {
        $this->container['oAuthTokenExpiry'] = $oAuthTokenExpiry;

        return $this;
    }

    /**
     * Gets oAuthURL
     * @return string
     */
    public function getOAuthURL()
    {
        return $this->container['oAuthURL'];
    }

    /**
     * Sets oAuthURL
     * @param string $oAuthURL Client direct endpoint to the oAuth server.
     * @return $this
     */
    public function setOAuthURL($oAuthURL)
    {
        $this->container['oAuthURL'] = $oAuthURL;

        return $this;
    }

    /**
     * Gets oAuthTokenType
     * @return string
     */
    public function getOAuthTokenType()
    {
        return $this->container['oAuthTokenType'];
    }

    /**
     * Sets oAuthTokenType
     * @param string $oAuthTokenType Token type for the oAuth config.
     * @return $this
     */
    public function setOAuthTokenType($oAuthTokenType)
    {
        $this->container['oAuthTokenType'] = $oAuthTokenType;

        return $this;
    }

    /**
     * Gets additionalConfig
     * @return \CyberSource\Model\Notificationsubscriptionsv1webhooksSecurityPolicy1ConfigAdditionalConfig
     */
    public function getAdditionalConfig()
    {
        return $this->container['additionalConfig'];
    }

    /**
     * Sets additionalConfig
     * @param \CyberSource\Model\Notificationsubscriptionsv1webhooksSecurityPolicy1ConfigAdditionalConfig $additionalConfig
     * @return $this
     */
    public function setAdditionalConfig($additionalConfig)
    {
        $this->container['additionalConfig'] = $additionalConfig;

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


