<?php
namespace koolreport\platesphp;

class PlatesPhpTemplateEngine implements \koolreport\core\ITemplateEngine
{
    protected $plates;
    public function __construct($plates)
    {
        $this->plates = $plates;
    }

    public function render($view, $params)
    {
        return $this->plates->render($view, $params);
    }
}