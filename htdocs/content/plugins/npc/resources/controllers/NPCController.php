<?php

namespace Nepchure\Test\Controllers;

use Themosis\Route\BaseController;

class NPCController extends BaseController
{
    /**
     * Function for setting up wp_document_title
     * @param string $title
     * @return bool
     */
    protected function setDocumentTitle($title = '', $prefix = '', $separator = '')
    {
        if ($title) {
            define('NPC_DOCUMENT_TITLE_PREFIX', $prefix);
            define('NPC_DOCUMENT_TITLE_SEPARATOR', $separator);
            define('NPC_DOCUMENT_TITLE', $title);
            add_filter(
                'pre_get_document_title',
                function () {
                    return NPC_DOCUMENT_TITLE_PREFIX . NPC_DOCUMENT_TITLE_SEPARATOR . NPC_DOCUMENT_TITLE;
                }
            );
            return true;
        } else {
            return false;
        }
    }

    /**
     * Function for setting 404 headers
     */
    protected function setNotFound()
    {
        global $wp_query;
        $wp_query->set_404();
        status_header( 404 );
    }
}
