<?php

?>
<!-- component -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
            <div class="container px-6 py-8 mx-auto">
                <p class="text-xl text-center text-gray-500 dark:text-black-300">
                     taken
                </p>

                <h1 class="mt-4 text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-black">deze taken moet jij nog doen!</h1>
            
                
                <div class="mt-6 space-y-8 xl:mt-12">
                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto border cursor-pointer rounded-xl dark:border-gray-700">
                        <div class="flex items-center">
                        <div class="line">
                        <input type="checkbox" class="my-checkbox" value="1" />
                            </div>

                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-black-200">voeg water toe</h2>
                            </div>
                        </div>
                        
                        <h2 class="text-2xl font-semibold text-gray-500 sm:text-4xl dark:text-vlack-200"><span class="text-base font-medium">zonnebloem</span></h2>
                    </div>

                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto border cursor-pointer rounded-xl dark:border-gray-700">
                        <div class="flex items-center">
                            <input type="checkbox" class="my-checkbox" value="1" />

                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-black-200">De bak er af halen</h2>
                            </div>
                        </div>
                        
                        <h2 class="text-2xl font-semibold text-gray-500 sm:text-4xl dark:text-vlack-200"><span class="text-base font-medium">basilicum</span></h2>
                    </div>

                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto border cursor-pointer rounded-xl dark:border-gray-700">
                        <div class="flex items-center">
                            <input type="checkbox" class="my-checkbox" value="1" />

                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-black-200">Zaadjes bij vullen</h2>
                            </div>
                        </div>
                        
                        <h2 class="text-2xl font-semibold text-gray-500 sm:text-4xl dark:text-black-200"><span class="text-base font-medium">paardenbloem</span></h2>
                    </div>

                    <div class="flex justify-center">
                        <button class="px-8 py-2 tracking-wide text-black capitalize transition-colors duration-200 transform rounded-md hover:bg-purple-500 focus:outline-none focus:bg-purple-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                            toevoegen
                        </button>
                    </div>
                </div>
            </div>
    </body>
</html>