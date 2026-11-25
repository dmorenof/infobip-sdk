<?php

declare(strict_types=1);

namespace InfobipSDK\People\Resource3;

final class Segments extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /people/3/segments [operationId: get-segments] */
    /**
     * Get a list of segments
     *
     * Use this method to get a list of segments.
     * Documentation: https://www.infobip.com/docs/people/manage-audience#segments
     */
    public static function get(?\InfobipSDK\GetParams\People\Resource3\Segments $params = null): \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\PageSegmentResponseDto
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Segments::class)->get($params);
    }

    /** POST /people/3/segments [operationId: create-segment] */
    /**
     * Create a segment
     *
     * Use this method to create a segment.
     * Documentation: https://www.infobip.com/docs/people/manage-audience#segments
     */
    public static function post(\InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\SegmentCreateDto $payload): \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\SegmentResponseDto
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Segments::class)->post($payload);
    }

    /** DELETE /people/3/segments/{segmentId} [operationId: delete-segment] */
    /**
     * Delete a segment
     *
     * Use this method to delete a segment by ID.
     * Documentation: https://www.infobip.com/docs/people/manage-audience#segments
     */
    public static function deleteBySegmentId(int $segmentId): void
    {
        self::client()->resource(\InfobipSDK\Resources\People\Resource3\Segments::class)->deleteBySegmentId($segmentId);
    }

    /** GET /people/3/segments/{segmentId} [operationId: get-segment] */
    /**
     * Get a segment
     *
     * Use this method to get a segment by ID.
     * Documentation: https://www.infobip.com/docs/people/manage-audience#segments
     */
    public static function getBySegmentId(int $segmentId): \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\SegmentResponseDto
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Segments::class)->getBySegmentId($segmentId);
    }

    /** PUT /people/3/segments/{segmentId} [operationId: update-segment] */
    /**
     * Update a segment
     *
     * Use this method to update a segment.
     * Documentation: https://www.infobip.com/docs/people/manage-audience#segments
     */
    public static function putBySegmentId(int $segmentId, \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\SegmentUpdateDto $payload): \InfobipSDK\DTOs\D76a8e2b7d80b5cb0751e11a31b96eabeaf6b2ec1de2932507f7f2749e61e91c\SegmentResponseDto
    {
        return self::client()->resource(\InfobipSDK\Resources\People\Resource3\Segments::class)->putBySegmentId($segmentId, $payload);
    }

}
