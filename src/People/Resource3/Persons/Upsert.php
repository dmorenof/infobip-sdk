<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource3\Persons;

final class Upsert extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PATCH /people/3/persons/upsert [operationId: upsert-persons-partial] */
    /**
     * Batch partial people upsert
     *
     * Use this method to create or partially update person profiles by matching on identifiers such as external ID, email, or phone. If a match is identified, the existing profile is updated only with the provided data; any fields excluded from the request remain unchanged. If no match is identified, a new profile is created. The operation returns a status for each profile: CREATED, UPDATED, or NOT_MODIFIED. <br>**Notes:** <br>1. The batch size limit is 1000 persons. <br>2. Contact information (emails and phone numbers) in the request is checked only for formal validity. Ensure accuracy and absence of errors.
     */
    public static function patch(\InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\UpsertRequestDocsSchema $payload): \InfobipSDK\Responses\People\Resource3\Persons\Upsert\Patch
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Persons\Upsert::class)->patch($payload);
    }

    /** PUT /people/3/persons/upsert [operationId: upsert-persons-full] */
    /**
     * Batch full people upsert
     *
     * Use this method to create or fully replace person profiles by matching on identifiers such as external ID, email, or phone. If a match is identified, the existing profile is entirely replaced with the provided data; any fields excluded from the request will be cleared. If no match is identified, a new profile is created. The operation returns a status for each profile: CREATED, UPDATED, or NOT_MODIFIED.<br>**Notes:** <br>1. The batch size limit is 1000 persons. <br>2. Contact information (emails and phone numbers) in the request is checked only for formal validity. Ensure accuracy and absence of errors.
     */
    public static function put(\InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\UpsertRequestDocsSchema $payload): \InfobipSDK\Responses\People\Resource3\Persons\Upsert\Put
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Persons\Upsert::class)->put($payload);
    }

}
