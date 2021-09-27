<?php
/**
 * OrderStatus
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorOrders;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * OrderStatus Class Doc Comment
 *
 * @category Class
 * @description Current status of a purchase order.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'purchase_order_number' => 'string',
        'purchase_order_status' => 'string',
        'purchase_order_date' => '\DateTime',
        'last_updated_date' => '\DateTime',
        'selling_party' => '\SellingPartnerApi\Model\VendorOrders\PartyIdentification',
        'ship_to_party' => '\SellingPartnerApi\Model\VendorOrders\PartyIdentification',
        'item_status' => '\SellingPartnerApi\Model\VendorOrders\OrderItemStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'purchase_order_number' => null,
        'purchase_order_status' => null,
        'purchase_order_date' => 'date-time',
        'last_updated_date' => 'date-time',
        'selling_party' => null,
        'ship_to_party' => null,
        'item_status' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'purchase_order_number' => 'purchaseOrderNumber',
        'purchase_order_status' => 'purchaseOrderStatus',
        'purchase_order_date' => 'purchaseOrderDate',
        'last_updated_date' => 'lastUpdatedDate',
        'selling_party' => 'sellingParty',
        'ship_to_party' => 'shipToParty',
        'item_status' => 'itemStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'purchase_order_status' => 'setPurchaseOrderStatus',
        'purchase_order_date' => 'setPurchaseOrderDate',
        'last_updated_date' => 'setLastUpdatedDate',
        'selling_party' => 'setSellingParty',
        'ship_to_party' => 'setShipToParty',
        'item_status' => 'setItemStatus',
        'headers' => 'setHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'purchase_order_status' => 'getPurchaseOrderStatus',
        'purchase_order_date' => 'getPurchaseOrderDate',
        'last_updated_date' => 'getLastUpdatedDate',
        'selling_party' => 'getSellingParty',
        'ship_to_party' => 'getShipToParty',
        'item_status' => 'getItemStatus',
        'headers' => 'getHeaders'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const PURCHASE_ORDER_STATUS_OPEN = 'OPEN';
    const PURCHASE_ORDER_STATUS_CLOSED = 'CLOSED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPurchaseOrderStatusAllowableValues()
    {
        return [
            self::PURCHASE_ORDER_STATUS_OPEN,
            self::PURCHASE_ORDER_STATUS_CLOSED,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['purchase_order_status'] = $data['purchase_order_status'] ?? null;
        $this->container['purchase_order_date'] = $data['purchase_order_date'] ?? null;
        $this->container['last_updated_date'] = $data['last_updated_date'] ?? null;
        $this->container['selling_party'] = $data['selling_party'] ?? null;
        $this->container['ship_to_party'] = $data['ship_to_party'] ?? null;
        $this->container['item_status'] = $data['item_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['purchase_order_number'] === null) {
            $invalidProperties[] = "'purchase_order_number' can't be null";
        }
        if ($this->container['purchase_order_status'] === null) {
            $invalidProperties[] = "'purchase_order_status' can't be null";
        }
        $allowedValues = $this->getPurchaseOrderStatusAllowableValues();
        if (!is_null($this->container['purchase_order_status']) && !in_array($this->container['purchase_order_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'purchase_order_status', must be one of '%s'",
                $this->container['purchase_order_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['purchase_order_date'] === null) {
            $invalidProperties[] = "'purchase_order_date' can't be null";
        }
        if ($this->container['selling_party'] === null) {
            $invalidProperties[] = "'selling_party' can't be null";
        }
        if ($this->container['ship_to_party'] === null) {
            $invalidProperties[] = "'ship_to_party' can't be null";
        }
        if ($this->container['item_status'] === null) {
            $invalidProperties[] = "'item_status' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets headers, if this is a top-level response model
     *
     * @return array[string]|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers (only relevant to response models)
     *
     * @param array[string => string]|null $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }


    /**
     * Gets purchase_order_number
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string $purchase_order_number The buyer's purchase order number for this order. Formatting Notes: 8-character alpha-numeric code.
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets purchase_order_status
     *
     * @return string
     */
    public function getPurchaseOrderStatus()
    {
        return $this->container['purchase_order_status'];
    }

    /**
     * Sets purchase_order_status
     *
     * @param string $purchase_order_status The status of the buyer's purchase order for this order.
     *
     * @return self
     */
    public function setPurchaseOrderStatus($purchase_order_status)
    {
        $allowedValues = $this->getPurchaseOrderStatusAllowableValues();
        if (!in_array($purchase_order_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'purchase_order_status', must be one of '%s'",
                    $purchase_order_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['purchase_order_status'] = $purchase_order_status;

        return $this;
    }

    /**
     * Gets purchase_order_date
     *
     * @return \DateTime
     */
    public function getPurchaseOrderDate()
    {
        return $this->container['purchase_order_date'];
    }

    /**
     * Sets purchase_order_date
     *
     * @param \DateTime $purchase_order_date The date the purchase order was placed. Must be in ISO-8601 date/time format.
     *
     * @return self
     */
    public function setPurchaseOrderDate($purchase_order_date)
    {
        $this->container['purchase_order_date'] = $purchase_order_date;

        return $this;
    }

    /**
     * Gets last_updated_date
     *
     * @return \DateTime|null
     */
    public function getLastUpdatedDate()
    {
        return $this->container['last_updated_date'];
    }

    /**
     * Sets last_updated_date
     *
     * @param \DateTime|null $last_updated_date The date when the purchase order was last updated. Must be in ISO-8601 date/time format.
     *
     * @return self
     */
    public function setLastUpdatedDate($last_updated_date)
    {
        $this->container['last_updated_date'] = $last_updated_date;

        return $this;
    }

    /**
     * Gets selling_party
     *
     * @return \SellingPartnerApi\Model\VendorOrders\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party
     *
     * @param \SellingPartnerApi\Model\VendorOrders\PartyIdentification $selling_party selling_party
     *
     * @return self
     */
    public function setSellingParty($selling_party)
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }

    /**
     * Gets ship_to_party
     *
     * @return \SellingPartnerApi\Model\VendorOrders\PartyIdentification
     */
    public function getShipToParty()
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party
     *
     * @param \SellingPartnerApi\Model\VendorOrders\PartyIdentification $ship_to_party ship_to_party
     *
     * @return self
     */
    public function setShipToParty($ship_to_party)
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }

    /**
     * Gets item_status
     *
     * @return \SellingPartnerApi\Model\VendorOrders\OrderItemStatus[]
     */
    public function getItemStatus()
    {
        return $this->container['item_status'];
    }

    /**
     * Sets item_status
     *
     * @param \SellingPartnerApi\Model\VendorOrders\OrderItemStatus[] $item_status Detailed description of items order status.
     *
     * @return self
     */
    public function setItemStatus($item_status)
    {
        $this->container['item_status'] = $item_status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

