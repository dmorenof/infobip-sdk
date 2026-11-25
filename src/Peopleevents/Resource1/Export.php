<?php

declare(strict_types=1);

namespace InfobipSDK\Peopleevents\Resource1;

final class Export extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /peopleevents/1/export [operationId: create-events-export-request] */
    /**
     * Submit event export request
     *
     * Events export allows you to asynchronously export People Events data to a compressed file or multiple files in your AWS S3 bucket.
     *
     * Refer to [product documentation](https://www.infobip.com/docs/people/events#events-in-external-systems) for detailed information on configuring AWS S3 for export, export file format and event data schema.
     *
     * **Throttling**
     *
     * You can have maximum of 72 hours worth of export requests in progress at one time.
     *
     *
     */
    public static function post(\InfobipSDK\DTOs\A1a8ff0e2d4e8815c87f131be18d5198cdc635a778df6b963f0f0a4b59822f94\ExportRequestBody $payload): \InfobipSDK\DTOs\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095\ExportResponseBody
    {
        return self::client()->resource(\InfobipSDK\Resources\Peopleevents\Resource1\Export::class)->post($payload);
    }

    /** DELETE /peopleevents/1/export/{requestId} [operationId: cancel-events-export-request] */
    /**
     * Asynchronous cancellation of an event export request
     *
     * Requests asynchronous cancellation of a previously submitted data export request by the request ID.
     */
    public static function deleteByRequestId(string $requestId): mixed
    {
        return self::client()->resource(\InfobipSDK\Resources\Peopleevents\Resource1\Export::class)->deleteByRequestId($requestId);
    }
}
