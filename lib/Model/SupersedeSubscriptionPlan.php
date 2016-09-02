<?php
/**
 * SupersedeSubscriptionPlan
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
 * SupersedeSubscriptionPlan Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SupersedeSubscriptionPlan implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SupersedeSubscriptionPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'description' => 'string',
        'vat' => 'float',
        'amount' => 'int',
        'quantity' => 'int',
        'prepaid' => 'bool',
        'dunning_plan' => 'string',
        'renewal_reminder_email_days' => 'int',
        'trial_reminder_email_days' => 'int',
        'partial_period_handling' => 'string',
        'fixed_count' => 'int',
        'fixed_life_time_unit' => 'string',
        'fixed_life_time_length' => 'int',
        'trial_interval_unit' => 'string',
        'trial_interval_length' => 'int',
        'interval_length' => 'int',
        'schedule_type' => 'string',
        'schedule_fixed_day' => 'int',
        'base_month' => 'int',
        'supersede_mode' => 'string'
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
        'name' => 'name',
        'description' => 'description',
        'vat' => 'vat',
        'amount' => 'amount',
        'quantity' => 'quantity',
        'prepaid' => 'prepaid',
        'dunning_plan' => 'dunning_plan',
        'renewal_reminder_email_days' => 'renewal_reminder_email_days',
        'trial_reminder_email_days' => 'trial_reminder_email_days',
        'partial_period_handling' => 'partial_period_handling',
        'fixed_count' => 'fixed_count',
        'fixed_life_time_unit' => 'fixed_life_time_unit',
        'fixed_life_time_length' => 'fixed_life_time_length',
        'trial_interval_unit' => 'trial_interval_unit',
        'trial_interval_length' => 'trial_interval_length',
        'interval_length' => 'interval_length',
        'schedule_type' => 'schedule_type',
        'schedule_fixed_day' => 'schedule_fixed_day',
        'base_month' => 'base_month',
        'supersede_mode' => 'supersede_mode'
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
        'name' => 'setName',
        'description' => 'setDescription',
        'vat' => 'setVat',
        'amount' => 'setAmount',
        'quantity' => 'setQuantity',
        'prepaid' => 'setPrepaid',
        'dunning_plan' => 'setDunningPlan',
        'renewal_reminder_email_days' => 'setRenewalReminderEmailDays',
        'trial_reminder_email_days' => 'setTrialReminderEmailDays',
        'partial_period_handling' => 'setPartialPeriodHandling',
        'fixed_count' => 'setFixedCount',
        'fixed_life_time_unit' => 'setFixedLifeTimeUnit',
        'fixed_life_time_length' => 'setFixedLifeTimeLength',
        'trial_interval_unit' => 'setTrialIntervalUnit',
        'trial_interval_length' => 'setTrialIntervalLength',
        'interval_length' => 'setIntervalLength',
        'schedule_type' => 'setScheduleType',
        'schedule_fixed_day' => 'setScheduleFixedDay',
        'base_month' => 'setBaseMonth',
        'supersede_mode' => 'setSupersedeMode'
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
        'name' => 'getName',
        'description' => 'getDescription',
        'vat' => 'getVat',
        'amount' => 'getAmount',
        'quantity' => 'getQuantity',
        'prepaid' => 'getPrepaid',
        'dunning_plan' => 'getDunningPlan',
        'renewal_reminder_email_days' => 'getRenewalReminderEmailDays',
        'trial_reminder_email_days' => 'getTrialReminderEmailDays',
        'partial_period_handling' => 'getPartialPeriodHandling',
        'fixed_count' => 'getFixedCount',
        'fixed_life_time_unit' => 'getFixedLifeTimeUnit',
        'fixed_life_time_length' => 'getFixedLifeTimeLength',
        'trial_interval_unit' => 'getTrialIntervalUnit',
        'trial_interval_length' => 'getTrialIntervalLength',
        'interval_length' => 'getIntervalLength',
        'schedule_type' => 'getScheduleType',
        'schedule_fixed_day' => 'getScheduleFixedDay',
        'base_month' => 'getBaseMonth',
        'supersede_mode' => 'getSupersedeMode'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const PARTIAL_PERIOD_HANDLING_BILL_FULL = 'bill_full';
    const PARTIAL_PERIOD_HANDLING_BILL_PRORATED = 'bill_prorated';
    const PARTIAL_PERIOD_HANDLING_BILL_ZERO_AMOUNT = 'bill_zero_amount';
    const PARTIAL_PERIOD_HANDLING_NO_BILL = 'no_bill';
    const FIXED_LIFE_TIME_UNIT_MONTHS = 'months';
    const FIXED_LIFE_TIME_UNIT_DAYS = 'days';
    const TRIAL_INTERVAL_UNIT_MONTHS = 'months';
    const TRIAL_INTERVAL_UNIT_DAYS = 'days';
    const SCHEDULE_TYPE_MANUAL = 'manual';
    const SCHEDULE_TYPE_DAILY = 'daily';
    const SCHEDULE_TYPE_WEEKLY_FIXEDDAY = 'weekly_fixedday';
    const SCHEDULE_TYPE_MONTH_STARTDATE = 'month_startdate';
    const SCHEDULE_TYPE_MONTH_FIXEDDAY = 'month_fixedday';
    const SCHEDULE_TYPE_MONTH_LASTDAY = 'month_lastday';
    const SUPERSEDE_MODE_NO_SUB_UPDATE = 'no_sub_update';
    const SUPERSEDE_MODE_SCHEDULED_SUB_UPDATE = 'scheduled_sub_update';
    const SUPERSEDE_MODE_INSTANT_SUB_UPDATE = 'instant_sub_update';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPartialPeriodHandlingAllowableValues()
    {
        return [
            self::PARTIAL_PERIOD_HANDLING_BILL_FULL,
            self::PARTIAL_PERIOD_HANDLING_BILL_PRORATED,
            self::PARTIAL_PERIOD_HANDLING_BILL_ZERO_AMOUNT,
            self::PARTIAL_PERIOD_HANDLING_NO_BILL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFixedLifeTimeUnitAllowableValues()
    {
        return [
            self::FIXED_LIFE_TIME_UNIT_MONTHS,
            self::FIXED_LIFE_TIME_UNIT_DAYS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTrialIntervalUnitAllowableValues()
    {
        return [
            self::TRIAL_INTERVAL_UNIT_MONTHS,
            self::TRIAL_INTERVAL_UNIT_DAYS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getScheduleTypeAllowableValues()
    {
        return [
            self::SCHEDULE_TYPE_MANUAL,
            self::SCHEDULE_TYPE_DAILY,
            self::SCHEDULE_TYPE_WEEKLY_FIXEDDAY,
            self::SCHEDULE_TYPE_MONTH_STARTDATE,
            self::SCHEDULE_TYPE_MONTH_FIXEDDAY,
            self::SCHEDULE_TYPE_MONTH_LASTDAY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSupersedeModeAllowableValues()
    {
        return [
            self::SUPERSEDE_MODE_NO_SUB_UPDATE,
            self::SUPERSEDE_MODE_SCHEDULED_SUB_UPDATE,
            self::SUPERSEDE_MODE_INSTANT_SUB_UPDATE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['prepaid'] = isset($data['prepaid']) ? $data['prepaid'] : false;
        $this->container['dunning_plan'] = isset($data['dunning_plan']) ? $data['dunning_plan'] : null;
        $this->container['renewal_reminder_email_days'] = isset($data['renewal_reminder_email_days']) ? $data['renewal_reminder_email_days'] : null;
        $this->container['trial_reminder_email_days'] = isset($data['trial_reminder_email_days']) ? $data['trial_reminder_email_days'] : null;
        $this->container['partial_period_handling'] = isset($data['partial_period_handling']) ? $data['partial_period_handling'] : null;
        $this->container['fixed_count'] = isset($data['fixed_count']) ? $data['fixed_count'] : null;
        $this->container['fixed_life_time_unit'] = isset($data['fixed_life_time_unit']) ? $data['fixed_life_time_unit'] : null;
        $this->container['fixed_life_time_length'] = isset($data['fixed_life_time_length']) ? $data['fixed_life_time_length'] : null;
        $this->container['trial_interval_unit'] = isset($data['trial_interval_unit']) ? $data['trial_interval_unit'] : null;
        $this->container['trial_interval_length'] = isset($data['trial_interval_length']) ? $data['trial_interval_length'] : null;
        $this->container['interval_length'] = isset($data['interval_length']) ? $data['interval_length'] : null;
        $this->container['schedule_type'] = isset($data['schedule_type']) ? $data['schedule_type'] : null;
        $this->container['schedule_fixed_day'] = isset($data['schedule_fixed_day']) ? $data['schedule_fixed_day'] : null;
        $this->container['base_month'] = isset($data['base_month']) ? $data['base_month'] : null;
        $this->container['supersede_mode'] = isset($data['supersede_mode']) ? $data['supersede_mode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if (!is_null($this->container['vat']) && ($this->container['vat'] > 1.0)) {
            $invalid_properties[] = "invalid value for 'vat', must be smaller than or equal to 1.0.";
        }

        if (!is_null($this->container['vat']) && ($this->container['vat'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'vat', must be bigger than or equal to 0.0.";
        }

        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'quantity', must be bigger than or equal to 1.0.";
        }

        if ($this->container['prepaid'] === null) {
            $invalid_properties[] = "'prepaid' can't be null";
        }
        if (!is_null($this->container['renewal_reminder_email_days']) && ($this->container['renewal_reminder_email_days'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'renewal_reminder_email_days', must be bigger than or equal to 1.0.";
        }

        if (!is_null($this->container['trial_reminder_email_days']) && ($this->container['trial_reminder_email_days'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'trial_reminder_email_days', must be bigger than or equal to 1.0.";
        }

        $allowed_values = array("bill_full", "bill_prorated", "bill_zero_amount", "no_bill");
        if (!in_array($this->container['partial_period_handling'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'partial_period_handling', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['fixed_count']) && ($this->container['fixed_count'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'fixed_count', must be bigger than or equal to 1.0.";
        }

        $allowed_values = array("months", "days");
        if (!in_array($this->container['fixed_life_time_unit'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'fixed_life_time_unit', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['fixed_life_time_length']) && ($this->container['fixed_life_time_length'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'fixed_life_time_length', must be bigger than or equal to 1.0.";
        }

        $allowed_values = array("months", "days");
        if (!in_array($this->container['trial_interval_unit'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'trial_interval_unit', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['trial_interval_length']) && ($this->container['trial_interval_length'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'trial_interval_length', must be bigger than or equal to 1.0.";
        }

        if ($this->container['interval_length'] === null) {
            $invalid_properties[] = "'interval_length' can't be null";
        }
        if (($this->container['interval_length'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'interval_length', must be bigger than or equal to 1.0.";
        }

        if ($this->container['schedule_type'] === null) {
            $invalid_properties[] = "'schedule_type' can't be null";
        }
        $allowed_values = array("manual", "daily", "weekly_fixedday", "month_startdate", "month_fixedday", "month_lastday");
        if (!in_array($this->container['schedule_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'schedule_type', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['schedule_fixed_day']) && ($this->container['schedule_fixed_day'] > 28.0)) {
            $invalid_properties[] = "invalid value for 'schedule_fixed_day', must be smaller than or equal to 28.0.";
        }

        if (!is_null($this->container['schedule_fixed_day']) && ($this->container['schedule_fixed_day'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'schedule_fixed_day', must be bigger than or equal to 1.0.";
        }

        if (!is_null($this->container['base_month']) && ($this->container['base_month'] > 12.0)) {
            $invalid_properties[] = "invalid value for 'base_month', must be smaller than or equal to 12.0.";
        }

        if (!is_null($this->container['base_month']) && ($this->container['base_month'] < 1.0)) {
            $invalid_properties[] = "invalid value for 'base_month', must be bigger than or equal to 1.0.";
        }

        $allowed_values = array("no_sub_update", "scheduled_sub_update", "instant_sub_update");
        if (!in_array($this->container['supersede_mode'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'supersede_mode', must be one of #{allowed_values}.";
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
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['vat'] > 1.0) {
            return false;
        }
        if ($this->container['vat'] < 0.0) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['amount'] < 0.0) {
            return false;
        }
        if ($this->container['quantity'] < 1.0) {
            return false;
        }
        if ($this->container['prepaid'] === null) {
            return false;
        }
        if ($this->container['renewal_reminder_email_days'] < 1.0) {
            return false;
        }
        if ($this->container['trial_reminder_email_days'] < 1.0) {
            return false;
        }
        $allowed_values = array("bill_full", "bill_prorated", "bill_zero_amount", "no_bill");
        if (!in_array($this->container['partial_period_handling'], $allowed_values)) {
            return false;
        }
        if ($this->container['fixed_count'] < 1.0) {
            return false;
        }
        $allowed_values = array("months", "days");
        if (!in_array($this->container['fixed_life_time_unit'], $allowed_values)) {
            return false;
        }
        if ($this->container['fixed_life_time_length'] < 1.0) {
            return false;
        }
        $allowed_values = array("months", "days");
        if (!in_array($this->container['trial_interval_unit'], $allowed_values)) {
            return false;
        }
        if ($this->container['trial_interval_length'] < 1.0) {
            return false;
        }
        if ($this->container['interval_length'] === null) {
            return false;
        }
        if ($this->container['interval_length'] < 1.0) {
            return false;
        }
        if ($this->container['schedule_type'] === null) {
            return false;
        }
        $allowed_values = array("manual", "daily", "weekly_fixedday", "month_startdate", "month_fixedday", "month_lastday");
        if (!in_array($this->container['schedule_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['schedule_fixed_day'] > 28.0) {
            return false;
        }
        if ($this->container['schedule_fixed_day'] < 1.0) {
            return false;
        }
        if ($this->container['base_month'] > 12.0) {
            return false;
        }
        if ($this->container['base_month'] < 1.0) {
            return false;
        }
        $allowed_values = array("no_sub_update", "scheduled_sub_update", "instant_sub_update");
        if (!in_array($this->container['supersede_mode'], $allowed_values)) {
            return false;
        }
        return true;
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
     * @param string $name Name of the plan
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
     * @param string $description Description of the plan
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets vat
     * @return float
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     * @param float $vat Optional vat for this plan. Account default is used if none given.
     * @return $this
     */
    public function setVat($vat)
    {

        if ($vat > 1.0) {
            throw new \InvalidArgumentException('invalid value for $vat when calling SupersedeSubscriptionPlan., must be smaller than or equal to 1.0.');
        }
        if ($vat < 0.0) {
            throw new \InvalidArgumentException('invalid value for $vat when calling SupersedeSubscriptionPlan., must be bigger than or equal to 0.0.');
        }
        $this->container['vat'] = $vat;

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
     * @param int $amount Amount for the plan in the smallest unit for the account currency including VAT
     * @return $this
     */
    public function setAmount($amount)
    {

        if ($amount < 0.0) {
            throw new \InvalidArgumentException('invalid value for $amount when calling SupersedeSubscriptionPlan., must be bigger than or equal to 0.0.');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity Optional default quantity of the subscription plan product for new subscriptions. Default is 1.
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if ($quantity < 1.0) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling SupersedeSubscriptionPlan., must be bigger than or equal to 1.0.');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets prepaid
     * @return bool
     */
    public function getPrepaid()
    {
        return $this->container['prepaid'];
    }

    /**
     * Sets prepaid
     * @param bool $prepaid Subscriptions can either be prepaid where an amount is paid in advance, or the opposite. This setting only relates to handling of pause scenarios.
     * @return $this
     */
    public function setPrepaid($prepaid)
    {
        $this->container['prepaid'] = $prepaid;

        return $this;
    }

    /**
     * Gets dunning_plan
     * @return string
     */
    public function getDunningPlan()
    {
        return $this->container['dunning_plan'];
    }

    /**
     * Sets dunning_plan
     * @param string $dunning_plan Dunning plan handle
     * @return $this
     */
    public function setDunningPlan($dunning_plan)
    {
        $this->container['dunning_plan'] = $dunning_plan;

        return $this;
    }

    /**
     * Gets renewal_reminder_email_days
     * @return int
     */
    public function getRenewalReminderEmailDays()
    {
        return $this->container['renewal_reminder_email_days'];
    }

    /**
     * Sets renewal_reminder_email_days
     * @param int $renewal_reminder_email_days Optional renewal reminder email settings. Number of days before next billing to send a reminder email.
     * @return $this
     */
    public function setRenewalReminderEmailDays($renewal_reminder_email_days)
    {

        if ($renewal_reminder_email_days < 1.0) {
            throw new \InvalidArgumentException('invalid value for $renewal_reminder_email_days when calling SupersedeSubscriptionPlan., must be bigger than or equal to 1.0.');
        }
        $this->container['renewal_reminder_email_days'] = $renewal_reminder_email_days;

        return $this;
    }

    /**
     * Gets trial_reminder_email_days
     * @return int
     */
    public function getTrialReminderEmailDays()
    {
        return $this->container['trial_reminder_email_days'];
    }

    /**
     * Sets trial_reminder_email_days
     * @param int $trial_reminder_email_days Optional end of trial reminder email settings. Number of days before end of trial to send a reminder email.
     * @return $this
     */
    public function setTrialReminderEmailDays($trial_reminder_email_days)
    {

        if ($trial_reminder_email_days < 1.0) {
            throw new \InvalidArgumentException('invalid value for $trial_reminder_email_days when calling SupersedeSubscriptionPlan., must be bigger than or equal to 1.0.');
        }
        $this->container['trial_reminder_email_days'] = $trial_reminder_email_days;

        return $this;
    }

    /**
     * Gets partial_period_handling
     * @return string
     */
    public function getPartialPeriodHandling()
    {
        return $this->container['partial_period_handling'];
    }

    /**
     * Sets partial_period_handling
     * @param string $partial_period_handling How to handle a potential initial partial billing period for fixed day scheduling. The options are to bill for a full period, bill prorated for the partial period, bill a zero amoumt, or not to consider the period before first fixed day a billing period. The default is to bill prorated. Options: `bill_full`, `bill_prorated`, `bill_zero_amount`, `no_bill`.
     * @return $this
     */
    public function setPartialPeriodHandling($partial_period_handling)
    {
        $allowed_values = array('bill_full', 'bill_prorated', 'bill_zero_amount', 'no_bill');
        if (!in_array($partial_period_handling, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'partial_period_handling', must be one of 'bill_full', 'bill_prorated', 'bill_zero_amount', 'no_bill'");
        }
        $this->container['partial_period_handling'] = $partial_period_handling;

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
     * @param int $fixed_count Fixed number of renewals for subscriptions using this plan. Equals the number of scheduled invoices.
     * @return $this
     */
    public function setFixedCount($fixed_count)
    {

        if ($fixed_count < 1.0) {
            throw new \InvalidArgumentException('invalid value for $fixed_count when calling SupersedeSubscriptionPlan., must be bigger than or equal to 1.0.');
        }
        $this->container['fixed_count'] = $fixed_count;

        return $this;
    }

    /**
     * Gets fixed_life_time_unit
     * @return string
     */
    public function getFixedLifeTimeUnit()
    {
        return $this->container['fixed_life_time_unit'];
    }

    /**
     * Sets fixed_life_time_unit
     * @param string $fixed_life_time_unit Time unit use for fixed life time
     * @return $this
     */
    public function setFixedLifeTimeUnit($fixed_life_time_unit)
    {
        $allowed_values = array('months', 'days');
        if (!in_array($fixed_life_time_unit, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'fixed_life_time_unit', must be one of 'months', 'days'");
        }
        $this->container['fixed_life_time_unit'] = $fixed_life_time_unit;

        return $this;
    }

    /**
     * Gets fixed_life_time_length
     * @return int
     */
    public function getFixedLifeTimeLength()
    {
        return $this->container['fixed_life_time_length'];
    }

    /**
     * Sets fixed_life_time_length
     * @param int $fixed_life_time_length Fixed life time length for subscriptions using this plan. E.g. 12 months. Subscriptions will cancel after the fixed life time and expire when the active billing cycle ends.
     * @return $this
     */
    public function setFixedLifeTimeLength($fixed_life_time_length)
    {

        if ($fixed_life_time_length < 1.0) {
            throw new \InvalidArgumentException('invalid value for $fixed_life_time_length when calling SupersedeSubscriptionPlan., must be bigger than or equal to 1.0.');
        }
        $this->container['fixed_life_time_length'] = $fixed_life_time_length;

        return $this;
    }

    /**
     * Gets trial_interval_unit
     * @return string
     */
    public function getTrialIntervalUnit()
    {
        return $this->container['trial_interval_unit'];
    }

    /**
     * Sets trial_interval_unit
     * @param string $trial_interval_unit Time unit for free trial period
     * @return $this
     */
    public function setTrialIntervalUnit($trial_interval_unit)
    {
        $allowed_values = array('months', 'days');
        if (!in_array($trial_interval_unit, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'trial_interval_unit', must be one of 'months', 'days'");
        }
        $this->container['trial_interval_unit'] = $trial_interval_unit;

        return $this;
    }

    /**
     * Gets trial_interval_length
     * @return int
     */
    public function getTrialIntervalLength()
    {
        return $this->container['trial_interval_length'];
    }

    /**
     * Sets trial_interval_length
     * @param int $trial_interval_length Free trial interval length. E.g. 1 month.
     * @return $this
     */
    public function setTrialIntervalLength($trial_interval_length)
    {

        if ($trial_interval_length < 1.0) {
            throw new \InvalidArgumentException('invalid value for $trial_interval_length when calling SupersedeSubscriptionPlan., must be bigger than or equal to 1.0.');
        }
        $this->container['trial_interval_length'] = $trial_interval_length;

        return $this;
    }

    /**
     * Gets interval_length
     * @return int
     */
    public function getIntervalLength()
    {
        return $this->container['interval_length'];
    }

    /**
     * Sets interval_length
     * @param int $interval_length The length of intervals. E.g. every second month or every 14 days.
     * @return $this
     */
    public function setIntervalLength($interval_length)
    {

        if ($interval_length < 1.0) {
            throw new \InvalidArgumentException('invalid value for $interval_length when calling SupersedeSubscriptionPlan., must be bigger than or equal to 1.0.');
        }
        $this->container['interval_length'] = $interval_length;

        return $this;
    }

    /**
     * Gets schedule_type
     * @return string
     */
    public function getScheduleType()
    {
        return $this->container['schedule_type'];
    }

    /**
     * Sets schedule_type
     * @param string $schedule_type Scheduling type, one of the following: `manual`, `daily`, `weekly_fixedday`, `month_startdate`, `month_fixedday`, `month_lastday`. See documentation for descriptions of the different types.
     * @return $this
     */
    public function setScheduleType($schedule_type)
    {
        $allowed_values = array('manual', 'daily', 'weekly_fixedday', 'month_startdate', 'month_fixedday', 'month_lastday');
        if (!in_array($schedule_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'schedule_type', must be one of 'manual', 'daily', 'weekly_fixedday', 'month_startdate', 'month_fixedday', 'month_lastday'");
        }
        $this->container['schedule_type'] = $schedule_type;

        return $this;
    }

    /**
     * Gets schedule_fixed_day
     * @return int
     */
    public function getScheduleFixedDay()
    {
        return $this->container['schedule_fixed_day'];
    }

    /**
     * Sets schedule_fixed_day
     * @param int $schedule_fixed_day If a fixed day scheduling type is used a fixed day must be provided. For months the allowed value is 1-28 for weeks it is 1-7
     * @return $this
     */
    public function setScheduleFixedDay($schedule_fixed_day)
    {

        if ($schedule_fixed_day > 28.0) {
            throw new \InvalidArgumentException('invalid value for $schedule_fixed_day when calling SupersedeSubscriptionPlan., must be smaller than or equal to 28.0.');
        }
        if ($schedule_fixed_day < 1.0) {
            throw new \InvalidArgumentException('invalid value for $schedule_fixed_day when calling SupersedeSubscriptionPlan., must be bigger than or equal to 1.0.');
        }
        $this->container['schedule_fixed_day'] = $schedule_fixed_day;

        return $this;
    }

    /**
     * Gets base_month
     * @return int
     */
    public function getBaseMonth()
    {
        return $this->container['base_month'];
    }

    /**
     * Sets base_month
     * @param int $base_month For fixed month schedule types the base month can be used to control which months are eligible for start of first billing period. The eligible months are calculated as `base_month + k * interval_length` up to 12. E.g. to use quaterly billing in the months jan-apr-jul-oct, base_month 1 and inrerval_length 3 can be used. If not defined the first fixed day will be used as start of first billing period.
     * @return $this
     */
    public function setBaseMonth($base_month)
    {

        if ($base_month > 12.0) {
            throw new \InvalidArgumentException('invalid value for $base_month when calling SupersedeSubscriptionPlan., must be smaller than or equal to 12.0.');
        }
        if ($base_month < 1.0) {
            throw new \InvalidArgumentException('invalid value for $base_month when calling SupersedeSubscriptionPlan., must be bigger than or equal to 1.0.');
        }
        $this->container['base_month'] = $base_month;

        return $this;
    }

    /**
     * Gets supersede_mode
     * @return string
     */
    public function getSupersedeMode()
    {
        return $this->container['supersede_mode'];
    }

    /**
     * Sets supersede_mode
     * @param string $supersede_mode Action to take after a subscription plan is superseded, one of the following: `no_sub_update`, `scheduled_sub_update`, `instant_sub_update`. Default is `no_sub_update`.
     * @return $this
     */
    public function setSupersedeMode($supersede_mode)
    {
        $allowed_values = array('no_sub_update', 'scheduled_sub_update', 'instant_sub_update');
        if (!in_array($supersede_mode, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'supersede_mode', must be one of 'no_sub_update', 'scheduled_sub_update', 'instant_sub_update'");
        }
        $this->container['supersede_mode'] = $supersede_mode;

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


