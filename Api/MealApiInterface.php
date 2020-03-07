<?php
/**
 * MealApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Čili Pica Restaurant
 *
 * This server allow client to browse available food and order it.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: nerijus@eimanavicius.lt
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use OpenAPI\Server\Model\ApiResponse;
use OpenAPI\Server\Model\Meal;

/**
 * MealApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface MealApiInterface
{

    /**
     * Sets authentication method api_key
     *
     * @param string $value Value of the api_key authentication method.
     *
     * @return void
     */
    public function setapi_key($value);

    /**
     * Operation addMeal
     *
     * Add a new meal to the restaurant
     *
     * @param  OpenAPI\Server\Model\Meal $body  Meal object that needs to be added to the restaurant (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function addMeal(Meal $body, &$responseCode, array &$responseHeaders);

    /**
     * Operation deleteMeal
     *
     * Deletes a meal
     *
     * @param  int $mealId  Meal id to delete (required)
     * @param  string $apiKey   (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function deleteMeal($mealId, $apiKey = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation findMealsByStatus
     *
     * Finds Meals by status
     *
     * @param  string[] $status  Status values that need to be considered for filter (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Meal[]
     *
     */
    public function findMealsByStatus(array $status, &$responseCode, array &$responseHeaders);

    /**
     * Operation getMealById
     *
     * Find meal by ID
     *
     * @param  int $mealId  ID of meal to return (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\Meal
     *
     */
    public function getMealById($mealId, &$responseCode, array &$responseHeaders);

    /**
     * Operation updateMeal
     *
     * Update an existing meal
     *
     * @param  OpenAPI\Server\Model\Meal $body  Meal object that needs to be added to the restaurant (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function updateMeal(Meal $body, &$responseCode, array &$responseHeaders);

    /**
     * Operation updateMealWithForm
     *
     * Updates a meal in the restaurant with form data
     *
     * @param  int $mealId  ID of meal that needs to be updated (required)
     * @param  string $name  Updated name of the meal (optional)
     * @param  string $status  Updated status of the meal (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function updateMealWithForm($mealId, $name = null, $status = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation uploadFile
     *
     * uploads an image
     *
     * @param  int $mealId  ID of meal to update (required)
     * @param  string $additionalMetadata  Additional data to pass to server (optional)
     * @param  UploadedFile $file  file to upload (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\ApiResponse
     *
     */
    public function uploadFile($mealId, $additionalMetadata = null, UploadedFile $file = null, &$responseCode, array &$responseHeaders);
}