<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource3\Segments\BySegmentId;

final class Persons extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /people/3/segments/{segmentId}/persons [operationId: get-segment-persons] */
    /**
     * Get persons in a segment
     *
     * Use this method to get persons in a segment by ID.
     * Documentation: https://www.infobip.com/docs/people/manage-audience#segments
     */
    public static function get(int $segmentId, ?\InfobipSDK\GetParams\People\Resource3\Segments\BySegmentId\Persons $params = null): \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\PagePersonV3
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Segments\BySegmentId\Persons::class)->get($segmentId, $params);
    }

}
