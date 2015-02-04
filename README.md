Yii2 Alerts
===================



Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

`
php composer.phar require --prefer-dist "c006/yii2-alerts" "dev-master"
`

or add

`
"c006/yii2-alerts": "dev-master"
`

to the require section of your `composer.json` file.


Required
--------

+ ***jQuery***

+ **yii \ widgets \ Bootstrap**


Options
-------

Constants:
>
        const ALERT_DANGER  = 'alert-danger';
        const ALERT_WARNING = 'alert-warning';
        const ALERT_INFO    = 'alert-info';
        const ALERT_SUCCESS = 'alert-success';

**message =>**  {string}  
` Alert message (HTML) `

**alert_type =>**  {string}  
` Use constants. Default ALERT_INFO `

**close =>**  {boolean}  
` Show close link for alert. Default enabled `

**countdown =>**  {int}  
` Automatically remove alert in X seconds `



Usage
-----

Set message
>
    <?php
    Alerts::setMessage("Hello World");
    Alerts::setAlertType(Alerts::ALERT_SUCCESS);
    ?>

Display message
>
        <?= Alerts::widget(['countdown'  => 5]); ?>
        /* Auto close message in 5 seconds */


Display message (no close)
>
        <?= Alerts::widget(['countdown'  => 5, 'close' => FALSE]); ?>
        /* Auto close message in 5 seconds */

Display message (direct message)
>
        <?= Alerts::widget(['message' => 'Hello World']); ?>

Comments / Suggestions
--------------------

Please provide any helpful feedback or requests.

Thanks.


































