<?php
namespace AHT\HelloWorld\Block;

class Helloworld extends \Magento\Framework\View\Element\Template
{   
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }
  
    public function getText()
  {   
      return __('Hello world!');
  }
}