<?php
/** DokuWiki Plugin extension (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Andreas Gohr <andi@splitbrain.org>
 */

class action_plugin_extension extends DokuWiki_Action_Plugin
{

    /**
     * Registers a callback function for a given event
     *
     * @param Doku_Event_Handler $controller DokuWiki's event controller object
     * @return void
     */
    public function register(Doku_Event_Handler $controller)
    {
        $controller->register_hook('AJAX_CALL_UNKNOWN', 'BEFORE', $this, 'info');
    }

    /**
     * Create the detail info for a single plugin
     *
     * @param Doku_Event $event
     * @param            $param
     */
    public function info(Doku_Event $event, $param)
    {
        global $USERINFO;
        global $INPUT;

        if ($event->data != 'plugin_extension') return;
        $event->preventDefault();
        $event->stopPropagation();

        /** @var admin_plugin_extension $admin */
        $admin = plugin_load('admin', 'extension');
        if (!$admin->isAccessibleByCurrentUser()) {
            http_status(403);
            echo 'Forbidden';
            exit;
        }

        $ext = $INPUT->str('ext');
        if (!$ext) {
            http_status(400);
            echo 'no extension given';
            return;
        }

        /** @var helper_plugin_extension_extension $extension */
        $extension = plugin_load('helper', 'extension_extension');
        $extension->setExtension($ext);

        $act = $INPUT->str('act');
        switch ($act) {
            case 'enable':
            case 'disable':
                if(getSecurityToken() != $INPUT->str('sectok')) {
                    http_status(403);
                    echo 'Security Token did not match. Possible CSRF attack.';
                    return;
                }

                $extension->$act(); //enables/disables
                $reverse = ($act == 'disable') ? 'enable' : 'disable';

                $return = array(
                    'state'   => $act.'d', // isn't English wonderful? :-)
                    'reverse' => $reverse,
                    'label'   => $extension->getLang('btn_'.$reverse)
                );

                header('Content-Type: application/json');
                echo json_encode($return);
                break;

            case 'info':
            default:
                /** @var helper_plugin_extension_list $list */
                $list = plugin_load('helper', 'extension_list');
                header('Content-Type: text/html; charset=utf-8');
                echo $list->makeInfo($extension);
        }
    }
}
