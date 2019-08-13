<?php
/**
 *
 * Version			: 1.0.4
 * Edition 			: Community 
 * Compatible with 	: Magento 1.5.x to latest
 * Developed By 	: Magebassi
 * Email			: magebassi@gmail.com
 * Web URL 			: www.magebassi.com
 * Extension		: Magebassi Easy Banner slider
 * 
 */
?>
<?php

class Bassi_Imageslider_Block_About
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{

    /**
     * Render fieldset html
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
		$logopath	=	'http://www.magentocommerce.com/images/avatars/uploads/avatar_179510.png';
        $html = <<<HTML
		<div style="background:url('$logopath') no-repeat scroll 14px 14px #EAF0EE;border:1px solid #CCCCCC;margin-bottom:10px;padding:10px 5px 5px 164px;">
		<p>
			<strong>Magento Web Development and PREMIUM FREE/PAID MAGENTO EXTENSIONS</strong><br />
			<a href="http://www.magebassi.com/" target="_blank">Magebassi</a> offers a wide choice of nice-looking and easily editable free and premium Magento extensions.<br />       
		</p>
		<p>
			You can <a href="http://www.magebassi.com/index.php/contacts/">Contact Us</a> for magento web development and customize new magento extensions per your requirement.			
		</p>
		<p>
			<b>Magento Development:</b> We are expert in Magento, you may contact us for Installation, configuration, customization and any other magento tasks.
		</p>
		<p>
			<b>Magento IMS:</b> BrightPearl, Channel Advisor and Linnworks Integration. 
		</p>
		<p>
			<b>Magento App Development:</b> Magento Iphone and Android App Development.
		</p>
		
		<p>
			My extensions on <a href="http://www.magentocommerce.com/magento-connect/developer/magebassi#extensions" target="_blank">MagentoConnect</a><br />
			</p>
			<p>For any questions or quote please email us at <a href="mailto:magebassi@gmail.com">magebassi@gmail.com</a> or Skype: magebassi</p>
			<br />
			<p>To add the banner slider, please add the below codes for specific location:<br /><br />
			
			<b>Code for CMS and Static blocks:</b><br />
			{{block type='imageslider/imageslider' template='imageslider/imageslider.phtml'}}
			<br /><br />
			<b>Code for Template files:</b><br />
			&#60;&#63;php echo &#36;this->getLayout()->createBlock('imageslider/imageslider')->setTemplate('imageslider/imageslider.phtml')->toHtml(); ?> 
			<br /><br />
			<b>Code for layout XML files (need to add in reference content):</b><br />
			&#60block type="imageslider/imageslider" template="imageslider/imageslider.phtml">&#60/block>
			
		</div>
HTML;
        return $html;
    }
}