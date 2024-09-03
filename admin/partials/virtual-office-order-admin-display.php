<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://christophercasper.com/
 * @since      1.0.0
 *
 * @package    Virtual_Office_Order
 * @subpackage Virtual_Office_Order/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
  <h1>Virtual Office Order Settings</h1>
  <?php
  // Let see if we have a caching notice to show
  $admin_notice = get_option('virtual_office_order_admin_notice');
  if($admin_notice) {
    // We have the notice from the DB, lets remove it.
    delete_option( 'virtual_office_order_admin_notice' );
    // Call the notice message
    $this->admin_notice($admin_notice);
  }
  if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] ){
    $this->admin_notice("Your settings have been updated!");
  }
  ?>
  <form method="POST" action="options.php">
  <?php
    settings_fields('virtual_office_order-options');
    do_settings_sections('virtual_office_order-options');
    submit_button();
  ?>
  </form>
</div>