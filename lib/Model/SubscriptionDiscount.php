<?php
/**
 * SubscriptionDiscount
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * SubscriptionDiscount Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionDiscount implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionDiscount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'handle' => 'string',
        'discount' => 'string',
        'state' => 'string',
        'deleted' => '\DateTime',
        'created' => '\DateTime',
        'name' => 'string',
        'description' => 'string',
        'amount' => 'int',
        'percentage' => 'int',
        'count' => 'int',
        'invoices' => 'string[]',
        'apply_to' => 'string[]',
        'fixed_count' => 'int',
        'fixed_period_unit' => 'string',
        'fixed_period' => 'int',
        'fixed_usage_reached' => 'bool',
        'fixed_period_passed' => 'bool'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'handle' => 'handle',
        'discount' => 'discount',
        'state' => 'state',
        'deleted' => 'deleted',
        'created' => 'created',
        'name' => 'name',
        'description' => 'description',
        'amount' => 'amount',
        'percentage' => 'percentage',
        'count' => 'count',
        'invoices' => 'invoices',
        'apply_to' => 'apply_to',
        'fixed_count' => 'fixed_count',
        'fixed_period_unit' => 'fixed_period_unit',
        'fixed_period' => 'fixed_period',
        'fixed_usage_reached' => 'fixed_usage_reached',
        'fixed_period_passed' => 'fixed_period_passed'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'handle' => 'setHandle',
        'discount' => 'setDiscount',
        'state' => 'setState',
        'deleted' => 'setDeleted',
        'created' => 'setCreated',
        'name' => 'setName',
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'percentage' => 'setPercentage',
        'count' => 'setCount',
        'invoices' => 'setInvoices',
        'apply_to' => 'setApplyTo',
        'fixed_count' => 'setFixedCount',
        'fixed_period_unit' => 'setFixedPeriodUnit',
        'fixed_period' => 'setFixedPeriod',
        'fixed_usage_reached' => 'setFixedUsageReached',
        'fixed_period_passed' => 'setFixedPeriodPassed'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'handle' => 'getHandle',
        'discount' => 'getDiscount',
        'state' => 'getState',
        'deleted' => 'getDeleted',
        'created' => 'getCreated',
        'name' => 'getName',
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'percentage' => 'getPercentage',
        'count' => 'getCount',
        'invoices' => 'getInvoices',
        'apply_to' => 'getApplyTo',
        'fixed_count' => 'getFixedCount',
        'fixed_period_unit' => 'getFixedPeriodUnit',
        'fixed_period' => 'getFixedPeriod',
        'fixed_usage_reached' => 'getFixedUsageReached',
        'fixed_period_passed' => 'getFixedPeriodPassed'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATE_ACTIVE = 'active';
    const STATE_DISABLED = 'disabled';
    const FIXED_PERIOD_UNIT_MONTHS = 'months';
    const FIXED_PERIOD_UNIT_DAYS = 'days';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_DISABLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFixedPeriodUnitAllowableValues()
    {
        return [
            self::FIXED_PERIOD_UNIT_MONTHS,
            self::FIXED_PERIOD_UNIT_DAYS,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['invoices'] = isset($data['invoices']) ? $data['invoices'] : null;
        $this->container['apply_to'] = isset($data['apply_to']) ? $data['apply_to'] : null;
        $this->container['fixed_count'] = isset($data['fixed_count']) ? $data['fixed_count'] : null;
        $this->container['fixed_period_unit'] = isset($data['fixed_period_unit']) ? $data['fixed_period_unit'] : null;
        $this->container['fixed_period'] = isset($data['fixed_period']) ? $data['fixed_period'] : null;
        $this->container['fixed_usage_reached'] = isset($data['fixed_usage_reached']) ? $data['fixed_usage_reached'] : false;
        $this->container['fixed_period_passed'] = isset($data['fixed_period_passed']) ? $data['fixed_period_passed'] : false;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['handle'] === null) {
            $invalid_properties[] = "'handle' can't be null";
        }
        if ($this->container['discount'] === null) {
            $invalid_properties[] = "'discount' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = array("active", "disabled");
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of #{allowed_values}.";
        }

        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if (!is_null($this->container['amount']) && ($this->container['amount'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 1.0.";
        }

        if (!is_null($this->container['percentage']) && ($this->container['percentage'] > 100.0)) {
            $invalid_properties[] = "invalid value for 'percentage', must be smaller than or equal to 100.0.";
        }

        if (!is_null($this->container['percentage']) && ($this->container['percentage'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'percentage', must be bigger than or equal to 1.0.";
        }

        if ($this->container['count'] === null) {
            $invalid_properties[] = "'count' can't be null";
        }
        if ($this->container['invoices'] === null) {
            $invalid_properties[] = "'invoices' can't be null";
        }
        if ($this->container['apply_to'] === null) {
            $invalid_properties[] = "'apply_to' can't be null";
        }
        if (!is_null($this->container['fixed_count']) && ($this->container['fixed_count'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'fixed_count', must be bigger than or equal to 1.0.";
        }

        $allowed_values = array("months", "days");
        if (!in_array($this->container['fixed_period_unit'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'fixed_period_unit', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['fixed_period']) && ($this->container['fixed_period'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'fixed_period', must be bigger than or equal to 1.0.";
        }

        if ($this->container['fixed_usage_reached'] === null) {
            $invalid_properties[] = "'fixed_usage_reached' can't be null";
        }
        if ($this->container['fixed_period_passed'] === null) {
            $invalid_properties[] = "'fixed_period_passed' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['handle'] === null) {
            return false;
        }
        if ($this->container['discount'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = array("active", "disabled");
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['amount'] < 1.0) {
            return false;
        }
        if ($this->container['percentage'] > 100.0) {
            return false;
        }
        if ($this->container['percentage'] < 1.0) {
            return false;
        }
        if ($this->container['count'] === null) {
            return false;
        }
        if ($this->container['invoices'] === null) {
            return false;
        }
        if ($this->container['apply_to'] === null) {
            return false;
        }
        if ($this->container['fixed_count'] < 1.0) {
            return false;
        }
        $allowed_values = array("months", "days");
        if (!in_array($this->container['fixed_period_unit'], $allowed_values)) {
            return false;
        }
        if ($this->container['fixed_period'] < 1.0) {
            return false;
        }
        if ($this->container['fixed_usage_reached'] === null) {
            return false;
        }
        if ($this->container['fixed_period_passed'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets handle
     * @return string
     */
    public function getHandle()
    {
        return $this->container['handle'];
    }

    /**
     * Sets handle
     * @param string $handle Per subscription unique handle for the subscription discount.
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets discount
     * @return string
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     * @param string $discount Discount for subscription discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state Discount state `active` or `disabled`.
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('active', 'disabled');
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'active', 'disabled'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets deleted
     * @return \DateTime
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     * @param \DateTime $deleted Date when the discount was deleted if deleted. In ISO-8601 extended offset date-time format.
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created Date when the discount was created. In ISO-8601 extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of discount. Will be used as order line text.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Optional description of discount
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount Fixed amount discount deducted from order line amounts including VAT
     * @return $this
     */
    public function setAmount($amount)
    {

        if ($amount < 1.0) {
            throw new \InvalidArgumentException('invalid value for $amount when calling SubscriptionDiscount., must be bigger than or equal to 1.0.');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets percentage
     * @return int
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     * @param int $percentage Percentage discount applied to each applicable order line
     * @return $this
     */
    public function setPercentage($percentage)
    {

        if ($percentage > 100.0) {
            throw new \InvalidArgumentException('invalid value for $percentage when calling SubscriptionDiscount., must be smaller than or equal to 100.0.');
        }
        if ($percentage < 1.0) {
            throw new \InvalidArgumentException('invalid value for $percentage when calling SubscriptionDiscount., must be bigger than or equal to 1.0.');
        }
        $this->container['percentage'] = $percentage;

        return $this;
    }

    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count Number of invoices this subscription discount has been applied to
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets invoices
     * @return string[]
     */
    public function getInvoices()
    {
        return $this->container['invoices'];
    }

    /**
     * Sets invoices
     * @param string[] $invoices List of invoices this subscription discount has been applied to
     * @return $this
     */
    public function setInvoices($invoices)
    {
        $this->container['invoices'] = $invoices;

        return $this;
    }

    /**
     * Gets apply_to
     * @return string[]
     */
    public function getApplyTo()
    {
        return $this->container['apply_to'];
    }

    /**
     * Sets apply_to
     * @param string[] $apply_to Which order lines the discount is applicable to: `all`, `setup_fee`, `plan`, `additional_cost`, `add_on` and `ondemand`
     * @return $this
     */
    public function setApplyTo($apply_to)
    {
        $this->container['apply_to'] = $apply_to;

        return $this;
    }

    /**
     * Gets fixed_count
     * @return int
     */
    public function getFixedCount()
    {
        return $this->container['fixed_count'];
    }

    /**
     * Sets fixed_count
     * @param int $fixed_count Apply discount to a fixed number of invoices
     * @return $this
     */
    public function setFixedCount($fixed_count)
    {

        if ($fixed_count < 1.0) {
            throw new \InvalidArgumentException('invalid value for $fixed_count when calling SubscriptionDiscount., must be bigger than or equal to 1.0.');
        }
        $this->container['fixed_count'] = $fixed_count;

        return $this;
    }

    /**
     * Gets fixed_period_unit
     * @return string
     */
    public function getFixedPeriodUnit()
    {
        return $this->container['fixed_period_unit'];
    }

    /**
     * Sets fixed_period_unit
     * @param string $fixed_period_unit Time unit use for fixed valid period
     * @return $this
     */
    public function setFixedPeriodUnit($fixed_period_unit)
    {
        $allowed_values = array('months', 'days');
        if (!in_array($fixed_period_unit, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'fixed_period_unit', must be one of 'months', 'days'");
        }
        $this->container['fixed_period_unit'] = $fixed_period_unit;

        return $this;
    }

    /**
     * Gets fixed_period
     * @return int
     */
    public function getFixedPeriod()
    {
        return $this->container['fixed_period'];
    }

    /**
     * Sets fixed_period
     * @param int $fixed_period Fixed period length e.g. 12 months or 14 days
     * @return $this
     */
    public function setFixedPeriod($fixed_period)
    {

        if ($fixed_period < 1.0) {
            throw new \InvalidArgumentException('invalid value for $fixed_period when calling SubscriptionDiscount., must be bigger than or equal to 1.0.');
        }
        $this->container['fixed_period'] = $fixed_period;

        return $this;
    }

    /**
     * Gets fixed_usage_reached
     * @return bool
     */
    public function getFixedUsageReached()
    {
        return $this->container['fixed_usage_reached'];
    }

    /**
     * Sets fixed_usage_reached
     * @param bool $fixed_usage_reached Whether fixed usage for subscription discount has been reached
     * @return $this
     */
    public function setFixedUsageReached($fixed_usage_reached)
    {
        $this->container['fixed_usage_reached'] = $fixed_usage_reached;

        return $this;
    }

    /**
     * Gets fixed_period_passed
     * @return bool
     */
    public function getFixedPeriodPassed()
    {
        return $this->container['fixed_period_passed'];
    }

    /**
     * Sets fixed_period_passed
     * @param bool $fixed_period_passed Whether fixed period for subscription discount has been passed
     * @return $this
     */
    public function setFixedPeriodPassed($fixed_period_passed)
    {
        $this->container['fixed_period_passed'] = $fixed_period_passed;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


