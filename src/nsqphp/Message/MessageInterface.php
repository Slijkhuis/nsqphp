<?php

namespace nsqphp\Message;

/**
 * Interface that must be implemented by Message
 */
interface MessageInterface {
    /**
     * Get message payload
     *
     * @return string
     */
    public function getPayload();

    /**
     * Get message ID
     *
     * @return string
     */
    public function getId();

    /**
     * Get attempts
     *
     * @return int
     */
    public function getAttempts();

    /**
     * Get timestamp
     *
     * @return float
     */
    public function getTimestamp();
}
