<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * Profile
 *
 * Notification profile.
 */
final class NoIdProfileRequest extends \Dmorenof\SdkRuntime\DTO
{
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
    public \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\NoIdProfileRequest\EnabledSSLProtocolsCollection $enabledSSLProtocols {
        set {
            $this->assigning('enabledSSLProtocols', $value);
            $this->enabledSSLProtocols = $value;
        }
    }
    /**
     * Set of key:value pairs that will be sent in a HTTP request as headers.Note: 'Authorization' header (if configured here for any reason) can be overridden with one from security config.
     */
    public \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\NoIdProfileRequest\HeadersMap $headers;
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
    public \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySecurityRequest $security;
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
            'rateLimit' => is_int($value) ? $this->rateLimit = $value : parent::assignMember($name, $value),
            'readTimeout' => is_int($value) ? $this->readTimeout = $value : parent::assignMember($name, $value),
            'responseBodyRegex' => is_string($value) ? $this->responseBodyRegex = $value : parent::assignMember($name, $value),
            'responseRegex' => is_string($value) ? $this->responseRegex = $value : parent::assignMember($name, $value),
            'security' => $value instanceof \stdClass ? $this->security = new \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySecurityRequest($value) : parent::assignMember($name, $value),
            'webhook' => $value instanceof \stdClass ? $this->webhook = new \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\Webhook($value) : parent::assignMember($name, $value),
            'windowSize' => is_int($value) ? $this->windowSize = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
