<?php 
use RainLab\Translate\Classes\Translator;
class Cms5ebc21b281b3d248520130_db86c696d87cbdd1aafc1e0bcb30a732Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
