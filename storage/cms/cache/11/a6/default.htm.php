<?php 
use RainLab\Translate\Classes\Translator;
class Cms5eaef18a74190281922788_d659fd95b1d851c8a0d26f464042ad4bClass extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
