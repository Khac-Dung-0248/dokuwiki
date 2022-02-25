<?php

namespace dokuwiki\Action;

/**
 * Class Media
 *
 * The full screen media manager
 *
 * @package dokuwiki\Action
 */
class Media extends AbstractAction {

    /** @inheritdoc */
    // Cho phép người dùng có quyền upload hay không
    public function minimumPermission() {       
        return AUTH_READ; 
    }

    /** @inheritdoc */
    // Thực hiện upload file
    public function tplContent() {
        tpl_media();
    }

}
