<?php 
use RainLab\Translate\Classes\Translator;
class Cms5f170682be90d916294431_81deac13418d5b712767a96a4472d3c9Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
