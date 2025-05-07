<?php

namespace Core;

class Router
{
    private $urlController = null;
    private $urlAction     = null;
    private $urlParams     = [];

    public function __construct()
    {
        $this->splitUrl();

        if (!$this->urlController) {
            $page = new \App\Controllers\Home();
            $page->index();
        } elseif (file_exists(APP . 'Controllers/' . ucfirst($this->urlController) . '.php')) {
            $controller = '\\App\\Controllers\\' . ucfirst($this->urlController);
            $this->urlController = new $controller();

            // 🔧 Validación segura para PHP 8.1
            $action = is_string($this->urlAction) ? $this->urlAction : '';

            if (method_exists($this->urlController, $action) && is_callable([$this->urlController, $action])) {
                if (!empty($this->urlParams)) {
                    call_user_func_array([$this->urlController, $action], $this->urlParams);
                } else {
                    $this->urlController->{$action}();
                }
            } else {
                if ($action === '') {
                    $this->urlController->index();
                } else {
                    $page = new \App\Controllers\Error();
                    $page->pageNotFound($this->urlController, $action);
                }
            }
        } else {
            $page = new \App\Controllers\Error();
            $page->pageNotFound($this->urlController, $this->urlAction);
        }
    }

    private function splitUrl()
    {
        if (isset($_GET['url'])) {
            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            $this->urlController = $url[0] ?? null;
            $this->urlAction     = $url[1] ?? null;

            unset($url[0], $url[1]);
            $this->urlParams = array_values($url);
        }
    }
}
