<?php
 
namespace Evincemage\Contactmap\Model;
 
class Saveimage extends \Magento\Config\Model\Config\Backend\Image
{
    /**
     * Directory path
     */
    
    const UPLOAD_DIR = 'evincemage/contactmap';
 
    /**
     * Max file upload size
     *
     */
    protected $_maxFileSize = 2048;
 
    /**
     * Return directory path
     */
    protected function _getUploadDir()
    {
        return $this->_mediaDirectory->getAbsolutePath($this->_appendScopeInfo(self::UPLOAD_DIR));
    }
 
    protected function _addWhetherScopeInfo()
    {
        return true;
    }
 
}
