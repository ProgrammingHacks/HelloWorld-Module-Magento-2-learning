<?php


namespace ProgrammingHacks\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    public function test()
    {
        return "This is from HelloWorld Block";
    }
}
