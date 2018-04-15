<?php
require_once 'AbstractDisplay.php';

/**
 * ConcreteClassに相当する
 */
class TableDisplay extends AbstractDisplay {

    /**
     * headerを表示する
     */
    protected function displayHeader() {
        echo '<table border="1" cellpadding="2">';
    }

    /**
     * bodyを表示する
     */
    protected function displayBody() {
        foreach( $this->getData() as $key => $val ) {
            echo '<tr>';
            echo '<th>' . $key . '</th>';
            echo '<td>' . $val . '</td>';
            echo '</tr>';
        }
    }

    /**
     * footerを表示する
     */
    protected function displayFooter() {
        echo '</table>';
    }
}
?>