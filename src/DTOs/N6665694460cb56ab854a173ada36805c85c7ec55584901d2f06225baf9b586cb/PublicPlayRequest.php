<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6665694460cb56ab854a173ada36805c85c7ec55584901d2f06225baf9b586cb;

/**
 * PublicPlayRequest
 *
 * Call play request.
 */
final class PublicPlayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
];

    protected const array VALIDATION = [
    'loopCount' => [
        'format' => 'int32',
    ],
];

    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicPlayContent $content;
    /**
     * Optional parameter to update a call's custom data.
     */
    public \InfobipSDK\DTOs\N6665694460cb56ab854a173ada36805c85c7ec55584901d2f06225baf9b586cb\PublicPlayRequest\CustomDataMap $customData;
    /**
     * Number of times the file will be played.
     * Format: int32
     */
    public int $loopCount {
        set {
            $this->assigning('loopCount', $value);
            $this->loopCount = $value;
        }
    }
    /**
     * The starting point, in milliseconds, from which the file will be played. If offset is not defined, the file will be played from its beginning.
     * Format: int64
     */
    public int $offset;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicTermination $stopOn;
    /**
     * The duration, in milliseconds, of the file to be played. If timeout is not defined, the file will be played until it ends.
     * Format: int64
     */
    public int $timeout;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'loopCount' => is_int($value) ? $this->loopCount = $value : parent::assignMember($name, $value),
            'offset' => is_int($value) ? $this->offset = $value : parent::assignMember($name, $value),
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
