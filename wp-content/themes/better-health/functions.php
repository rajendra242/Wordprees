<?php
/**
 * Better Health functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Canyon Themes
 * @subpackage Better Health
 */

if (!function_exists('better_health_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function better_health_setup()
    {
        /*
         * Make theme available for translation.
        */

         load_theme_textdomain( 'better-health' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */

        add_theme_support('post-thumbnails');
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'better-health'),
            'social-link' => esc_html__('Social Link', 'better-health'),
        ));

        /*
             * Switch default core markup for search form, comment form, and comments
             * to output valid HTML5.
             */
        add_theme_support('html5', array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));


        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('better-health_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
    }
endif;
add_action('after_setup_theme', 'better_health_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function better_health_content_width()
{
    $GLOBALS['content_width'] = apply_filters('better_health_content_width', 640);
}

add_action('after_setup_theme', 'better_health_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function better_health_widgets_init()
{


    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'better-health'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'better-health'),
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));


    register_sidebar(array(
        'name' => esc_html__('Home Page Widget Area', 'better-health'),
        'id' => 'better-health-home-page',
        'description' => esc_html__('Add widgets here to appear in Home Page', 'better-health'),
        'before_widget' => '',
        'after_widget' => '',

    ));

    register_sidebar(array(
        'name' => esc_html__('Our Treatment Gallery Page Widget Area', 'better-health'),
        'id' => 'better-health-treatment-gallery',
        'description' => esc_html__('Add widgets here to appear in Treatment Gallery Page', 'better-health'),
        'before_widget' => '',
        'after_widget' => '',

    ));

       register_sidebar(array(
        'name' => esc_html__('Footer 1', 'better-health'),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here.', 'better-health'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 2', 'better-health'),
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here.', 'better-health'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 3', 'better-health'),
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here.', 'better-health'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));


    register_sidebar(array(
        'name' => esc_html__('Footer 4', 'better-health'),
        'id' => 'footer-4',
        'description' => esc_html__('Add widgets here.', 'better-health'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
}

add_action('widgets_init', 'better_health_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function better_health_scripts()
{

    /*Bootstrap*/
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.5.1');

    wp_enqueue_style('bootstrap-dropdownhover', get_template_directory_uri() . '/assets/css/bootstrap-dropdownhover.min.css', array(), '4.5.0');

    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '4.5.0');

   /*google font  */
     wp_enqueue_style('better-health-googleapis', 'https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800|Roboto:300,400', array(), null);

    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '4.5.0');

    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '4.5.0');

    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '4.5.0');

    wp_enqueue_style('better-health-style', get_stylesheet_uri());

    wp_enqueue_style('better-health-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '4.5.0');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true);

    wp_enqueue_script('bootstrap-dropdownhover', get_template_directory_uri() . '/assets/js/bootstrap-dropdownhover.min.js', array('jquery'), '20151215', true);

    wp_enqueue_script('jquery-isotope', get_template_directory_uri() . '/assets/js/jquery.isotope.min.js', array('jquery'), '20151215', true);

    wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquery'), '20151215', true);

    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '20151215', true);

    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '20151215', true);

    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '20151215', true);
       
    wp_enqueue_script('better-health-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'better_health_scripts');

/**
 * Implement the default Function.
 */
require get_template_directory() . '/inc/customizer/default.php';

/**
 * Implement the default file.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Bootstrap Navwalder class.
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * Customizer Home layout.
 */
require get_template_directory() . '/layouts/homepage-layout/better-health-home-layout.php';

/**
 * Load Reset css file
 */
require get_template_directory() . '/inc/hooks/reset-css.php';

/**
 * Load Theme function.
 */
require get_template_directory() . '/inc/theme-function.php';

/**
 * Load breadcrumb_trail File
 */
if (!function_exists('breadcrumb_trail')) {
   require get_template_directory() . '/library/breadcrumbs/breadcrumbs.php';
}

/**
 * Load Dynamic css File
 */

include get_template_directory() . '/inc/hooks/dynamic-css.php';

/**
 * Load Dynamic css File
 */

include get_template_directory() . '/inc/hooks/tgm.php';


/**
 * define size of logo.
 */

if (!function_exists('better_health_custom_logo_setup')) :
    function better_health_custom_logo_setup()
    {
        add_theme_support('custom-logo', array(
            'height' => 290,
            'width' => 70,
            'flex-height' => true,
            'flex-width' => true
        ));
    }

    add_action('after_setup_theme', 'better_health_custom_logo_setup');
endif;



/**
 * Exclude category in blog/archive page
 *
 * @since Better Health 1.0.0
 *
 * @param null
 * @return int
 */
if (!function_exists('better_health_exclude_category_in_blog_page')) :
    function better_health_exclude_category_in_blog_page($query)
    {

        if ($query->is_home && $query->is_main_query()) {
            $catid = better_health_get_option('better_health_exclude_cat_blog_archive_option');
            $exclude_categories = $catid;
            if (!empty($exclude_categories)) {
                $cats = explode(',', $exclude_categories);
                $cats = array_filter($cats, 'is_numeric');
                $string_exclude = '';
                echo $string_exclude;
                if (!empty($cats)) {
                    $string_exclude = '-' . implode(',-', $cats);
                    $query->set('cat', $string_exclude);
                }
            }
        }
        return $query;
    }
endif;
add_filter('pre_get_posts', 'better_health_exclude_category_in_blog_page');    


/**
 * Load Dynamic css file.
 */
$dynamic_css_options = better_health_get_option('better_health_color_reset_option');

if ($dynamic_css_options == "do-not-reset" || $dynamic_css_options == "") {

    include get_template_directory() . '/inc/hooks/dynamic-css.php';

} elseif ($dynamic_css_options == "reset-all") {
    do_action('better_health_colors_reset');
}


/**
 * Load TGM File
*/
require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

$active_plugins = (array) get_option( 'active_plugins', array() );
if ( ! empty( $active_plugins ) && in_array( 'polylang/polylang.php', $active_plugins ) ) {

    //header
    pll_register_string('Top Header Address', 'Top Header Address', 'Top Header');
    pll_register_string('Top Header Mobile', 'Top Header Mobile', 'Top Header');
    pll_register_string('Top Header Email', 'Top Header Email', 'Top Header');
    pll_register_string('Top Header Appointment Text', 'Top Header Appointment Text', 'Top Header');

    //index.php
    pll_register_string('Page Title', 'Page Title', 'Index');

    //searchform
    pll_register_string('Search Placeholder', 'Search Placeholder', 'Searchform');

    //section-slider
    pll_register_string('Slider View More Text', 'Slider View More Text', 'Slider');
    pll_register_string('Get Started Text', 'Get Started Text', 'Slider');

    //footer
    pll_register_string('Copyright', 'Copyright', 'Footer');
    pll_register_string('Footer Button Text', 'Footer Button Text', 'Footer');
    pll_register_string('Footer Address Label', 'Footer Address Label', 'Footer');
    pll_register_string('Footer Address', 'Footer Address', 'Footer');
    pll_register_string('Footer Phone Number Label', 'Footer Phone Number Label', 'Footer');
    pll_register_string('Footer Phone Number', 'Footer Phone Number', 'Footer');
    pll_register_string('Footer Email Label', 'Footer Email Label', 'Footer');
    pll_register_string('Footer Email', 'Footer Email', 'Footer');
    pll_register_string('Contact', 'Contact Title', 'Footer');
    pll_register_string('Contact', 'Contact Subtitle', 'Footer');
}

// ==================

add_action( 'rest_api_init', 'register_api_hooks' );
add_action('init', 'start_session', 1);

function start_session() {
    if(!session_id()) {
    session_start();
    }
}
    
    
function register_api_hooks() {

    register_rest_route(

     'custom-plugin', 
     '/login/',
      array(
        'methods'  => 'GET',
        'callback' => 'login',
        )
    );
    register_rest_route(

        'custom-plugin', 
        '/id/',
         array(
           'methods'  => 'POST',
           'callback' => 'id',
           )
       );
    
    register_rest_route(
        'custom-plugin', 
        '/appointment-book',
         array(
            'methods'  => 'POST',
           'callback' => 'addAppointent')
           
    );
    register_rest_route(
        'custom-plugin', 
        '/userbookingappointments/',
        array(
        'methods'  => 'GET',
        'callback' => 'Userappointments'),
        
        // header("Access-Control-Allow-Origin:http://localhost:4200/Home");

    ); 
    register_rest_route(
        'custom-plugin', 
        '/logout/',
        array(
        'methods'  => 'GET',
        'callback' => 'logout')
    ); 
    register_rest_route(
        'custom-plugin', 
        '/fatchdata/',
        array(
        'methods'  => 'GET',
        'callback' => 'fatchdata')
    ); 
    register_rest_route(
        'custom-plugin', 
        '/update/',
        array(
        'methods'  => 'PUT',
        'callback' => 'update')
    ); 
    register_rest_route(
        'custom-plugin', 
        '/delete/',
        array(
        'methods'  => 'DELETE',
        'callback' => 'delete')
    ); 
    register_rest_route(
        'custom-plugin', 
        '/newuser/',
        array(
        'methods'  => 'POST',
        'callback' => 'newuser')
    ); 
    register_rest_route(
        'custom-plugin', 
        '/forgotpass/',
        array(
        'methods'  => 'PUT',
        'callback' => 'forgotpass')
    ); 
    register_rest_route(
        'custom-plugin', 
        '/conform/',
        array(
        'methods'  => 'GET',
        'callback' => 'conform')
    ); 
    register_rest_route(
        'custom-plugin', 
        '/accept/',
        array(
        'methods'  => 'PUT',
        'callback' => 'accept')
    ); 
    register_rest_route(
        'custom-plugin', 
        '/cancelled/',
        array(
        'methods'  => 'PUT',
        'callback' => 'cancelled')
    ); 
    register_rest_route(
        'custom-plugin', 
        '/email/',
        array(
        'methods'  => 'POST',
        'callback' => 'email')
    ); 
    register_rest_route(
        'custom-plugin', 
        '/newfor/',
        array(
        'methods'  => 'POST',
        'callback' => 'newfor')
    ); 
    register_rest_route(
        'custom-plugin', 
        '/OTP/',
        array(
        'methods'  => 'GET',
        'callback' => 'OTP')
    ); 
    
}



function login($request){
    session_start();

    // echo session_id();
        //  $creds = array();
             $creds['user_login'] = $request["username"];
             $creds['user_password'] =  $request["password"];
            //  $creds['remember'] = true;
             $user = wp_signon($creds,false);
                
            //  $food = (array)$user
            //  var_dump($food);
            // if($request["username"] == '' || $request["password"] == '' ){
            //     $required = "authenticaion Request";
            //     http_response_code(401);
            //     echo $required;
            //     exit;
            // }else{
            //     // echo "login success";
            // }

            // if($request["usernmae"] !== $creds['user_login']){
            //     $required = "bad Request";
            //     http_response_code(400);
            //     echo $required;
            //     exit;
            // }

            // $_SESSION['user_data'] = $user -> ID;
            // var_dump($_SESSION['user_data']);
            $_SESSION['username_log'] = $creds['user_login'];
            $_SESSION['password_log'] = $creds['user_password'];
             
            if ( is_wp_error($user) )
            echo $user->get_error_message();
            return $user;
    
}
function OTP($request){ 

    $user_email = $_GET['user_email'];
    $random_number = $_GET['random_number'];
    // var_dump($user_email);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctor";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT random_number,date_time FROM wp_forgot WHERE user_email = '$user_email' AND random_number = '$random_number' 
    AND NOW() <= DATE_ADD(date_time, INTERVAL 60 SECOND)";
    $result = mysqli_query($conn, $sql);
    $json_array = array();
    // if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {            
            $json_array[] = $row;
            $json = json_encode($json_array,true);
        }
        $decod = json_decode($json);
        // var_dump($decod);
        $otp = ($decod[0]->random_number);
        // var_dump($otp);
        $date_time = ($decod[0]->date_time);

        if($otp === $random_number){
            echo "OTP IS Varifed";
        }else{
            echo "Try Again";
        }
       mysqli_close($conn);
       $conn->close();

}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function newfor($request){

    $user_email = $_POST['user_email'];
    $email = $user_email;
    $digits = $_POST['digits'];
    $digits = mt_rand(100000, 999999);
    $otp = $digits;
    $today = date("Y-m-d H:i:s");                  
    $con = mysqli_connect('localhost','root','','doctor');
    $qy= "INSERT INTO wp_forgot (user_email,random_number,date_time) 
    VALUES ('$user_email','$digits',now())";
    
    if ($con->query($qy) === TRUE) {
        $last_id = $con->insert_id;
        // var_dump($last_id);
        // echo $last_id;
    } 
    else {
        echo "Error: " . $qy . "<br>" . $con->error;
    }


    require('C:/xampp/htdocs/wordpress/wordpress/wp-content/themes/better-health/PHPMailer-master/PHPMailerAutoload.php');
    require("C:/xampp/htdocs/wordpress/wordpress/wp-content/themes/better-health/PHPMailer-master/src/PHPMailer.php");
    require("C:/xampp/htdocs/wordpress/wordpress/wp-content/themes/better-health/PHPMailer-master/src/SMTP.php");

    $mail = new PHPMailer(true);
    try{
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'rajendrasinhrathod779@gmail.com';                     
        $mail->Password   = 'r1a2t3h4o5d6';                               
        $mail->SMTPSecure = 'ssl';         
        $mail->Port       = 465;           


        $emaiadd = 'rajendrasinhrathod.rao@gmail.com';
        $mail->setFrom('rajendrasinhrathod779@gmail.com', 'Rajendrasinh');
        $mail->addAddress($user_email);     

        $mail->isHTML(true);                                  
        $mail->Subject = 'This Email From PHPMailer';
        $mail->Body    = $otp;
        $mail->AltBody = 'Wellcom To RaoInfotech';
        
        $mail->send();
            // print_r( 'Message has been sent');
    } 
    catch (Exception $e)
    {
        // print_r("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
    }

       
        
}
function id($request){
    $location = $_POST['location'];
    $service = $_POST['service'];
    $worker = $_POST['worker'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $end_date = $_POST['end_date'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $user = $_POST['user'];
    $price = $_POST['price'];
    $userID = $_POST['userID'];

    if($name == '' || $email == '' || $phone == '' || $description == ""){
        $required = "BAD Request";
         http_response_code(400);
         echo $required;
         exit;
    }elseif($name == '' && $email == ''){
        echo error_log('status 400 BAD request');   
    }elseif(!preg_match("/^[a-zA-Z]+$/",$name)){
        echo "plese enter valid name";  
    }elseif(!preg_match("/^[0-9]{10}$/", $phone)){
        echo "enter valid phone number";
    }else{
        
        $con = mysqli_connect('localhost','root','','doctor');
        $qy= "INSERT INTO wp_ea_appointments (location,service,worker,name , email , phone ,date,start,end,end_date,description,status,user,price,userID) 
        VALUES ('$location','$service','$worker',
                '$name' , '$email' , '$phone' ,
                '$date','$start','$end',
                '$end_date','$description',
                '$status','$user','$price',
                 '$userID')";

        if ($con->query($qy) === TRUE) {
            $last_id = $con->insert_id;
            // var_dump($last_id);
        echo $last_id;
        } 
        else {
        echo "Error: " . $qy . "<br>" . $con->error;
        }
    }

}



function Userappointments($request){
    //  var_dump($request);

    $json = $request->get_headers();
    // var_dump($json);

    // echo " <h1> Yash </h1>";     
    // echo "<br> hello";

    // echo $json['auth'];

    // $user_req_email = '';
    foreach($json as $key => $feature) {
        if($key == 'auth'){
            $user_email = $feature[0];
        }      
    } 


    // echo $user_email."<br>";
    // print_r($user_email);

    // if($user_email){
    //     echo $user_email;
    //  exit();
    // }


    
    $jason = json_encode($_SESSION['user_data']); 
    //  $userID = $_SESSION['user_data'];
     $userID = $_GET['userID'];
    // $login = $_GET['user_login'];
    // var_dump($login);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctor";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // $check_Email = "SELECT user_email FROM wp_users WHERE user_login = $login";
    // $result = mysqli_query($conn, $check_Email);
    // $Newj = array();
    // while($row = mysqli_fetch_assoc($result)){
    //     $Newj [] = $row;
    //     $json = json_encode($Newj);
    //     print_r($json);
    //     if($user_email = $json){
    //         var_dump($json);
    //         echo "True";
    //     }else{
    //         echo "False";
    //     }
    // }

    // $email = "rajendrasinhrathod779@gmail.com";
    // $stmt = $pdo->prepare("SELECT * FROM wp_users WHERE email=?");
    // $stmt->execute([$email]); 
    // $user = $stmt->fetch();
    // var_dump($user);
    // if ($user) {
    //     echo 'email found';
    // } else {
    //     echo 'or not';
    // } 
    
    // $email = mysqli_query($conn,$check_Email);
    
    // $array = array();
    // while($row = mysqli_fetch_assoc($email)){
    //     $array[] = $row;
    //     $json = json_encode($array);
    //     $new_Email = $user_email;
    // }
    // if($new_Email !== $json){
    //     echo "OPPS!";
    // }else{
    //     echo "Done";
    // }
    //  print_r($json);
    //  if($json == $user_email){
    //      echo "This email is in database";
    //  }else{
    //      echo "this is not right email";
    //  }

        // if($row = mysqli_fetch_assoc($check_Email)){
        //     echo "DONE EMAIL IS THIS HEAER";
        // }else{
        //     echo "Try Again";
        // }


        $sql = "SELECT id,name, email, phone,description,status FROM wp_ea_appointments WHERE userID = $userID";
        $result = mysqli_query($conn, $sql);
        $json_array = array();

        // if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
          
                $json_array[] = $row;
                $json = json_encode($json_array);

                         
            }
            echo $json;
           mysqli_close($conn);
           $conn->close();
}
function conform($request){
    $userID = $_GET['userID'];
    // var_dump($userID);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctor";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT name, email, phone,description,date,start,end,status FROM wp_ea_appointments WHERE userID = $userID";
        $result = mysqli_query($conn, $sql);
        $json_array = array();

        // if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
          
                $json_array[] = $row;
                $json = json_encode($json_array);

                         
            }
            echo $json;
           mysqli_close($conn);
           $conn->close();

}

function forgotpass($request){
    $user_email = $_GET['user_email'];
    // var_dump($user_email);
    // print_r($email)."<br>";
    // $user_pass = $_POST['user_pass'];
    // $user_pass = md5($user_pass);
    // var_dump($user_pass);


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctor";
        
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    parse_str(file_get_contents("php://input"),$_PUT);
    // print_r($_PUT);
    // $json_array[] = $_PUT;
    // $json = json_encode($json_array);
    // echo $json;

    $sql = $conn->query("UPDATE wp_users SET
    user_pass = '".md5($_PUT['user_pass'])."'
    WHERE id= 73");    
    if($sql==true){ 
        echo "Records was updated successfully.";
    } else{ 
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    } 
    return $data;
}
function fatchdata($request){
    $id = $_GET['id'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctor";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        $sql = "SELECT name, email, phone,description FROM wp_ea_appointments WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $json_array[] = $row;
            echo json_encode($json_array);
        }
    mysqli_close($conn);
    $conn->close();
}



function update($request){
    $id = $_GET['id'];
    var_dump($id);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctor";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    parse_str(file_get_contents('php://input'),$_PUT);

    $json_array[] = $_PUT;
    $json = json_encode($json_array);
    echo $json;

    $sql = $conn->query("UPDATE wp_ea_appointments SET
    name='".$_PUT['name']."',
    email='".$_PUT['email']."',
    phone='".$_PUT['phone']."',
    description='".$_PUT['description']."'
    WHERE id= $id");
    
    if($sql==true){ 
        echo "Records was updated successfully.";
        
    } else{ 
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    } 
    return $data;
}

function delete($request){
    $id = $_GET['id'];
    var_dump($id);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctor";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM wp_ea_appointments WHERE id=$id";

    $query = mysqli_query($conn,$sql);
    
    if ($query === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

}

function newuser($request){

    $user_login = $_POST['user_login'];
    $user_pass = $_POST['user_pass'];
    $user_nicename = $_POST['user_nicename'];
    $user_email = $_POST['user_email'];
    $user_registered = $_POST['user_registered'];
    $display_name = $_POST['display_name'];
    
    $user_pass = wp_hash_password("$user_pass");

    // $dt= date("Y-m-d h:i:sa");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctor";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $con = mysqli_connect('localhost','root','','doctor');

        $qy= "INSERT INTO  wp_users (user_login,user_pass,user_nicename,user_email,user_registered,display_name) 
        VALUES ('$user_login','$user_pass','$user_nicename','$user_email','$user_registered','$display_name')";

        if ($con->query($qy) === TRUE) {
            echo "data successfullu insert";
        } 
        else {
            echo "Error: " . $qy . "<br>" . $con->error;
        }
}




function logout(){
    session_destroy();
}

function accept($request){

    $id = $_GET['id'];
    var_dump($id);
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctor";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $con = mysqli_connect('localhost','root','','doctor');

    parse_str(file_get_contents('php://input'),$_PUT);

        
    $sql = ("UPDATE wp_ea_appointments SET
    status='confirmed'
    WHERE id= $id");
    $result = mysqli_query($con, $sql);
    if($result==true){ 

        echo "Records was updated successfully.";
        
    } else{ 
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    } 
    return $data;


}

function cancelled($request){

    $id = $_GET['id'];
    var_dump($id);
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doctor";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $con = mysqli_connect('localhost','root','','doctor');

    parse_str(file_get_contents('php://input'),$_PUT);

        
    $sql = ("UPDATE wp_ea_appointments SET
    status='cancelled'
    WHERE id= $id");
    $result = mysqli_query($con, $sql);
    if($result==true){ 

        echo "Records was updated successfully.";
        
        
    } else{ 
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    } 
    return $data;


}
function email($request){
    $email = $_GET['email'];

    $newemail = include 'PHPMailer-master/index.php';
}

 add_action( 'after_setup_theme', 'custom_login' );
//  ======================= 



add_action( 'init', 'handle_preflight' );

function handle_preflight() {
    header("Access-Control-Allow-Origin: ");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Credentials: true");

    if ( 'OPTIONS' == $_SERVER['REQUEST_METHOD'] ) {
        status_header(200);
        exit();
    }
}





