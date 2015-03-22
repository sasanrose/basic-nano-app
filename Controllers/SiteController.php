<?php

namespace app\Controllers;

/**
 * Class: SiteController
 *
 * @see \app\Controllers\Controller
 */
class SiteController extends \app\Controllers\Controller
{
    /**
     * indexAction
     *
     */
    public function indexAction()
    {
        nanophp\Template::factory()->render();
    }
}
