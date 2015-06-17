var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var plugin_path = '../../../public/plugins/';
var admin_path = '../admin/';
var admin_locator = 'public/admin/';

elixir(function(mix) {
    mix.styles([
    	plugin_path    +'bootstrap/css/bootstrap.min.css',
    	admin_path     +'css/AdminLTE.min.css',
    	admin_path     +'css/skins/_all-skins.min.css',
    	plugin_path    +'iCheck/flat/blue.css',
    	plugin_path    +'morris/morris.css',
    	plugin_path    +'jvectormap/jquery-jvectormap-1.2.2.css',
    	plugin_path    +'datepicker/datepicker3.css',
    	plugin_path    +'daterangepicker/daterangepicker-bs3.css',
        plugin_path    +'bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
    	plugin_path    +'datatables/dataTables.bootstrap.css',
    ],  admin_locator  +'css');

    mix.scripts([
        plugin_path     +'jQuery/jQuery-2.1.4.min.js',
        plugin_path     +'jQueryUI/jquery-ui-1.10.3.min.js',
        plugin_path     +'bootstrap/js/bootstrap.min.js',
        plugin_path     +'slimScroll/jquery.slimscroll.min.js',
        plugin_path     +'datatables/jquery.dataTables.min.js',
        plugin_path     +'datatables/dataTables.bootstrap.min.js',
        plugin_path     +'fastclick/fastclick.min.js',
        admin_path      +'js/app.min.js',
    ],  admin_locator   +'js');

    mix.version(['admin/css/all.css', 'admin/js/all.js'])
});
