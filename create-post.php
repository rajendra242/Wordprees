<?php
    session_start();
    $_SESSION["username"]="Rajendrasinh Rathod";
    
    echo $_SESSION["username"];
?>

<html>
    <form action="uplodad.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD  </button>
    </form>
</html>
































<!-- 

// require_once 'wp-load.php';
// $url = "http://localhost/wordpress/wordpress/wp-json/custom-plugin/appointment-book";
// $post_create = wp_remote_post($url, array(
    // "headers" => array(
        // "Authorization" => 'Basic'.("root:rathod4865"),
    // ),
    // "body"=>array(
        // "title" => "this is my post",
        // "content" => "this is content of my new post",
        // "status" => "publish"
    // )
// ));
// echo "<pre>";
    
// print_r($post_create);  
// /
// ?>


// $connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
// $db = mysqli_select_db($doctor); // Selecting Database from Server
// if(isset($_POST['http://localhost/wordpress/wordpress/wp-json/custom-plugin/appointment-book'])){ // Fetching variables of the form which travels in URL
// $name = $_POST['name'];
// $phone = $_POST['phon'];
// $email = $_POST['email'];
// $discription = $_POST['description'];
// if($name !=''||$email !=''){
//Insert Query of SQL
// $query = mysql_query("insert into wp_ea_appointments(name, phone,email,description) values ('$name', '$email', '$contact', '$address')");
// echo "<br/><br/><span>Data Inserted successfully...!!</span>";
// }
// else{
// echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
// }
// }
// mysqli_close($connection); // Closing Connection with Server
?> 




// $link = mysqli_connect("localhost", "root", "", "doctor");

//  if($link === false){
//     die("ERROR: Could not connect. ". mysqli_connect_error());
// }
 
// $new = "INSERT INTO wp_ea_fields (id,name,phone,email,description) VALUES
//             ('32', 'Rambo','54132', 'johnrambo@mail.com','hello')";
// if(mysqli_query($link, $sql)){
//     echo "Records added successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. ". mysqli_error($link);
// }
//  echo "RECORD";
// mysqli_close($link);
// global $wpdb;
// $table = $wp_->prefix.'wp_ea_appointments';
// $data = array('name' => 'rajvir','email' => 'rajvir@123' ,'phone' => 123, 'description' => 'hello' );
// $format = array('%s','%d', '%s','%s');
// $wpdb->insert($table,$data,$format);
// echo $wpdb



// $new = mysqli_connect("localhost", "root", ""); 
// mysqli_select_db("Doctor");

// $sql = mysqli_query("INSERT INTO wp_ea_appointments ('name',phone,'email','discription')
//     VALUES ('Rambo', 54132, 'johnrambo@mail.com','hello')"); 
// echo $sql;
// echo "hello";


?>