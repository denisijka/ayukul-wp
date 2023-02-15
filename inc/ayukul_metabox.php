<?php

function ayukul_add_metabox() {
    add_meta_box( 'ayukul_metabox-1', __( 'Post Data', 'ayukul' ), 'ayukul_add_metabox_cb', array( 'post' ) );
}

function ayukul_add_metabox_cb( $post ) {
    wp_nonce_field( 'ayukul_action', 'ayukul_nonce' );

    // $read_minutes = (int) get_post_meta( $post->ID, 'read_minutes', true );
    $is_featured  = get_post_meta( $post->ID, 'is_featured', true );

    ?>

    <table class="form-table">
        <tbody>

     <!--    <tr>
            <th><label for="read_minutes"><?php esc_html_e( 'Number of minutes to read', 'ayukul' ); ?></label></th>
            <td><input type="number" min="0" id="read_minutes" name="read_minutes" class="regular-text"
                       value="<?php echo $read_minutes ?>"></td>
        </tr> -->

        <tr>
            <th><label for="is_featured"><?php esc_html_e( 'Add to featured posts', 'ayukul' ); ?></label></th>
            <td><input type="checkbox" id="is_featured" name="is_featured" class="regular-text" <?php checked( 'yes', $is_featured )?>></td>
        </tr>

        </tbody>
    </table>

    <?php

}

add_action( 'add_meta_boxes', 'ayukul_add_metabox' );

function ayukul_save_metabox( $post_id ) {

    if ( ! isset( $_POST['ayukul_nonce'] ) || ! wp_verify_nonce( $_POST['ayukul_nonce'], 'ayukul_action' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( ! empty( $_POST['read_minutes'] ) ) {
        update_post_meta( $post_id, 'read_minutes', (int) $_POST['read_minutes'] );
    } else {
        delete_post_meta( $post_id, 'read_minutes' );
    }

    if ( isset( $_POST['is_featured'] ) && $_POST['is_featured'] == 'on' ) {
        update_post_meta( $post_id, 'is_featured', 'yes' );
    } else {
        delete_post_meta( $post_id, 'is_featured' );
    }

}
add_action( 'save_post', 'ayukul_save_metabox' );
