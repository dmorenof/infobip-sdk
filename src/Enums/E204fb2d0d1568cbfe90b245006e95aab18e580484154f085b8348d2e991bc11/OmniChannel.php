<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

enum OmniChannel: string
{
    case EMAIL = 'EMAIL';
    case KAKAOALIM = 'KAKAO_ALIM';
    case KAKAOCHINGU = 'KAKAO_CHINGU';
    case LINE = 'LINE';
    case PUSH = 'PUSH';
    case SMS = 'SMS';
    case VIBER = 'VIBER';
    case VKONTAKTE = 'VKONTAKTE';
    case VOICE = 'VOICE';
    case WHATSAPP = 'WHATSAPP';
}
