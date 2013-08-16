<?php
/**
 * @file JQueryBack2Top.class.php
 * @package For legacy Cube Legacy 2.2
 * @version $Id: JQueryBack2Top.class.php ver0.01 2011/11/15  00:00:00 marine  $
 */

if (!defined('XOOPS_ROOT_PATH')) exit();

class jQueryBack2Top extends XCube_ActionFilter
{
	public function preBlockFilter()
	{
		$this->mRoot->mDelegateManager->add('Site.JQuery.AddFunction',array(&$this, 'addScript'));
	}

	public function addScript(&$jQuery)
	{
		$jQuery->addStylesheet('/common/back2top/back2top.css', true);
   	$jQuery->addScript('
			jQuery(\'<div id="back2top"><p><a href="#">GO TOP</a></p></div>\').appendTo(\'body\');
			jQuery(document).ready(function() {
				jQuery("#back2top").hide();
			 		jQuery(window).scroll(function () {
			  			if (jQuery(this).scrollTop() > 300) {
			   				jQuery("#back2top").fadeIn();
			  			} else {
			   				jQuery("#back2top").fadeOut();
			  			}
			 });
			 jQuery("#back2top a").click(function () {
			 	jQuery("body,html").animate({
			   		scrollTop: 0
			  		}, 1000);
			  	return false;
			 });

			  jQuery("a[href^=#]").click(function(){
			    var Target = $(this.hash);
			    var TargetOffset = $(Target).offset().top - 40;
			    jQuery("html,body").animate({
			      scrollTop: TargetOffset
			    }, 1000);
			    return false;
			  });

			});
		');
	}
//class END
}
?>
