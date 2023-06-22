<?php

namespace App\Entity;

enum LeadState: string
{
    case AVAILABLE = 'available';
    case MATCHED = 'matched';
    case SPONSORSHIP = 'sponsorship';
    case OUTDATED = 'outdated';
}