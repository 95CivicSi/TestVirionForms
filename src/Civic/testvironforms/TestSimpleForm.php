<?php
declare(strict_types=1);

namespace Civic\testvironforms;


use BreathTakinglyBinary\libDynamicForms\Form;
use BreathTakinglyBinary\libDynamicForms\SimpleForm;
use pocketmine\Player;

class TestSimpleForm extends SimpleForm{

    public function __construct(string $title = "", ?Form $previousForm = null){
        parent::__construct($title, $previousForm);
    }

    public function onResponse(Player $player, $data) : void{
        // TODO: Implement onResponse() method.
    }
}