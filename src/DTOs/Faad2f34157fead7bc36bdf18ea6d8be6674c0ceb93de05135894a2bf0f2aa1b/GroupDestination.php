<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * Group Destination
 */
final class GroupDestination extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'group',
    ];

    protected const array VALIDATION = [
        'group' => [
            'minItems' => 1,
            'maxItems' => 200,
        ],
    ];

    public \InfobipSDK\Collections\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\GroupDestination\GroupCollection $group {
        set {
            $this->assigning('group', $value);
            $this->group = $value;
        }
    }
}
