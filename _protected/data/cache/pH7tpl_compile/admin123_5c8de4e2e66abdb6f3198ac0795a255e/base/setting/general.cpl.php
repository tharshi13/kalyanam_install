<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2017-10-02 04:21:55
Compiled file from: C:\Bitnami\wampstack-7.1.8-0\apache2\htdocs\pH7CMS-8.0.6\_protected\app/system/modules/admin123\views/base\tpl\setting\general.tpl
Template Engine: PH7Tpl version 1.3.0 by Pierre-Henry Soria
*/
/***************************************************************************
 *     pH7CMS Social Dating CMS | By Pierre-Henry Soria
 *               --------------------
 * @since      Mon Mar 21 2011
 * @author     SORIA Pierre-Henry
 * @email      hello@ph7cms.com
 * @link       https://ph7cms.com
 * @copyright  (c) 2011-2017, Pierre-Henry Soria. All Rights Reserved.
 * @license    Creative Commons Attribution 3.0 License - http://creativecommons.org/licenses/by/3.0/
 ***************************************************************************/
?><ol id="toc"> <li><a href="#general"><span><?php echo t('General Settings'); ?></span></a></li> <li><a href="#logotype"><span><?php echo t('Logo'); ?></span></a></li> <li><a href="#registration"><span><?php echo t('Registration'); ?></span></a></li> <li><a href="#pic_vid"><span><?php echo t('Picture and Video'); ?></span></a></li> <li><a href="#moderation"><span><?php echo t('Moderation'); ?></span></a></li> <li><a href="#email"><span><?php echo t('Email'); ?></span></a></li> <li><a href="#security"><span><?php echo t('Security'); ?></span></a></li> <li><a href="#spam"><span><?php echo t('Spam'); ?></span></a></li> <li><a href="#api"><span><?php echo t('API'); ?></span></a></li> <li><a href="#automation"><span><?php echo t('Automation'); ?></span></a></li></ol><?php SettingForm::display() ;?><script> /* Check if the Setting page is loading from 'p=registration' * If so, scroll down to show the "Default Membership Group" first (this is used by the Payment module) */ var sHash = location.hash.substr(1); if (sHash == 'p=registration') { var $target = $('body'); $target.animate({scrollTop:$target.height()}, 1000); }</script>