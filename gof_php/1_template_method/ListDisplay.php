<?php
require_once 'AbstractDisplay.php';

/**
 * ConcreteClassに相当する
 */
class ListDisplay extends AbstractDisplay {

    /**
     * headerを表示する
     */
    protected function displayHeader() {
        echo '<dl>';
    }

    /**
     * bodyを表示する
     */
    protected function displayBody() {
        foreach( $this->getData() as $key => $val ) {
            echo '<dt>item ' . $key . '</dt>';
            echo '<dd>' . $val . '</dd>';
        }
    }

    /**
     * footerを表示する
     */
    protected function displayFooter() {
        echo '</dl>';
    }
}
?>