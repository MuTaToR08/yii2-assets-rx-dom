<?php
namespace mutator08\assets;

class RxDomAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/rx-dom/dist';
	public $js = [
    "dist/rx.dom.js",
    "dist/rx.dom.compat.js"];
	public $depends = ['mutator08\assets\RxJsAsset'];
}