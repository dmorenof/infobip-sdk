<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Aaab91bc67ad6fdd15298ef61b480f76a93a7cae8c7684c83b1e909cda7f154f\ResultResponse;

enum ResultEnum: string
{
    case INVALID = 'INVALID';
    case OTPSMSSENT = 'OTP_SMS_SENT';
    case SIMSWAPCHECKFAILED = 'SIM_SWAP_CHECK_FAILED';
    case SIMSWAPDETECTED = 'SIM_SWAP_DETECTED';
    case UNABLETOVERIFY = 'UNABLE_TO_VERIFY';
    case VALID = 'VALID';
}
