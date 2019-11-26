<?php
/**
 * ManagingSkillsApi
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

namespace Voximplant\Api;

use \Voximplant\Configuration;
use \Voximplant\ApiClient;
use \Voximplant\ApiException;
use \Voximplant\ObjectSerializer;

/**
 * ManagingSkillsApi Class Doc Comment
 *
 * @category Class
 * @package  Voximplant
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManagingSkillsApi
{

    /**
     * API Client
     *
     * @var \Voximplant\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Voximplant\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Voximplant\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.voximplant.com/platform_api/');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Voximplant\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Voximplant\ApiClient $apiClient set the API client
     *
     * @return ManagingSkillsApi
     */
    public function setApiClient(\Voximplant\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addSkill
     *
     * 
     *
     * @param string $skill_name The ACD operator skill name. The length must be less than 512. (required)
     * @return \Voximplant\Model\AddSkillAPIResponse
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function addSkill($skill_name)
    {
        list($response) = $this->addSkillWithHttpInfo($skill_name);
        return $response;
    }

    /**
     * Operation addSkillWithHttpInfo
     *
     * 
     *
     * @param string $skill_name The ACD operator skill name. The length must be less than 512. (required)
     * @return Array of \Voximplant\Model\AddSkillAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function addSkillWithHttpInfo($skill_name)
    {
        // verify the required parameter 'skill_name' is set
        if ($skill_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $skill_name when calling addSkill');
        }
        // parse inputs
        $resourcePath = "/AddSkill";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($skill_name !== null) {
            $formParams['skill_name'] = $this->apiClient->getSerializer()->toFormValue($skill_name);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Voximplant\Model\AddSkillAPIResponse',
                '/AddSkill'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Voximplant\Model\AddSkillAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Voximplant\Model\AddSkillAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation bindSkill
     *
     * 
     *
     * @param string $skill_id The skill ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $skill_name Can be used instead of &lt;b&gt;skill_id&lt;/b&gt;. The skill name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $user_id The user ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $user_name The user name that can be used instead of &lt;b&gt;user_id&lt;/b&gt;. The user name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $acd_queue_id The ACD queue ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $acd_queue_name The ACD queue name that can be used instead of &lt;b&gt;acd_queue_id&lt;/b&gt;. The ACD queue name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param bool $bind Bind or unbind? (optional)
     * @return \Voximplant\Model\ActivateCallerIDAPIResponse
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function bindSkill($skill_id = null, $skill_name = null, $user_id = null, $user_name = null, $acd_queue_id = null, $acd_queue_name = null, $bind = null)
    {
        list($response) = $this->bindSkillWithHttpInfo($skill_id, $skill_name, $user_id, $user_name, $acd_queue_id, $acd_queue_name, $bind);
        return $response;
    }

    /**
     * Operation bindSkillWithHttpInfo
     *
     * 
     *
     * @param string $skill_id The skill ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $skill_name Can be used instead of &lt;b&gt;skill_id&lt;/b&gt;. The skill name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $user_id The user ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $user_name The user name that can be used instead of &lt;b&gt;user_id&lt;/b&gt;. The user name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $acd_queue_id The ACD queue ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $acd_queue_name The ACD queue name that can be used instead of &lt;b&gt;acd_queue_id&lt;/b&gt;. The ACD queue name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param bool $bind Bind or unbind? (optional)
     * @return Array of \Voximplant\Model\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function bindSkillWithHttpInfo($skill_id = null, $skill_name = null, $user_id = null, $user_name = null, $acd_queue_id = null, $acd_queue_name = null, $bind = null)
    {
        // parse inputs
        $resourcePath = "/BindSkill";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($skill_id !== null) {
            $formParams['skill_id'] = $this->apiClient->getSerializer()->toFormValue($skill_id);
        }
        // form params
        if ($skill_name !== null) {
            $formParams['skill_name'] = $this->apiClient->getSerializer()->toFormValue($skill_name);
        }
        // form params
        if ($user_id !== null) {
            $formParams['user_id'] = $this->apiClient->getSerializer()->toFormValue($user_id);
        }
        // form params
        if ($user_name !== null) {
            $formParams['user_name'] = $this->apiClient->getSerializer()->toFormValue($user_name);
        }
        // form params
        if ($acd_queue_id !== null) {
            $formParams['acd_queue_id'] = $this->apiClient->getSerializer()->toFormValue($acd_queue_id);
        }
        // form params
        if ($acd_queue_name !== null) {
            $formParams['acd_queue_name'] = $this->apiClient->getSerializer()->toFormValue($acd_queue_name);
        }
        // form params
        if ($bind !== null) {
            $formParams['bind'] = $this->apiClient->getSerializer()->toFormValue($bind);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Voximplant\Model\ActivateCallerIDAPIResponse',
                '/BindSkill'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Voximplant\Model\ActivateCallerIDAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Voximplant\Model\ActivateCallerIDAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation delSkill
     *
     * 
     *
     * @param float $skill_id The skill ID. (optional)
     * @param string $skill_name The skill name that can be used instead of &lt;b&gt;skill_id&lt;/b&gt;. (optional)
     * @return \Voximplant\Model\ActivateCallerIDAPIResponse
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function delSkill($skill_id = null, $skill_name = null)
    {
        list($response) = $this->delSkillWithHttpInfo($skill_id, $skill_name);
        return $response;
    }

    /**
     * Operation delSkillWithHttpInfo
     *
     * 
     *
     * @param float $skill_id The skill ID. (optional)
     * @param string $skill_name The skill name that can be used instead of &lt;b&gt;skill_id&lt;/b&gt;. (optional)
     * @return Array of \Voximplant\Model\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function delSkillWithHttpInfo($skill_id = null, $skill_name = null)
    {
        // parse inputs
        $resourcePath = "/DelSkill";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($skill_id !== null) {
            $formParams['skill_id'] = $this->apiClient->getSerializer()->toFormValue($skill_id);
        }
        // form params
        if ($skill_name !== null) {
            $formParams['skill_name'] = $this->apiClient->getSerializer()->toFormValue($skill_name);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Voximplant\Model\ActivateCallerIDAPIResponse',
                '/DelSkill'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Voximplant\Model\ActivateCallerIDAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Voximplant\Model\ActivateCallerIDAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSkills
     *
     * 
     *
     * @param float $skill_id The skill ID to filter. (optional)
     * @param string $skill_name The skill name part to filter. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return \Voximplant\Model\GetSkillsAPIResponse
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function getSkills($skill_id = null, $skill_name = null, $count = null, $offset = null)
    {
        list($response) = $this->getSkillsWithHttpInfo($skill_id, $skill_name, $count, $offset);
        return $response;
    }

    /**
     * Operation getSkillsWithHttpInfo
     *
     * 
     *
     * @param float $skill_id The skill ID to filter. (optional)
     * @param string $skill_name The skill name part to filter. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return Array of \Voximplant\Model\GetSkillsAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function getSkillsWithHttpInfo($skill_id = null, $skill_name = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/GetSkills";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($skill_id !== null) {
            $formParams['skill_id'] = $this->apiClient->getSerializer()->toFormValue($skill_id);
        }
        // form params
        if ($skill_name !== null) {
            $formParams['skill_name'] = $this->apiClient->getSerializer()->toFormValue($skill_name);
        }
        // form params
        if ($count !== null) {
            $formParams['count'] = $this->apiClient->getSerializer()->toFormValue($count);
        }
        // form params
        if ($offset !== null) {
            $formParams['offset'] = $this->apiClient->getSerializer()->toFormValue($offset);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Voximplant\Model\GetSkillsAPIResponse',
                '/GetSkills'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Voximplant\Model\GetSkillsAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Voximplant\Model\GetSkillsAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setSkillInfo
     *
     * 
     *
     * @param string $new_skill_name The new skill name. The length must be less than 512. (required)
     * @param float $skill_id The skill ID. (optional)
     * @param string $skill_name The skill name that can be used instead of &lt;b&gt;skill_id&lt;/b&gt;. (optional)
     * @return \Voximplant\Model\ActivateCallerIDAPIResponse
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function setSkillInfo($new_skill_name, $skill_id = null, $skill_name = null)
    {
        list($response) = $this->setSkillInfoWithHttpInfo($new_skill_name, $skill_id, $skill_name);
        return $response;
    }

    /**
     * Operation setSkillInfoWithHttpInfo
     *
     * 
     *
     * @param string $new_skill_name The new skill name. The length must be less than 512. (required)
     * @param float $skill_id The skill ID. (optional)
     * @param string $skill_name The skill name that can be used instead of &lt;b&gt;skill_id&lt;/b&gt;. (optional)
     * @return Array of \Voximplant\Model\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Voximplant\ApiException on non-2xx response
     */
    public function setSkillInfoWithHttpInfo($new_skill_name, $skill_id = null, $skill_name = null)
    {
        // verify the required parameter 'new_skill_name' is set
        if ($new_skill_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $new_skill_name when calling setSkillInfo');
        }
        // parse inputs
        $resourcePath = "/SetSkillInfo";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($skill_id !== null) {
            $formParams['skill_id'] = $this->apiClient->getSerializer()->toFormValue($skill_id);
        }
        // form params
        if ($skill_name !== null) {
            $formParams['skill_name'] = $this->apiClient->getSerializer()->toFormValue($skill_name);
        }
        // form params
        if ($new_skill_name !== null) {
            $formParams['new_skill_name'] = $this->apiClient->getSerializer()->toFormValue($new_skill_name);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Voximplant\Model\ActivateCallerIDAPIResponse',
                '/SetSkillInfo'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Voximplant\Model\ActivateCallerIDAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Voximplant\Model\ActivateCallerIDAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
