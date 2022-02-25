<?php

namespace dokuwiki\Action;

use dokuwiki\Action\Exception\ActionAbort;
use dokuwiki\Action\Exception\ActionException;

use Elasticsearch\ClientBuilder;
require 'vendor/autoload.php';

$hosts = [
    [
        'host' => 'localhost',
        'port' => '9200',
        'scheme' => 'http',
    ],
];
// //Tạo đối tượng Client
$client = ClientBuilder::create()->setHosts($hosts)->build();
global $ID;
global $TEXT;
global $DATE;



/**
 * Class Save
 *
 * Save at the end of an edit session
 *
 * @package dokuwiki\Action
 */
class Save extends AbstractAction {

    /** @inheritdoc */
    public function minimumPermission() {
        global $INFO;
        if($INFO['exists']) {
            return AUTH_EDIT;
        } else {
            return AUTH_CREATE;
        }
    }


    /** @inheritdoc */
    public function preProcess() {
        if(!checkSecurityToken()) throw new ActionException('preview');

        global $ID;
        global $DATE;
        global $PRE;
        global $TEXT;
        global $SUF;
        global $SUM;
        global $lang;
        global $INFO;
        global $INPUT;

        //spam check
        if(checkwordblock()) {
            msg($lang['wordblock'], -1);
            throw new ActionException('edit');
        }

        //conflict check
        if($DATE != 0
            && isset($INFO['meta']['date']['modified'])
            && $INFO['meta']['date']['modified'] > $DATE
        ) {
            throw new ActionException('conflict');
        }

        //save it
        saveWikiText($ID, con($PRE, $TEXT, $SUF, true), $SUM, $INPUT->bool('minor')); //use pretty mode for con

        //unlock it
        unlock($ID);

        // continue with draftdel -> redirect -> show
        throw new ActionAbort('draftdel');
    }

}

if(strlen(trim($TEXT," ")) > 0){
    $dataIndexToES = [
        'index' => 'dokuwiki',
        'id' => $ID,
        'type' => '_doc',
        'body' => [
            'name' => $ID,
            'content' => $TEXT,
            'date' => $DATE
        ]
    ];
    $client->index($dataIndexToES);
}else{
    $indexDeleteInES = [
        'index' => 'dokuwiki',
        'id' => $ID,
        'type' => '_doc'
    ];
    $client->delete($indexDeleteInES);
}


