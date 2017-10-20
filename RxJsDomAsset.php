<?php
namespace mutator08\assets;

class RxJsDomAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/rxjs-dom/dist';
	public $js = [
    "dist/rx.dom.js",
    "dist/rx.dom.compat.js"];
}