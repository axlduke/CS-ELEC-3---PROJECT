
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Project</title>
</head>
<body>
    <!-- <div id="loader" class="building-blocks">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div> -->
    <nav id="content" class="bg-slate-800 w-full py-3 px-10">
        <div class="flex justify-between items-center bg-slate-800 w-full py-3 px-10">
            <div>
                <a href="index.php">
                    <h1 class="text-white text-2xl">BLog</h1>
                </a>
            </div>
            <div>
                <form action="" method="post">
                    <input type="text" class="py-2 ease-in-out duration-300 rounded-full pl-5 text-black outline-0 border-4 border-[#46E0EA] w-72">
                    <i class="uil uil-search text-white text-2xl"></i>
                </form>
            </div>
            <div>
                <a href="#_">
                    <i class="uil uil-user-square text-[#46E0EA] text-2xl">Account</i>
                </a>
                <a href="">
                    <i class="uil uil-signout text-white text-2xl hover:text-[#46E0EA] ease-in-out duration-300">Log out</i>
                </a>
            </div>
        </div>
    </nav>
    <section class="flex bg-gray-600 p-10 h-screen">
            <div class="container mx-auto ">
                <div class="md:flex no-wrap md:-mx-2 ">
                    <!-- Left Side -->
                    <div class="w-full md:w-3/12 md:mx-2">
                        <!-- Profile Card -->
                        <div class="bg-white p-3 border-t-4 border-[#46E0EA]">
                            <div class="image overflow-hidden">
                                <img class="h-auto w-full mx-auto"
                                    src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                                    alt="profile">
                            </div>
                            <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Admin</h1>
                        </div>
                        <!-- End of profile card -->
                        <div class="my-4"></div>
                    </div>
                    <!-- Right Side -->
                    <div class="w-full md:w-9/12 mx-2 h-64">
                        <!-- Profile tab -->
                        <!-- About Section -->
                        <div class="bg-white p-3 shadow-sm rounded-sm">
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                <span clas="text-green-500">
                                    <i class="uil uil-clipboard-alt text-black text-2xl"></i>
                                </span>
                                <span class="tracking-wide">Post</span>
                            </div>
                            <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                                    <div class="w-full md:w-full px-3 mb-2 mt-2">
                                        <textarea name="title" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 pt-1 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Type Title' required></textarea>
                                    </div>
                                    <div class="w-full md:w-full px-3 mb-2 mt-2">
                                        <textarea name="post" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Type Your Comment' required></textarea>
                                    </div>
                                    <div class="w-full md:w-full flex items-start md:w-full px-3">
                                        <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                                        <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <p class="text-xs md:text-sm pt-px">Think before you post.</p>
                                        </div>
                                        <div class="-mr-1">
                                        <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value='Post Comment'>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End of about section -->

                        <div class="my-4"></div>

                        <!-- Experience and education -->
                        <div class="bg-white p-3 shadow-sm rounded-md">
                            <div class="flex items-start px-4 py-6">
                                <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg" alt="profile">
                                <div class="">
                                    <div class="flex items-center justify-between">
                                        <h2 class="text-lg font-semibold text-gray-900 -mt-1">Admin </h2>
                                    </div>
                                    <p class="text-gray-700">Title post </p>
                                    <p class="mt-3 text-gray-700 text-sm">
                                        title comment
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End of profile tab -->
                    </div>
                </div>
            </div>
    </section>
</body>
</html>