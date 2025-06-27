<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome To Tech Forum</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>

    <body class="bg-gray-50 dark:bg-gray-900">
        <header>
            @include('layouts.navigation')
        </header>

        <main class="pt-20"> <!-- Add padding-top to account for fixed navbar -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="text-center mb-8">
                    <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Welcome to Tech Forum</h1>
                    <p class="text-lg text-gray-600 dark:text-gray-300">Explore our gallery of tech content</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Left Column -->
                    <div class="space-y-4">
                        <!-- Reddit-style Card 1 -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow duration-200">
                            <div class="flex">
                                <!-- Vote section -->
                                <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-l-lg">
                                    <button class="text-gray-400 hover:text-orange-500 transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <span class="text-sm font-bold text-gray-700 dark:text-gray-300 my-1">44K</span>
                                    <button class="text-gray-400 hover:text-blue-500 transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Content section -->
                                <div class="flex-1 p-4">
                                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 mb-2">
                                        <span class="font-medium">r/mildlyinteresting</span>
                                        <span class="mx-1">•</span>
                                        <span>Posted by u/techuser</span>
                                        <span class="mx-1">•</span>
                                        <span>21 hr. ago</span>
                                    </div>

                                    <h3
                                        class="text-lg font-semibold text-gray-900 dark:text-white mb-3 hover:text-blue-600 dark:hover:text-blue-400 cursor-pointer">
                                        My pinky toe has turned sideways over the years.
                                    </h3>

                                    <div class="mb-4">
                                        <img class="w-full max-w-sm rounded-lg"
                                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                                            alt="Post image">
                                    </div>

                                    <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                                        <button
                                            class="flex items-center space-x-1 hover:text-gray-700 dark:hover:text-gray-300">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>4.7K Comments</span>
                                        </button>
                                        <button
                                            class="flex items-center space-x-1 hover:text-gray-700 dark:hover:text-gray-300">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                            </svg>
                                            <span>Share</span>
                                        </button>
                                        <button
                                            class="flex items-center space-x-1 hover:text-gray-700 dark:hover:text-gray-300">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                            </svg>
                                            <span>Save</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reddit-style Card 3 -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow duration-200">
                            <div class="flex">
                                <!-- Vote section -->
                                <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-l-lg">
                                    <button class="text-gray-400 hover:text-orange-500 transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <span class="text-sm font-bold text-gray-700 dark:text-gray-300 my-1">892</span>
                                    <button class="text-gray-400 hover:text-blue-500 transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Content section -->
                                <div class="flex-1 p-4">
                                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 mb-2">
                                        <span class="font-medium">r/webdev</span>
                                        <span class="mx-1">•</span>
                                        <span>Posted by u/frontendguru</span>
                                        <span class="mx-1">•</span>
                                        <span>12 hr. ago</span>
                                    </div>

                                    <h3
                                        class="text-lg font-semibold text-gray-900 dark:text-white mb-3 hover:text-blue-600 dark:hover:text-blue-400 cursor-pointer">
                                        Just finished my first full-stack Laravel + React project!
                                    </h3>

                                    <div class="mb-4">
                                        <img class="w-full max-w-sm rounded-lg"
                                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
                                            alt="Project screenshot">
                                    </div>

                                    <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm leading-relaxed">
                                        After 3 months of learning, I finally completed my first full-stack application.
                                        It's a simple task management app, but I'm proud of what I've accomplished!
                                    </p>

                                    <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                                        <button
                                            class="flex items-center space-x-1 hover:text-gray-700 dark:hover:text-gray-300">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>127 Comments</span>
                                        </button>
                                        <button
                                            class="flex items-center space-x-1 hover:text-gray-700 dark:hover:text-gray-300">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                            </svg>
                                            <span>Share</span>
                                        </button>
                                        <button
                                            class="flex items-center space-x-1 hover:text-gray-700 dark:hover:text-gray-300">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                            </svg>
                                            <span>Save</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-4">
                        <!-- Reddit-style Card 2 -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow duration-200">
                            <div class="flex">
                                <!-- Vote section -->
                                <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-l-lg">
                                    <button class="text-gray-400 hover:text-orange-500 transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <span class="text-sm font-bold text-gray-700 dark:text-gray-300 my-1">2.3K</span>
                                    <button class="text-gray-400 hover:text-blue-500 transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Content section -->
                                <div class="flex-1 p-4">
                                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 mb-2">
                                        <span class="font-medium">r/programming</span>
                                        <span class="mx-1">•</span>
                                        <span>Posted by u/developer123</span>
                                        <span class="mx-1">•</span>
                                        <span>5 hr. ago</span>
                                    </div>

                                    <h3
                                        class="text-lg font-semibold text-gray-900 dark:text-white mb-3 hover:text-blue-600 dark:hover:text-blue-400 cursor-pointer">
                                        Noteworthy technology acquisitions 2025: What developers need to know
                                    </h3>

                                    <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm leading-relaxed">
                                        Here are the biggest enterprise technology acquisitions of 2025 so far, and how
                                        they might impact the development landscape. From AI startups to cloud
                                        infrastructure companies...
                                    </p>

                                    <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                                        <button
                                            class="flex items-center space-x-1 hover:text-gray-700 dark:hover:text-gray-300">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>486 Comments</span>
                                        </button>
                                        <button
                                            class="flex items-center space-x-1 hover:text-gray-700 dark:hover:text-gray-300">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                            </svg>
                                            <span>Share</span>
                                        </button>
                                        <button
                                            class="flex items-center space-x-1 hover:text-gray-700 dark:hover:text-gray-300">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                            </svg>
                                            <span>Save</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Card for Right Column -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow duration-200">
                            <div class="flex">
                                <!-- Vote section -->
                                <div class="flex flex-col items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-l-lg">
                                    <button class="text-gray-400 hover:text-orange-500 transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <span class="text-sm font-bold text-gray-700 dark:text-gray-300 my-1">1.5K</span>
                                    <button class="text-gray-400 hover:text-blue-500 transition-colors">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Content section -->
                                <div class="flex-1 p-4">
                                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 mb-2">
                                        <span class="font-medium">r/technology</span>
                                        <span class="mx-1">•</span>
                                        <span>Posted by u/techguru</span>
                                        <span class="mx-1">•</span>
                                        <span>8 hr. ago</span>
                                    </div>

                                    <h3
                                        class="text-lg font-semibold text-gray-900 dark:text-white mb-3 hover:text-blue-600 dark:hover:text-blue-400 cursor-pointer">
                                        The future of AI in web development: What to expect in 2025
                                    </h3>

                                    <div class="mb-4">
                                        <img class="w-full max-w-sm rounded-lg"
                                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                                            alt="AI Technology">
                                    </div>

                                    <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm leading-relaxed">
                                        Artificial Intelligence is revolutionizing how we build web applications. From
                                        automated code generation to intelligent debugging tools, here's what developers
                                        should know...
                                    </p>

                                    <div class="flex items-center space-x-4 text-sm text-gray-500 dark:text-gray-400">
                                        <button
                                            class="flex items-center space-x-1 hover:text-gray-700 dark:hover:text-gray-300">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>342 Comments</span>
                                        </button>
                                        <button
                                            class="flex items-center space-x-1 hover:text-gray-700 dark:hover:text-gray-300">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                            </svg>
                                            <span>Share</span>
                                        </button>
                                        <button
                                            class="flex items-center space-x-1 hover:text-gray-700 dark:hover:text-gray-300">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                            </svg>
                                            <span>Save</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>
