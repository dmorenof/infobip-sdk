<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageCardOptions
 *
 * Set of alignment options for the Card.
 */
final class MessagesApiMessageCardOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageCardOptionsAlignmentEnum $alignment;
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageCardOptionsHeightEnum $height;
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageCardOptionsOrientationEnum $orientation;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'alignment' => is_string($value) ? $this->alignment = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageCardOptionsAlignmentEnum::from($value) : parent::assignMember($name, $value),
            'height' => is_string($value) ? $this->height = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageCardOptionsHeightEnum::from($value) : parent::assignMember($name, $value),
            'orientation' => is_string($value) ? $this->orientation = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageCardOptionsOrientationEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
