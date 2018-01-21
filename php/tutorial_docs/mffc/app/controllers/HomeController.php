<?php
/**
 * php HomeController.php
 * User: lmx
 * Time: 2018/1/21 下午3:21
 */

class HomeController extends BaseController {

    public function home() {
        $this->view = View::make('home')
            ->with('article', Article::first())
            ->withTitle('MFFC :-D');
    }
}