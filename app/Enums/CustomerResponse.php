<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CustomerResponse extends Enum
{
    const NOT_ANSWER_YET = 0;
    const JOIN = 1;
    const NOT_JOIN = 2;
}
