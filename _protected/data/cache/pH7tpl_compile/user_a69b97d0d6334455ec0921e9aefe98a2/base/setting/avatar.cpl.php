<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2017-10-02 04:40:04
Compiled file from: C:\Bitnami\wampstack-7.1.8-0\apache2\htdocs\pH7CMS-8.0.6\_protected\app/system/modules/user\views/base\tpl\setting\avatar.tpl
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
?><div class="col-md-8"> <?php $avatarDesign->lightBox($username, $first_name, $sex, 400) ;?> <?php if($is_admin_auth AND !$is_user_auth) { ?> <?php LinkCoreForm::display(t('Remove the profile photo?'), null, null, null, array('del'=>1)) ;?> <?php } else { ?> <?php LinkCoreForm::display(t('Remove the profile photo?'), 'user', 'setting', 'avatar', array('del'=>1)) ;?> <?php } ?> <?php AvatarForm::display() ;?> <p><span class="underline err_msg"><?php echo t('Warning:'); ?></span> <?php echo t('Your profile photo must contain a photo of you under penalty of banishment of your account!'); ?></p> <?php if($is_webcam_enabled) { ?> <p class="s_tMarg bold"><a href="<?php $design->url('webcam','webcam','picture') ;?>"><?php echo t('Want to take a photo of yourself directly with your webcam?'); ?></a></p> <?php } ?></div>