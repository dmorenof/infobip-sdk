<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * Profile
 *
 * Notification profile object holding the settings for your webhook URL and a reference to security settings. You can provide full definition of a notification profile and security settings if you want to create new items, or provide an ID of an existing profile to reuse it. If you want to reuse an existing profile, do not provide any other notification profile and security settings properties.
 */
final class ProfileRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'profileId',
];

    protected const array VALIDATION = [
    'clientCertificateId' => [
        'minLength' => 0,
        'maxLength' => 255,
        'pattern' => '^[a-zA-Z0-9._-]+$',
    ],
    'connectTimeout' => [
        'minimum' => 300,
        'maximum' => 30000,
        'format' => 'int32',
    ],
    'enabledSSLProtocols' => [
        'uniqueItems' => true,
        'jsonSchema' => '{"enum":["TLSv1.2","TLSv1.3"]}',
    ],
    'maxBucketSize' => [
        'minimum' => 1,
        'maximum' => 2000,
        'format' => 'int32',
    ],
    'profileId' => [
        'minLength' => 1,
        'maxLength' => 255,
    ],
    'rateLimit' => [
        'minimum' => 1,
        'maximum' => 5000,
        'format' => 'int32',
    ],
    'readTimeout' => [
        'minimum' => 1000,
        'maximum' => 90000,
        'format' => 'int32',
    ],
    'windowSize' => [
        'minimum' => 20,
        'maximum' => 10000,
        'format' => 'int32',
    ],
];

    /**
     * Client certificate ID.
     */
    public string $clientCertificateId {
        set {
            $this->assigning('clientCertificateId', $value);
            $this->clientCertificateId = $value;
        }
    }
    /**
     * Time in milliseconds sender system waits for connection acknowledgement until the connection is closed.
     * Format: int32
     */
    public int $connectTimeout {
        set {
            $this->assigning('connectTimeout', $value);
            $this->connectTimeout = $value;
        }
    }
    /**
     * Specifies which security protocols should be used to send a HTTP request. Multiple options can be used.
     */
    public \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfileRequest\EnabledSSLProtocolsCollection $enabledSSLProtocols {
        set {
            $this->assigning('enabledSSLProtocols', $value);
            $this->enabledSSLProtocols = $value;
        }
    }
    /**
     * Set of key:value pairs that will be sent in a HTTP request as headers.Note: 'Authorization' header (if configured here for any reason) can be overridden with one from security config.
     */
    public \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfileRequest\HeadersMap $headers;
    /**
     * Specifies a maximum number of messages to be sent within a single request.
     * Format: int32
     */
    public int $maxBucketSize {
        set {
            $this->assigning('maxBucketSize', $value);
            $this->maxBucketSize = $value;
        }
    }
    /**
     * ID of a notification profile. This identifier will be used as part of a URL path and must not include any characters that require URL encoding. You cannot change the ID once an item is created.
     */
    public string $profileId {
        set {
            $this->assigning('profileId', $value);
            $this->profileId = $value;
        }
    }
    /**
     * Limits the number of requests per second.
     * Format: int32
     */
    public int $rateLimit {
        set {
            $this->assigning('rateLimit', $value);
            $this->rateLimit = $value;
        }
    }
    /**
     * A maximum period of inactivity in milliseconds between two consecutive data packets.
     * Format: int32
     */
    public int $readTimeout {
        set {
            $this->assigning('readTimeout', $value);
            $this->readTimeout = $value;
        }
    }
    /**
     * Response body regex.
     */
    public string $responseBodyRegex;
    /**
     * Response regex.
     */
    public string $responseRegex;
    public \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SecurityRequest $security;
    public \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\Webhook $webhook;
    /**
     * A maximum number of concurrent connections (active requests) per client.
     * Format: int32
     */
    public int $windowSize {
        set {
            $this->assigning('windowSize', $value);
            $this->windowSize = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'clientCertificateId' => is_string($value) ? $this->clientCertificateId = $value : parent::assignMember($name, $value),
            'connectTimeout' => is_int($value) ? $this->connectTimeout = $value : parent::assignMember($name, $value),
            'maxBucketSize' => is_int($value) ? $this->maxBucketSize = $value : parent::assignMember($name, $value),
            'profileId' => is_string($value) ? $this->profileId = $value : parent::assignMember($name, $value),
            'rateLimit' => is_int($value) ? $this->rateLimit = $value : parent::assignMember($name, $value),
            'readTimeout' => is_int($value) ? $this->readTimeout = $value : parent::assignMember($name, $value),
            'responseBodyRegex' => is_string($value) ? $this->responseBodyRegex = $value : parent::assignMember($name, $value),
            'responseRegex' => is_string($value) ? $this->responseRegex = $value : parent::assignMember($name, $value),
            'security' => $value instanceof \stdClass ? $this->security = new \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SecurityRequest($value) : parent::assignMember($name, $value),
            'webhook' => $value instanceof \stdClass ? $this->webhook = new \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\Webhook($value) : parent::assignMember($name, $value),
            'windowSize' => is_int($value) ? $this->windowSize = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
