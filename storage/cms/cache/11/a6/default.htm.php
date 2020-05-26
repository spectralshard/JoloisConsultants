<?php 
use RainLab\Translate\Classes\Translator;
class Cms5ec80d7990fcb571747629_1e10a1c751e580e70c21dab987a10394Class extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $translator = Translator::instance();
    $lang = $translator->getLocale();
$this['lang'] = $translator->getLocale();
$this['site_url'] = asset('');
}
}
