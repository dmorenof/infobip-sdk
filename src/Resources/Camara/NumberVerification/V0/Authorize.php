<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Camara\NumberVerification\V0;

final class Authorize extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/camara/number-verification/v0/authorize',
        'success' => [
            '2XX',
        ],
        'errors' => [
            302 => null,
            400 => '\\InfobipSDK\\Responses\\Errors\\Status400Response',
            401 => null,
            500 => '\\InfobipSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            302 => [
                'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\CamaraResponseBaseDto',
                'schemaNullable' => false,
            ],
            400 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\NumberVerification\\V0\\Authorize\\AuthorizeStatus401Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseHeaders' => [
            302 => [
                'Location' => [
                    'type' => 'string',
                ],
                'x-correlator' => [
                    'type' => 'string',
                ],
            ],
        ],
    ];

    /**
     * Number verify device authorization
     *
     * Use this method to redirect the mobile device on the MNO network for authorization, based on the mobile device IP address.
     * Upon authorization, the device is redirected back to the URL specified in `redirectUrl`.
     * When redirected back, a new query parameter `code` is being added.
     * It needs to be sent in a subsequent verify request to complete verification.
     *
     * **Error handling behavior:**
     * - When `redirectUrl` parameter **is provided**: All errors are returned as a 302 redirect back to the `redirectUrl` with OAuth 2.0 error query parameters (`error`, `error_description` (optional), `state`).
     * - When `redirectUrl` parameter **is NOT provided**: A JSON response is returned (see below).
     *
     */
    public function get(\InfobipSDK\GetParams\Camara\NumberVerification\V0\Authorize $params): void
    {
        $this->executeArguments(self::operation(self::GET), parameters: $params);
        return;
    }

}
