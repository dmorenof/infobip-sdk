<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19;

/**
 * FlowDataResponse
 *
 * List of found flows.
 */
final class FlowDataResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'businessAccountId',
    'categories',
    'id',
    'name',
    'status',
];

    protected const array VALIDATION = [
    'initialScreens' => [
        'uniqueItems' => true,
    ],
];

    /**
     * WhatsApp business account ID.
     * Example: 987654
     * Format: int64
     */
    public int $businessAccountId;
    /**
     * Categories of the flow.
     * Example: "SIGN_UP"
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\CreateFlowRequest\CategoriesCollection $categories;
    /**
     * ID of the flow.
     * Example: "123456"
     */
    public string $id;
    /**
     * IDs of the initial screens required to send a flow with flowAction set to 'NAVIGATE'. Only exists for flows after publishing.
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $initialScreens {
        set {
            $this->assigning('initialScreens', $value);
            $this->initialScreens = $value;
        }
    }
    /**
     * Name of the flow.
     * Example: "My first flow"
     */
    public string $name;
    /**
     * Status of the flow.
     * Example: "DRAFT"
     */
    public \InfobipSDK\Enums\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'businessAccountId' => is_int($value) ? $this->businessAccountId = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'initialScreens' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->initialScreens = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
