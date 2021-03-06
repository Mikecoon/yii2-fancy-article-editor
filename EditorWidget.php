<?php
/**
 * Created by PhpStorm.
 * User: Mike Finch
 * Date: 29.03.2018
 * Time: 13:36
 *
 */

namespace mikefinch\fancyArticleEditor;

use yii\helpers\Html;

class EditorWidget extends \yii\widgets\InputWidget {

    private $content;

    public function init() {
        parent::init();

        EditorWidgetAsset::register($this->view);
        $this->content = json_decode($this->model->getAttribute($this->attribute));
    }

    public function run() {
        parent::run(); // TODO: Change the autogenerated stub

        return $this->render("editor", [
            'content' => $this->content,
            'input' => Html::activeInput("hidden", $this->model, $this->attribute, $this->options),
        ]);
    }


}