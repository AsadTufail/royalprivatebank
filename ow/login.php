<?php require_once('../connect.php');
if(empty($_COOKIE['username']))
{ } else{ } 
if(isset($_POST['send'])) {
$a=htmlspecialchars($_POST["myusername"]);
$b=$_POST["mypasswor"];	 
$myusername=stripslashes($a);
$mypassword=md5($b);  
setcookie('username', $_POST['myusername'], time()+60*60*24*30, '/');
setcookie('password',$_POST['mypasswor'], time()+60*60*24*30, '/');
$query="SELECT * FROM admin WHERE username='$myusername' AND password='$b'";
$result=$conn->query($query);
if($result->num_rows>0) {
while ($row=$result->fetch_assoc()) {
$u2=$row["username"]; $sta=$row["status"];

$_SESSION["u2"]=$u2;
unset($_SESSION['ilog2']);
$_SESSION['ilog']=1;
header('location:index.php');

}} else{
    $_SESSION['ilog2']=2;
    unset($_SESSION['ilog']);
  } } 
  
 ?>
 
 
 
 <!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Windmill Dashboard</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/tailwind.output.css" />
   
    <script src="../assets/js/init-alpine.js"></script>
  </head>
  <body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full dark:hidden"
              src="assets/img/login-office.jpeg"
              alt="Office"
            />
            <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="assets/img/login-office-dark.jpeg"
              alt="Office"
            />
          </div>
		  
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
			<form autocomplete="off" method="POST">
			
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
			  <?php if(isset($_SESSION['ilog'])){
            echo "";
            } ?>
            <?php if(isset($_SESSION['ilog2'])){
            echo "<h6 style='background-color:red;' class='alert alert-warning'><center>Incorrect username 
            or password,please <a href='login.php'>retry </a></center></h6>";
            } 
            
            ?>   
			
                Login
              </h1>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Owner</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe" name="myusername"
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Password</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="***************" name="mypasswor"
                  type="password"
                />
              </label>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit"  name="send"
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
               
              >
                Log in as administrator
              </button>

              <hr class="my-8" />

             
              </form>

             
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
