<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Yeseva+One&display=swap" rel="stylesheet">

    
</head>
<body class="">
      <nav class="relative flex w-full flex-wrap items-center justify-between bg-neutral-100 py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-white lg:py-4">
        <div class="flex w-full flex-wrap items-center justify-between px-3">
          <div>
            <a class="mx-2 my-1 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0">
              <img src="../dist/img/Logo.png" style="height: 20px" alt="TE Logo" loading="lazy" />
            </a>
          </div>
        </div>
      </nav>

      <nav class="bg-green-800 border-gray-200 dark:bg-teal-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
              <div class="flex justify-center items-center md:order-2">

              <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
              </button>  
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-96">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="search" class="bg-white border border-green-800 text-gray-900 text-sm rounded-lg focus:ring-teal-800 block w-full pl-10 p-2" placeholder="Search" required="">
                        </div>
                   
                </form>
              </div>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="NAVBAR">
              <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border md:flex-row md:space-x-8 md:mt-0 md:border-0">
                <li>
                  <a href="#" class="block py-2 pl-3 pr-4 bg-teal-700 rounded md:bg-transparent md:text-teal-700 md:p-0 md:dark:text-teal-500 text-white" aria-current="page">Home</a>
                </li>
                <li>
                  <a href="#" class="block py-2 pl-3 pr-4 bg-teal-700 rounded md:bg-transparent md:text-teal-700 md:p-0 md:dark:text-teal-500 text-white">About Us</a>
                </li>
                <li>
                  <a href="#" class="block py-2 pl-3 pr-4 bg-teal-700 rounded md:bg-transparent md:text-teal-700 md:p-0 md:dark:text-teal-500 text-white">News</a>
                </li>
                <li>
                  <a href="#" class="block py-2 pl-3 pr-4 bg-teal-700 rounded md:bg-transparent md:text-teal-700 md:p-0 md:dark:text-teal-500 text-white">Contact</a>
                </li>
              </ul>
            </div>
            </div>
      </nav>

      <section>
        <div class="mx-auto w-full lg:max-w-screen-lg sm:max-w-screen-sm md:max-w-screen-md">
              <div class="relative pt-64 pb-96 flex content-center items-center justify-center min-h-screen-80">
                  <div class="absolute top-0 w-full h-full bg-center bg-cover" style=" background-image: url('../dist/img/backg.jpg');">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" style=" background-position: 100%; background-image: url('/dist/images/backgroundImage.png'); height: 620px; ">
                      <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed">
                            <div class="flex text-left h-full items-center ">
                              <div class="px-6 text-center text-white md:px-12">
                                <h4 class="mb-6 text-left text-3xl font-bold text-[rgba(31,108,80,1)]" style="font-family: 'Poppins';">WELCOME TO EPTMS</h4>
                                <h3 class="mb-8 text-3xl font-semibold text-black "style="font-family: 'Yeseva One';" >We are delighted managing your health </h3>
                                <button type="button" class="text-white font-medium text-lg bg-[rgba(31,108,80,1)] hover:bg-[rgba(31,108,80,1)] focus:outline-none focus:ring-4 focus:ring-green-300 rounded-full px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-800 dark:hover:bg-green-700 dark:focus:ring-green-800" style="font-family: 'Poppins';">Get Started</button>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
          </div>
      </section>

      <section>
        <div class="flex w-full lg:max-w-screen-lg sm:max-w-screen-sm md:max-w-screen-md pb-10 items-center justify-center bg-blueGray-200 -mt-24">

            <div class="container ml-16 mx-auto px-1">
                <div class="flex flex-wrap">

                  <!-- <div class="pt-2 w-full ml-16 mr-6  md:w-2/12 px-3 text-center">
                      <a href="#" style="display: block;">
                        <div class="relative flex flex-col min-w-0 break-words mb-8 shadow-lg rounded-lg" style="background-color: rgba(31, 108, 80, 1);">
                          <div class="px-4 py-5 flex-auto">
                            <div class="flex items-center justify-center ml-11 mb-4">
                              <h3 class="text-3xl font-bold mt-6 mr-3 text-white" style="font-family: Poppins;">DOH</h3>
                              <div class="max-w-full mx-auto">
                                <img src="../dist/img/DOH.png" alt="Logo" class="w-16 h-14 mt-3">
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                  </div> --> 

              <div class="pt-2 w-full mr-6 ml-3 md:w-2/12 px-3 text-center">
                <a href="#" style="display: block;">
                  <div class="relative flex flex-col min-w-0w-full mb-8 shadow-lg rounded-lg" style="background-color:  rgba(31, 108, 80, 1);">
                    <div class="px-4 py-5 flex-auto">
                      <div class="flex items-center justify-center mb-4">
                        <h3 class="text-3xl font-bold mt-6 mr-3 text-black" style="font-family: Poppins;">DOH</h3>
                          <div class="max-w-full mx-auto">
                            <img src="../dist/img/DOH.png" alt="Logo" class="w-16 h-14 mt-3">
                          </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="pt-2 w-full mr-6 ml-6 md:w-2/12 px-3 text-center">
                      <a href="#" style="display: block;">
                        <div class="relative flex flex-col min-w-0w-full mb-8 shadow-lg rounded-lg" style="background-color: rgba(191, 210, 248, 1);">
                          <div class="px-4 py-5 flex-auto">
                            <div class="flex items-center justify-center mb-4">
                              <h3 class="text-3xl font-bold mt-6 mr-3 text-black" style="font-family: Poppins;">PATIENT</h3>
                              <div class="max-w-full mx-auto">
                              <img src="../dist/img/patient.png" alt="Logo" class="w-16 h-14 mt-3">
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
              </div>

              <div class="pt-2 w-full mr-6 ml-6 md:w-2/12 px-3 text-center">
                <a href="D-Login.php" style="display: block;">
                  <div class="relative flex flex-col min-w-0w-full mb-8 shadow-lg rounded-lg" style="background-color: rgba(31, 108, 80, 1);">
                    <div class="px-4 py-5 flex-auto">     
                      <div class="flex items-center justify-center mb-4">
                        <h3 class="text-3xl font-bold mt-6 mr-3 text-white" style="font-family: Poppins;">DOCTORS</h3>
                          <div class="max-w-full mx-auto">
                            <img src="../dist/img/DOCTOR.png" alt="Logo" class="w-16 h-14 mt-3">
                          </div>
                      </div>  
                    </div>
                  </div>
                </a>
              </div>

              <div class="pt-2 w-full mr-6 ml-6 md:w-2/12 px-2 text-center">
                      <a href="#" style="display: block;">
                      <div class="relative flex flex-col min-w-0 mb-8 shadow-lg rounded-lg" style="background-color: rgba(191, 210, 248, 1);">
                        <div class="px-4 py-5 flex-auto">
                          <div class="flex items-center justify-center mb-4">
                            <h3 class="text-2xl font-bold mt-6 mr-3 text-black" style="font-family: Poppins;">PHARMACIES</h3>
                            <div class="max-w-full mx-auto">
                            <img src="../dist/img/PHAR.png" alt="Logo" class="w-16 h-14 mt-3">
                            </div>
                          </div>
                        
                        </div>
                      </div>
              </div>

              <div class="pt-2 w-full mr-6 ml-6 md:w-2/12 px-3 text-center">
                <a href="#" style="display: block;">
                  <div class="relative flex flex-col min-w-0w-full mb-8 shadow-lg rounded-lg" style="background-color:  rgba(31, 108, 80, 1);">
                    <div class="px-4 py-5 flex-auto">
                      <div class="flex items-center justify-center mb-4">
                        <h3 class="text-3xl font-bold mt-6 mr-3 text-black" style="font-family: Poppins;">DISTRIBUTORS</h3>
                          <div class="max-w-full mx-auto">
                            <img src="../dist/img/DISTRIBUTOR.png" alt="Logo" class="w-16 h-14 mt-3">
                          </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              </div>
      </section>

      <section>
        <!--Our Specialties-->
        <div class="flex justify-center ">
          <div class="px-6 text-center text-white md:px-12">
            <h4 class="justify-center mb-6 text-3xl font-bold text-[rgba(31,108,80,1)]" style="font-family: 'Poppins';">WELCOME TO EPTMS</h4>
            <h3 class="justify-center mb-8 text-3xl font-semibold text-black" style="font-family: 'Yeseva One';">A Great Place to Receive Care</h3>
            <p class="justify-center mb-8 font-thin text-gray-700" style="font-family: 'Poppins';">
              We are delighted managing your health is made easier than ever.
              <span class="block my-1">
                Gain convenient access to a range of healthcare services and take control of your well-being.
              </span>
            </p>
            <p class="text-gray-500 dark:text-gray-400">
              <a href="#" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline" style="font-family: 'Poppins';">
                Learn More
                <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
              </a>
            </p>
            <img src="../dist/img/docdoc.jpeg" class="inline-flex mt-4 items-center h-auto max-w-full" alt="..." />

            <div class="px-6 text-center mt-20 text-white md:px-12">
              <h4 class="justify-center mb-6 text-2xl font-bold text-[rgba(31,108,80,1)]" style="font-family: 'Poppins';">CARE YOU CAN BELIEVE IN</h4>
              <h3 class="justify-center mb-8 text-3xl font-semibold text-black" style="font-family: 'Yeseva One';">Our Services</h3>
            </div>
          </div>
        </div> 
      </section>

      <section>
          <div class="mt-12 py-12 flex justify-center items-center">
                  <div class="grid grid-cols-3 md:lg:xl:grid-cols-3 group rounded-2xl  shadow-2xl  bg-white " style="width: 1300px; height: 650px;">
                  
                    <div class="p-10 flex flex-col items-center justify-center text-center group md:lg:xl:border-r md:lg:xl:border-b cursor-pointer hover:bg-green-900 transition-colors duration-300">
                      <span class="p-5 rounded-full">
                          <svg width="51" height="44" viewBox="0 0 51 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.95966 21.9877H8.00611L25.5122 39.5583L39.8888 25.1288H44.3142L25.5122 44L4.36308 22.7975C3.79258 22.2249 3.28729 21.6074 2.84719 20.9448C2.40709 20.2822 2.02404 19.5828 1.69804 18.8466H7.63936L14.5587 11.9264L25.5122 22.8957L33.3362 15.0675L37.1259 18.8466H45.8056C46.3272 18.0123 46.7266 17.1288 47.0037 16.1963C47.2808 15.2638 47.4193 14.3067 47.4193 13.3252C47.4193 11.9018 47.1544 10.5767 46.6247 9.34969C46.0949 8.1227 45.3696 7.05521 44.4487 6.14724C43.5277 5.23926 42.4519 4.52761 41.2213 4.01227C39.9906 3.49693 38.6663 3.23926 37.2482 3.23926C35.879 3.23926 34.6646 3.45603 33.6051 3.88957C32.5456 4.32311 31.5676 4.89162 30.6711 5.59509C29.7747 6.29857 28.9148 7.09611 28.0917 7.98773C27.2685 8.87934 26.4087 9.78323 25.5122 10.6994C24.632 9.81595 23.7763 8.92434 22.945 8.02454C22.1137 7.12474 21.2457 6.31493 20.3411 5.59509C19.4364 4.87526 18.4503 4.2863 17.3826 3.82822C16.315 3.37014 15.1129 3.1411 13.7763 3.1411C12.3745 3.1411 11.0583 3.40695 9.82763 3.93865C8.59698 4.47035 7.52119 5.19836 6.60024 6.1227C5.6793 7.04703 4.95395 8.12679 4.42421 9.36196C3.89446 10.5971 3.62958 11.9182 3.62958 13.3252C3.62958 14.0941 3.71923 14.8875 3.89853 15.7055H0.695599C0.614099 15.3129 0.561125 14.9202 0.536675 14.5276C0.512225 14.135 0.5 13.7423 0.5 13.3497C0.5 11.501 0.846373 9.76687 1.53912 8.14724C2.23187 6.52761 3.17726 5.11247 4.37531 3.90184C5.57335 2.69121 6.97922 1.73824 8.59291 1.04294C10.2066 0.347648 11.9344 0 13.7763 0C15.1292 0 16.3354 0.155419 17.3949 0.466258C18.4544 0.777096 19.4364 1.20654 20.3411 1.7546C21.2457 2.30266 22.1096 2.96115 22.9328 3.73006C23.7559 4.49898 24.6157 5.34151 25.5122 6.25767C26.4087 5.34151 27.2685 4.49898 28.0917 3.73006C28.9148 2.96115 29.7787 2.30266 30.6834 1.7546C31.588 1.20654 32.5701 0.777096 33.6296 0.466258C34.6891 0.155419 35.8953 0 37.2482 0C39.0738 0 40.7934 0.347648 42.4071 1.04294C44.0208 1.73824 45.4267 2.68303 46.6247 3.8773C47.8227 5.07157 48.7681 6.47853 49.4609 8.09816C50.1536 9.71779 50.5 11.4438 50.5 13.2761C50.5 14.863 50.2229 16.4049 49.6687 17.9018C49.1145 19.3988 48.324 20.7607 47.2971 21.9877H35.8056L33.3362 19.4847L25.5122 27.362L14.5587 16.3436L8.95966 21.9877Z" fill="#1F6C50"/>
                          </svg>
                      </span>
                      <p class="text-2xl font-medium text-black mt-3 group-hover:text-white transition-colors duration-300">Neurology</p>
                  </div>
                  
                    <div class="p-10 flex flex-col items-center justify-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-green-900 transition-colors duration-300 cursor-pointer">
                      <span class="p-5 rounded-full">
                          <svg width="51" height="44" viewBox="0 0 51 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.95966 21.9877H8.00611L25.5122 39.5583L39.8888 25.1288H44.3142L25.5122 44L4.36308 22.7975C3.79258 22.2249 3.28729 21.6074 2.84719 20.9448C2.40709 20.2822 2.02404 19.5828 1.69804 18.8466H7.63936L14.5587 11.9264L25.5122 22.8957L33.3362 15.0675L37.1259 18.8466H45.8056C46.3272 18.0123 46.7266 17.1288 47.0037 16.1963C47.2808 15.2638 47.4193 14.3067 47.4193 13.3252C47.4193 11.9018 47.1544 10.5767 46.6247 9.34969C46.0949 8.1227 45.3696 7.05521 44.4487 6.14724C43.5277 5.23926 42.4519 4.52761 41.2213 4.01227C39.9906 3.49693 38.6663 3.23926 37.2482 3.23926C35.879 3.23926 34.6646 3.45603 33.6051 3.88957C32.5456 4.32311 31.5676 4.89162 30.6711 5.59509C29.7747 6.29857 28.9148 7.09611 28.0917 7.98773C27.2685 8.87934 26.4087 9.78323 25.5122 10.6994C24.632 9.81595 23.7763 8.92434 22.945 8.02454C22.1137 7.12474 21.2457 6.31493 20.3411 5.59509C19.4364 4.87526 18.4503 4.2863 17.3826 3.82822C16.315 3.37014 15.1129 3.1411 13.7763 3.1411C12.3745 3.1411 11.0583 3.40695 9.82763 3.93865C8.59698 4.47035 7.52119 5.19836 6.60024 6.1227C5.6793 7.04703 4.95395 8.12679 4.42421 9.36196C3.89446 10.5971 3.62958 11.9182 3.62958 13.3252C3.62958 14.0941 3.71923 14.8875 3.89853 15.7055H0.695599C0.614099 15.3129 0.561125 14.9202 0.536675 14.5276C0.512225 14.135 0.5 13.7423 0.5 13.3497C0.5 11.501 0.846373 9.76687 1.53912 8.14724C2.23187 6.52761 3.17726 5.11247 4.37531 3.90184C5.57335 2.69121 6.97922 1.73824 8.59291 1.04294C10.2066 0.347648 11.9344 0 13.7763 0C15.1292 0 16.3354 0.155419 17.3949 0.466258C18.4544 0.777096 19.4364 1.20654 20.3411 1.7546C21.2457 2.30266 22.1096 2.96115 22.9328 3.73006C23.7559 4.49898 24.6157 5.34151 25.5122 6.25767C26.4087 5.34151 27.2685 4.49898 28.0917 3.73006C28.9148 2.96115 29.7787 2.30266 30.6834 1.7546C31.588 1.20654 32.5701 0.777096 33.6296 0.466258C34.6891 0.155419 35.8953 0 37.2482 0C39.0738 0 40.7934 0.347648 42.4071 1.04294C44.0208 1.73824 45.4267 2.68303 46.6247 3.8773C47.8227 5.07157 48.7681 6.47853 49.4609 8.09816C50.1536 9.71779 50.5 11.4438 50.5 13.2761C50.5 14.863 50.2229 16.4049 49.6687 17.9018C49.1145 19.3988 48.324 20.7607 47.2971 21.9877H35.8056L33.3362 19.4847L25.5122 27.362L14.5587 16.3436L8.95966 21.9877Z" fill="#1F6C50"/>
                          </svg>
                      </span>
                      <p class="text-2xl font-medium text-black mt-3">Bones</p>
                  </div>
                  <div class="p-10 flex flex-col items-center justify-center text-center hover:bg-green-900 transition-colors duration-300 cursor-pointer">
                    <span class="p-5 ">
                        <svg width="51" height="44" viewBox="0 0 51 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.95966 21.9877H8.00611L25.5122 39.5583L39.8888 25.1288H44.3142L25.5122 44L4.36308 22.7975C3.79258 22.2249 3.28729 21.6074 2.84719 20.9448C2.40709 20.2822 2.02404 19.5828 1.69804 18.8466H7.63936L14.5587 11.9264L25.5122 22.8957L33.3362 15.0675L37.1259 18.8466H45.8056C46.3272 18.0123 46.7266 17.1288 47.0037 16.1963C47.2808 15.2638 47.4193 14.3067 47.4193 13.3252C47.4193 11.9018 47.1544 10.5767 46.6247 9.34969C46.0949 8.1227 45.3696 7.05521 44.4487 6.14724C43.5277 5.23926 42.4519 4.52761 41.2213 4.01227C39.9906 3.49693 38.6663 3.23926 37.2482 3.23926C35.879 3.23926 34.6646 3.45603 33.6051 3.88957C32.5456 4.32311 31.5676 4.89162 30.6711 5.59509C29.7747 6.29857 28.9148 7.09611 28.0917 7.98773C27.2685 8.87934 26.4087 9.78323 25.5122 10.6994C24.632 9.81595 23.7763 8.92434 22.945 8.02454C22.1137 7.12474 21.2457 6.31493 20.3411 5.59509C19.4364 4.87526 18.4503 4.2863 17.3826 3.82822C16.315 3.37014 15.1129 3.1411 13.7763 3.1411C12.3745 3.1411 11.0583 3.40695 9.82763 3.93865C8.59698 4.47035 7.52119 5.19836 6.60024 6.1227C5.6793 7.04703 4.95395 8.12679 4.42421 9.36196C3.89446 10.5971 3.62958 11.9182 3.62958 13.3252C3.62958 14.0941 3.71923 14.8875 3.89853 15.7055H0.695599C0.614099 15.3129 0.561125 14.9202 0.536675 14.5276C0.512225 14.135 0.5 13.7423 0.5 13.3497C0.5 11.501 0.846373 9.76687 1.53912 8.14724C2.23187 6.52761 3.17726 5.11247 4.37531 3.90184C5.57335 2.69121 6.97922 1.73824 8.59291 1.04294C10.2066 0.347648 11.9344 0 13.7763 0C15.1292 0 16.3354 0.155419 17.3949 0.466258C18.4544 0.777096 19.4364 1.20654 20.3411 1.7546C21.2457 2.30266 22.1096 2.96115 22.9328 3.73006C23.7559 4.49898 24.6157 5.34151 25.5122 6.25767C26.4087 5.34151 27.2685 4.49898 28.0917 3.73006C28.9148 2.96115 29.7787 2.30266 30.6834 1.7546C31.588 1.20654 32.5701 0.777096 33.6296 0.466258C34.6891 0.155419 35.8953 0 37.2482 0C39.0738 0 40.7934 0.347648 42.4071 1.04294C44.0208 1.73824 45.4267 2.68303 46.6247 3.8773C47.8227 5.07157 48.7681 6.47853 49.4609 8.09816C50.1536 9.71779 50.5 11.4438 50.5 13.2761C50.5 14.863 50.2229 16.4049 49.6687 17.9018C49.1145 19.3988 48.324 20.7607 47.2971 21.9877H35.8056L33.3362 19.4847L25.5122 27.362L14.5587 16.3436L8.95966 21.9877Z" fill="#1F6C50"/>
                        </svg>
                    </span>
                    <p class="text-2xl font-medium text-black mt-3">Oncology</p>
                  </div>
                  <div class="p-10 flex flex-col items-center justify-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-green-900 transition-colors duration-300cursor-pointer">
                    <span class="p-5 rounded-full ">
                        <svg width="51" height="44" viewBox="0 0 51 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.95966 21.9877H8.00611L25.5122 39.5583L39.8888 25.1288H44.3142L25.5122 44L4.36308 22.7975C3.79258 22.2249 3.28729 21.6074 2.84719 20.9448C2.40709 20.2822 2.02404 19.5828 1.69804 18.8466H7.63936L14.5587 11.9264L25.5122 22.8957L33.3362 15.0675L37.1259 18.8466H45.8056C46.3272 18.0123 46.7266 17.1288 47.0037 16.1963C47.2808 15.2638 47.4193 14.3067 47.4193 13.3252C47.4193 11.9018 47.1544 10.5767 46.6247 9.34969C46.0949 8.1227 45.3696 7.05521 44.4487 6.14724C43.5277 5.23926 42.4519 4.52761 41.2213 4.01227C39.9906 3.49693 38.6663 3.23926 37.2482 3.23926C35.879 3.23926 34.6646 3.45603 33.6051 3.88957C32.5456 4.32311 31.5676 4.89162 30.6711 5.59509C29.7747 6.29857 28.9148 7.09611 28.0917 7.98773C27.2685 8.87934 26.4087 9.78323 25.5122 10.6994C24.632 9.81595 23.7763 8.92434 22.945 8.02454C22.1137 7.12474 21.2457 6.31493 20.3411 5.59509C19.4364 4.87526 18.4503 4.2863 17.3826 3.82822C16.315 3.37014 15.1129 3.1411 13.7763 3.1411C12.3745 3.1411 11.0583 3.40695 9.82763 3.93865C8.59698 4.47035 7.52119 5.19836 6.60024 6.1227C5.6793 7.04703 4.95395 8.12679 4.42421 9.36196C3.89446 10.5971 3.62958 11.9182 3.62958 13.3252C3.62958 14.0941 3.71923 14.8875 3.89853 15.7055H0.695599C0.614099 15.3129 0.561125 14.9202 0.536675 14.5276C0.512225 14.135 0.5 13.7423 0.5 13.3497C0.5 11.501 0.846373 9.76687 1.53912 8.14724C2.23187 6.52761 3.17726 5.11247 4.37531 3.90184C5.57335 2.69121 6.97922 1.73824 8.59291 1.04294C10.2066 0.347648 11.9344 0 13.7763 0C15.1292 0 16.3354 0.155419 17.3949 0.466258C18.4544 0.777096 19.4364 1.20654 20.3411 1.7546C21.2457 2.30266 22.1096 2.96115 22.9328 3.73006C23.7559 4.49898 24.6157 5.34151 25.5122 6.25767C26.4087 5.34151 27.2685 4.49898 28.0917 3.73006C28.9148 2.96115 29.7787 2.30266 30.6834 1.7546C31.588 1.20654 32.5701 0.777096 33.6296 0.466258C34.6891 0.155419 35.8953 0 37.2482 0C39.0738 0 40.7934 0.347648 42.4071 1.04294C44.0208 1.73824 45.4267 2.68303 46.6247 3.8773C47.8227 5.07157 48.7681 6.47853 49.4609 8.09816C50.1536 9.71779 50.5 11.4438 50.5 13.2761C50.5 14.863 50.2229 16.4049 49.6687 17.9018C49.1145 19.3988 48.324 20.7607 47.2971 21.9877H35.8056L33.3362 19.4847L25.5122 27.362L14.5587 16.3436L8.95966 21.9877Z" fill="#1F6C50"/>
                        </svg>
                    </span>
                    <p class="text-2xl font-medium text-black mt-3">Otorhinolaryngology</p>
                </div>
                <div class="p-10 flex flex-col items-center justify-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-green-900 transition-colors duration-300 cursor-pointer">
                  <span class="p-5 rounded-full ">
                      <svg width="51" height="44" viewBox="0 0 51 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.95966 21.9877H8.00611L25.5122 39.5583L39.8888 25.1288H44.3142L25.5122 44L4.36308 22.7975C3.79258 22.2249 3.28729 21.6074 2.84719 20.9448C2.40709 20.2822 2.02404 19.5828 1.69804 18.8466H7.63936L14.5587 11.9264L25.5122 22.8957L33.3362 15.0675L37.1259 18.8466H45.8056C46.3272 18.0123 46.7266 17.1288 47.0037 16.1963C47.2808 15.2638 47.4193 14.3067 47.4193 13.3252C47.4193 11.9018 47.1544 10.5767 46.6247 9.34969C46.0949 8.1227 45.3696 7.05521 44.4487 6.14724C43.5277 5.23926 42.4519 4.52761 41.2213 4.01227C39.9906 3.49693 38.6663 3.23926 37.2482 3.23926C35.879 3.23926 34.6646 3.45603 33.6051 3.88957C32.5456 4.32311 31.5676 4.89162 30.6711 5.59509C29.7747 6.29857 28.9148 7.09611 28.0917 7.98773C27.2685 8.87934 26.4087 9.78323 25.5122 10.6994C24.632 9.81595 23.7763 8.92434 22.945 8.02454C22.1137 7.12474 21.2457 6.31493 20.3411 5.59509C19.4364 4.87526 18.4503 4.2863 17.3826 3.82822C16.315 3.37014 15.1129 3.1411 13.7763 3.1411C12.3745 3.1411 11.0583 3.40695 9.82763 3.93865C8.59698 4.47035 7.52119 5.19836 6.60024 6.1227C5.6793 7.04703 4.95395 8.12679 4.42421 9.36196C3.89446 10.5971 3.62958 11.9182 3.62958 13.3252C3.62958 14.0941 3.71923 14.8875 3.89853 15.7055H0.695599C0.614099 15.3129 0.561125 14.9202 0.536675 14.5276C0.512225 14.135 0.5 13.7423 0.5 13.3497C0.5 11.501 0.846373 9.76687 1.53912 8.14724C2.23187 6.52761 3.17726 5.11247 4.37531 3.90184C5.57335 2.69121 6.97922 1.73824 8.59291 1.04294C10.2066 0.347648 11.9344 0 13.7763 0C15.1292 0 16.3354 0.155419 17.3949 0.466258C18.4544 0.777096 19.4364 1.20654 20.3411 1.7546C21.2457 2.30266 22.1096 2.96115 22.9328 3.73006C23.7559 4.49898 24.6157 5.34151 25.5122 6.25767C26.4087 5.34151 27.2685 4.49898 28.0917 3.73006C28.9148 2.96115 29.7787 2.30266 30.6834 1.7546C31.588 1.20654 32.5701 0.777096 33.6296 0.466258C34.6891 0.155419 35.8953 0 37.2482 0C39.0738 0 40.7934 0.347648 42.4071 1.04294C44.0208 1.73824 45.4267 2.68303 46.6247 3.8773C47.8227 5.07157 48.7681 6.47853 49.4609 8.09816C50.1536 9.71779 50.5 11.4438 50.5 13.2761C50.5 14.863 50.2229 16.4049 49.6687 17.9018C49.1145 19.3988 48.324 20.7607 47.2971 21.9877H35.8056L33.3362 19.4847L25.5122 27.362L14.5587 16.3436L8.95966 21.9877Z" fill="#1F6C50"/>
                      </svg>
                  </span>
                  <p class="text-2xl font-medium text-black mt-3">Ophthalmology</p>
                </div>
                <div class="p-10 flex flex-col items-center justify-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-green-900 transition-colors duration-3000 cursor-pointer">
                  <span class="p-5 rounded-full ">
                      <svg width="51" height="44" viewBox="0 0 51 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.95966 21.9877H8.00611L25.5122 39.5583L39.8888 25.1288H44.3142L25.5122 44L4.36308 22.7975C3.79258 22.2249 3.28729 21.6074 2.84719 20.9448C2.40709 20.2822 2.02404 19.5828 1.69804 18.8466H7.63936L14.5587 11.9264L25.5122 22.8957L33.3362 15.0675L37.1259 18.8466H45.8056C46.3272 18.0123 46.7266 17.1288 47.0037 16.1963C47.2808 15.2638 47.4193 14.3067 47.4193 13.3252C47.4193 11.9018 47.1544 10.5767 46.6247 9.34969C46.0949 8.1227 45.3696 7.05521 44.4487 6.14724C43.5277 5.23926 42.4519 4.52761 41.2213 4.01227C39.9906 3.49693 38.6663 3.23926 37.2482 3.23926C35.879 3.23926 34.6646 3.45603 33.6051 3.88957C32.5456 4.32311 31.5676 4.89162 30.6711 5.59509C29.7747 6.29857 28.9148 7.09611 28.0917 7.98773C27.2685 8.87934 26.4087 9.78323 25.5122 10.6994C24.632 9.81595 23.7763 8.92434 22.945 8.02454C22.1137 7.12474 21.2457 6.31493 20.3411 5.59509C19.4364 4.87526 18.4503 4.2863 17.3826 3.82822C16.315 3.37014 15.1129 3.1411 13.7763 3.1411C12.3745 3.1411 11.0583 3.40695 9.82763 3.93865C8.59698 4.47035 7.52119 5.19836 6.60024 6.1227C5.6793 7.04703 4.95395 8.12679 4.42421 9.36196C3.89446 10.5971 3.62958 11.9182 3.62958 13.3252C3.62958 14.0941 3.71923 14.8875 3.89853 15.7055H0.695599C0.614099 15.3129 0.561125 14.9202 0.536675 14.5276C0.512225 14.135 0.5 13.7423 0.5 13.3497C0.5 11.501 0.846373 9.76687 1.53912 8.14724C2.23187 6.52761 3.17726 5.11247 4.37531 3.90184C5.57335 2.69121 6.97922 1.73824 8.59291 1.04294C10.2066 0.347648 11.9344 0 13.7763 0C15.1292 0 16.3354 0.155419 17.3949 0.466258C18.4544 0.777096 19.4364 1.20654 20.3411 1.7546C21.2457 2.30266 22.1096 2.96115 22.9328 3.73006C23.7559 4.49898 24.6157 5.34151 25.5122 6.25767C26.4087 5.34151 27.2685 4.49898 28.0917 3.73006C28.9148 2.96115 29.7787 2.30266 30.6834 1.7546C31.588 1.20654 32.5701 0.777096 33.6296 0.466258C34.6891 0.155419 35.8953 0 37.2482 0C39.0738 0 40.7934 0.347648 42.4071 1.04294C44.0208 1.73824 45.4267 2.68303 46.6247 3.8773C47.8227 5.07157 48.7681 6.47853 49.4609 8.09816C50.1536 9.71779 50.5 11.4438 50.5 13.2761C50.5 14.863 50.2229 16.4049 49.6687 17.9018C49.1145 19.3988 48.324 20.7607 47.2971 21.9877H35.8056L33.3362 19.4847L25.5122 27.362L14.5587 16.3436L8.95966 21.9877Z" fill="#1F6C50"/>
                      </svg>
                  </span>
                  <p class="text-2xl font-medium text-black mt-3">Cardiovascular</p>
              </div>
                <div class="p-10 flex flex-col items-center justify-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-green-900 transition-colors duration-300 cursor-pointer">
                  <span class="p-5 rounded-full ">
                      <svg width="51" height="44" viewBox="0 0 51 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.95966 21.9877H8.00611L25.5122 39.5583L39.8888 25.1288H44.3142L25.5122 44L4.36308 22.7975C3.79258 22.2249 3.28729 21.6074 2.84719 20.9448C2.40709 20.2822 2.02404 19.5828 1.69804 18.8466H7.63936L14.5587 11.9264L25.5122 22.8957L33.3362 15.0675L37.1259 18.8466H45.8056C46.3272 18.0123 46.7266 17.1288 47.0037 16.1963C47.2808 15.2638 47.4193 14.3067 47.4193 13.3252C47.4193 11.9018 47.1544 10.5767 46.6247 9.34969C46.0949 8.1227 45.3696 7.05521 44.4487 6.14724C43.5277 5.23926 42.4519 4.52761 41.2213 4.01227C39.9906 3.49693 38.6663 3.23926 37.2482 3.23926C35.879 3.23926 34.6646 3.45603 33.6051 3.88957C32.5456 4.32311 31.5676 4.89162 30.6711 5.59509C29.7747 6.29857 28.9148 7.09611 28.0917 7.98773C27.2685 8.87934 26.4087 9.78323 25.5122 10.6994C24.632 9.81595 23.7763 8.92434 22.945 8.02454C22.1137 7.12474 21.2457 6.31493 20.3411 5.59509C19.4364 4.87526 18.4503 4.2863 17.3826 3.82822C16.315 3.37014 15.1129 3.1411 13.7763 3.1411C12.3745 3.1411 11.0583 3.40695 9.82763 3.93865C8.59698 4.47035 7.52119 5.19836 6.60024 6.1227C5.6793 7.04703 4.95395 8.12679 4.42421 9.36196C3.89446 10.5971 3.62958 11.9182 3.62958 13.3252C3.62958 14.0941 3.71923 14.8875 3.89853 15.7055H0.695599C0.614099 15.3129 0.561125 14.9202 0.536675 14.5276C0.512225 14.135 0.5 13.7423 0.5 13.3497C0.5 11.501 0.846373 9.76687 1.53912 8.14724C2.23187 6.52761 3.17726 5.11247 4.37531 3.90184C5.57335 2.69121 6.97922 1.73824 8.59291 1.04294C10.2066 0.347648 11.9344 0 13.7763 0C15.1292 0 16.3354 0.155419 17.3949 0.466258C18.4544 0.777096 19.4364 1.20654 20.3411 1.7546C21.2457 2.30266 22.1096 2.96115 22.9328 3.73006C23.7559 4.49898 24.6157 5.34151 25.5122 6.25767C26.4087 5.34151 27.2685 4.49898 28.0917 3.73006C28.9148 2.96115 29.7787 2.30266 30.6834 1.7546C31.588 1.20654 32.5701 0.777096 33.6296 0.466258C34.6891 0.155419 35.8953 0 37.2482 0C39.0738 0 40.7934 0.347648 42.4071 1.04294C44.0208 1.73824 45.4267 2.68303 46.6247 3.8773C47.8227 5.07157 48.7681 6.47853 49.4609 8.09816C50.1536 9.71779 50.5 11.4438 50.5 13.2761C50.5 14.863 50.2229 16.4049 49.6687 17.9018C49.1145 19.3988 48.324 20.7607 47.2971 21.9877H35.8056L33.3362 19.4847L25.5122 27.362L14.5587 16.3436L8.95966 21.9877Z" fill="#1F6C50"/>
                      </svg>
                  </span>
                  <p class="text-2xl font-medium text-black mt-3">Pulmonology</p>
                </div>
                <div class="p-10 flex flex-col items-center justify-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-green-900 transition-colors duration-300 cursor-pointer">
                  <span class="p-5 rounded-full ">
                      <svg width="51" height="44" viewBox="0 0 51 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.95966 21.9877H8.00611L25.5122 39.5583L39.8888 25.1288H44.3142L25.5122 44L4.36308 22.7975C3.79258 22.2249 3.28729 21.6074 2.84719 20.9448C2.40709 20.2822 2.02404 19.5828 1.69804 18.8466H7.63936L14.5587 11.9264L25.5122 22.8957L33.3362 15.0675L37.1259 18.8466H45.8056C46.3272 18.0123 46.7266 17.1288 47.0037 16.1963C47.2808 15.2638 47.4193 14.3067 47.4193 13.3252C47.4193 11.9018 47.1544 10.5767 46.6247 9.34969C46.0949 8.1227 45.3696 7.05521 44.4487 6.14724C43.5277 5.23926 42.4519 4.52761 41.2213 4.01227C39.9906 3.49693 38.6663 3.23926 37.2482 3.23926C35.879 3.23926 34.6646 3.45603 33.6051 3.88957C32.5456 4.32311 31.5676 4.89162 30.6711 5.59509C29.7747 6.29857 28.9148 7.09611 28.0917 7.98773C27.2685 8.87934 26.4087 9.78323 25.5122 10.6994C24.632 9.81595 23.7763 8.92434 22.945 8.02454C22.1137 7.12474 21.2457 6.31493 20.3411 5.59509C19.4364 4.87526 18.4503 4.2863 17.3826 3.82822C16.315 3.37014 15.1129 3.1411 13.7763 3.1411C12.3745 3.1411 11.0583 3.40695 9.82763 3.93865C8.59698 4.47035 7.52119 5.19836 6.60024 6.1227C5.6793 7.04703 4.95395 8.12679 4.42421 9.36196C3.89446 10.5971 3.62958 11.9182 3.62958 13.3252C3.62958 14.0941 3.71923 14.8875 3.89853 15.7055H0.695599C0.614099 15.3129 0.561125 14.9202 0.536675 14.5276C0.512225 14.135 0.5 13.7423 0.5 13.3497C0.5 11.501 0.846373 9.76687 1.53912 8.14724C2.23187 6.52761 3.17726 5.11247 4.37531 3.90184C5.57335 2.69121 6.97922 1.73824 8.59291 1.04294C10.2066 0.347648 11.9344 0 13.7763 0C15.1292 0 16.3354 0.155419 17.3949 0.466258C18.4544 0.777096 19.4364 1.20654 20.3411 1.7546C21.2457 2.30266 22.1096 2.96115 22.9328 3.73006C23.7559 4.49898 24.6157 5.34151 25.5122 6.25767C26.4087 5.34151 27.2685 4.49898 28.0917 3.73006C28.9148 2.96115 29.7787 2.30266 30.6834 1.7546C31.588 1.20654 32.5701 0.777096 33.6296 0.466258C34.6891 0.155419 35.8953 0 37.2482 0C39.0738 0 40.7934 0.347648 42.4071 1.04294C44.0208 1.73824 45.4267 2.68303 46.6247 3.8773C47.8227 5.07157 48.7681 6.47853 49.4609 8.09816C50.1536 9.71779 50.5 11.4438 50.5 13.2761C50.5 14.863 50.2229 16.4049 49.6687 17.9018C49.1145 19.3988 48.324 20.7607 47.2971 21.9877H35.8056L33.3362 19.4847L25.5122 27.362L14.5587 16.3436L8.95966 21.9877Z" fill="#1F6C50"/>
                      </svg>
                  </span>
                  <p class="text-2xl font-medium text-black mt-3">Dermatology</p>
              </div>
              <div class="p-10 flex flex-col items-center justify-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-green-900 transition-colors duration-300 cursor-pointer">
                <span class="p-5 rounded-full ">
                    <svg width="51" height="44" viewBox="0 0 51 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.95966 21.9877H8.00611L25.5122 39.5583L39.8888 25.1288H44.3142L25.5122 44L4.36308 22.7975C3.79258 22.2249 3.28729 21.6074 2.84719 20.9448C2.40709 20.2822 2.02404 19.5828 1.69804 18.8466H7.63936L14.5587 11.9264L25.5122 22.8957L33.3362 15.0675L37.1259 18.8466H45.8056C46.3272 18.0123 46.7266 17.1288 47.0037 16.1963C47.2808 15.2638 47.4193 14.3067 47.4193 13.3252C47.4193 11.9018 47.1544 10.5767 46.6247 9.34969C46.0949 8.1227 45.3696 7.05521 44.4487 6.14724C43.5277 5.23926 42.4519 4.52761 41.2213 4.01227C39.9906 3.49693 38.6663 3.23926 37.2482 3.23926C35.879 3.23926 34.6646 3.45603 33.6051 3.88957C32.5456 4.32311 31.5676 4.89162 30.6711 5.59509C29.7747 6.29857 28.9148 7.09611 28.0917 7.98773C27.2685 8.87934 26.4087 9.78323 25.5122 10.6994C24.632 9.81595 23.7763 8.92434 22.945 8.02454C22.1137 7.12474 21.2457 6.31493 20.3411 5.59509C19.4364 4.87526 18.4503 4.2863 17.3826 3.82822C16.315 3.37014 15.1129 3.1411 13.7763 3.1411C12.3745 3.1411 11.0583 3.40695 9.82763 3.93865C8.59698 4.47035 7.52119 5.19836 6.60024 6.1227C5.6793 7.04703 4.95395 8.12679 4.42421 9.36196C3.89446 10.5971 3.62958 11.9182 3.62958 13.3252C3.62958 14.0941 3.71923 14.8875 3.89853 15.7055H0.695599C0.614099 15.3129 0.561125 14.9202 0.536675 14.5276C0.512225 14.135 0.5 13.7423 0.5 13.3497C0.5 11.501 0.846373 9.76687 1.53912 8.14724C2.23187 6.52761 3.17726 5.11247 4.37531 3.90184C5.57335 2.69121 6.97922 1.73824 8.59291 1.04294C10.2066 0.347648 11.9344 0 13.7763 0C15.1292 0 16.3354 0.155419 17.3949 0.466258C18.4544 0.777096 19.4364 1.20654 20.3411 1.7546C21.2457 2.30266 22.1096 2.96115 22.9328 3.73006C23.7559 4.49898 24.6157 5.34151 25.5122 6.25767C26.4087 5.34151 27.2685 4.49898 28.0917 3.73006C28.9148 2.96115 29.7787 2.30266 30.6834 1.7546C31.588 1.20654 32.5701 0.777096 33.6296 0.466258C34.6891 0.155419 35.8953 0 37.2482 0C39.0738 0 40.7934 0.347648 42.4071 1.04294C44.0208 1.73824 45.4267 2.68303 46.6247 3.8773C47.8227 5.07157 48.7681 6.47853 49.4609 8.09816C50.1536 9.71779 50.5 11.4438 50.5 13.2761C50.5 14.863 50.2229 16.4049 49.6687 17.9018C49.1145 19.3988 48.324 20.7607 47.2971 21.9877H35.8056L33.3362 19.4847L25.5122 27.362L14.5587 16.3436L8.95966 21.9877Z" fill="#1F6C50"/>
                    </svg>
                </span>
                <p class="text-2xl font-medium text-black mt-3">Gastroenterology</p>
            </div>

                  </div>
                </div>

              </div>
            </div> 
      </section>

            <!--Login-->
        <div class="mt-12 h-screen-md py-6 flex justify-center items-center">
          <div class="rounded-lg shadow-2xl  overflow-hidden bg-cover bg-center" style="background-image: url('../dist/img/doctorimage.png'); width: 1400px; height: 650px;">
            <div class="ml-4 rounded-lg shadow-lg overflow-hidden bg-white bg-cover bg-center" style="width: 550px; height: 460px; margin-top: 110px; margin-left: 80px;">
              <br>
              <div class="flex flex-col ml-12 mb-2">
                <img class=" w-32 h-16" src="../dist/img/loginlogo.svg" alt="Login Icon">
              </div>
        
              <div class="w-full sm:max-w-md p-2 mx-auto">
                <h2 class="text-left mb-1 text-3xl font-bold text-green-700  dark:text-green-900" style="font-family: 'Poppins';">LOGIN</h2>
        
                <br>
                <form class="">
                  <div class="mb-4">
                    <label class="block mb-1 font-medium" for="username">Username</label>
                    <input id="username" type="text" name="username" class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" placeholder="Enter Username">
                  </div>
                  <div class="mb-4">
                    <label class="block mb-1 font-medium" for="password">Password</label>
                    <input id="password" type="password" name="password" class="py-2 px-3 border border-gray-300 focus:border-gray-800 focus:outline-none focus:ring focus:ring-gray focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-green-800 mt-1 block w-full" placeholder="Enter password">
                  </div>
        
                  <div class="mt-6 flex items-center justify-between font-poppins">
                    <div class="flex items-center">
                      <input id="remember_me" type="checkbox" class="border border-green-800 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50">
                      <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900" style="font-family: 'Poppins';">Remember me</label>
                    </div>
                    <a href="#" class="font-medium text-green-700 hover:underline dark:text-green-900">Forgot your password?</a>
                  </div>
        
                  <div class="mt-6">
                      <button class="w-full inline-flex items-center justify-center px-4 py-2 bg-green-950 border border-transparent rounded-md font-semibold capitalize text-white hover:bg-green-800 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25 transition">Login</button>
                      <a href="../src/D-Dashboard.html"></a>
                  
                  </div>
                  

                  <div class="text-center">
                      <h4 class="font-normal inline-block mr-2" style="font-family: 'Poppins';">Don't have an Account?</h4>
                      <a href="/D-Registration.html" class="underline font-medium text-green-700 hover:underline dark:text-green-900" style="font-family: 'Poppins';">Sign up</a>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>  



      
</body>
</html>