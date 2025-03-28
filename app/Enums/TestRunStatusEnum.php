<?php

namespace App\Enums;

enum TestRunStatusEnum: string
{
    case PENDING = 'pending';
    case IN_PROGRESS = 'in progress';
    case COMPLETED = 'completed';
}
