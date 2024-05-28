<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name')}}</title>

        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- If you have a larger or different format favicon, you can include it as well -->
        <link rel="icon" href="./assets/images/logo.png" type="image/png">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
        


        @vite('resources/css/app.css')
    </head>
<body class="bg-200">
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center ">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                <div>
                    <img src="{{asset('assets/images/logo.png')}}"
                        class="w-mx-auto"/>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-full flex-1">
                        <div class="flex mb-5 flex-col items-center -mt-5 font-sans text-md">
                        {{ config('app.name')}}
                        </div>
                        <div class="mx-auto max-w-xs">
                            <input
                                class="w-full px-5 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                type="email" placeholder="Email" />
                            <input
                                class="w-full px-5 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                type="password" placeholder="Password" />
                            <button
                                class="bg-600 border  border-black mt-10 tracking-wide font-semibold  text-white-500 w-full py-4 rounded-lg hover:bg-green-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                <svg class="w-6 h-6 -ml-2" fill="none" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                    <circle cx="8.5" cy="7" r="4" />
                                    <path d="M20 8v6M23 11h-6" />
                                </svg>
                                <span class="ml- text-white">
                                    Sign In
                                </span>
                            </button>
                            <p class="mt-4 text-sm text-gray-600 text-center">
                                Don't have an account? <a
                                        href="{{ route('login') }}"
                                        class="rounded-md text-black ">
                                        Log in
                                    </a>
                               
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 bg-600 text-center hidden lg:flex rounded-br-lg rounded-tr-lg">
                <div class="m-12 xl:m-20 w-full bg-contain text-white  font-sans font-normal bg-center bg-no-repeat">
                    <div class="bg-contain font-normal fonts-sans text-2xl font-agbalumo">
                        Student Classroom Management System
                    </div>
                    <div class="mx-auto text-justify mt-10 tracking-wider">
                        <p>
                            The Student Classroom Management System (SCMS) is an innovative software solution designed to streamline and enhance the educational experience for
                            both students and educators. This comprehensive platform integrates various functionalities to manage classroom activities, monitor student progress, 
                            and facilitate effective communication.
                        </p><br>
                        <p>
                        SCMS offers a centralized dashboard where educators can easily create, distribute, and manage assignments. Teachers can track student submissions, grade
                        assignments, and provide feedback promptly. The system also supports automated grading for multiple-choice and other objective-type questions, saving 
                        valuable time for educators.
                        </p><br>

                        <p>
                        Additionally, SCMS includes analytics tools that provide insights into student performance at both individual and class levels. 
                        These insights help educators to tailor their teaching strategies to meet the specific needs of their students, thereby improving learning outcomes.
                        </p><br>

                        <p>
                        Overall, the Student Classroom Management System is a valuable asset for modern educational institutions, enhancing efficiency, fostering better 
                        communication, and supporting data-driven decision-making.
                        </p>
                    
                    </div>
                </div>
            
        </div>
    </div>
    </body>
</html>
