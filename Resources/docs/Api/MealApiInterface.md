# OpenAPI\Server\Api\MealApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMeal**](MealApiInterface.md#addMeal) | **POST** /meal | Add a new meal to the restaurant
[**deleteMeal**](MealApiInterface.md#deleteMeal) | **DELETE** /meal/{mealId} | Deletes a meal
[**findMealsByStatus**](MealApiInterface.md#findMealsByStatus) | **GET** /meal/findByStatus | Finds Meals by status
[**getMealById**](MealApiInterface.md#getMealById) | **GET** /meal/{mealId} | Find meal by ID
[**updateMeal**](MealApiInterface.md#updateMeal) | **PUT** /meal | Update an existing meal
[**updateMealWithForm**](MealApiInterface.md#updateMealWithForm) | **POST** /meal/{mealId} | Updates a meal in the restaurant with form data
[**uploadFile**](MealApiInterface.md#uploadFile) | **POST** /meal/{mealId}/uploadImage | uploads an image


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.meal:
        class: Acme\MyBundle\Api\MealApi
        tags:
            - { name: "open_api_server.api", api: "meal" }
    # ...
```

## **addMeal**
> addMeal($body)

Add a new meal to the restaurant

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/MealApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\MealApiInterface;

class MealApi implements MealApiInterface
{

    /**
     * Configure API key authorization: api_key
     */
    public function setapi_key($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of MealApiInterface#addMeal
     */
    public function addMeal(Meal $body)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**OpenAPI\Server\Model\Meal**](../Model/Meal.md)| Meal object that needs to be added to the restaurant |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteMeal**
> deleteMeal($mealId, $apiKey)

Deletes a meal

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/MealApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\MealApiInterface;

class MealApi implements MealApiInterface
{

    /**
     * Configure API key authorization: api_key
     */
    public function setapi_key($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of MealApiInterface#deleteMeal
     */
    public function deleteMeal($mealId, $apiKey = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mealId** | **int**| Meal id to delete |
 **apiKey** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **findMealsByStatus**
> OpenAPI\Server\Model\Meal findMealsByStatus($status)

Finds Meals by status

Multiple status values can be provided with comma separated strings

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/MealApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\MealApiInterface;

class MealApi implements MealApiInterface
{

    /**
     * Configure API key authorization: api_key
     */
    public function setapi_key($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of MealApiInterface#findMealsByStatus
     */
    public function findMealsByStatus(array $status)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**string**](../Model/string.md)| Status values that need to be considered for filter |

### Return type

[**OpenAPI\Server\Model\Meal**](../Model/Meal.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getMealById**
> OpenAPI\Server\Model\Meal getMealById($mealId)

Find meal by ID

Returns a single meal

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/MealApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\MealApiInterface;

class MealApi implements MealApiInterface
{

    /**
     * Configure API key authorization: api_key
     */
    public function setapi_key($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of MealApiInterface#getMealById
     */
    public function getMealById($mealId)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mealId** | **int**| ID of meal to return |

### Return type

[**OpenAPI\Server\Model\Meal**](../Model/Meal.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateMeal**
> updateMeal($body)

Update an existing meal

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/MealApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\MealApiInterface;

class MealApi implements MealApiInterface
{

    /**
     * Configure API key authorization: api_key
     */
    public function setapi_key($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of MealApiInterface#updateMeal
     */
    public function updateMeal(Meal $body)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**OpenAPI\Server\Model\Meal**](../Model/Meal.md)| Meal object that needs to be added to the restaurant |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateMealWithForm**
> updateMealWithForm($mealId, $name, $status)

Updates a meal in the restaurant with form data

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/MealApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\MealApiInterface;

class MealApi implements MealApiInterface
{

    /**
     * Configure API key authorization: api_key
     */
    public function setapi_key($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of MealApiInterface#updateMealWithForm
     */
    public function updateMealWithForm($mealId, $name = null, $status = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mealId** | **int**| ID of meal that needs to be updated |
 **name** | **string**| Updated name of the meal | [optional]
 **status** | **string**| Updated status of the meal | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **uploadFile**
> OpenAPI\Server\Model\ApiResponse uploadFile($mealId, $additionalMetadata, $file)

uploads an image

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/MealApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\MealApiInterface;

class MealApi implements MealApiInterface
{

    /**
     * Configure API key authorization: api_key
     */
    public function setapi_key($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of MealApiInterface#uploadFile
     */
    public function uploadFile($mealId, $additionalMetadata = null, UploadedFile $file = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mealId** | **int**| ID of meal to update |
 **additionalMetadata** | **string**| Additional data to pass to server | [optional]
 **file** | **UploadedFile****UploadedFile**| file to upload | [optional]

### Return type

[**OpenAPI\Server\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

