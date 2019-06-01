# PlatesPHP

## Overview

Starting from version 4.0.0, KoolReport supports other template engines rather than just its own template view file and `PlatesPhp` is one of them.

Plates is a native PHP template system that’s fast, easy to use and easy to extend. It’s inspired by the excellent Twig template engine and strives to bring modern template language functionality to native PHP templates. Plates is designed for developers who prefer to use native PHP templates over compiled template languages, such as Twig or Smarty.

#### Highlight

* Native PHP templates, no new syntax to learn
* Plates is a template system, not a template language
* Plates encourages the use of existing PHP functions
* Increase code reuse with template layouts and inheritance
* Template folders for grouping templates into namespaces
* Data sharing across templates
* Preassign data to specific templates
* Built-in escaping helpers
* Easy to extend using functions and extensions
* Framework-agnostic, will work with any project
* Decoupled design makes templates easy to test
* Composer ready and PSR-2 compliant

You may read more information about Plates PHP in [here](https://platesphp.com/).

## Installation

#### By downloading .zip file

1. [Download](https://www.koolreport.com/packages/platesphp)
2. Unzip the zip file
3. Copy the folder `platesphp` into `koolreport` folder so that look like below

```bash
koolreport
├── core
├── platesphp
```

#### By composer

```
composer require koolreport\platesphp
```

## Get started

__Step 1:__ First create a folder to hold the views

```bash
project/
├── reports/
│   └── MyReport.php
├── views/
│   └── myreport.phtml
```

__Step 2:__ Next, in your `MyReport.php` you initiate platesphp template like this:

```
require_once "../../koolreport/core/autoload.php";

class MyReport extends \koolreport\KoolReport
{
    use \koolreport\platesphp\Engine;
    
    protected function platesInit()
    {
        return League\Plates\Engine::create(dirname(__FILE__).'/../views');
    }
    ...

}
```

__Step 3:__ Create report's view content. In your `myreport.phtml` you can do:

```
<html>
<head>
    <title>MyReport</title>
</head>
<body>
    <?php
    \koolreport\widgets\koolphp\Table::create(array(
        "dataSource"=>$report->dataStore("result"),
    ));
    ?>
</body>
</html>
```

__*Important Note*:__ You need to use `$report` variable to refer to the report class, not `$this` as you do when use default Koolreport view file.

__Step 4:__ To make the report run and render, you do:


```
//index.php

require_once "MyReport.php";

$report = new MyReport;
$report->run()->render("myreport"); // You need to specify the view you want to render
```

Now your report will run and then use `myreport.phtml` to render the view of report. 

__Congrat!__


# Resources

1. [Full documentation](https://www.koolreport.com/docs/platesphp/overview/)
2. [Examples & Demonstration](https://www.koolreport.com/examples)


# Support

Please use [our forum](https://www.koolreport.com/forum/topics) if you need support, by this way other people can benefit as well. If the support request need privacy, you may send email to us at [support@koolreport.com](mailto:support@koolreport.com).