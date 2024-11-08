<?php
/**
 * SearchBody
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
 * SearchBody Class Doc Comment
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SearchBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'query' => 'string',
        'isins' => 'string',
        'cusips' => 'string',
        'ciks' => 'string',
        'sedar_ids' => 'string',
        'ch_ids' => 'string',
        'symbols' => 'string',
        'sedols' => 'string',
        'sources' => 'string',
        'forms' => 'string',
        'gics' => 'string',
        'naics' => 'string',
        'exhibits' => 'string',
        'exchanges' => 'string',
        'countries' => 'string',
        'acts' => 'string',
        'caps' => 'string',
        'from_date' => 'string',
        'to_date' => 'string',
        'page' => 'string',
        'sort' => 'string',
        'highlighted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'query' => null,
        'isins' => null,
        'cusips' => null,
        'ciks' => null,
        'sedar_ids' => null,
        'ch_ids' => null,
        'symbols' => null,
        'sedols' => null,
        'sources' => null,
        'forms' => null,
        'gics' => null,
        'naics' => null,
        'exhibits' => null,
        'exchanges' => null,
        'countries' => null,
        'acts' => null,
        'caps' => null,
        'from_date' => null,
        'to_date' => null,
        'page' => null,
        'sort' => null,
        'highlighted' => null
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
        'query' => 'query',
        'isins' => 'isins',
        'cusips' => 'cusips',
        'ciks' => 'ciks',
        'sedar_ids' => 'sedarIds',
        'ch_ids' => 'chIds',
        'symbols' => 'symbols',
        'sedols' => 'sedols',
        'sources' => 'sources',
        'forms' => 'forms',
        'gics' => 'gics',
        'naics' => 'naics',
        'exhibits' => 'exhibits',
        'exchanges' => 'exchanges',
        'countries' => 'countries',
        'acts' => 'acts',
        'caps' => 'caps',
        'from_date' => 'fromDate',
        'to_date' => 'toDate',
        'page' => 'page',
        'sort' => 'sort',
        'highlighted' => 'highlighted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'query' => 'setQuery',
        'isins' => 'setIsins',
        'cusips' => 'setCusips',
        'ciks' => 'setCiks',
        'sedar_ids' => 'setSedarIds',
        'ch_ids' => 'setChIds',
        'symbols' => 'setSymbols',
        'sedols' => 'setSedols',
        'sources' => 'setSources',
        'forms' => 'setForms',
        'gics' => 'setGics',
        'naics' => 'setNaics',
        'exhibits' => 'setExhibits',
        'exchanges' => 'setExchanges',
        'countries' => 'setCountries',
        'acts' => 'setActs',
        'caps' => 'setCaps',
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'page' => 'setPage',
        'sort' => 'setSort',
        'highlighted' => 'setHighlighted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query' => 'getQuery',
        'isins' => 'getIsins',
        'cusips' => 'getCusips',
        'ciks' => 'getCiks',
        'sedar_ids' => 'getSedarIds',
        'ch_ids' => 'getChIds',
        'symbols' => 'getSymbols',
        'sedols' => 'getSedols',
        'sources' => 'getSources',
        'forms' => 'getForms',
        'gics' => 'getGics',
        'naics' => 'getNaics',
        'exhibits' => 'getExhibits',
        'exchanges' => 'getExchanges',
        'countries' => 'getCountries',
        'acts' => 'getActs',
        'caps' => 'getCaps',
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'page' => 'getPage',
        'sort' => 'getSort',
        'highlighted' => 'getHighlighted'
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
        $this->container['query'] = $data['query'] ?? null;
        $this->container['isins'] = $data['isins'] ?? null;
        $this->container['cusips'] = $data['cusips'] ?? null;
        $this->container['ciks'] = $data['ciks'] ?? null;
        $this->container['sedar_ids'] = $data['sedar_ids'] ?? null;
        $this->container['ch_ids'] = $data['ch_ids'] ?? null;
        $this->container['symbols'] = $data['symbols'] ?? null;
        $this->container['sedols'] = $data['sedols'] ?? null;
        $this->container['sources'] = $data['sources'] ?? null;
        $this->container['forms'] = $data['forms'] ?? null;
        $this->container['gics'] = $data['gics'] ?? null;
        $this->container['naics'] = $data['naics'] ?? null;
        $this->container['exhibits'] = $data['exhibits'] ?? null;
        $this->container['exchanges'] = $data['exchanges'] ?? null;
        $this->container['countries'] = $data['countries'] ?? null;
        $this->container['acts'] = $data['acts'] ?? null;
        $this->container['caps'] = $data['caps'] ?? null;
        $this->container['from_date'] = $data['from_date'] ?? null;
        $this->container['to_date'] = $data['to_date'] ?? null;
        $this->container['page'] = $data['page'] ?? null;
        $this->container['sort'] = $data['sort'] ?? null;
        $this->container['highlighted'] = $data['highlighted'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
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
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string $query Search query
     *
     * @return self
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets isins
     *
     * @return string|null
     */
    public function getIsins()
    {
        return $this->container['isins'];
    }

    /**
     * Sets isins
     *
     * @param string|null $isins List of isin to search, comma separated (Max: 50).
     *
     * @return self
     */
    public function setIsins($isins)
    {
        $this->container['isins'] = $isins;

        return $this;
    }

    /**
     * Gets cusips
     *
     * @return string|null
     */
    public function getCusips()
    {
        return $this->container['cusips'];
    }

    /**
     * Sets cusips
     *
     * @param string|null $cusips List of cusip to search, comma separated (Max: 50).
     *
     * @return self
     */
    public function setCusips($cusips)
    {
        $this->container['cusips'] = $cusips;

        return $this;
    }

    /**
     * Gets ciks
     *
     * @return string|null
     */
    public function getCiks()
    {
        return $this->container['ciks'];
    }

    /**
     * Sets ciks
     *
     * @param string|null $ciks List of SEC Center Index Key to search, comma separated (Max: 50).
     *
     * @return self
     */
    public function setCiks($ciks)
    {
        $this->container['ciks'] = $ciks;

        return $this;
    }

    /**
     * Gets sedar_ids
     *
     * @return string|null
     */
    public function getSedarIds()
    {
        return $this->container['sedar_ids'];
    }

    /**
     * Sets sedar_ids
     *
     * @param string|null $sedar_ids List of SEDAR issuer number to search, comma separated (Max: 50).
     *
     * @return self
     */
    public function setSedarIds($sedar_ids)
    {
        $this->container['sedar_ids'] = $sedar_ids;

        return $this;
    }

    /**
     * Gets ch_ids
     *
     * @return string|null
     */
    public function getChIds()
    {
        return $this->container['ch_ids'];
    }

    /**
     * Sets ch_ids
     *
     * @param string|null $ch_ids List of Companies House number to search, comma separated (Max: 50).
     *
     * @return self
     */
    public function setChIds($ch_ids)
    {
        $this->container['ch_ids'] = $ch_ids;

        return $this;
    }

    /**
     * Gets symbols
     *
     * @return string|null
     */
    public function getSymbols()
    {
        return $this->container['symbols'];
    }

    /**
     * Sets symbols
     *
     * @param string|null $symbols List of symbols to search, comma separated (Max: 50).
     *
     * @return self
     */
    public function setSymbols($symbols)
    {
        $this->container['symbols'] = $symbols;

        return $this;
    }

    /**
     * Gets sedols
     *
     * @return string|null
     */
    public function getSedols()
    {
        return $this->container['sedols'];
    }

    /**
     * Sets sedols
     *
     * @param string|null $sedols List of sedols to search, comma separated (Max: 50).
     *
     * @return self
     */
    public function setSedols($sedols)
    {
        $this->container['sedols'] = $sedols;

        return $this;
    }

    /**
     * Gets sources
     *
     * @return string|null
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     *
     * @param string|null $sources List of sources to search, comma separated (Max: 50). Look at <code>/filter</code> endpoint to see all available values.
     *
     * @return self
     */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;

        return $this;
    }

    /**
     * Gets forms
     *
     * @return string|null
     */
    public function getForms()
    {
        return $this->container['forms'];
    }

    /**
     * Sets forms
     *
     * @param string|null $forms List of forms to search, comma separated (Max: 50). Look at <code>/filter</code> endpoint to see all available values.
     *
     * @return self
     */
    public function setForms($forms)
    {
        $this->container['forms'] = $forms;

        return $this;
    }

    /**
     * Gets gics
     *
     * @return string|null
     */
    public function getGics()
    {
        return $this->container['gics'];
    }

    /**
     * Sets gics
     *
     * @param string|null $gics List of gics to search, comma separated (Max: 50). Look at <code>/filter</code> endpoint to see all available values.
     *
     * @return self
     */
    public function setGics($gics)
    {
        $this->container['gics'] = $gics;

        return $this;
    }

    /**
     * Gets naics
     *
     * @return string|null
     */
    public function getNaics()
    {
        return $this->container['naics'];
    }

    /**
     * Sets naics
     *
     * @param string|null $naics List of sources to search, comma separated (Max: 50). Look at <code>/filter</code> endpoint to see all available values.
     *
     * @return self
     */
    public function setNaics($naics)
    {
        $this->container['naics'] = $naics;

        return $this;
    }

    /**
     * Gets exhibits
     *
     * @return string|null
     */
    public function getExhibits()
    {
        return $this->container['exhibits'];
    }

    /**
     * Sets exhibits
     *
     * @param string|null $exhibits List of exhibits to search, comma separated (Max: 50). Look at <code>/filter</code> endpoint to see all available values.
     *
     * @return self
     */
    public function setExhibits($exhibits)
    {
        $this->container['exhibits'] = $exhibits;

        return $this;
    }

    /**
     * Gets exchanges
     *
     * @return string|null
     */
    public function getExchanges()
    {
        return $this->container['exchanges'];
    }

    /**
     * Sets exchanges
     *
     * @param string|null $exchanges List of exchanges to search, comma separated (Max: 50). Look at <code>/filter</code> endpoint to see all available values.
     *
     * @return self
     */
    public function setExchanges($exchanges)
    {
        $this->container['exchanges'] = $exchanges;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return string|null
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param string|null $countries List of sources to search, comma separated (Max: 50). Look at <code>/filter</code> endpoint to see all available values.
     *
     * @return self
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets acts
     *
     * @return string|null
     */
    public function getActs()
    {
        return $this->container['acts'];
    }

    /**
     * Sets acts
     *
     * @param string|null $acts List of SEC's exchanges act to search, comma separated. Look at <code>/filter</code> endpoint to see all available values.
     *
     * @return self
     */
    public function setActs($acts)
    {
        $this->container['acts'] = $acts;

        return $this;
    }

    /**
     * Gets caps
     *
     * @return string|null
     */
    public function getCaps()
    {
        return $this->container['caps'];
    }

    /**
     * Sets caps
     *
     * @param string|null $caps List of market capitalization to search, comma separated. Look at <code>/filter</code> endpoint to see all available values.
     *
     * @return self
     */
    public function setCaps($caps)
    {
        $this->container['caps'] = $caps;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return string|null
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param string|null $from_date Search from date in format: YYYY-MM-DD, default from the last 2 years
     *
     * @return self
     */
    public function setFromDate($from_date)
    {
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return string|null
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param string|null $to_date Search to date in format: YYYY-MM-DD, default to today
     *
     * @return self
     */
    public function setToDate($to_date)
    {
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets page
     *
     * @return string|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param string|null $page Use for pagination, default to page 1
     *
     * @return self
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return string|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param string|null $sort Sort result by, default: sortMostRecent. Look at <code>/filter</code> endpoint to see all available values.
     *
     * @return self
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets highlighted
     *
     * @return bool|null
     */
    public function getHighlighted()
    {
        return $this->container['highlighted'];
    }

    /**
     * Sets highlighted
     *
     * @param bool|null $highlighted Enable highlight in returned filings. If enabled, only return 10 results each time
     *
     * @return self
     */
    public function setHighlighted($highlighted)
    {
        $this->container['highlighted'] = $highlighted;

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


