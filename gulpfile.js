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

elixir(function(mix) {
    mix.styles([
    	'../admin/plugins/bootstrap/css/bootstrap.min.css',
    	'../admin/css/AdminLTE.min.css',
    	'../admin/css/skins/_all-skins.min.css',
    	'../admin/plugins/iCheck/flat/blue.css',
    	'../admin/plugins/morris/morris.css',
    	'../admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
    	'../admin/plugins/datepicker/datepicker3.css',
    	'../admin/plugins/daterangepicker/daterangepicker-bs3.css',
    	'../admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
    ], 'public/admin/css');

    mix.scripts([
        '../admin/plugins/jQuery/jQuery-2.1.4.min.js',
        '../admin/plugins/jQueryUI/jquery-ui-1.10.3.min.js',
        '../admin/plugins/bootstrap/js/bootstrap.min.js',
        '../admin/plugins/slimScroll/jquery.slimscroll.min.js',
        '../admin/plugins/fastclick/fastclick.min.js',
        '../admin/plugins/datatables/jquery.dataTables.min.js',
        '../admin/plugins/datatables/dataTables.bootstrap.min.js',
        '../admin/plugins/datatables/dataTables.bootstrap.min.js',
        '../admin/js/app.min.js',
    ], 'public/admin/js');
});
