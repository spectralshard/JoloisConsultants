<?php 
use RainLab\Translate\Classes\Translator;
class Cms5ea0f77c9d7f8246088305_430a42e61b0c1cfc6edfb63e7ba89717Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
