<?php

namespace App\Mail;

use App\Member;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MemberRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $member;


	/**
	 * Create a new message instance.
	 *
	 * @param Member $member
	 */
    public function __construct(Member $member)
    {
        $this->member = $member;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('member.registered');
    }
}
