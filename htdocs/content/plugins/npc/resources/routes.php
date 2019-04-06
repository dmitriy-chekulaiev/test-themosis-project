<?php

use Themosis\Facades\Route;

/**
 * Plugin custom routes conditions.
 */
function is_guest () {
    return !is_user_logged_in();
}
add_filter('themosisRouteConditions', function ($conds) {
    $conds['guest'] = 'is_guest';
    return $conds;
});


//trials
Route::get('trials', 'TrialsController@index');
Route::get('trials/{slug}', 'TrialsController@single');

/**
 * Filters for WP-API
 */
//Disable WP REST API JSON endpoints if user not logged in
function chuck_disable_rest_endpoints( $access ) {
    if( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_cannot_access', __( 'Only authenticated users can access the REST API.', NPC_TD ), array( 'status' => rest_authorization_required_code() ) );
    }
    return $access;
}
add_filter( 'rest_authentication_errors', 'chuck_disable_rest_endpoints' );