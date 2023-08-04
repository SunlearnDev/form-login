<?php
// http://localhost/learnPhp/form-dangky/sinup.php
    session_start();
  
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            
          <img class="mx-auto h-10 w-auto" src="https://i.pinimg.com/474x/61/8a/74/618a7401f69608d55b14c46e15efbc4b.jpg" alt="Your Company">
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign Up to your account</h2>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="#" method="POST">
            <?php
             if(isset($_POST['submit'])){
              $email = $_POST['email'];
              $pass = $_POST['password'];
              $cpass = $_POST['cpassword'];
              if($email== "" && $pass== "" && $cpass== ""){?>
                <div class="block transition duration-700 ease-in-out">         
                <label  class="flex  text-sm font-medium leading-6 w-full rounded-md border-0 p-1.5 text-rose-500 bg-rose-200"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-rose-500 mr-1 ">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                  </svg>Email or password cannot be blank</label>
                </div>
                <?php
              }else {?>
                <div class="hidden transition duration-700 ease-in-out">
                <label  class="flex  text-sm font-medium leading-6 w-full rounded-md border-0 p-1.5 text-rose-500 bg-rose-200"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-rose-500 ">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                  </svg>Email or password cannot be blank</label>
                </div>
              <?php }
            }?>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') 
              {
              $email = $_POST['email'];
              $pass = $_POST['password'];
              if(!empty($_SESSION['user'])){
                $_SESSION['user']=[];
              }
              $_SESSION['user'][$email]=$pass;?>
              <div class="block  transition duration-700 ease-in-out">
              <label  class="flex text-sm font-medium leading-6 w-full rounded-md border-0 p-1.5 text-green-500 bg-green-200"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500 mr-1">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
              </svg>Successful <?php echo $email ?> account registration</label>
              </div>
              
                <script>
        // Sử dụng hàm setTimeout để chuyển trang sau 3 giây
                   setTimeout(function() {
                window.location.href = "index.php"; // Thay "new_page.php" bằng URL trang bạn muốn chuyển đến
                   }, 3000); // 3000ms = 3 giây
                 </script>
              <?php }
                ?>
            <div>
              
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
              <div class="mt-2">
                <input id="email" name="email" type="email"  class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
      
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password"  class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Enter the password</label>
              </div>
              <div class="mt-2">
                <input id="password" name="cpassword" type="cpassword"  class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div>
              <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
            </div>
          </form>
          <p class="mt-10 text-center text-sm text-gray-500"> 
            <a href='login.php' class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Log In Now</a>
          </p>
        </div>
      </div>
</body>
