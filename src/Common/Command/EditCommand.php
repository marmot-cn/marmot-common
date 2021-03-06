<?php
namespace Marmot\Common\Command;

use Marmot\Interfaces\ICommand;

abstract class EditCommand implements ICommand
{
    public $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
}
