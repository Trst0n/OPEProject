<?php

namespace App\Entity;

enum LeadState: string
{
    case AVAILABLE = 'available';
    case MATCHED = 'matched';
    case MATCH_APPROVED= 'match_approved';
    case SPONSORSHIP = 'sponsorship';
    case OUTDATED = 'outdated';
}