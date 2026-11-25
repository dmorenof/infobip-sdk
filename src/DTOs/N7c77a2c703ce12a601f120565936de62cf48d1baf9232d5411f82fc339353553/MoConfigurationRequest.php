<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * MoConfigurationRequest
 */
class MoConfigurationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'channel',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'channel';
    public const array DISCRIMINATOR_MAPPING = [
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.AppleMbMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\AppleMbMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.EmailDomainMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\EmailDomainMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.InstagramDmMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\InstagramDmMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.KakaoSangdamMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\KakaoSangdamMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.LineOaMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\LineOaMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.MessengerMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\MessengerMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.MmsMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\MmsMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.OpenChannelMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\OpenChannelMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.RcsMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\RcsMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.SmsMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\SmsMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.TelegramMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\TelegramMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.TikTokBmMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\TikTokBmMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ViberBmMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ViberBmMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ViberBotMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ViberBotMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.WhatsAppMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\WhatsAppMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ZaloFollowerMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ZaloFollowerMoConfigurationRequest',
        '7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553.ZaloZnsMoConfigurationRequest' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ZaloZnsMoConfigurationRequest',
        'APPLE_MB' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\AppleMbMoConfigurationRequest',
        'EMAIL' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\EmailDomainMoConfigurationRequest',
        'INSTAGRAM_DM' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\InstagramDmMoConfigurationRequest',
        'KAKAO_SANGDAM' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\KakaoSangdamMoConfigurationRequest',
        'LINE_OA' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\LineOaMoConfigurationRequest',
        'MESSENGER' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\MessengerMoConfigurationRequest',
        'MMS' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\MmsMoConfigurationRequest',
        'OPEN_CHANNEL' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\OpenChannelMoConfigurationRequest',
        'RCS' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\RcsMoConfigurationRequest',
        'SMS' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\SmsMoConfigurationRequest',
        'TELEGRAM' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\TelegramMoConfigurationRequest',
        'TIKTOK_BM' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\TikTokBmMoConfigurationRequest',
        'VIBER_BM' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ViberBmMoConfigurationRequest',
        'VIBER_BOT' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ViberBotMoConfigurationRequest',
        'WHATSAPP' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\WhatsAppMoConfigurationRequest',
        'ZALO_FOLLOWER' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ZaloFollowerMoConfigurationRequest',
        'ZALO_ZNS' => 'InfobipSDK\\DTOs\\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\\ZaloZnsMoConfigurationRequest',
    ];

    protected const array PROPERTY_MAP = [
        'unset' => 'unset_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'unset_' => 'unset',
    ];

    protected const array VALIDATION = [
        'keyword' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'unset_' => [
            'uniqueItems' => true,
        ],
        'username' => [
            'minLength' => 0,
            'maxLength' => 255,
            'pattern' => '^(?!\\s*$).+',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ConfigurationType $channel;
    /**
     * Omitting this value or sending <code>NULL</code> will set keyword to <code>NULL</code> because it is a valid keyword which will match all values.
     * Example: "STARTKW"
     */
    public string $keyword {
        set {
            $this->assigning('keyword', $value);
            $this->keyword = $value;
        }
    }
    /**
     * Used for unsetting configuration options. <br /> <b>If a property appears both in unset, and in the body of the request, it will <u>FIRST</u> be removed, and then <u>UPDATED</u> with the value from the request body!</b>
     * Example: "FORWARDING"
     */
    public \InfobipSDK\Collections\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoConfigurationRequest\UnsetCollection $unset_ {
        set {
            $this->assigning('unset_', $value);
            $this->unset_ = $value;
        }
    }
    /**
     * Sets username that will be applied in appropriate actions.
     * Example: "myusername"
     */
    public string $username {
        set {
            $this->assigning('username', $value);
            $this->username = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ConfigurationType::from($value) : parent::assignMember($name, $value),
            'keyword' => is_string($value) ? $this->keyword = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
