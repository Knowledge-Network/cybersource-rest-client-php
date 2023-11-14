<?php
/**
 * PaymentProductsSecureAcceptanceConfigurationInformationConfigurationsNotificationsCustomerNotifications
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
 * PaymentProductsSecureAcceptanceConfigurationInformationConfigurationsNotificationsCustomerNotifications Class Doc Comment
 *
 * @category    Class
 * @description Features relating to notifications being sent directly to the payer using the Hosted Checkout.
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentProductsSecureAcceptanceConfigurationInformationConfigurationsNotificationsCustomerNotifications implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'paymentProducts_secureAcceptance_configurationInformation_configurations_notifications_customerNotifications';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customReceiptPageEnabled' => 'bool',
        'receiptEmailAddress' => 'string',
        'customerReceiptEmailEnabled' => 'bool',
        'customCancelPage' => 'string',
        'customReceiptPage' => 'string',
        'customCancelPageEnabled' => 'bool',
        'notificationReceiptEmailEnabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customReceiptPageEnabled' => null,
        'receiptEmailAddress' => null,
        'customerReceiptEmailEnabled' => null,
        'customCancelPage' => null,
        'customReceiptPage' => null,
        'customCancelPageEnabled' => null,
        'notificationReceiptEmailEnabled' => null
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
        'customReceiptPageEnabled' => 'customReceiptPageEnabled',
        'receiptEmailAddress' => 'receiptEmailAddress',
        'customerReceiptEmailEnabled' => 'customerReceiptEmailEnabled',
        'customCancelPage' => 'customCancelPage',
        'customReceiptPage' => 'customReceiptPage',
        'customCancelPageEnabled' => 'customCancelPageEnabled',
        'notificationReceiptEmailEnabled' => 'notificationReceiptEmailEnabled'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'customReceiptPageEnabled' => 'setCustomReceiptPageEnabled',
        'receiptEmailAddress' => 'setReceiptEmailAddress',
        'customerReceiptEmailEnabled' => 'setCustomerReceiptEmailEnabled',
        'customCancelPage' => 'setCustomCancelPage',
        'customReceiptPage' => 'setCustomReceiptPage',
        'customCancelPageEnabled' => 'setCustomCancelPageEnabled',
        'notificationReceiptEmailEnabled' => 'setNotificationReceiptEmailEnabled'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'customReceiptPageEnabled' => 'getCustomReceiptPageEnabled',
        'receiptEmailAddress' => 'getReceiptEmailAddress',
        'customerReceiptEmailEnabled' => 'getCustomerReceiptEmailEnabled',
        'customCancelPage' => 'getCustomCancelPage',
        'customReceiptPage' => 'getCustomReceiptPage',
        'customCancelPageEnabled' => 'getCustomCancelPageEnabled',
        'notificationReceiptEmailEnabled' => 'getNotificationReceiptEmailEnabled'
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
        $this->container['customReceiptPageEnabled'] = isset($data['customReceiptPageEnabled']) ? $data['customReceiptPageEnabled'] : null;
        $this->container['receiptEmailAddress'] = isset($data['receiptEmailAddress']) ? $data['receiptEmailAddress'] : null;
        $this->container['customerReceiptEmailEnabled'] = isset($data['customerReceiptEmailEnabled']) ? $data['customerReceiptEmailEnabled'] : null;
        $this->container['customCancelPage'] = isset($data['customCancelPage']) ? $data['customCancelPage'] : null;
        $this->container['customReceiptPage'] = isset($data['customReceiptPage']) ? $data['customReceiptPage'] : null;
        $this->container['customCancelPageEnabled'] = isset($data['customCancelPageEnabled']) ? $data['customCancelPageEnabled'] : null;
        $this->container['notificationReceiptEmailEnabled'] = isset($data['notificationReceiptEmailEnabled']) ? $data['notificationReceiptEmailEnabled'] : null;
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
     * Gets customReceiptPageEnabled
     * @return bool
     */
    public function getCustomReceiptPageEnabled()
    {
        return $this->container['customReceiptPageEnabled'];
    }

    /**
     * Sets customReceiptPageEnabled
     * @param bool $customReceiptPageEnabled Toggles the custom receipt page, where merchants can receive the results of the transaction and display appropriate messaging. Usually set by web developers integrating to Secure Acceptance.
     * @return $this
     */
    public function setCustomReceiptPageEnabled($customReceiptPageEnabled)
    {
        $this->container['customReceiptPageEnabled'] = $customReceiptPageEnabled;

        return $this;
    }

    /**
     * Gets receiptEmailAddress
     * @return string
     */
    public function getReceiptEmailAddress()
    {
        return $this->container['receiptEmailAddress'];
    }

    /**
     * Sets receiptEmailAddress
     * @param string $receiptEmailAddress Email address where a copy of the payer's receipt email is sent, when notificationReceiptEmailEnabled is true.
     * @return $this
     */
    public function setReceiptEmailAddress($receiptEmailAddress)
    {
        $this->container['receiptEmailAddress'] = $receiptEmailAddress;

        return $this;
    }

    /**
     * Gets customerReceiptEmailEnabled
     * @return bool
     */
    public function getCustomerReceiptEmailEnabled()
    {
        return $this->container['customerReceiptEmailEnabled'];
    }

    /**
     * Sets customerReceiptEmailEnabled
     * @param bool $customerReceiptEmailEnabled Toggles an email receipt sent to the payer's email address on payment success.
     * @return $this
     */
    public function setCustomerReceiptEmailEnabled($customerReceiptEmailEnabled)
    {
        $this->container['customerReceiptEmailEnabled'] = $customerReceiptEmailEnabled;

        return $this;
    }

    /**
     * Gets customCancelPage
     * @return string
     */
    public function getCustomCancelPage()
    {
        return $this->container['customCancelPage'];
    }

    /**
     * Sets customCancelPage
     * @param string $customCancelPage URL to which transaction results are POSTed when the payer clicks 'Cancel' on the Hosted Checkout. Triggered when customCancelPageEnabled is true. Usually set by web developers integrating to Secure Acceptance.
     * @return $this
     */
    public function setCustomCancelPage($customCancelPage)
    {
        $this->container['customCancelPage'] = $customCancelPage;

        return $this;
    }

    /**
     * Gets customReceiptPage
     * @return string
     */
    public function getCustomReceiptPage()
    {
        return $this->container['customReceiptPage'];
    }

    /**
     * Sets customReceiptPage
     * @param string $customReceiptPage URL to which transaction results are POSTed when the payer requests a payment on the Hosted Checkout. Triggered when customCancelPageEnabled is true. Usually set by web developers integrating to Secure Acceptance.
     * @return $this
     */
    public function setCustomReceiptPage($customReceiptPage)
    {
        $this->container['customReceiptPage'] = $customReceiptPage;

        return $this;
    }

    /**
     * Gets customCancelPageEnabled
     * @return bool
     */
    public function getCustomCancelPageEnabled()
    {
        return $this->container['customCancelPageEnabled'];
    }

    /**
     * Sets customCancelPageEnabled
     * @param bool $customCancelPageEnabled Toggles the custom cancel page, where merchants can receive notice that the payer has canceled, and display appropriate messaging and direction. Usually set by web developers integrating to Secure Acceptance.
     * @return $this
     */
    public function setCustomCancelPageEnabled($customCancelPageEnabled)
    {
        $this->container['customCancelPageEnabled'] = $customCancelPageEnabled;

        return $this;
    }

    /**
     * Gets notificationReceiptEmailEnabled
     * @return bool
     */
    public function getNotificationReceiptEmailEnabled()
    {
        return $this->container['notificationReceiptEmailEnabled'];
    }

    /**
     * Sets notificationReceiptEmailEnabled
     * @param bool $notificationReceiptEmailEnabled Toggles whether merchant receives a copy of the payer's receipt email.
     * @return $this
     */
    public function setNotificationReceiptEmailEnabled($notificationReceiptEmailEnabled)
    {
        $this->container['notificationReceiptEmailEnabled'] = $notificationReceiptEmailEnabled;

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


