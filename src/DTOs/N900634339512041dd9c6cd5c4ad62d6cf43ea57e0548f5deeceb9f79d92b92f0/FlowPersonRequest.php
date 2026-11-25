<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * FlowPersonRequest
 *
 * Contains the data used for person creation (if it does not exist) or partial update (if it exists)
 * Example: {"personData":{"externalId":"1","firstName":"Jane","lastName":"Smith","address":"67 Farringdon Road","city":"London","country":"United Kingdom","gender":"FEMALE","birthDate":"1966-01-15","middleName":"Janie","profilePicture":"http://profile.com","tags":["VIP Customers","New Customers"],"customAttributes":{"Contract Expiry":"2018-06-01","Company":"Acme"},"contactInformation":{"phone":[{"number":"41793026727"},{"number":"41793026728"}],"email":[{"address":"jane&#64;acme.com"},{"address":"janesmith&#64;acme.com"}]}},"flowVariables":{"orderDate":"2021-09-01","orderDetails":"Extended Weight, Discount","orderNumber":1234567}}
 */
final class FlowPersonRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'personData',
    ];

    public ?\InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\FlowPersonRequest\FlowVariablesMap $flowVariables;
    public ?\InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\FlowPersonRequest\PersonDataDTO $personData;
}
