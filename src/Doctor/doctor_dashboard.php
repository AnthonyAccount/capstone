<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCTOR | DASHBOARD</title>
    <link rel="stylesheet" href="../../dist/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Yeseva+One&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php
    include '../layouts/sidebar.php';
    ?>

    <section>
        <div class="pt-6 pl-20 mx-auto ml-16">
            <div class="max-w-screen-xl px-4 mx-auto max-h-screen-xl lg:px-12">
                <div class="relative pl-12 mt-2 ml-16 overflow-hidden bg-white rounded-lg shadow-lg sm:rounded-lg">
                    <div class="">
                        <h2 class="mt-6 mb-1 ml-6 text-3xl font-bold text-left text-green-700 dark:text-green-900" style="font-family: 'Poppins';">WELCOME DR. </h2>
                    </div>
                    <div class="flex"> <!-- Recently CT -->
                        <div class="mt-6 ml-6 mr-6 overflow-hidden rounded-lg shadow-lg" style="width: 550px; height: 430px; background-color: rgba(31, 108, 80, 1);">
                            <div class="mt-4 recent">
                                <div class="flex items-center justify-between ml-6 mr-6 font-normal text-white">
                                    <p class="text-var(--color-bg)" style="font-family: 'Poppins', sans-serif;">Recently Completed Tasks</p>
                                    <a href="#" class="mr-6 text-lg font-semibold text-white underline hover:underline" style="font-family: 'Poppins';">View</a>
                                </div>

                                <!-- List View -->
                                <div class="mt-12 ml-6 mr-6">
                                    <button class="relative flex items-center justify-start w-full px-4 py-4 font-semibold text-gray-800 transition bg-white border border-transparent rounded-md focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25 sm:w-auto md:w-1/2 lg:w-1/3 xl:w-1/4">
                                        <svg width="54" height="54" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="23.8446" cy="23.7484" r="23.5551" fill="url(#paint0_linear_0_1)" />
                                            <path d="M22.8854 19.1788V21.5056H26.6378V23.6686H22.8854V26.1921H27.1294V28.437H20.0834V16.9339H27.1294V19.1788H22.8854Z" fill="white" />
                                            <defs>
                                                <linearGradient id="paint0_linear_0_1" x1="-1.86768" y1="50.4859" x2="57.2472" y2="24.3567" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#1F6C50" />
                                                    <stop offset="1" stop-color="#749D1C" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <span class="ml-2">Send E-Prescription</span>
                                    </button>
                                    <button class="relative flex items-center justify-start w-full px-4 py-4 mt-6 font-semibold text-gray-800 transition bg-white border border-transparent rounded-md focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25 sm:w-auto md:w-1/2 lg:w-1/3 xl:w-1/4">
                                        <svg width="54" height="54" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="23.8446" cy="23.7484" r="23.5551" fill="url(#paint0_linear_0_1)" />
                                            <path d="M22.8854 19.1788V21.5056H26.6378V23.6686H22.8854V26.1921H27.1294V28.437H20.0834V16.9339H27.1294V19.1788H22.8854Z" fill="white" />
                                            <defs>
                                                <linearGradient id="paint0_linear_0_1" x1="-1.86768" y1="50.4859" x2="57.2472" y2="24.3567" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#1F6C50" />
                                                    <stop offset="1" stop-color="#749D1C" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <span class="ml-2">Send E-Prescription</span>
                                    </button>
                                    <button class="relative flex items-center justify-start w-full px-4 py-4 mt-6 font-semibold text-gray-800 transition bg-white border border-transparent rounded-md focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25 sm:w-auto md:w-1/2 lg:w-1/3 xl:w-1/4">
                                        <svg width="54" height="54" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="23.8446" cy="23.7484" r="23.5551" fill="url(#paint0_linear_0_1)" />
                                            <path d="M22.8854 19.1788V21.5056H26.6378V23.6686H22.8854V26.1921H27.1294V28.437H20.0834V16.9339H27.1294V19.1788H22.8854Z" fill="white" />
                                            <defs>
                                                <linearGradient id="paint0_linear_0_1" x1="-1.86768" y1="50.4859" x2="57.2472" y2="24.3567" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#1F6C50" />
                                                    <stop offset="1" stop-color="#749D1C" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <span class="ml-2">Send E-Prescription</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="ml-2">
                            <div class="mt-6 mr-6 bg-white rounded-lg" style="width: 300px; height: 250px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                                <div class="mt-4 recent">
                                    <div class="flex items-center justify-between ml-6 mr-6 font-normal text-black">
                                        <p class="text-var(--color-bg)" style="font-family: 'Poppins', sans-serif;">Calendar</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Daily Read -->
                        <div class="mt-6 ml-6 mr-6 bg-white rounded-lg" style="width: 300px; height: 430px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                            <div class="mt-4 recent">
                                <div class="ml-6 mr-6 font-semibold text-black">
                                    <p class="text-var(--color-bg) mb-4" style="font-family: 'Poppins', sans-serif;">Daily Read</p>
                                    <h3 class="font-normal" style="font-family: 'Poppins', sans-serif;">New rules in the dose of medicines to be consumed.</h3>
                                </div>
                            </div>
                            <div class="ml-6 mr-6 radius-lg">
                                <img src="../dist/img/meds.png" alt="Image Description" class="mt-4 radius-lg" style="max-width: 100%; height: auto;">
                            </div>
                            <div class="flex items-center justify-center mt-4 ml-6 mr-6">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.03 4.17209C11.3883 4.52788 11.3893 5.10709 11.0323 5.46415L8.28442 8.21199C7.84878 8.64764 7.84878 9.35396 8.28442 9.78961L11.0323 12.5375C11.3893 12.8945 11.3883 13.4737 11.03 13.8295C10.6735 14.1835 10.0978 14.1825 9.74248 13.8272L5.70485 9.78961C5.2692 9.35396 5.26921 8.64764 5.70485 8.21199L9.74248 4.17436C10.0978 3.81908 10.6735 3.81807 11.03 4.17209Z" fill="#749D1C" />
                                </svg>

                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.51103 13.8295C7.15272 13.4737 7.15169 12.8945 7.50875 12.5375L10.2566 9.78961C10.6922 9.35396 10.6922 8.64764 10.2566 8.21199L7.50875 5.46415C7.15169 5.10709 7.15272 4.52788 7.51103 4.17209C7.86756 3.81807 8.44326 3.81909 8.79853 4.17436L12.8362 8.21199C13.2718 8.64764 13.2718 9.35396 12.8362 9.78961L8.79853 13.8272C8.44326 14.1825 7.86756 14.1835 7.51103 13.8295Z" fill="#749D1C" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- RECORD -->
                    <div class="mt-6 ml-6 mr-6 overflow-hidden rounded-lg shadow-lg" style="width: 900px; height: 200px; background-color: rgba(31, 108, 80, 1)">
                        <div class="flex justify-between mt-6 ml-6 mr-6 text-white font-regular">
                            <p class="text-var(--color-bg)" style="font-family: 'Poppins', sans-serif;">New Patients Record</p>
                            <a class="underline" href="#" style="font-family: 'Poppins', sans-serif;">View All</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>