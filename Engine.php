<?php

namespace koolreport\platesphp;

trait Engine
{
    public function __constructPlatesPhpEngine()
    {
        if (method_exists($this, "platesInit")) {
            $this->templateEngine = new PlatesPhpTemplateEngine($this->platesInit());
        }
    }
}