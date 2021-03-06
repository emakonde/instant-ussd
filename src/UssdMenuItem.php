<?php

namespace Bitmarshals\InstantUssd;

/**
 * Description of UssdMenuItem
 *
 * @author David Bwire
 */
class UssdMenuItem {

    /**
     *
     * @var string 
     */
    protected $nextMenuId;

    /**
     * Is the next_screen going to be a reset to a previous menu position?
     * 
     * @var bool 
     */
    protected $isResetToPreviousPosition = false;

    /**
     * Set _exit_ so that it automatically exits if there's no next menu
     * 
     * @param string $nextMenuId
     */
    public function __construct($nextMenuId = "_exit_") {
        $this->nextMenuId = trim($nextMenuId);
    }

    /**
     * 
     * @return string
     */
    public function getNextMenuId() {
        return $this->nextMenuId;
    }

    /**
     * 
     * @return bool
     */
    public function isResetToPreviousPosition() {
        return $this->isResetToPreviousPosition;
    }

    /**
     * 
     * @param bool $isResetToPreviousPosition
     * @return $this
     */
    public function setIsResetToPreviousPosition($isResetToPreviousPosition) {
        $this->isResetToPreviousPosition = $isResetToPreviousPosition;
        return $this;
    }

}
