# PlatesPhp for KoolReport

This package make KoolReport able to use PlatesPhp template engine to generate view content.

# Installation

Run composer command

```
composer require koolreport\platesphp
```

# Guide

1. Add `use \koolreport\platesphp\Engine;` to your report
2. Add protected method `platesInit()` and return the plates object

# Example

```
class MyReport extends \koolreport\KoolReport
{
    use \koolreport\platesphp\Engine;
    protected function platesInit()
    {
        return League\Plates\Engine::create(dirname(__FILE__).'/templates');
    }

}
```

Supposed you have a view for report named `myreport.phtml` inside `templates` folder, you can render your report like this:

```
$report = new MyReport;
$report->run()->render("myreport");
```

# Support

Please use [our forum](https://www.koolreport.com/forum/topics) if you need support, by this way other people can benefit as well. If the support request need privacy, you may send email to us at [support@koolreport.com](mailto:support@koolreport.com).