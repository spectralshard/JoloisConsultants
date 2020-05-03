<?php 
use RainLab\Translate\Classes\Translator;
class Cms5eaef999248d9509153417_7819296626494ffe8699ce64d3f1d190Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
