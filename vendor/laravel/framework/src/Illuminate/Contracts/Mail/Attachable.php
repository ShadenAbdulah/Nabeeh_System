<?php

namespace Illuminate\Contracts\Mail;

use Illuminate\Mail\Attachment;

interface Attachable
{
    /**
     * Get an attachment instance for this entity.
     *
     * @return Attachment
     */
    public function toMailAttachment();
}
