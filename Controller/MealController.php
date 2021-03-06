<?php

/**
 * MealController
 * PHP version 5
 *
 * @category Class
 * @package  CiliPica\Controller
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

namespace CiliPica\Controller;

use \Exception;
use JMS\Serializer\Exception\RuntimeException as SerializerRuntimeException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;
use CiliPica\Api\MealApiInterface;
use CiliPica\Model\ApiResponse;
use CiliPica\Model\Meal;

/**
 * MealController Class Doc Comment
 *
 * @category Class
 * @package  CiliPica\Controller
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class MealController extends Controller
{

    /**
     * Operation addMeal
     *
     * Add a new meal to the restaurant
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function addMealAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json', 'application/xml'];
        $inputFormat = $request->headers->has('Content-Type')?$request->headers->get('Content-Type'):$consumes[0];
        if (!in_array($inputFormat, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

        // Handle authentication
        // Authentication 'api_key' required
        // Set key with prefix in header
        $securityapi_key = $request->headers->get('api_key');

        // Read out all input parameter values into variables
        $body = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $body = $this->deserialize($body, 'CiliPica\Model\Meal', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("CiliPica\Model\Meal");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($body, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'api_key'
            $handler->setapi_key($securityapi_key);
            
            // Make the call to the business logic
            $responseCode = 204;
            $responseHeaders = [];
            $result = $handler->addMeal($body, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 405:
                    $message = 'Invalid input';
                    break;
            }

            return new Response(
                '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation deleteMeal
     *
     * Deletes a meal
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function deleteMealAction(Request $request, $mealId)
    {
        // Handle authentication
        // Authentication 'api_key' required
        // Set key with prefix in header
        $securityapi_key = $request->headers->get('api_key');

        // Read out all input parameter values into variables
        $apiKey = $request->headers->get('api_key');

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $mealId = $this->deserialize($mealId, 'int', 'string');
            $apiKey = $this->deserialize($apiKey, 'string', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("int");
        $response = $this->validate($mealId, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($apiKey, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'api_key'
            $handler->setapi_key($securityapi_key);
            
            // Make the call to the business logic
            $responseCode = 204;
            $responseHeaders = [];
            $result = $handler->deleteMeal($mealId, $apiKey, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 400:
                    $message = 'Invalid ID supplied';
                    break;
                case 404:
                    $message = 'Meal not found';
                    break;
            }

            return new Response(
                '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation findMealsByStatus
     *
     * Finds Meals by status
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function findMealsByStatusAction(Request $request)
    {
        // Figure out what data format to return to the client
        $produces = ['application/xml', 'application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'api_key' required
        // Set key with prefix in header
        $securityapi_key = $request->headers->get('api_key');

        // Read out all input parameter values into variables
        $status = $request->query->get('status');

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $status = $this->deserialize($status, 'array<multi,string>', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\All([
            new Assert\Choice([ "available", "soldout" ])
        ]);
        $asserts[] = new Assert\All([
            new Assert\Type("string"),
        ]);
        $response = $this->validate($status, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'api_key'
            $handler->setapi_key($securityapi_key);
            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->findMealsByStatus($status, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'successful operation';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'successful operation';
                    break;
                case 400:
                    $message = 'Invalid status value';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation getMealById
     *
     * Find meal by ID
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function getMealByIdAction(Request $request, $mealId)
    {
        // Figure out what data format to return to the client
        $produces = ['application/xml', 'application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'api_key' required
        // Set key with prefix in header
        $securityapi_key = $request->headers->get('api_key');

        // Read out all input parameter values into variables

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $mealId = $this->deserialize($mealId, 'int', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("int");
        $response = $this->validate($mealId, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'api_key'
            $handler->setapi_key($securityapi_key);
            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->getMealById($mealId, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'successful operation';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'successful operation';
                    break;
                case 400:
                    $message = 'Invalid ID supplied';
                    break;
                case 404:
                    $message = 'Meal not found';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation updateMeal
     *
     * Update an existing meal
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function updateMealAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json', 'application/xml'];
        $inputFormat = $request->headers->has('Content-Type')?$request->headers->get('Content-Type'):$consumes[0];
        if (!in_array($inputFormat, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

        // Handle authentication
        // Authentication 'api_key' required
        // Set key with prefix in header
        $securityapi_key = $request->headers->get('api_key');

        // Read out all input parameter values into variables
        $body = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $body = $this->deserialize($body, 'CiliPica\Model\Meal', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("CiliPica\Model\Meal");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($body, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'api_key'
            $handler->setapi_key($securityapi_key);
            
            // Make the call to the business logic
            $responseCode = 204;
            $responseHeaders = [];
            $result = $handler->updateMeal($body, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 400:
                    $message = 'Invalid ID supplied';
                    break;
                case 404:
                    $message = 'Meal not found';
                    break;
                case 405:
                    $message = 'Validation exception';
                    break;
            }

            return new Response(
                '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation updateMealWithForm
     *
     * Updates a meal in the restaurant with form data
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function updateMealWithFormAction(Request $request, $mealId)
    {
        // Handle authentication
        // Authentication 'api_key' required
        // Set key with prefix in header
        $securityapi_key = $request->headers->get('api_key');

        // Read out all input parameter values into variables
        $name = $request->request->get('name');
        $status = $request->request->get('status');

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $mealId = $this->deserialize($mealId, 'int', 'string');
            $name = $this->deserialize($name, 'string', 'string');
            $status = $this->deserialize($status, 'string', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("int");
        $response = $this->validate($mealId, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($name, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($status, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'api_key'
            $handler->setapi_key($securityapi_key);
            
            // Make the call to the business logic
            $responseCode = 204;
            $responseHeaders = [];
            $result = $handler->updateMealWithForm($mealId, $name, $status, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 405:
                    $message = 'Invalid input';
                    break;
            }

            return new Response(
                '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation uploadFile
     *
     * uploads an image
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function uploadFileAction(Request $request, $mealId)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'api_key' required
        // Set key with prefix in header
        $securityapi_key = $request->headers->get('api_key');

        // Read out all input parameter values into variables
        $additionalMetadata = $request->request->get('additionalMetadata');
        $file = $request->files->get('file');

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $mealId = $this->deserialize($mealId, 'int', 'string');
            $additionalMetadata = $this->deserialize($additionalMetadata, 'string', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("int");
        $response = $this->validate($mealId, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($additionalMetadata, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\File();
        $response = $this->validate($file, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'api_key'
            $handler->setapi_key($securityapi_key);
            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->uploadFile($mealId, $additionalMetadata, $file, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'successful operation';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'successful operation';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Returns the handler for this API controller.
     * @return MealApiInterface
     */
    public function getApiHandler()
    {
        return $this->apiServer->getApiHandler('meal');
    }
}
