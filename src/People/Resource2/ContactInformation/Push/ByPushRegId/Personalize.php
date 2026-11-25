<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2\ContactInformation\Push\ByPushRegId;

final class Personalize extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /people/2/contactInformation/push/{pushRegId}/personalize [operationId: personalize-push-instance] */
    /**
     * Personalize push instance
     *
     * Each person can have Phone numbers, Emails or External ID. These fields are unique identifiers of a person on Infobip platform and provide a capability to personalize any push device registration with a person profile. The platform provides data grouping functions based on these parameters. For example, if two devices will try to save the same Phone number, then both of them will be collected under a single person. Phone number, Email and External ID are also widely used when targeting users with messages across different channels via Infobip platform.
     */
    public static function post(string $pushRegId, \InfobipSDK\PostParams\People\Resource2\ContactInformation\Push\ByPushRegId\Personalize $params): \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushUserPersonalizationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\ContactInformation\Push\ByPushRegId\Personalize::class)->post($pushRegId, $params);
    }

}
