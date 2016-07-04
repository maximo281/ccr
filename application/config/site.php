<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Site (by CI Bootstrap 3)
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views when calling
| MY_Controller's render() function.
|
| Each of them can be overrided from child controllers.
|
*/

$config['site'] = array(

	// Site name
	'name' => ' ',

	// Default page title
	// (set empty then MY_Controller will automatically generate one based on controller / action)
	'title' => '',

	// Default meta data (name => content)
	'meta'	=> array(
		'author'		=> 'Israel Millan (https://cborderless.com)',
		'description'	=> 'Consultoria , servicios, ccr'
	),

	// Default scripts to embed at page head / end
	'scripts' => array(
		'head'	=> array(
		),
		'foot'	=> array(
			'assets/js/jquery-1.11.2.min.js',
			'assets/js/jquery.circlechart.js',
			'assets/js/bootstrap.min.js',
			//'assets/dist/app.min.js',
			'assets/js/isotope.pkgd.min.js',
			'assets/js/jquery.validate.js',
			'assets/js/owl.carousel.min.js',
			'assets/js/wow.min.js',
			'assets/js/script.js',
                        'assets/js/prettyPhoto.js',
                        'assets/js/main.js',
                        'assets/js/custom.js',
                        'assets/js/plugins.js'
                        
		),
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			'assets/dist/app.min.css',
			'assets/css/bootstrap.min.css',
			'assets/css/font-awesome.min.css',
			'assets/css/owl.carousel.css',
			'assets/css/animate.css',
			'assets/css/owl.theme.css',
			'assets/css/main.css',
                        'assets/css/style.css',
                        'assets/css/icons.css',
			'assets/css/bootstrap-responsive.css',
			'assets/css/video-style.css',
                        'assets/css/prettyPhoto.css',
                        'assets/css/camera.css'

		)
	),

	// Multilingual settings (set empty array to disable this)
	'multilingual' => array(
		'default'		=> 'en',			// to decide which of the "available" languages should be used
		'available'		=> array(			// availabe languages with names to display on site (e.g. on menu)
			'en' => array(					// abbr. value to be used on URL, or linked with database fields
				'label'	=> 'English',		// label to be displayed on language switcher
				'value'	=> 'english',		// to match with CodeIgniter folders inside application/language/
			),
			'zh' => array(
				'label'	=> '繁體中文',
				'value'	=> 'traditional-chinese',
			),
			'cn' => array(
				'label'	=> '简体中文',
				'value'	=> 'simplified-chinese',
			),
		),
		'autoload'		=> array('general'),	// language files to autoload
	),

	// Google Analytics User ID (UA-XXXXXXXX-X)
	'ga_id' => '',
        //Servicios Israel Millan
        'services'=> array(
            'servicio1'=>array(
                        'titleServ' => 'Servicio 01',
                        'descServ'  => 'Descripcion de Servicio',
                        'icon'      => 'icon-cogs'
                            ),
            'Servicio2' => array(
                        'titleServ' => 'Servicio 02',
                        'descServ'  => 'Descripcion de Servicio 02',
                        'icon'      => 'icon-pencil'
            ),
            'Servicio3' => array(
                        'titleServ' => 'Servicio 03',
                        'descServ'  => 'Descripcion de Servicio 03',
                        'icon'      => 'icon-magic'
            ),
                        ),
           'works' => array(
                'work1' => array(
                        'id'   => '1',
                        'class'=> 'applications',
                        'img'  => '1.jpg'
                ),
                'work2' => array(
                        'id'    => '2',
                        'class' => 'music',
                        'img'   => '2.jpg'
                ),
                'work3' => array(
                        'id'    => '3',
                        'class' => 'illustration',
                        'img'   => '3.jpg'
                ),
                'work4' => array(
                        'id'    => '4',
                        'class' => 'logo',
                        'img'   => '4.jpg'
                ),
               ),
               'meet' => array(
                    'meet1' => array(
                        'id'=> '1',
                        'image'=>'m_01.jpg',
                        'name' => 'Nombre 01',
                        'cargo'=>'Cargo',
                        'descripcion'=>'Descripcion de el colaborador'
                    ),
                   'meet2' => array(
                        'id'=> '2',
                        'image'=>'m_02.jpg',
                        'name' => 'Nombre 02',
                        'cargo'=>'Cargo',
                        'descripcion'=>'Descripcion de el colaborador'
                    ),
                   'meet3' => array(
                        'id'=> '3',
                        'image'=>'m_03.jpg',
                        'name' => 'Nombre 03',
                        'cargo'=>'Cargo',
                        'descripcion'=>'Descripcion de el colaborador'
                    )
               ),
            //),

	// Menu items
	// (or directly update view file: applications/views/_partials/navbar.php)
	'menu' => array(
		'home' => array(
			'name'		=> 'Inicio',
			'url'		=> '#',
		),
                'Servicios'=>array(
                    'name' => 'Servicios',
                    'url' => '#service',
                ),
                'Empresas' => array(
                    'name' => 'Empresas',
                    'url' => '#works',
                ),
               'Equipo'=> array(
                   'name'=>'Equipo',
                   'url' => '#team'
                   ),
                'Contacto' => array(
                    'name' => 'Contacto',
                    'url' => '#contact'
                ),
		// Demo to add sections with subpages
		/*'demo' => array(
			'name'		=> 'Servicios',
			'url'		=> 'demo',
			'children'  => array(
				'Form (Basic)'			=> 'demo/form_basic',
				'Form (Bootstrap 3)'	=> 'demo/form_bs3',
				'Carousel'				=> 'demo/carousel',
				'Blog Posts'			=> 'demo/blog_posts',
				'Pagination'			=> 'demo/pagination',
				'Item 1'				=> 'demo/item/1',
				'Item 2'				=> 'demo/item/2',
				'Item 3'				=> 'demo/item/3',
				'Custom 404'			=> 'demo/non_existed',
			)
		),*/
		// end of demo
		/*'sign_up' => array(
			'name'		=> 'Sign Up',
			'url'		=> 'auth/sign_up',
		),
		'login' => array(
			'name'		=> 'Login',
			'url'		=> 'auth/login',
		),
		'works' => array(
			'name' => 'Nuestros Trabajos',
			'url'  => '#',
		),
		'team' => array(
			'name'  => 'Nuestro Equipo',
			'url'	=> '#',
		),*9
		'contact' => array(
			'name' => 'Contacto',
			'url'  => '#',
		),*/
	),

	// default page when redirect non-logged-in user
	'login_url' => 'auth/login',

	// restricted pages to specific groups of users, which will affect sidemenu item as well
	// pages out of this array will have no restriction
	'page_auth' => array(
		'account'		=> array('members')
	),

	// For debug purpose (available only when ENVIRONMENT = 'development')
	'debug' => array(
		'view_data'		=> FALSE,	// whether to display MY_Controller's mViewData at page end
		'profiler'		=> FALSE,	// whether to display CodeIgniter's profiler at page end
	),
);
