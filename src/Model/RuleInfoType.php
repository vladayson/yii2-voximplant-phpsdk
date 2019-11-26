<?php
/**
 * RuleInfoType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Voximplant
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Voximplant HTTP API
 *
 * Voximplant HTTP API description
 *
 * OpenAPI spec version: 1.0.0
 * Contact: info@voximplant.com
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

namespace Voximplant\Model;

use \ArrayAccess;

/**
 * RuleInfoType Class Doc Comment
 *
 * @category    Class */
 // @description The GetRules function result item.
/** 
 * @package     Voximplant
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RuleInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RuleInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'rule_id' => 'int',
        'application_id' => 'int',
        'rule_name' => 'string',
        'rule_pattern' => 'string',
        'rule_pattern_exclude' => 'string',
        'scenarios' => '\Voximplant\Model\ScenarioInfoType[]',
        'modified' => 'string'
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
        'rule_id' => 'rule_id',
        'application_id' => 'application_id',
        'rule_name' => 'rule_name',
        'rule_pattern' => 'rule_pattern',
        'rule_pattern_exclude' => 'rule_pattern_exclude',
        'scenarios' => 'scenarios',
        'modified' => 'modified'
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
        'rule_id' => 'setRuleId',
        'application_id' => 'setApplicationId',
        'rule_name' => 'setRuleName',
        'rule_pattern' => 'setRulePattern',
        'rule_pattern_exclude' => 'setRulePatternExclude',
        'scenarios' => 'setScenarios',
        'modified' => 'setModified'
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
        'rule_id' => 'getRuleId',
        'application_id' => 'getApplicationId',
        'rule_name' => 'getRuleName',
        'rule_pattern' => 'getRulePattern',
        'rule_pattern_exclude' => 'getRulePatternExclude',
        'scenarios' => 'getScenarios',
        'modified' => 'getModified'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['rule_id'] = isset($data['rule_id']) ? $data['rule_id'] : null;
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['rule_name'] = isset($data['rule_name']) ? $data['rule_name'] : null;
        $this->container['rule_pattern'] = isset($data['rule_pattern']) ? $data['rule_pattern'] : null;
        $this->container['rule_pattern_exclude'] = isset($data['rule_pattern_exclude']) ? $data['rule_pattern_exclude'] : null;
        $this->container['scenarios'] = isset($data['scenarios']) ? $data['scenarios'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['rule_id'] === null) {
            $invalid_properties[] = "'rule_id' can't be null";
        }
        if ($this->container['application_id'] === null) {
            $invalid_properties[] = "'application_id' can't be null";
        }
        if ($this->container['rule_name'] === null) {
            $invalid_properties[] = "'rule_name' can't be null";
        }
        if ($this->container['rule_pattern'] === null) {
            $invalid_properties[] = "'rule_pattern' can't be null";
        }
        if ($this->container['modified'] === null) {
            $invalid_properties[] = "'modified' can't be null";
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
        if ($this->container['rule_id'] === null) {
            return false;
        }
        if ($this->container['application_id'] === null) {
            return false;
        }
        if ($this->container['rule_name'] === null) {
            return false;
        }
        if ($this->container['rule_pattern'] === null) {
            return false;
        }
        if ($this->container['modified'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets rule_id
     * @return int
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     * @param int $rule_id The rule ID.
     * @return $this
     */
    public function setRuleId($rule_id)
    {
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets application_id
     * @return int
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     * @param int $application_id The application ID.
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets rule_name
     * @return string
     */
    public function getRuleName()
    {
        return $this->container['rule_name'];
    }

    /**
     * Sets rule_name
     * @param string $rule_name The rule name.
     * @return $this
     */
    public function setRuleName($rule_name)
    {
        $this->container['rule_name'] = $rule_name;

        return $this;
    }

    /**
     * Gets rule_pattern
     * @return string
     */
    public function getRulePattern()
    {
        return $this->container['rule_pattern'];
    }

    /**
     * Sets rule_pattern
     * @param string $rule_pattern The rule pattern regex.
     * @return $this
     */
    public function setRulePattern($rule_pattern)
    {
        $this->container['rule_pattern'] = $rule_pattern;

        return $this;
    }

    /**
     * Gets rule_pattern_exclude
     * @return string
     */
    public function getRulePatternExclude()
    {
        return $this->container['rule_pattern_exclude'];
    }

    /**
     * Sets rule_pattern_exclude
     * @param string $rule_pattern_exclude The rule pattern exlude regex.
     * @return $this
     */
    public function setRulePatternExclude($rule_pattern_exclude)
    {
        $this->container['rule_pattern_exclude'] = $rule_pattern_exclude;

        return $this;
    }

    /**
     * Gets scenarios
     * @return \Voximplant\Model\ScenarioInfoType[]
     */
    public function getScenarios()
    {
        return $this->container['scenarios'];
    }

    /**
     * Sets scenarios
     * @param \Voximplant\Model\ScenarioInfoType[] $scenarios
     * @return $this
     */
    public function setScenarios($scenarios)
    {
        $this->container['scenarios'] = $scenarios;

        return $this;
    }

    /**
     * Gets modified
     * @return string
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     * @param string $modified The rule editing UTC date in format: YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

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
            return json_encode(\Voximplant\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Voximplant\ObjectSerializer::sanitizeForSerialization($this));
    }
}


