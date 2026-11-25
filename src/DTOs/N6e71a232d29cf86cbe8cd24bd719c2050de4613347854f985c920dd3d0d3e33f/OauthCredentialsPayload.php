<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * OauthCredentials
 *
 * OAuth credentials.
 */
final class OauthCredentialsPayload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'grantType',
    'tokenUrl',
];

    protected const array VALIDATION = [
    'clientId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'clientSecret' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'grantType' => [
        'minLength' => 1,
        'maxLength' => 255,
    ],
    'password' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'refreshToken' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'resource' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'scope' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'tokenUrl' => [
        'minLength' => 1,
        'maxLength' => 255,
    ],
    'username' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    /**
     * Client ID.
     */
    public string $clientId {
        set {
            $this->assigning('clientId', $value);
            $this->clientId = $value;
        }
    }
    /**
     * Client secret.
     */
    public string $clientSecret {
        set {
            $this->assigning('clientSecret', $value);
            $this->clientSecret = $value;
        }
    }
    /**
     * Grant type.
     */
    public string $grantType {
        set {
            $this->assigning('grantType', $value);
            $this->grantType = $value;
        }
    }
    /**
     * Set of key:value pairs that will be sent in a HTTP request as headers.
     */
    public \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\OauthCredentialsPayload\HeadersMap $headers;
    /**
     * Password.
     */
    public string $password {
        set {
            $this->assigning('password', $value);
            $this->password = $value;
        }
    }
    /**
     * Refresh token.
     */
    public string $refreshToken {
        set {
            $this->assigning('refreshToken', $value);
            $this->refreshToken = $value;
        }
    }
    /**
     * Resource.
     */
    public string $resource {
        set {
            $this->assigning('resource', $value);
            $this->resource = $value;
        }
    }
    /**
     * Scope.
     */
    public string $scope {
        set {
            $this->assigning('scope', $value);
            $this->scope = $value;
        }
    }
    /**
     * Token URL.
     */
    public string $tokenUrl {
        set {
            $this->assigning('tokenUrl', $value);
            $this->tokenUrl = $value;
        }
    }
    /**
     * Username.
     */
    public string $username {
        set {
            $this->assigning('username', $value);
            $this->username = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'clientId' => is_string($value) ? $this->clientId = $value : parent::assignMember($name, $value),
            'clientSecret' => is_string($value) ? $this->clientSecret = $value : parent::assignMember($name, $value),
            'grantType' => is_string($value) ? $this->grantType = $value : parent::assignMember($name, $value),
            'password' => is_string($value) ? $this->password = $value : parent::assignMember($name, $value),
            'refreshToken' => is_string($value) ? $this->refreshToken = $value : parent::assignMember($name, $value),
            'resource' => is_string($value) ? $this->resource = $value : parent::assignMember($name, $value),
            'scope' => is_string($value) ? $this->scope = $value : parent::assignMember($name, $value),
            'tokenUrl' => is_string($value) ? $this->tokenUrl = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
