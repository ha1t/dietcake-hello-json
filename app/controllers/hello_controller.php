<?php
class HelloController extends AppController
{
    public function index()
    {
        $message = Hello::getMessage();
        $this->set('response', get_defined_vars());
    }
}
