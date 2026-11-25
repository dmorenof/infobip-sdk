<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b;

/**
 * ResourceAssociationResponse
 */
final class ResourceAssociationResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'applicationId',
        'channel',
        'resourceId',
        'resourceType',
    ];

    protected const array VALIDATION = [
        'applicationId' => [
            'maxLength' => 255,
        ],
        'entityId' => [
            'maxLength' => 255,
        ],
        'resourceId' => [
            'maxLength' => 255,
        ],
    ];

    /**
     * The unique identifier of the application. This ID will be a URL path parameter. We recommend using values that do not need URL encoding for easier interaction with other API endpoints.
     * Example: "test-application"
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    public \InfobipSDK\Enums\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ChannelType $channel;
    /**
     * The unique identifier of the entity. This ID will be a URL path parameter. We recommend using values that do not need URL encoding for easier interaction with other API endpoints.
     * Example: "test-entity"
     */
    public string $entityId {
        set {
            $this->assigning('entityId', $value);
            $this->entityId = $value;
        }
    }
    /**
     * The unique identifier of the resource. It depends on both the `resourceType` and `channel`.<br/>Use [numberKey](https://www.infobip.com/docs/api/platform-connectivity/numbers/phone-numbers/list-purchased-numbers) for the NUMBER `resourceType`.<br/>Use [domainName](https://www.infobip.com/docs/api/channels/email/get-all-domains) for the DOMAIN `resourceType`, which is available only for the Email channel.
     * Example: "test-resource"
     */
    public string $resourceId {
        set {
            $this->assigning('resourceId', $value);
            $this->resourceId = $value;
        }
    }
    public \InfobipSDK\Enums\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ResourceType $resourceType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ChannelType::from($value) : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'resourceId' => is_string($value) ? $this->resourceId = $value : parent::assignMember($name, $value),
            'resourceType' => is_string($value) ? $this->resourceType = \InfobipSDK\Enums\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\ResourceType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
