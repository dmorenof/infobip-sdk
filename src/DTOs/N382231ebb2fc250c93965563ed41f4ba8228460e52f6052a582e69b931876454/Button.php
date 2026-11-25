<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454;

/**
 * Button
 *
 * List of buttons attached to the message.
 */
class Button extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454.AddChannelButton' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\AddChannelButton',
        '382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454.AppLinkButton' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\AppLinkButton',
        '382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454.BotKeywordButton' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\BotKeywordButton',
        '382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454.ChatbotSwitchButton' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\ChatbotSwitchButton',
        '382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454.DeliveryTrackingButton' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\DeliveryTrackingButton',
        '382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454.MessageDeliveryButton' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\MessageDeliveryButton',
        '382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454.UrlButton' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\UrlButton',
        'ADD_CHANNEL' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\AddChannelButton',
        'APP_LINK' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\AppLinkButton',
        'BOT_KEYWORD' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\BotKeywordButton',
        'CHATBOT_SWITCH' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\ChatbotSwitchButton',
        'DELIVERY_TRACKING' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\DeliveryTrackingButton',
        'MESSAGE_DELIVERY' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\MessageDeliveryButton',
        'URL' => 'InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\UrlButton',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\ButtonType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\ButtonType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
