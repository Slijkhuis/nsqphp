<?php

namespace nsqphp\Connection;

/**
 * Interface that needs to be implemented by a connection 
 */
interface ConnectionInterface {
    /**
     * Wait for readable
     *
     * Waits for the socket to become readable (eg: have some data waiting)
     *
     * @return bool
     */
    public function isReadable();

    /**
     * Read from the socket exactly $len bytes
     *
     * @param int $len How many bytes to read
     *
     * @return string Binary data
    */
    public function read($len);

    /**
     * Write to the socket.
     *
     * @param string $buf The data to write
     */
    public function write($buf);

    /**
     * Get socket handle
     *
     * @return resource The socket
     */
    public function getSocket();

    /**
     * Reconnect and replace the socket resource.
     *
     * @return resource The socket, after reconnecting
     */
    public function reconnect();
}
