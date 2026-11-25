<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719;

/**
 * ScoreResponse
 */
final class ScoreResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'score',
    'stats',
];

    /**
     * The score data including all scoring details and best score for the participant.
     */
    public \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\ScoreReturn $score;
    /**
     * Statistical information about the participant's performance and ranking in the campaign.
     */
    public \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\ScoreStats $stats;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'score' => $value instanceof \stdClass ? $this->score = new \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\ScoreReturn($value) : parent::assignMember($name, $value),
            'stats' => $value instanceof \stdClass ? $this->stats = new \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\ScoreStats($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
