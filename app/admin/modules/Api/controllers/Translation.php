<?php
declare(strict_types=1);

class TranslationController extends Base\ApiController
{
    public function getAction()
    {
        return $this->send($this->model->get());
    }
}