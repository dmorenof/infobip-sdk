<?php

declare(strict_types=1);

namespace InfobipSDK\Context\Resource1\Memories;

final class Person extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /context/1/memories/person/{personId} [operationId: get-person-memories] */
    /**
     * Get person interaction memories
     *
     * Returns a paginated list of interaction memories recorded for the person identified by personId, each with its own topics and facts. Supports sorting via the `orderBy` and `direction` query parameters.
     */
    public static function getByPersonId(int $personId, ?\InfobipSDK\GetParams\Context\Resource1\Memories\Person\ByPersonId $params = null): \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionMemoryPageApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Context\Resource1\Memories\Person::class)->getByPersonId($personId, $params);
    }
}
