<?php

namespace App\Entity;

class SponsorshipTransition
{
    const TRANSITION_TO_MATCH = 'to_match';
    const TRANSITION_SP_APPROVE = 'sp_approve';
    const TRANSITION_ST_APPROVE = 'st_approve';
    const TRANSITION_TO_SPONSORSHIP = 'to_conclude';
    const TRANSITION_TO_END = 'to_end';

}