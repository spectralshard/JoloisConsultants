<?php 
use RainLab\Translate\Classes\Translator;
class Cms5eb9a82ef37b2993317098_d399c185e412870f6cdf9a15d0ac7b8cClass extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
