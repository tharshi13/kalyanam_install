<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2017-10-02 04:40:04
Compiled file from: C:\Bitnami\wampstack-7.1.8-0\apache2\htdocs\pH7CMS-8.0.6\_protected\app/system/modules/user\views/base\tpl\setting\privacy.tpl
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
?><div class="col-md-10"> <?php PrivacyForm::display() ;?> <p class="s_tMarg small"> <a href="<?php $design->url('user','setting','delete') ;?>"><?php echo t('Want to delete your account...?'); ?></a> </p></div>