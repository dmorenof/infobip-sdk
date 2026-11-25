<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N9620629c173fbd1e947e2693ffe57e0c353c3961ef0ef2018c058c14e6f698ab;

enum FieldOperatorApiResponse: string
{
    case AFTER = 'AFTER';
    case AFTERORON = 'AFTER_OR_ON';
    case BEFORE = 'BEFORE';
    case BEFOREORON = 'BEFORE_OR_ON';
    case CONTAINS = 'CONTAINS';
    case DOESNTCONTAIN = 'DOESNT_CONTAIN';
    case GREATERTHAN = 'GREATER_THAN';
    case IS = 'IS';
    case ISEQUALORGREATER = 'IS_EQUAL_OR_GREATER';
    case ISEQUALORLESS = 'IS_EQUAL_OR_LESS';
    case ISEQUALTO = 'IS_EQUAL_TO';
    case ISNOT = 'IS_NOT';
    case ISSELECTED = 'IS_SELECTED';
    case LESSTHAN = 'LESS_THAN';
    case NOTEQUALTO = 'NOT_EQUAL_TO';
    case NOTSELECTED = 'NOT_SELECTED';
}
