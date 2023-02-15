<div class="wrap ayukul-options">

	<h1><?php echo __( 'Theme Options Page', 'ayukul' ) ?></h1>

    <?php settings_errors(); ?>

    <form action="options.php" method="post">

        <?php settings_fields( 'ayukul_general_group' ); ?>

        <?php do_settings_sections( 'ayukul-options' ); ?>

        <?php submit_button(); ?>

    </form>

</div>
