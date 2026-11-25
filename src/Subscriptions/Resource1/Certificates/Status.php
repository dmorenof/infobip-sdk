<?php

declare(strict_types=1);

namespace InfobipSDK\Subscriptions\Resource1\Certificates;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /subscriptions/1/certificates/status [operationId: get-certificates-statuses-page] */
    /**
     * Get filtered certificates statuses page
     *
     * Returns a page containing certificates statuses by filtering condition.
     */
    public static function get(?\InfobipSDK\GetParams\Subscriptions\Resource1\Certificates\Status $params = null): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateStatusPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Certificates\Status::class)->get($params);
    }

    /** GET /subscriptions/1/certificates/status/{certificateId} [operationId: get-certificate-status] */
    /**
     * Get certificate status by identifier
     *
     * Returns a certificate status.
     */
    public static function getByCertificateId(string $certificateId): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Certificates\Status::class)->getByCertificateId($certificateId);
    }

}
