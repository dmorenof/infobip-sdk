<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Subscriptions\Resource1\Subscription;

final class ByChannel extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'applicationId' => 'applicationId',
            'callsConfigurationId' => 'callsConfigurationId',
            'entityId' => 'entityId',
            'page' => 'page',
            'resource' => 'resource',
            'size' => 'size',
            'user' => 'user',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'applicationId' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'callsConfigurationId' => [
            'minLength' => 1,
            'maxLength' => 128,
        ],
        'entityId' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'page' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
        'resource' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'size' => [
            'minimum' => 1,
            'maximum' => 100,
            'format' => 'int32',
        ],
        'user' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
    ];

    public ?string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    public ?string $callsConfigurationId {
        set {
            $this->assigning('callsConfigurationId', $value);
            $this->callsConfigurationId = $value;
        }
    }
    public ?string $entityId {
        set {
            $this->assigning('entityId', $value);
            $this->entityId = $value;
        }
    }
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $resource {
        set {
            $this->assigning('resource', $value);
            $this->resource = $value;
        }
    }
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?string $user {
        set {
            $this->assigning('user', $value);
            $this->user = $value;
        }
    }
}
