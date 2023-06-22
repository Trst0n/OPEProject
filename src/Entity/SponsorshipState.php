<?php

namespace App\Entity;

class SponsorshipState
{
    const STATE_INITIALIZED = 'initialized';
    const STATE_SPONSOR_APPROVED = 'sponsor_approved';
    const STATE_STUDENT_APPROVED = 'student_approved';
    const STATE_STUDENT_REJECTED = 'student_rejected';
    const STATE_SPONSOR_REJECTED = 'sponsor_rejected';
    const STATE_APPROVED = 'approved';
    const STATE_SPONSORSHIP = 'sponsorship';
    const STATE_ENDED = 'ended';

}
