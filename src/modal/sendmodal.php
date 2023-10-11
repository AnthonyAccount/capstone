<div id="sendpatient" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full">
    <div class="relative ml-16 mr-16 p-4 w-full md:w-1/4 lg:w-1/2 max-w-screen-md">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow-2xl">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5">
                <h3 class="text-lg font-semibold text-black">SEND E-PRESCRIPTION</h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-green-900 hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="sendpatient">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="w-full md:w-3/4 lg:w-1/2 mx-auto flex items-center justify-center">
                <form action="get" class="bg-white p-8 rounded-lg w-full h-auto">
                <div class="text-center justify-center">
               
                    <h3 class="font-poppins text-lg text-gray-700">
                        Please confirm before you proceed <span class="">Do you want to continue?</span>
                    </h3>
                </div>

                    <div class="flex items-center justify-center mt-4">
                        <button class="px-4 py-2 bg-green-950 border border-transparent rounded-md font-semibold text-white hover:bg-green-800 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25 transition">
                            Yes
                        </button>
                        <div class="mx-2"></div> <!-- This adds a space between the buttons -->
                        <button class="px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-white hover:bg-green-800 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25 transition">
                            No
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
