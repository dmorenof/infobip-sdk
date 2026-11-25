<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Provisioning\Resource1;

final class Associations extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'applicationId' => 'applicationId',
            'channel' => 'channel',
            'entityId' => 'entityId',
            'page' => 'page',
            'resourceId' => 'resourceId',
            'resourceType' => 'resourceType',
            'size' => 'size',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'applicationId' => [
            'maxLength' => 255,
        ],
        'entityId' => [
            'maxLength' => 255,
        ],
        'page' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
        'resourceId' => [
            'maxLength' => 255,
        ],
        'size' => [
            'minimum' => 1,
            'maximum' => 1000,
            'format' => 'int32',
        ],
    ];

    public ?string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    public ?\InfobipSDK\Enums\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ChannelType $channel;
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
    public ?string $resourceId {
        set {
            $this->assigning('resourceId', $value);
            $this->resourceId = $value;
        }
    }
    public ?\InfobipSDK\Enums\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ResourceType $resourceType;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
}
