<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * Action
 *
 * Action performed when the component is tapped.
 */
class Action extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5.MessageAction' => 'InfobipSDK\\DTOs\\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\\MessageAction',
        '267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5.PostbackAction' => 'InfobipSDK\\DTOs\\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\\PostbackAction',
        '267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5.UriAction' => 'InfobipSDK\\DTOs\\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\\UriAction',
        'MESSAGE' => 'InfobipSDK\\DTOs\\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\\MessageAction',
        'POSTBACK' => 'InfobipSDK\\DTOs\\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\\PostbackAction',
        'URI' => 'InfobipSDK\\DTOs\\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\\UriAction',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\ActionType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\ActionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
