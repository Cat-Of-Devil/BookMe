<?php
namespace IComeFromTheNet\BookMe\Events;
use Symfony\Component\EventDispatcher\Event;

/**
 * Generic event for a membership change
 *
 * @author Lewis Dyer <getintouch@icomefromthenet.com>
 * @since 1.0
 */
class MembershipEvent extends CommonEvent
{
    
    public function __construct($entityID)
    {
        parent::__construct($entityID);
    }

}
/* End of Class */