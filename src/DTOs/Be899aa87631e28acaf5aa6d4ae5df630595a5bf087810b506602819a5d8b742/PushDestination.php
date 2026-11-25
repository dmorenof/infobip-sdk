<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushDestination
 *
 * Recipient destination address. [Check examples](https://www.infobip.com/docs/mobile-push/mobile-push-over-api) how to work with recipients
 */
class PushDestination extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        'EMAIL' => 'InfobipSDK\\DTOs\\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\\PushDestinationEmail',
        'EXTERNAL_USER_ID' => 'InfobipSDK\\DTOs\\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\\PushDestinationExternalUserId',
        'MULTIPLE' => 'InfobipSDK\\DTOs\\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\\PushDestinationMultiple',
        'PHONE_NUMBER' => 'InfobipSDK\\DTOs\\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\\PushDestinationPhoneNumber',
        'REGISTRATION' => 'InfobipSDK\\DTOs\\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\\PushDestinationRegistration',
        'be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742.PushDestinationEmail' => 'InfobipSDK\\DTOs\\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\\PushDestinationEmail',
        'be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742.PushDestinationExternalUserId' => 'InfobipSDK\\DTOs\\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\\PushDestinationExternalUserId',
        'be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742.PushDestinationMultiple' => 'InfobipSDK\\DTOs\\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\\PushDestinationMultiple',
        'be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742.PushDestinationPhoneNumber' => 'InfobipSDK\\DTOs\\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\\PushDestinationPhoneNumber',
        'be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742.PushDestinationRegistration' => 'InfobipSDK\\DTOs\\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\\PushDestinationRegistration',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushDestinationType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushDestinationType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
