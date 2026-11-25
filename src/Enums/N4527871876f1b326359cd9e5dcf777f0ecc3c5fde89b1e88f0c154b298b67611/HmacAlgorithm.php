<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

enum HmacAlgorithm: string
{
    case HMACMD5 = 'HMAC_MD5';
    case HMACSHA1 = 'HMAC_SHA_1';
    case HMACSHA224 = 'HMAC_SHA_224';
    case HMACSHA256 = 'HMAC_SHA_256';
    case HMACSHA384 = 'HMAC_SHA_384';
    case HMACSHA512 = 'HMAC_SHA_512';
}
