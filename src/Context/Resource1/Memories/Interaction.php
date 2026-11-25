<?php

declare(strict_types=1);

namespace InfobipSDK\Context\Resource1\Memories;

final class Interaction extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /context/1/memories/interaction/{interactionId} [operationId: get-interaction-memory] */
    /**
     * Get interaction memory
     *
     * Returns the interaction memory for the given interactionId within the calling account, including its topics and facts. Returns 404 if no such interaction memory exists.
     */
    public static function getByInteractionId(string $interactionId): \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionMemoryApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Context\Resource1\Memories\Interaction::class)->getByInteractionId($interactionId);
    }

}
