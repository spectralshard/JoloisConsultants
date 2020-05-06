<?php 
use RainLab\Translate\Classes\Translator;
class Cms5eb2f0c7dd36b521058970_eba3072a0bb6a289c9912be76fcaaf35Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
