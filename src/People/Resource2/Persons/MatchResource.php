<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource2\Persons;

final class MatchResource extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /people/2/persons/match [operationId: match-people-ids] */
    /**
     * Match profiles
     *
     * Use this method to match a list of identities against existing person profiles in People. For each successfully matched identity the internal ID of the person profile will be returned.  Duplicate identities will fetch a single profile reference.
     */
    public static function post(\InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\MatchRequest $payload): \InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\MatchResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource2\Persons\MatchResource::class)->post($payload);
    }
}
