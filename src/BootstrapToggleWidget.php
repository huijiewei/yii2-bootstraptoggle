<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/8/26
 * Time: 09:52
 */

namespace huijiewei\bootstraptoggle;

use yii\widgets\InputWidget;

class BootstrapToggleWidget extends InputWidget
{
    public $checked = false;

    public function init()
    {
        parent::init();

        $this->options = ArrayHelper::merge([
            'class' => 'form-control',
            'data-toggle' => 'toggle',
        ], $this->options);

        BootstrapToggleAsset::register($this->getView());
    }

    public function run()
    {
        if ($this->hasModel()) {
            return Html::activeCheckbox($this->model, $this->attribute, $this->options);
        } else {
            return Html::checkbox($this->name, $this->checked, $this->options);
        }
    }
}