<?php

namespace Magelearn\FastContact\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Contact\Block\ContactForm;
use Magelearn\FastContact\Helper\Data as DataHelper;

class Settings extends ContactForm
{
    protected $dataHelper;

    /**
     * @param Context $context
     * @param Data $dataHelper
     * @param array $data
     */
    public function __construct(Context $context, DataHelper $dataHelper, array $data)
    {
        $this->dataHelper = $dataHelper;
        parent::__construct($context, $data);
    }

    /**
     * @return $this
     */
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * Module activation
     * @return boolean
     */
    public function isModuleActive()
    {
        return (boolean) $this->dataHelper->getConfig('magelearn_fastcontact/functional/enable');
    }

    /**
     * Get message
     * @return string
     */
    public function getMessage()
    {
        return $this->dataHelper->getConfig('magelearn_fastcontact/content/message');
    }

    /**
     * Get icon
     * @return string
     */
    public function getIcon()
    {
        return $this->dataHelper->getConfig('magelearn_fastcontact/design/icon');
    }
}
