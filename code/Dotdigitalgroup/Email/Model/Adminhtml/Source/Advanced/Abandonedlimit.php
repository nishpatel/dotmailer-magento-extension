<?php

class Dotdigitalgroup_Email_Model_Adminhtml_Source_Advanced_Abandonedlimit
{

    /**
     * Available times.
     *
     * @var array
     */
    public $times = array(0, 1, 2, 3, 4, 5, 6, 12, 24, 36, 48, 60, 72, 84, 96, 108, 120, 240);

    /**
     * Send to campaign options hours.
     *
     * @return array
     */
    public function toOptionArray()
    {
        $result = $row = array();
        $i      = 0;
        foreach ($this->times as $one) {
            if ($i == 0) {
                $row = array('value' => $one,
                             'label' => Mage::helper('ddg')->__('No Limit'));
            } elseif ($i == 1) {
                $row = array(
                    'value' => $one,
                    'label' => Mage::helper('ddg')->__($one . ' Hour')
                );
            } else {
                $row = array(
                    'value' => $one,
                    'label' => Mage::helper('ddg')->__($one . ' Hours')
                );
            }

            $result[] = $row;
            $i++;
        }

        return $result;
    }
}
