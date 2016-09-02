<?php
/**
 * CreateDiscount
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
 * CreateDiscount Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateDiscount implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateDiscount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'handle' => 'string',
        'name' => 'string',
        'description' => 'string',
        'amount' => 'int',
        'percentage' => 'int',
        'apply_to' => 'string[]',
        'fixed_count' => 'int',
        'fixed_period_unit' => 'string',
        'fixed_period' => 'int'
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
        'name' => 'name',
        'description' => 'description',
        'amount' => 'amount',
        'percentage' => 'percentage',
        'apply_to' => 'apply_to',
        'fixed_count' => 'fixed_count',
        'fixed_period_unit' => 'fixed_period_unit',
        'fixed_period' => 'fixed_period'
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
        'name' => 'setName',
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'percentage' => 'setPercentage',
        'apply_to' => 'setApplyTo',
        'fixed_count' => 'setFixedCount',
        'fixed_period_unit' => 'setFixedPeriodUnit',
        'fixed_period' => 'setFixedPeriod'
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
        'name' => 'getName',
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'percentage' => 'getPercentage',
        'apply_to' => 'getApplyTo',
        'fixed_count' => 'getFixedCount',
        'fixed_period_unit' => 'getFixedPeriodUnit',
        'fixed_period' => 'getFixedPeriod'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const FIXED_PERIOD_UNIT_MONTHS = 'months';
    const FIXED_PERIOD_UNIT_DAYS = 'days';
    

    
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['apply_to'] = isset($data['apply_to']) ? $data['apply_to'] : null;
        $this->container['fixed_count'] = isset($data['fixed_count']) ? $data['fixed_count'] : null;
        $this->container['fixed_period_unit'] = isset($data['fixed_period_unit']) ? $data['fixed_period_unit'] : null;
        $this->container['fixed_period'] = isset($data['fixed_period']) ? $data['fixed_period'] : null;
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
     * @param string $handle Per account unique handle for the discount
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

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
            throw new \InvalidArgumentException('invalid value for $amount when calling CreateDiscount., must be bigger than or equal to 1.0.');
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
            throw new \InvalidArgumentException('invalid value for $percentage when calling CreateDiscount., must be smaller than or equal to 100.0.');
        }
        if ($percentage < 1.0) {
            throw new \InvalidArgumentException('invalid value for $percentage when calling CreateDiscount., must be bigger than or equal to 1.0.');
        }
        $this->container['percentage'] = $percentage;

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
            throw new \InvalidArgumentException('invalid value for $fixed_count when calling CreateDiscount., must be bigger than or equal to 1.0.');
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
     * @param string $fixed_period_unit Time unit use for fixed valid period either `days` or `months`
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
            throw new \InvalidArgumentException('invalid value for $fixed_period when calling CreateDiscount., must be bigger than or equal to 1.0.');
        }
        $this->container['fixed_period'] = $fixed_period;

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


