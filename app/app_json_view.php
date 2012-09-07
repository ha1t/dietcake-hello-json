<?php
class AppJsonView extends View
{
    public function render($action = null)
    {
        $this->controller->output .= json_encode($this->vars['response']);
    }
}
