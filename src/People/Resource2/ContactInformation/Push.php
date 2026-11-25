<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2\ContactInformation;

final class Push extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /people/2/contactInformation/push/{pushRegId} [operationId: get-push-device-registration] */
    /**
     * Get push device registration
     *
     * Use this method to get device data
     */
    public static function getByPushRegId(string $pushRegId, \InfobipSDK\GetParams\People\Resource2\ContactInformation\Push\ByPushRegId $params): \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushApiInstance
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\ContactInformation\Push::class)->getByPushRegId($pushRegId, $params);
    }

    /** PATCH /people/2/contactInformation/push/{pushRegId} [operationId: update-push-device-registration] */
    /**
     * Update push device registration
     *
     * Use this method to update device data
     */
    public static function patchByPushRegId(string $pushRegId, \InfobipSDK\PatchParams\People\Resource2\ContactInformation\Push\ByPushRegId $params): \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushApiInstance
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\ContactInformation\Push::class)->patchByPushRegId($pushRegId, $params);
    }
}
