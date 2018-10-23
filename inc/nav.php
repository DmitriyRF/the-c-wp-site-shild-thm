<?php

if (!defined('ABSPATH')) {
    exit;
}

add_filter('et_html_logo_container', 'et_custom_logo');
function et_custom_logo($logo_container)
{

    $logo_container .= '<!-- menu insert Start -->
        <div class="top-header-second-menu">
            <a href="#" class="second-nav-block">
                <div class="nav-icon-block">
                    <span class="nav-icon-calendar"></span>
                </div>
                <div class="nav-text-block">
                    <span class="nav-cta">Schedule an</span>
                    <span class="nav-cta-desc">Appontment</span>
                </div>
            </a>
            <a href="#" class="second-nav-block">
                <div class="nav-icon-block">
                    <span class="nav-icon-phone"></span>
                </div>
                <div class="nav-text-block">
                    <span class="nav-cta"> Call Us Today!</span>
                    <span class="nav-cta-desc">(512)535-5016</span>
                </div>
            </a>
            <div class="second-nav-block">
                <a href="#" class="nav-social-inline">
                    <span class="nav-icon-circle  nav-icon-twitter"></span>
                </a>
                <a href="#" class="nav-social-inline">
                    <span class="nav-icon-circle  nav-icon-facebook"></span>
                </a>
                <a href="#" class="nav-social-inline">
                    <span class="nav-icon-circle nav-icon-google-plus"></span>
                </a>
            </div>
        </div>

    <!-- menu insert end -->';

    return $logo_container;
}