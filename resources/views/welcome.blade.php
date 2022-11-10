<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Online Tool Chest</title>
</head>
<body>
    @include('layouts.navigation')
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="p-6 bg-white border-b border-gray-200 mt-3">
                    <img src="{{ URL('/img/gear-wrench.png') }}" alt="">
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="p-6 bg-white border-b border-gray-200 mt-3">
                    <p class="text-2xl">Welcome to your new <b><i>online</i></b> tool tracker!</p>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="p-6 bg-white border-b border-gray-200 mt-1">
                    <p class="text-lg">Keep track of all your shop supplies in one easy and convient way.</p>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="p-6 bg-white border-b border-gray-200 mt-3">
                    <img src="{{ URL('/img/handDrawnTools.png') }}" alt="">
                </div>
                <div class="p-6 bg-white border-b border-gray-200 mt-3">
                    <img src="{{ URL('/img/hangingTools.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex">
                <div class="p-6 bg-white border-b border-gray-200 mt-3">
                    <p class="text-lg">Have you ever been at the store and forgot if you
                        already have one of what ever shop tool you're looking at?</p>
                </div>
                <div class="p-6 bg-white border-b border-gray-200 mt-3">
                    <p class="text-lg"><b>Well this is your solution!</b></p>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-1">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="p-6 bg-white border-b border-gray-200 mt-4">
                    <p class="text-2xl">How to begin:</p>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white mt-3">
                    <p class="text-xl">First:</p>
                </div>
                <div class="px-6 py-1 bg-white">
                    <p>Head on up to that guest button and go ahead and register for an account through the register button.</p>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white mt-3">
                    <p class="text-xl">Second:</p>
                </div>
                <div class="px-6 py-1 bg-white">
                    <p>Create at least one category, one group, and a brand, so you have a way to
                        describe the tool you are about to add.</p>
                    <p>You can do this from each of the corresponding tabs and the create <i>XXXX</i> button.</p>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white mt-3">
                    <p class="text-xl">Third:</p>
                </div>
                <div class="px-6 py-1 bg-white">
                    <p>Go ahead to the Tool Tab and add your first tool through the "Create Tool" button.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
