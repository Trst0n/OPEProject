<?php

namespace App\Enum;

enum LeadState: string
{
    case REGISTERED = 'registered';
    case MATCHED = 'matched';
    case MATCH_APPROVED= 'match_approved';
    case SPONSORSHIP = 'sponsorship';
    case OUTDATED = 'outdated';
}