<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Subscriptions\Resource1;

final class Certificates extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/subscriptions/1/certificates',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\CertificateDetailsPage',
    ];

    /**
     * Get filtered certificate details page
     *
     * Returns a page containing certificates details by filtering condition.
     */
    public function get(?\InfobipSDK\GetParams\Subscriptions\Resource1\Certificates $params = null): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateDetailsPage
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateDetailsPage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/subscriptions/1/certificates',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\CertificateStatusResponse',
        'responseHeaders' => [
            201 => [
                'Location' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\CertificateUploadRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Upload certificate
     *
     * Upload the certificate Infobip will present for your webhook to verify Infobip when sending notification events.
     */
    public function post(\InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateUploadRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateStatusResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateStatusResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_CERTIFICATE_ID = [
        'method' => 'DELETE',
        'path' => '/subscriptions/1/certificates/{certificateId}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\IdOnlyCertificateResponse',
        'validation' => [
            'certificateId' => [
                'minLength' => 1,
                'maxLength' => 255,
            ],
        ],
    ];

    /**
     * Delete certificate
     *
     * Deletes an existing certificate by a given identifier. Note, certificates cannot be deleted if linked to a Notification Profile.
     */
    public function deleteByCertificateId(string $certificateId): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyCertificateResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyCertificateResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_CERTIFICATE_ID), path: ['certificateId' => $certificateId]);
        return $result;
    }

    private const array GET_BY_CERTIFICATE_ID = [
        'method' => 'GET',
        'path' => '/subscriptions/1/certificates/{certificateId}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\CertificateDetailsResponse',
        'validation' => [
            'certificateId' => [
                'minLength' => 1,
                'maxLength' => 255,
            ],
        ],
    ];

    /**
     * Get certificate details by identifier
     *
     * Returns a certificate details.
     */
    public function getByCertificateId(string $certificateId): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateDetailsResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificateDetailsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CERTIFICATE_ID), path: ['certificateId' => $certificateId]);
        return $result;
    }
}
