<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category   SchumacherFM
 * @package    SchumacherFM_Mediamock
 * @copyright  Copyright (c) 2015 Cyrill at Schumacher dot fm
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * This class replaces Varien_Image with noop methods
 *
 * @category   SchumacherFM
 * @package    SchumacherFM_Mediamock
 * @author     Cyrill at Schumacher dot fm
 */
class SchumacherFM_Mediamock_Model_Processor
{

    /**
     * @param string $fileName
     * @param string $adapter Default value is GD2
     *
     */
    function __construct($fileName = null, $adapter = Varien_Image_Adapter::ADAPTER_GD2)
    {
        $this->_fileName = $fileName;
        if (isset($fileName)) {
            $this->open();
        }
    }

    /**
     * Opens an image and creates image handle
     *
     * @access public
     * @return void
     */
    public function open()
    {
        //Zend_Debug::dump($this->_fileName);
    }

    /**
     * Display handled image in your browser
     *
     * @access public
     * @return void
     */
    public function display()
    {
    }

    /**
     * Save handled image into file
     *
     * @param string $destination . Default value is NULL
     * @param string $newFileName . Default value is NULL
     *
     * @access public
     * @return void
     */
    public function save($destination = null, $newFileName = null)
    {
    }

    /**
     * Rotate an image.
     *
     * @param int $angle
     *
     * @access public
     * @return void
     */
    public function rotate($angle)
    {
    }

    /**
     * Crop an image.
     *
     * @param int $top    . Default value is 0
     * @param int $left   . Default value is 0
     * @param int $right  . Default value is 0
     * @param int $bottom . Default value is 0
     *
     * @access public
     * @return void
     */
    public function crop($top = 0, $left = 0, $right = 0, $bottom = 0)
    {
    }

    /**
     * Resize an image
     *
     * @param int $width
     * @param int $height
     *
     * @access public
     * @return void
     */
    public function resize($width, $height = null)
    {
    }

    public function keepAspectRatio($value)
    {
        return true;
    }

    public function keepFrame($value)
    {
        return true;
    }

    public function keepTransparency($value)
    {
        return true;
    }

    public function constrainOnly($value)
    {
        return true;
    }

    public function backgroundColor($value)
    {
        return array();
    }

    /**
     * Get/set quality, values in percentage from 0 to 100
     *
     * @param int $value
     *
     * @return int
     */
    public function quality($value)
    {
        return 75;
    }

    /**
     * Adds watermark to our image.
     *
     * @param string $watermarkImage        . Absolute path to watermark image.
     * @param int    $positionX             . Watermark X position.
     * @param int    $positionY             . Watermark Y position.
     * @param int    $watermarkImageOpacity . Watermark image opacity.
     * @param bool   $repeat                . Enable or disable watermark brick.
     *
     * @access public
     * @return void
     */
    public function watermark($watermarkImage, $positionX = 0, $positionY = 0, $watermarkImageOpacity = 30, $repeat = false)
    {
    }

    /**
     * Get mime type of handled image
     *
     * @access public
     * @return string
     */
    public function getMimeType()
    {
        return '';
    }

    /**
     * process
     *
     * @access public
     * @return void
     */
    public function process()
    {
    }

    /**
     * instruction
     *
     * @access public
     * @return void
     */
    public function instruction()
    {
    }

    /**
     * Set image background color
     *
     * @param int $color
     *
     * @access public
     * @return void
     */
    public function setImageBackgroundColor($color)
    {
    }

    /**
     * Set watermark position
     *
     * @param string $position
     *
     * @return Varien_Image
     */
    public function setWatermarkPosition($position)
    {
        return $this;
    }

    /**
     * Set watermark image opacity
     *
     * @param int $imageOpacity
     *
     * @return Varien_Image
     */
    public function setWatermarkImageOpacity($imageOpacity)
    {
        return $this;
    }

    /**
     * Set watermark width
     *
     * @param int $width
     *
     * @return Varien_Image
     */
    public function setWatermarkWidth($width)
    {
        return $this;
    }

    /**
     * Set watermark heigth
     *
     * @param int $heigth
     *
     * @return Varien_Image
     */
    public function setWatermarkHeigth($heigth)
    {

        return $this;
    }

    /**
     * Retrieve original image width
     *
     * @return int|null
     */
    public function getOriginalWidth()
    {
        return 99999;
    }

    /**
     * Retrieve original image height
     *
     * @return int|null
     */
    public function getOriginalHeight()
    {
        return 99999;
    }
}
