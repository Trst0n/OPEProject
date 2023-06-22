<?php

namespace App\Entity;

class SponsorshipTransition
{
    const TRANSITION_ST_VALIDATE = 'st_validate';
    const TRANSITION_SP_VALIDATE = 'sp_validate';
    const TRANSITION_ST_REFUSE = 'st_refuse';
    const TRANSITION_SP_REFUSE = 'sp_refuse';
    const TRANSITION_SP_APPROVE = 'sp_approve';
    const TRANSITION_ST_APPROVE = 'st_approve';
    const TRANSITION_ST_REJECT = 'st_reject';
    const TRANSITION_SP_REJECT = 'sp_reject';
    const TRANSITION_TO_CONCLUDE = 'to_conclude';
    const TRANSITION_TO_END = 'to_end';

}