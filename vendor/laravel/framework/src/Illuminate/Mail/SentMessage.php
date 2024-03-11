<?php

namespace Illuminate\Mail;

use Illuminate\Support\Traits\ForwardsCalls;
use Symfony\Component\Mailer\SentMessage as SymfonySentMessage;

/**
 * @mixin SymfonySentMessage
 */
class SentMessage
{
    use ForwardsCalls;

    /**
     * The Symfony SentMessage instance.
     *
     * @var SymfonySentMessage
     */
    protected $sentMessage;

    /**
     * Create a new SentMessage instance.
     *
     * @param SymfonySentMessage $sentMessage
     * @return void
     */
    public function __construct(SymfonySentMessage $sentMessage)
    {
        $this->sentMessage = $sentMessage;
    }

    /**
     * Get the underlying Symfony Email instance.
     *
     * @return SymfonySentMessage
     */
    public function getSymfonySentMessage()
    {
        return $this->sentMessage;
    }

    /**
     * Dynamically pass missing methods to the Symfony instance.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->forwardCallTo($this->sentMessage, $method, $parameters);
    }

    /**
     * Get the serializable representation of the object.
     *
     * @return array
     */
    public function __serialize()
    {
        $hasAttachments = collect($this->sentMessage->getOriginalMessage()->getAttachments())->isNotEmpty();

        return [
            'hasAttachments' => $hasAttachments,
            'sentMessage' => $hasAttachments ? base64_encode(serialize($this->sentMessage)) : $this->sentMessage,
        ];
    }

    /**
     * Marshal the object from its serialized data.
     *
     * @param  array  $data
     * @return void
     */
    public function __unserialize(array $data)
    {
        $hasAttachments = ($data['hasAttachments'] ?? false) === true;

        $this->sentMessage = $hasAttachments ? unserialize(base64_decode($data['sentMessage'])) : $data['sentMessage'];
    }
}
