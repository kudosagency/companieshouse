<?php
/**
 * Companies House controller
 *
 * @package trevsewell/companieshouse
 * @author Trevor Sewell <trev@kudos.agency>
 */
namespace Trevsewell\CompaniesHouse\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class CompaniesHouse
{
    protected $client;

    /**
     * Constructor
     *
     * Get config and and create new api
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('companieshouse.endpoint'),
            'auth'     => [config('companieshouse.key'), '']
        ]);
    }

    /**
     * Overload methods
     *
     * @param  string $name Method
     * @param  array  $arguments
     * @return object
     */
    public function __call($name, array $arguments)
    {
        try {
            $response = call_user_func_array([$this->client, $name], $arguments);
        }
        catch (ClientException $e) {
            $response = $e->getResponse();
        }

        return json_decode(
            $response->getBody()->getContents()
        );
    }

    /**
     * Overload static methods for facade
     *
     * @param  string $name
     * @param  array  $arguments
     * @return object
     */
    public static function __callStatic(string $name, array $arguments)
    {
        $client = new Client([
            'base_uri' => config('companieshouse.endpoint'),
            'auth' => [config('companieshouse.key'), '']
        ]);

        try {
            $response = call_user_func_array([$client, $name], $arguments);
        }
        catch (ClientException $e) {
            $response = $e->getResponse();
        }

        return json_decode(
            $response->getBody()->getContents()
        );
    }
}
