<?php
/**
 * PaymentProductsCardProcessingConfigurationInformationConfigurationsFeaturesCardPresentProcessors
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
 * PaymentProductsCardProcessingConfigurationInformationConfigurationsFeaturesCardPresentProcessors Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentProductsCardProcessingConfigurationInformationConfigurationsFeaturesCardPresentProcessors implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'paymentProducts_cardProcessing_configurationInformation_configurations_features_cardPresent_processors';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'defaultPointOfSaleTerminalId' => 'string',
        'pointOfSaleTerminalIds' => 'string[]',
        'disablePointOfSaleTerminalIdValidation' => 'bool',
        'pinDebitNetworkOrder' => 'string',
        'pinDebitReimbursementCode' => 'string',
        'financialInstitutionId' => 'string',
        'enablePinTranslation' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'defaultPointOfSaleTerminalId' => null,
        'pointOfSaleTerminalIds' => 'csv',
        'disablePointOfSaleTerminalIdValidation' => null,
        'pinDebitNetworkOrder' => null,
        'pinDebitReimbursementCode' => null,
        'financialInstitutionId' => null,
        'enablePinTranslation' => null
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
        'defaultPointOfSaleTerminalId' => 'defaultPointOfSaleTerminalId',
        'pointOfSaleTerminalIds' => 'pointOfSaleTerminalIds',
        'disablePointOfSaleTerminalIdValidation' => 'disablePointOfSaleTerminalIdValidation',
        'pinDebitNetworkOrder' => 'pinDebitNetworkOrder',
        'pinDebitReimbursementCode' => 'pinDebitReimbursementCode',
        'financialInstitutionId' => 'financialInstitutionId',
        'enablePinTranslation' => 'enablePinTranslation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'defaultPointOfSaleTerminalId' => 'setDefaultPointOfSaleTerminalId',
        'pointOfSaleTerminalIds' => 'setPointOfSaleTerminalIds',
        'disablePointOfSaleTerminalIdValidation' => 'setDisablePointOfSaleTerminalIdValidation',
        'pinDebitNetworkOrder' => 'setPinDebitNetworkOrder',
        'pinDebitReimbursementCode' => 'setPinDebitReimbursementCode',
        'financialInstitutionId' => 'setFinancialInstitutionId',
        'enablePinTranslation' => 'setEnablePinTranslation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'defaultPointOfSaleTerminalId' => 'getDefaultPointOfSaleTerminalId',
        'pointOfSaleTerminalIds' => 'getPointOfSaleTerminalIds',
        'disablePointOfSaleTerminalIdValidation' => 'getDisablePointOfSaleTerminalIdValidation',
        'pinDebitNetworkOrder' => 'getPinDebitNetworkOrder',
        'pinDebitReimbursementCode' => 'getPinDebitReimbursementCode',
        'financialInstitutionId' => 'getFinancialInstitutionId',
        'enablePinTranslation' => 'getEnablePinTranslation'
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
        $this->container['defaultPointOfSaleTerminalId'] = isset($data['defaultPointOfSaleTerminalId']) ? $data['defaultPointOfSaleTerminalId'] : null;
        $this->container['pointOfSaleTerminalIds'] = isset($data['pointOfSaleTerminalIds']) ? $data['pointOfSaleTerminalIds'] : null;
        $this->container['disablePointOfSaleTerminalIdValidation'] = isset($data['disablePointOfSaleTerminalIdValidation']) ? $data['disablePointOfSaleTerminalIdValidation'] : null;
        $this->container['pinDebitNetworkOrder'] = isset($data['pinDebitNetworkOrder']) ? $data['pinDebitNetworkOrder'] : null;
        $this->container['pinDebitReimbursementCode'] = isset($data['pinDebitReimbursementCode']) ? $data['pinDebitReimbursementCode'] : null;
        $this->container['financialInstitutionId'] = isset($data['financialInstitutionId']) ? $data['financialInstitutionId'] : null;
        $this->container['enablePinTranslation'] = isset($data['enablePinTranslation']) ? $data['enablePinTranslation'] : null;
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
     * Gets defaultPointOfSaleTerminalId
     * @return string
     */
    public function getDefaultPointOfSaleTerminalId()
    {
        return $this->container['defaultPointOfSaleTerminalId'];
    }

    /**
     * Sets defaultPointOfSaleTerminalId
     * @param string $defaultPointOfSaleTerminalId Default Terminal ID used for Card Present and Virtual Terminal transactions. Applicable for VPC, GPX (gpx), American Express Direct (amexdirect) and Chase Paymentech Salem (chasepaymentechsalem) processors.  Validation details (for selected processors)...  <table> <thead><tr><th>Processor</th><th>Acceptance Type</th><th>Required</th><th>Min. Length</th><th>Max. Length</th><th>Regex</th><th>Default Value</th></tr></thead> <tr><td>American Express Direct</td><td>cp</td><td>Yes</td><td>4</td><td>8</td><td>^[0-9a-zA-Z]+$</td><td>1111</td></tr> </table>
     * @return $this
     */
    public function setDefaultPointOfSaleTerminalId($defaultPointOfSaleTerminalId)
    {
        $this->container['defaultPointOfSaleTerminalId'] = $defaultPointOfSaleTerminalId;

        return $this;
    }

    /**
     * Gets pointOfSaleTerminalIds
     * @return string[]
     */
    public function getPointOfSaleTerminalIds()
    {
        return $this->container['pointOfSaleTerminalIds'];
    }

    /**
     * Sets pointOfSaleTerminalIds
     * @param string[] $pointOfSaleTerminalIds For retail transactions, if merchant chooses to send the terminal id in the API, then that value has to be validated before being used. Holds a comma separated list of all possible terminal ids that the merchant is likely to send. Applicable for VPC processors.
     * @return $this
     */
    public function setPointOfSaleTerminalIds($pointOfSaleTerminalIds)
    {
        $this->container['pointOfSaleTerminalIds'] = $pointOfSaleTerminalIds;

        return $this;
    }

    /**
     * Gets disablePointOfSaleTerminalIdValidation
     * @return bool
     */
    public function getDisablePointOfSaleTerminalIdValidation()
    {
        return $this->container['disablePointOfSaleTerminalIdValidation'];
    }

    /**
     * Sets disablePointOfSaleTerminalIdValidation
     * @param bool $disablePointOfSaleTerminalIdValidation Disables terminal ID validation. Applicable for VPC processors.
     * @return $this
     */
    public function setDisablePointOfSaleTerminalIdValidation($disablePointOfSaleTerminalIdValidation)
    {
        $this->container['disablePointOfSaleTerminalIdValidation'] = $disablePointOfSaleTerminalIdValidation;

        return $this;
    }

    /**
     * Gets pinDebitNetworkOrder
     * @return string
     */
    public function getPinDebitNetworkOrder()
    {
        return $this->container['pinDebitNetworkOrder'];
    }

    /**
     * Sets pinDebitNetworkOrder
     * @param string $pinDebitNetworkOrder Order of the networks in which Visa should make routing decisions. Applicable for GPX (gpx) and VPC processors.
     * @return $this
     */
    public function setPinDebitNetworkOrder($pinDebitNetworkOrder)
    {
        $this->container['pinDebitNetworkOrder'] = $pinDebitNetworkOrder;

        return $this;
    }

    /**
     * Gets pinDebitReimbursementCode
     * @return string
     */
    public function getPinDebitReimbursementCode()
    {
        return $this->container['pinDebitReimbursementCode'];
    }

    /**
     * Sets pinDebitReimbursementCode
     * @param string $pinDebitReimbursementCode This attribute requests VIP to qualify a given PIN Debit transaction for a certain type of interchange program. Y = SMS supermarket, Z = SMS general merchant. Applicable for GPX (gpx) and VPC processors.
     * @return $this
     */
    public function setPinDebitReimbursementCode($pinDebitReimbursementCode)
    {
        $this->container['pinDebitReimbursementCode'] = $pinDebitReimbursementCode;

        return $this;
    }

    /**
     * Gets financialInstitutionId
     * @return string
     */
    public function getFinancialInstitutionId()
    {
        return $this->container['financialInstitutionId'];
    }

    /**
     * Sets financialInstitutionId
     * @param string $financialInstitutionId Acquirer Institution ID for the PIN Debit Transactions. Applicable for GPX (gpx) and VPC processors.
     * @return $this
     */
    public function setFinancialInstitutionId($financialInstitutionId)
    {
        $this->container['financialInstitutionId'] = $financialInstitutionId;

        return $this;
    }

    /**
     * Gets enablePinTranslation
     * @return bool
     */
    public function getEnablePinTranslation()
    {
        return $this->container['enablePinTranslation'];
    }

    /**
     * Sets enablePinTranslation
     * @param bool $enablePinTranslation Enables CyberSource PIN Translation for Online PIN Transactions. Please ensure you have exchanged PIN keys with CyberSource to use this feature. Applicable for VPC processors.
     * @return $this
     */
    public function setEnablePinTranslation($enablePinTranslation)
    {
        $this->container['enablePinTranslation'] = $enablePinTranslation;

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


