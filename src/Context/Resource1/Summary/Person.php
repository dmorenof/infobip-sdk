<?php

declare(strict_types=1);

namespace InfobipSDK\Context\Resource1\Summary;

final class Person extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /context/1/summary/person/{personId} [operationId: get-person-summary] */
    /**
     * Get latest person summary
     *
     * Returns the latest summary for the person identified by personId, together with the latest value of each fact compiled across their interactions. Returns 404 when the person has no summary yet.
     */
    public static function getByPersonId(int $personId): \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\PersonSummaryApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Context\Resource1\Summary\Person::class)->getByPersonId($personId);
    }
}
