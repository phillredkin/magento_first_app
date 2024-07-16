<?php
namespace Gymbeam\CaseStudy\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Greeting extends Template
{
    protected $scopeConfig;

    public function __construct(
        Template\Context $context,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getGreeting()
    {
        return $this->scopeConfig->getValue('gymbeam_casestudy/general/greeting', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
