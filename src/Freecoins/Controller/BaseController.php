<?php

namespace Freecoins\Controller;

use Core\Http\Controller\AbstractController;
use Core\Http\Request;

/**
 * @author Alexander
 */
class BaseController extends AbstractController
{

    public function defaultAction(Request $request)
    {
        return $this->render('index');
    }
}
