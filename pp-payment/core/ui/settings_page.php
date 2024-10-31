<div class="wrap">
	
	<?php screen_icon( 'prospress' ); ?>
	<h2><?php _e( 'Payment Settings', 'prospress'); ?></h2>
	
	<?php if( isset( $updated_message ) ) { ?>
		<div id='message' class='updated fade'>
			<p><?php echo $updated_message; ?></p>
		</div>
	<?php } ?>
	
	<form id='pp_invoice_settings_page' method='POST'>
		<table class="form-table">
			<tr>
				<th><?php _e('Default Tax Label:', 'prospress'); ?></th>
				<td>
					<?php echo pp_invoice_draw_inputfield('pp_invoice_custom_label_tax', get_option('pp_invoice_custom_label_tax')); ?>
					<?php _e( 'The name of tax in your country. eg. VAT, GST or Sales Tax.', 'prospress'); ?>
				</td>
			</tr>		
			<tr>
				<th><?php _e( 'Using Godaddy Hosting', 'prospress'); ?></th>
				<td>
					<input type="checkbox" name="pp_invoice_using_godaddy" id="pp_invoice_using_godaddy" value="true" <?php checked( get_option('pp_invoice_using_godaddy'), 'true' );?> />
					<?php _e( 'A special proxy must be used for credit card transactions on GoDaddy servers.', 'prospress'); ?>
				</td>
			</tr>
			<tr>
				<th><label for="pp_invoice_force_https"><?php _e('Use SSL:', 'prospress' ); ?></label></th>
				<td>
				<input type="checkbox" name="pp_invoice_force_https" id="pp_invoice_force_https" value="true" <?php checked( get_option('pp_invoice_force_https'), 'true' );?> />
				<?php _e('You should use SSL to secure the payment page if offering credit card as a payment option.', 'prospress' ); ?>
				<a href="http://www.godaddy.com/Compare/gdcompare_ssl.aspx" title="SSL Certificates from GoDaddy" class="wp_invoice_click_me"><?php _e('Do you need an SSL Certificate?', 'prospress'); ?></a>
				</td>
			</tr>
		</table>
		<h3><?php _e( 'Email Templates', 'prospress'); ?></h3>
		<table class="form-table pp_invoice_email_templates">
			<tr>
				<th><?php _e("<b>Invoice Notification</b> Item", 'prospress') ?></th>
				<td><?php echo pp_invoice_draw_inputfield('pp_invoice_email_send_invoice_subject', get_option('pp_invoice_email_send_invoice_subject')); ?></td>
			</tr>
			<tr>
				<th><?php _e("<b>Invoice Notification</b> Content", 'prospress') ?></th>
				<td><?php echo pp_invoice_draw_textarea('pp_invoice_email_send_invoice_content', get_option('pp_invoice_email_send_invoice_content')); ?></td>
			</tr>
		</table>
	<div class="clear"></div>
	<p class="submit">
		<input type="submit" value="Save Settings" name="pp-invoice-settings-submit" class="button-primary">
	</p>
	</form>
</div>