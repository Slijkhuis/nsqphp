<?php

namespace nsqphp\Logger;

/**
 * Interface that can be implemented for a custom logger
 */
interface LoggerInterface {
    /**
     * Log error
     *
     * @param string|\Exception $msg
     */
    public function error($msg);

    /**
     * Log warn
     *
     * @param string|\Exception $msg
     */
    public function warn($msg);

    /**
     * Log info
     *
     * @param string|\Exception $msg
     */
    public function info($msg);

    /**
     * Log debug
     *
     * @param string|\Exception $msg
     */
    public function debug($msg);
}
