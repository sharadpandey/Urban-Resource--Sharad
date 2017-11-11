<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <section class="error-404 not-found">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="error_section">
                        <h1>Page Not Found</h1>
                        <p>The page you requested could not be found.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="error_cntnt">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="error_btm_cntnt">
                        <h1>404</h1>
                        <p>We are sorry, but the page you were looking for doesn't exist.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer();