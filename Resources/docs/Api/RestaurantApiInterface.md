# CiliPica\Api\RestaurantApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrder**](RestaurantApiInterface.md#deleteOrder) | **DELETE** /restaurant/order/{orderId} | Delete purchase order by ID
[**getMenu**](RestaurantApiInterface.md#getMenu) | **GET** /restaurant/menu | Returns only available meals
[**getOrderById**](RestaurantApiInterface.md#getOrderById) | **GET** /restaurant/order/{orderId} | Find purchase order by ID
[**placeOrder**](RestaurantApiInterface.md#placeOrder) | **POST** /restaurant/order | Place an order for a meal


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.restaurant:
        class: Acme\MyBundle\Api\RestaurantApi
        tags:
            - { name: "open_api_server.api", api: "restaurant" }
    # ...
```

## **deleteOrder**
> deleteOrder($orderId)

Delete purchase order by ID

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/RestaurantApiInterface.php

namespace Acme\MyBundle\Api;

use CiliPica\Api\RestaurantApiInterface;

class RestaurantApi implements RestaurantApiInterface
{

    // ...

    /**
     * Implementation of RestaurantApiInterface#deleteOrder
     */
    public function deleteOrder($orderId)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| ID of the order that needs to be deleted |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getMenu**
> CiliPica\Model\Meal getMenu()

Returns only available meals

Returns an array of meals

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/RestaurantApiInterface.php

namespace Acme\MyBundle\Api;

use CiliPica\Api\RestaurantApiInterface;

class RestaurantApi implements RestaurantApiInterface
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
     * Implementation of RestaurantApiInterface#getMenu
     */
    public function getMenu()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**CiliPica\Model\Meal**](../Model/Meal.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getOrderById**
> CiliPica\Model\Order getOrderById($orderId)

Find purchase order by ID

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/RestaurantApiInterface.php

namespace Acme\MyBundle\Api;

use CiliPica\Api\RestaurantApiInterface;

class RestaurantApi implements RestaurantApiInterface
{

    // ...

    /**
     * Implementation of RestaurantApiInterface#getOrderById
     */
    public function getOrderById($orderId)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| ID of meal that needs to be fetched |

### Return type

[**CiliPica\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **placeOrder**
> CiliPica\Model\Order placeOrder($body)

Place an order for a meal

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/RestaurantApiInterface.php

namespace Acme\MyBundle\Api;

use CiliPica\Api\RestaurantApiInterface;

class RestaurantApi implements RestaurantApiInterface
{

    // ...

    /**
     * Implementation of RestaurantApiInterface#placeOrder
     */
    public function placeOrder(Order $body)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**CiliPica\Model\Order**](../Model/Order.md)| order placed for purchasing the meal |

### Return type

[**CiliPica\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

