<?php
/**
 * UserApiInterface
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
use OpenAPI\Server\Model\User;

/**
 * UserApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface UserApiInterface
{

    /**
     * Operation createUser
     *
     * Create user
     *
     * @param  OpenAPI\Server\Model\User $body  Created user object (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function createUser(User $body, &$responseCode, array &$responseHeaders);

    /**
     * Operation deleteUser
     *
     * Delete user
     *
     * @param  string $username  The name that needs to be deleted (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function deleteUser($username, &$responseCode, array &$responseHeaders);

    /**
     * Operation getUserByName
     *
     * Get user by user name
     *
     * @param  string $username  The name that needs to be fetched. Use user1 for testing. (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\User
     *
     */
    public function getUserByName($username, &$responseCode, array &$responseHeaders);

    /**
     * Operation loginUser
     *
     * Logs user into the system
     *
     * @param  string $username  The user name for login (required)
     * @param  string $password  The password for login in clear text (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return string
     *
     */
    public function loginUser($username, $password, &$responseCode, array &$responseHeaders);

    /**
     * Operation logoutUser
     *
     * Logs out current logged in user session
     *
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function logoutUser(&$responseCode, array &$responseHeaders);

    /**
     * Operation updateUser
     *
     * Updated user
     *
     * @param  string $username  name that need to be updated (required)
     * @param  OpenAPI\Server\Model\User $body  Updated user object (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function updateUser($username, User $body, &$responseCode, array &$responseHeaders);
}
