<?php

namespace App\Mail;

use HMS\Entities\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MembershipDetailsRejected extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $fullname;

    /**
     * @var string
     */
    public $reason;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param string $reason
     */
    public function __construct(User $user, string $reason)
    {
        $this->userId = $user->getId();
        $this->fullname = $user->getFullname();
        $this->reason = $reason;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.membership.rejected');
    }
}
