<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/3/2015
 * Time: 9:37 AM
 */
namespace c006\alerts;

use c006\alerts\assets\AppAssets;
use Yii;
use yii\bootstrap\Widget;

/**
 * Class Alerts
 *
 * @package c006\alerts
 */
class Alerts extends Widget
{

    /** @var  $id string */
    public $id;

    /** @var  $message string */
    public $message;

    /** @var  $alert_type string
     *
     * alert-danger
     * alert-warning
     * alert-info
     * alert-success
     */
    public $alert_type;

    /** @var  $close boolean */
    public $close;

    /** @var  $countdown int */
    public $countdown;


    function init() {
        parent::init();
        $view = $this->getView();
        AppAssets::register($view);
    }

    /**
     * @param $message
     */
    static public function setMessage($message)
    {
        Yii::$app->session->set('C006_ALERT', $message);
    }

    /**
     * @return mixed
     */
    static public function getMessage()
    {
        return Yii::$app->session->get('C006_ALERT');
    }

    function run()
    {
        $this->id = "ALERT-" . time();
        if ($this->message) {
            return $this->render('alerts',
                                 [
                                     'id'         => $this->id,
                                     'message'    => $this->message,
                                     'alert_type' => $this->alert_type,
                                     'close'      => $this->close,
                                     'countdown'  => $this->countdown,
                                 ]);
        }

        return FALSE;
    }

}
