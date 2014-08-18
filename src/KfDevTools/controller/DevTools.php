<?php

namespace KfDevTools\Controller;

class DevTools extends \Kf\Module\Controller {

    public function index() {
        return $this->view;
    }

    public static function createToolbar(\Kf\View\Layout $layout) {
        $html = new \Kf\View\Html(new \Kf\System\File(__DIR__ . '/../view/dev-tools/toolbar.phtml'));
        $layout->appendExtraHtml($html->render());
    }

}
