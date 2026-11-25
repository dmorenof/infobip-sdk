<?php

declare(strict_types=1);

namespace InfobipSDK\Subscriptions\Resource1;

final class Certificates extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /subscriptions/1/certificates [operationId: get-certificates-details-page] */
    /**
     * Get filtered certificate details page
     *
     * Returns a page containing certificates details by filtering condition.
     */
    public static function get(?\InfobipSDK\GetParams\Subscriptions\Resource1\Certificates $params = null): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateDetailsPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Certificates::class)->get($params);
    }

    /** POST /subscriptions/1/certificates [operationId: upload-certificate] */
    /**
     * Upload certificate
     *
     * Upload the certificate Infobip will present for your webhook to verify Infobip when sending notification events.
     */
    public static function post(\InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateUploadRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Certificates::class)->post($payload);
    }

    /** DELETE /subscriptions/1/certificates/{certificateId} [operationId: delete-certificate] */
    /**
     * Delete certificate
     *
     * Deletes an existing certificate by a given identifier. Note, certificates cannot be deleted if linked to a Notification Profile.
     */
    public static function deleteByCertificateId(string $certificateId): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyCertificateResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Certificates::class)->deleteByCertificateId($certificateId);
    }

    /** GET /subscriptions/1/certificates/{certificateId} [operationId: get-certificate-details] */
    /**
     * Get certificate details by identifier
     *
     * Returns a certificate details.
     */
    public static function getByCertificateId(string $certificateId): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateDetailsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Subscriptions\Resource1\Certificates::class)->getByCertificateId($certificateId);
    }
}
