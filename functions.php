<?php

/*==========================================
Theme
==========================================*/

require get_template_directory() . '/includes/theme/pre_init.php';

/*==========================================
Dashboard
==========================================*/

require get_template_directory() . '/includes/dashboard/clean_admin.php';

/*==========================================
Custom Post Types
==========================================*/

require get_template_directory() . '/includes/custom_post_types/speakers.php';
require get_template_directory() . '/includes/custom_post_types/sessions.php';
require get_template_directory() . '/includes/custom_post_types/experts.php';
require get_template_directory() . '/includes/custom_post_types/news.php';
require get_template_directory() . '/includes/custom_post_types/sponsors.php';

/*==========================================
Plugin Customization
==========================================*/

require get_template_directory() . '/includes/plugin_customization/acf.php';

/*==========================================
Helpers
==========================================*/

require get_template_directory() . '/includes/helpers/prepare_rest_fields.php';

/*==========================================
Endpoints
==========================================*/

require get_template_directory() . '/includes/endpoints/menus.php';
require get_template_directory() . '/includes/endpoints/page.php';
require get_template_directory() . '/includes/endpoints/options.php';
require get_template_directory() . '/includes/endpoints/speakers.php';


