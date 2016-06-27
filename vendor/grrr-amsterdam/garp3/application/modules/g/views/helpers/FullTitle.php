<?php
/**
 * Garp_View_Helper_FullTitle
 * Generates a title fit for printing in a <title> tag.
 * The body of the fullTitle method would usually be literally embedded in the layout template.
 *
 * @package Garp_View_Helper
 * @author  Harmen Janssen <harmen@grrr.nl>
 * @version 0.1.0
 */
class Garp_View_Helper_FullTitle extends Zend_View_Helper_Abstract {

    public function fullTitle($title, $currentPage) {
        if ($currentPage == 'home') {
            $out = $this->view->escape($this->view->config()->app->name);
            if ($title) {
                $out .= ' — ' . $this->view->escape($title);
            }
            return $out;
        }
        if ($title) {
            $title .= ' | ';
        }
        $title .= $this->view->config()->app->name;
        return $title;
    }

}

