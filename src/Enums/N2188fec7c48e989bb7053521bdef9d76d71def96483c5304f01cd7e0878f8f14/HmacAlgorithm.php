<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

enum HmacAlgorithm: string
{
    case HMACMD5 = 'HMAC_MD5';
    case HMACSHA1 = 'HMAC_SHA_1';
    case HMACSHA224 = 'HMAC_SHA_224';
    case HMACSHA256 = 'HMAC_SHA_256';
    case HMACSHA384 = 'HMAC_SHA_384';
    case HMACSHA512 = 'HMAC_SHA_512';
}
