<?php
/**
 * CompanyEarningsQualityScoreData
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Finnhub API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Finnhub\Model;

use \ArrayAccess;
use \Finnhub\ObjectSerializer;

/**
 * CompanyEarningsQualityScoreData Class Doc Comment
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CompanyEarningsQualityScoreData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompanyEarningsQualityScoreData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'period' => 'string',
        'growth' => 'float',
        'profitability' => 'float',
        'cash_generation_capital_allocation' => 'float',
        'leverage' => 'float',
        'score' => 'float',
        'letter_score' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'period' => null,
        'growth' => 'float',
        'profitability' => 'float',
        'cash_generation_capital_allocation' => 'float',
        'leverage' => 'float',
        'score' => 'float',
        'letter_score' => null
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
        'period' => 'period',
        'growth' => 'growth',
        'profitability' => 'profitability',
        'cash_generation_capital_allocation' => 'cashGenerationCapitalAllocation',
        'leverage' => 'leverage',
        'score' => 'score',
        'letter_score' => 'letterScore'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'period' => 'setPeriod',
        'growth' => 'setGrowth',
        'profitability' => 'setProfitability',
        'cash_generation_capital_allocation' => 'setCashGenerationCapitalAllocation',
        'leverage' => 'setLeverage',
        'score' => 'setScore',
        'letter_score' => 'setLetterScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'period' => 'getPeriod',
        'growth' => 'getGrowth',
        'profitability' => 'getProfitability',
        'cash_generation_capital_allocation' => 'getCashGenerationCapitalAllocation',
        'leverage' => 'getLeverage',
        'score' => 'getScore',
        'letter_score' => 'getLetterScore'
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
        $this->container['period'] = $data['period'] ?? null;
        $this->container['growth'] = $data['growth'] ?? null;
        $this->container['profitability'] = $data['profitability'] ?? null;
        $this->container['cash_generation_capital_allocation'] = $data['cash_generation_capital_allocation'] ?? null;
        $this->container['leverage'] = $data['leverage'] ?? null;
        $this->container['score'] = $data['score'] ?? null;
        $this->container['letter_score'] = $data['letter_score'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets period
     *
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string|null $period Period
     *
     * @return self
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets growth
     *
     * @return float|null
     */
    public function getGrowth()
    {
        return $this->container['growth'];
    }

    /**
     * Sets growth
     *
     * @param float|null $growth Growth Score
     *
     * @return self
     */
    public function setGrowth($growth)
    {
        $this->container['growth'] = $growth;

        return $this;
    }

    /**
     * Gets profitability
     *
     * @return float|null
     */
    public function getProfitability()
    {
        return $this->container['profitability'];
    }

    /**
     * Sets profitability
     *
     * @param float|null $profitability Profitability Score
     *
     * @return self
     */
    public function setProfitability($profitability)
    {
        $this->container['profitability'] = $profitability;

        return $this;
    }

    /**
     * Gets cash_generation_capital_allocation
     *
     * @return float|null
     */
    public function getCashGenerationCapitalAllocation()
    {
        return $this->container['cash_generation_capital_allocation'];
    }

    /**
     * Sets cash_generation_capital_allocation
     *
     * @param float|null $cash_generation_capital_allocation Cash Generation and Capital Allocation
     *
     * @return self
     */
    public function setCashGenerationCapitalAllocation($cash_generation_capital_allocation)
    {
        $this->container['cash_generation_capital_allocation'] = $cash_generation_capital_allocation;

        return $this;
    }

    /**
     * Gets leverage
     *
     * @return float|null
     */
    public function getLeverage()
    {
        return $this->container['leverage'];
    }

    /**
     * Sets leverage
     *
     * @param float|null $leverage Leverage Score
     *
     * @return self
     */
    public function setLeverage($leverage)
    {
        $this->container['leverage'] = $leverage;

        return $this;
    }

    /**
     * Gets score
     *
     * @return float|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param float|null $score Total Score
     *
     * @return self
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets letter_score
     *
     * @return string|null
     */
    public function getLetterScore()
    {
        return $this->container['letter_score'];
    }

    /**
     * Sets letter_score
     *
     * @param string|null $letter_score Letter Score
     *
     * @return self
     */
    public function setLetterScore($letter_score)
    {
        $this->container['letter_score'] = $letter_score;

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

