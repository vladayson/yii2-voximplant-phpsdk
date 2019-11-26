<?php
/**
 * ScenarioInfoType
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
 * ScenarioInfoType Class Doc Comment
 *
 * @category    Class */
 // @description The GetScenarios function result.
/** 
 * @package     Voximplant
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ScenarioInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ScenarioInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'scenario_id' => 'int',
        'scenario_name' => 'string',
        'scenario_script' => 'string',
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
        'scenario_id' => 'scenario_id',
        'scenario_name' => 'scenario_name',
        'scenario_script' => 'scenario_script',
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
        'scenario_id' => 'setScenarioId',
        'scenario_name' => 'setScenarioName',
        'scenario_script' => 'setScenarioScript',
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
        'scenario_id' => 'getScenarioId',
        'scenario_name' => 'getScenarioName',
        'scenario_script' => 'getScenarioScript',
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
        $this->container['scenario_id'] = isset($data['scenario_id']) ? $data['scenario_id'] : null;
        $this->container['scenario_name'] = isset($data['scenario_name']) ? $data['scenario_name'] : null;
        $this->container['scenario_script'] = isset($data['scenario_script']) ? $data['scenario_script'] : null;
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
        if ($this->container['scenario_id'] === null) {
            $invalid_properties[] = "'scenario_id' can't be null";
        }
        if ($this->container['scenario_name'] === null) {
            $invalid_properties[] = "'scenario_name' can't be null";
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
        if ($this->container['scenario_id'] === null) {
            return false;
        }
        if ($this->container['scenario_name'] === null) {
            return false;
        }
        if ($this->container['modified'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets scenario_id
     * @return int
     */
    public function getScenarioId()
    {
        return $this->container['scenario_id'];
    }

    /**
     * Sets scenario_id
     * @param int $scenario_id The scenario ID.
     * @return $this
     */
    public function setScenarioId($scenario_id)
    {
        $this->container['scenario_id'] = $scenario_id;

        return $this;
    }

    /**
     * Gets scenario_name
     * @return string
     */
    public function getScenarioName()
    {
        return $this->container['scenario_name'];
    }

    /**
     * Sets scenario_name
     * @param string $scenario_name The scenario name.
     * @return $this
     */
    public function setScenarioName($scenario_name)
    {
        $this->container['scenario_name'] = $scenario_name;

        return $this;
    }

    /**
     * Gets scenario_script
     * @return string
     */
    public function getScenarioScript()
    {
        return $this->container['scenario_script'];
    }

    /**
     * Sets scenario_script
     * @param string $scenario_script The scenario text.
     * @return $this
     */
    public function setScenarioScript($scenario_script)
    {
        $this->container['scenario_script'] = $scenario_script;

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
     * @param string $modified The scenario editing UTC date in format: YYYY-MM-DD HH:mm:SS
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


