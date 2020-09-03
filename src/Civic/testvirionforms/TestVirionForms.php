<?php
declare(strict_types=1);

namespace Civic\testvirionforms;

use pocketmine\plugin\PluginBase;
class TestVirionForms extends PluginBase{

    protected function onEnable(){
        new TestSimpleForm();
    }
}