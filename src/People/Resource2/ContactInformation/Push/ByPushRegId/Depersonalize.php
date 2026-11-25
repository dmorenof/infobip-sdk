<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2\ContactInformation\Push\ByPushRegId;

final class Depersonalize extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /people/2/contactInformation/push/{pushRegId}/depersonalize [operationId: depersonalize-push-instance] */
    /**
     * Depersonalize push instance
     *
     * You can depersonalize a device to detach it from a current person profile so that the device won’t receive messages when targeted by any of the person attributes
     */
    public static function post(string $pushRegId, \InfobipSDK\PostParams\People\Resource2\ContactInformation\Push\ByPushRegId\Depersonalize $params): void
    {
        self::client()->resource(\InfobipSDK\Resources\People\Resource2\ContactInformation\Push\ByPushRegId\Depersonalize::class)->post($pushRegId, $params);
    }

}
