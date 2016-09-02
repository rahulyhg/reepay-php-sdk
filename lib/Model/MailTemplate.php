<?php
/**
 * MailTemplate
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
 * MailTemplate Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MailTemplate implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MailTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'disabled' => 'bool',
        'subject' => 'string',
        'cc' => 'string[]',
        'updated' => '\DateTime',
        'mail_from' => 'string',
        'text_body' => 'string',
        'html_body' => 'string',
        'mail_type' => 'string'
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
        'disabled' => 'disabled',
        'subject' => 'subject',
        'cc' => 'cc',
        'updated' => 'updated',
        'mail_from' => 'mail_from',
        'text_body' => 'text_body',
        'html_body' => 'html_body',
        'mail_type' => 'mail_type'
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
        'disabled' => 'setDisabled',
        'subject' => 'setSubject',
        'cc' => 'setCc',
        'updated' => 'setUpdated',
        'mail_from' => 'setMailFrom',
        'text_body' => 'setTextBody',
        'html_body' => 'setHtmlBody',
        'mail_type' => 'setMailType'
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
        'disabled' => 'getDisabled',
        'subject' => 'getSubject',
        'cc' => 'getCc',
        'updated' => 'getUpdated',
        'mail_from' => 'getMailFrom',
        'text_body' => 'getTextBody',
        'html_body' => 'getHtmlBody',
        'mail_type' => 'getMailType'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const MAIL_TYPE_INVOICE_CARD_RECEIPT = 'invoice_card_receipt';
    const MAIL_TYPE_INVOICE_MANUAL_RECEIPT = 'invoice_manual_receipt';
    const MAIL_TYPE_INVOICE_ZERO_AMOUNT_RECEIPT = 'invoice_zero_amount_receipt';
    const MAIL_TYPE_INVOICE_DUNNING_NOTIFICATION = 'invoice_dunning_notification';
    const MAIL_TYPE_INVOICE_DUNNING_NOTIFICATION_NO_PAYMENT_METHOD = 'invoice_dunning_notification_no_payment_method';
    const MAIL_TYPE_SIGNUP_RECEIPT = 'signup_receipt';
    const MAIL_TYPE_SIGNUP_RECEIPT_REQUEST_PAYMENT_METHOD = 'signup_receipt_request_payment_method';
    const MAIL_TYPE_SUBSCRIPTION_CANCELLED = 'subscription_cancelled';
    const MAIL_TYPE_SUBSCRIPTION_UNCANCELLED = 'subscription_uncancelled';
    const MAIL_TYPE_SUBSCRIPTION_EXPIRED = 'subscription_expired';
    const MAIL_TYPE_SUBSCRIPTION_EXPIRED_DUNNING = 'subscription_expired_dunning';
    const MAIL_TYPE_SUBSCRIPTION_CHANGE = 'subscription_change';
    const MAIL_TYPE_SUBSCRIPTION_RENEWAL_REMINDER = 'subscription_renewal_reminder';
    const MAIL_TYPE_SUBSCRIPTION_TRIAL_END_REMINDER = 'subscription_trial_end_reminder';
    const MAIL_TYPE_USER_ACCOUNT_INVITE = 'user_account_invite';
    const MAIL_TYPE_USER_ACCOUNT_NOTIFICATION = 'user_account_notification';
    const MAIL_TYPE_USER_RESET_PASSWORD = 'user_reset_password';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMailTypeAllowableValues()
    {
        return [
            self::MAIL_TYPE_INVOICE_CARD_RECEIPT,
            self::MAIL_TYPE_INVOICE_MANUAL_RECEIPT,
            self::MAIL_TYPE_INVOICE_ZERO_AMOUNT_RECEIPT,
            self::MAIL_TYPE_INVOICE_DUNNING_NOTIFICATION,
            self::MAIL_TYPE_INVOICE_DUNNING_NOTIFICATION_NO_PAYMENT_METHOD,
            self::MAIL_TYPE_SIGNUP_RECEIPT,
            self::MAIL_TYPE_SIGNUP_RECEIPT_REQUEST_PAYMENT_METHOD,
            self::MAIL_TYPE_SUBSCRIPTION_CANCELLED,
            self::MAIL_TYPE_SUBSCRIPTION_UNCANCELLED,
            self::MAIL_TYPE_SUBSCRIPTION_EXPIRED,
            self::MAIL_TYPE_SUBSCRIPTION_EXPIRED_DUNNING,
            self::MAIL_TYPE_SUBSCRIPTION_CHANGE,
            self::MAIL_TYPE_SUBSCRIPTION_RENEWAL_REMINDER,
            self::MAIL_TYPE_SUBSCRIPTION_TRIAL_END_REMINDER,
            self::MAIL_TYPE_USER_ACCOUNT_INVITE,
            self::MAIL_TYPE_USER_ACCOUNT_NOTIFICATION,
            self::MAIL_TYPE_USER_RESET_PASSWORD,
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
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : false;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['mail_from'] = isset($data['mail_from']) ? $data['mail_from'] : null;
        $this->container['text_body'] = isset($data['text_body']) ? $data['text_body'] : null;
        $this->container['html_body'] = isset($data['html_body']) ? $data['html_body'] : null;
        $this->container['mail_type'] = isset($data['mail_type']) ? $data['mail_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['disabled'] === null) {
            $invalid_properties[] = "'disabled' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalid_properties[] = "'subject' can't be null";
        }
        if ($this->container['mail_from'] === null) {
            $invalid_properties[] = "'mail_from' can't be null";
        }
        if ($this->container['text_body'] === null) {
            $invalid_properties[] = "'text_body' can't be null";
        }
        if ($this->container['html_body'] === null) {
            $invalid_properties[] = "'html_body' can't be null";
        }
        if ($this->container['mail_type'] === null) {
            $invalid_properties[] = "'mail_type' can't be null";
        }
        $allowed_values = array("invoice_card_receipt", "invoice_manual_receipt", "invoice_zero_amount_receipt", "invoice_dunning_notification", "invoice_dunning_notification_no_payment_method", "signup_receipt", "signup_receipt_request_payment_method", "subscription_cancelled", "subscription_uncancelled", "subscription_expired", "subscription_expired_dunning", "subscription_change", "subscription_renewal_reminder", "subscription_trial_end_reminder", "user_account_invite", "user_account_notification", "user_reset_password");
        if (!in_array($this->container['mail_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'mail_type', must be one of #{allowed_values}.";
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
        if ($this->container['disabled'] === null) {
            return false;
        }
        if ($this->container['subject'] === null) {
            return false;
        }
        if ($this->container['mail_from'] === null) {
            return false;
        }
        if ($this->container['text_body'] === null) {
            return false;
        }
        if ($this->container['html_body'] === null) {
            return false;
        }
        if ($this->container['mail_type'] === null) {
            return false;
        }
        $allowed_values = array("invoice_card_receipt", "invoice_manual_receipt", "invoice_zero_amount_receipt", "invoice_dunning_notification", "invoice_dunning_notification_no_payment_method", "signup_receipt", "signup_receipt_request_payment_method", "subscription_cancelled", "subscription_uncancelled", "subscription_expired", "subscription_expired_dunning", "subscription_change", "subscription_renewal_reminder", "subscription_trial_end_reminder", "user_account_invite", "user_account_notification", "user_reset_password");
        if (!in_array($this->container['mail_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets disabled
     * @return bool
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     * @param bool $disabled Should this email be sent by Reepay
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject Mail subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets cc
     * @return string[]
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     * @param string[] $cc Optional cc addresses in RFC-822 format
     * @return $this
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets updated
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     * @param \DateTime $updated Date and time for last template update
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets mail_from
     * @return string
     */
    public function getMailFrom()
    {
        return $this->container['mail_from'];
    }

    /**
     * Sets mail_from
     * @param string $mail_from Sender address to use in RFC-822 format. If not set the default account mail settings sender address will be used.
     * @return $this
     */
    public function setMailFrom($mail_from)
    {
        $this->container['mail_from'] = $mail_from;

        return $this;
    }

    /**
     * Gets text_body
     * @return string
     */
    public function getTextBody()
    {
        return $this->container['text_body'];
    }

    /**
     * Sets text_body
     * @param string $text_body Text body template content
     * @return $this
     */
    public function setTextBody($text_body)
    {
        $this->container['text_body'] = $text_body;

        return $this;
    }

    /**
     * Gets html_body
     * @return string
     */
    public function getHtmlBody()
    {
        return $this->container['html_body'];
    }

    /**
     * Sets html_body
     * @param string $html_body HTML body template content
     * @return $this
     */
    public function setHtmlBody($html_body)
    {
        $this->container['html_body'] = $html_body;

        return $this;
    }

    /**
     * Gets mail_type
     * @return string
     */
    public function getMailType()
    {
        return $this->container['mail_type'];
    }

    /**
     * Sets mail_type
     * @param string $mail_type Mail type, one of the following: `invoice_card_receipt`, `invoice_manual_receipt`, `invoice_zero_amount_receipt`, `invoice_dunning_notification`, `invoice_dunning_notification_no_payment_method`, `signup_receipt`, 'signup_receipt_request_payment_method',`subscription_cancelled`, `subscription_uncancelled`, `subscription_expired`, `subscription_expired_dunning`, `subscription_change`, `subscription_renewal_reminder`, `subscription_trial_end_reminder`, `user_account_invite`, `user_account_notification`, `user_reset_password`
     * @return $this
     */
    public function setMailType($mail_type)
    {
        $allowed_values = array('invoice_card_receipt', 'invoice_manual_receipt', 'invoice_zero_amount_receipt', 'invoice_dunning_notification', 'invoice_dunning_notification_no_payment_method', 'signup_receipt', 'signup_receipt_request_payment_method', 'subscription_cancelled', 'subscription_uncancelled', 'subscription_expired', 'subscription_expired_dunning', 'subscription_change', 'subscription_renewal_reminder', 'subscription_trial_end_reminder', 'user_account_invite', 'user_account_notification', 'user_reset_password');
        if (!in_array($mail_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'mail_type', must be one of 'invoice_card_receipt', 'invoice_manual_receipt', 'invoice_zero_amount_receipt', 'invoice_dunning_notification', 'invoice_dunning_notification_no_payment_method', 'signup_receipt', 'signup_receipt_request_payment_method', 'subscription_cancelled', 'subscription_uncancelled', 'subscription_expired', 'subscription_expired_dunning', 'subscription_change', 'subscription_renewal_reminder', 'subscription_trial_end_reminder', 'user_account_invite', 'user_account_notification', 'user_reset_password'");
        }
        $this->container['mail_type'] = $mail_type;

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


