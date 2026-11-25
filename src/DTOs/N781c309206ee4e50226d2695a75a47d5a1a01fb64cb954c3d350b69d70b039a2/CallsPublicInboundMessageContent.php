<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * CallsPublicInboundMessageContent
 */
class CallsPublicInboundMessageContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.CallsDtmfInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\CallsDtmfInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.CallsHangUpInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\CallsHangUpInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.CallsStartCallInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\CallsStartCallInboundMessageContent',
        '781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2.CallsTextInboundMessageContent' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\CallsTextInboundMessageContent',
        'DTMF_CODE_RESPONSE' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\CallsDtmfInboundMessageContent',
        'HANG_UP' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\CallsHangUpInboundMessageContent',
        'START_CALL' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\CallsStartCallInboundMessageContent',
        'TEXT' => 'InfobipSDK\\DTOs\\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\\CallsTextInboundMessageContent',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\CallsInboundMessageContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\CallsInboundMessageContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
