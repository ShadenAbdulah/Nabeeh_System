<?php

namespace Illuminate\Mail\Events;

use Symfony\Component\Mime\Email;

class MessageSending
{
    /**
     * The Symfony Email instance.
     *
     * @var Email
     */
    public $message;

    /**
     * The message data.
     *
     * @var array
     */
    public $data;

    /**
     * Create a new event instance.
     *
     * @param Email $message
     * @param  array  $data
     * @return void
     */
    public function __construct(Email $message, array $data = [])
    {
        $this->data = $data;
        $this->message = $message;
    }
}
