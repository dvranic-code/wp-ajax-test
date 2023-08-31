<?php
add_action( 'wp_ajax_sign_up_form', 'sign_up_form_handler' );

function sign_up_form_handler() {
	
    $name = $_POST['name'];
    $email = $_POST['email'];

    $user_data = [
        'user_login' => $email,
        'user_pass' => wp_hash_password( 'landing-page-signup' ),
        'display_name' => $name,
    ];

    $user_id = wp_insert_user($user_data);

    echo 'Thank you ' . $name . ', for signing up to our news letter.';
}
