 <?php
    include '../layouts/sidebar.php';
    ?>
 <!DOCTYPE html>
 <html>

 <head>
     <title>Create Prescription</title>
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <link href="../../dist/output.css" rel="stylesheet">
 </head>


 <body class="bg-gray-100">
     <div class="container p-4 mx-auto sm:ml-64">
         <h1 class="mb-4 text-3xl font-semibold">Create Prescription</h1>
         <form method="POST" action="createPrescription.php">
             <div class="mb-4">
                 <label for="patient_id" class="block mb-2 font-bold text-gray-700">Patient ID:</label>
                 <input type="text" name="patient_id" required class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
             </div>

             <div class="mb-4">
                 <label for="doctor_id" class="block mb-2 font-bold text-gray-700">Doctor ID:</label>
                 <input type="text" name="doctor_id" required class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
             </div>

             <div class="mb-4">
                 <label for="date" class="block mb-2 font-bold text-gray-700">Date:</label>
                 <input type="date" name="date" required class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
             </div>

             <div class="mb-4">
                 <label for="doctor_signature" class="block mb-2 font-bold text-gray-700">Doctor Signature:</label>
                 <input type="text" name="doctor_signature" required class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
             </div>

             <div class="mb-4">
                 <label for="expiration_date" class="block mb-2 font-bold text-gray-700">Expiration Date:</label>
                 <input type="date" name="expiration_date" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-blue-300">
             </div>

             <div class="mb-4">
                 <input type="submit" name="submit" value="Create Prescription" class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-700">
             </div>

             <h2 class="my-4 text-2xl font-semibold">ADD MEDICINE</h2>
             <div id="medicineFields">
                 <div class="flex space-x-4">
                     <div class="flex items-center">
                         <label for="medicine_name" class="block font-semibold">Medicine Name:</label>
                         <input type="text" name="medicine_name[]" id="medicine_name" required class="w-full px-3 py-2 border rounded-lg">
                     </div>
                     <div class="flex items-center">
                         <label for="manufacturer" class="block font-semibold">Manufacturer:</label>
                         <input type="text" name="manufacturer[]" id="manufacturer" required class="w-full px-3 py-2 border rounded-lg">
                     </div>
                     <div class="flex items-center">
                         <label for="medicine_type" class="block font-semibold">Medicine Type:</label>
                         <input type="text" name="medicine_type[]" id="medicine_type" required class="w-full px-3 py-2 border rounded-lg">
                     </div>
                     <div class="flex items-center">
                         <label for="dosage" class="block font-semibold">Dosage:</label>
                         <input type="text" name="dosage[]" id="dosage" required class="w-full px-3 py-2 border rounded-lg">
                     </div>
                     <div class="flex items-center">
                         <label for="regulatory_status" class="block font-semibold">Regulatory Status:</label>
                         <input type="text" name="regulatory_status[]" id="regulatory_status" required class="w-full px-3 py-2 border rounded-lg">
                     </div>

                     <div class="flex items-center">
                         <label for="quantity" class="block font-semibold">Quantity:</label>
                         <input type="text" name="quantity[]" required class="w-full px-3 py-2 border rounded-lg">
                     </div>
                     <div class="flex items-center">
                         <label for="dosageinstructions" class="block font-semibold">Instructions:</label>
                         <input type="text" name="dosageinstructions[]" required class="w-full px-3 py-2 border rounded-lg">
                     </div>
                     <div class="flex items-center">
                         <label for="duration" class="block font-semibold">Duration:</label>
                         <input type="text" name="duration[]" required class="w-full px-3 py-2 border rounded-lg">
                     </div>


                 </div>
             </div>
             <button type="button" onclick="addMedicineFields()" class="px-4 py-2 mt-4 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Add Medicine</button>
     </div>

     <script>
         let medicineFieldCounter = 0; // Initialize a counter for unique IDs

         function addMedicineFields() {
             const medicineFields = document.getElementById('medicineFields');
             const newFields = `
            <div class="flex space-x-4">
                    <div class="flex items-center">
                        <label for="medicine_name_${medicineFieldCounter}" class="block font-semibold">Medicine Name:</label>
                        <input type="text" name="medicine_name[]" id="medicine_name_${medicineFieldCounter}" required class="w-full px-3 py-2 border rounded-lg">    
                    </div>
                    <div class="flex items-center">
                        <label for="manufacturer_${medicineFieldCounter}" class="block font-semibold">Manufacturer:</label>
                        <input type="text" name="manufacturer[]" id="manufacturer_${medicineFieldCounter}" required class="w-full px-3 py-2 border rounded-lg">
                    </div>
                    <div class="flex items-center">
                        <label for="medicine_type_${medicineFieldCounter}" class="block font-semibold">Medicine Type:</label>
                        <input type="text" name="medicine_type[]" id="medicine_type_${medicineFieldCounter}" required class="w-full px-3 py-2 border rounded-lg">
                    </div>
                    <div class="flex items-center">
                        <label for="dosage_${medicineFieldCounter}" class="block font-semibold">Dosage:</label>
                        <input type="text" name="dosage[]" id="dosage_${medicineFieldCounter}" required class="w-full px-3 py-2 border rounded-lg">                        
                    </div>
                    <div class="flex items-center">
                        <label for="regulatory_status_${medicineFieldCounter}" class="block font-semibold">Regulatory Status:</label>
                        <input type="text" name="regulatory_status[]" id="regulatory_status_${medicineFieldCounter}" required class="w-full px-3 py-2 border rounded-lg">                      
                    </div>
                    <div class="flex items-center">
                        <label for="quantity" class="block font-semibold">Quantity:</label>
                        <input type="text" name="quantity[]" required class="w-full px-3 py-2 border rounded-lg">
                    </div>
                    <div class="flex items-center">
                        <label for="dosageinstructions" class="block font-semibold">Instructions:</label>
                        <input type="text" name="dosageinstructions[]" required class="w-full px-3 py-2 border rounded-lg">
                    </div>
                    <div class="flex items-center">
                        <label for="duration" class="block font-semibold">Duration:</label>
                        <input type="text" name="duration[]" required class="w-full px-3 py-2 border rounded-lg">
                    </div>
            </div>
        `;
             medicineFields.insertAdjacentHTML('beforeend', newFields);

             // Initialize autocomplete for the newly added medicine_name field
             $(`#medicine_name_${medicineFieldCounter}`).autocomplete({
                 source: function(request, response) {
                     $.ajax({
                         url: "suggestion_medicine_name.php", // PHP script to fetch medicine names
                         type: "POST",
                         dataType: "json",
                         data: {
                             term: request.term
                         },
                         success: function(data) {
                             response(data);
                         }
                     });
                 },
                 minLength: 1 // Minimum characters before triggering autocomplete
             });


             $(`#dosage_${medicineFieldCounter}`).autocomplete({
                 source: function(request, response) {
                     $.ajax({
                         url: "suggestion_dosage.php", // PHP script to fetch medicine names
                         type: "POST",
                         dataType: "json",
                         data: {
                             term: request.term
                         },
                         success: function(data) {
                             response(data);
                         }
                     });
                 },
                 minLength: 1 // Minimum characters before triggering autocomplete
             });
             $(`#medicine_type_${medicineFieldCounter}`).autocomplete({
                 source: function(request, response) {
                     $.ajax({
                         url: "suggestion_medicine_type.php", // PHP script to fetch medicine names
                         type: "POST",
                         dataType: "json",
                         data: {
                             term: request.term
                         },
                         success: function(data) {
                             response(data);
                         }
                     });
                 },
                 minLength: 1 // Minimum characters before triggering autocomplete
             });

             $(`#manufacturer_${medicineFieldCounter}`).autocomplete({
                 source: function(request, response) {
                     $.ajax({
                         url: "suggestion_manufacturer.php", // PHP script to fetch medicine names
                         type: "POST",
                         dataType: "json",
                         data: {
                             term: request.term
                         },
                         success: function(data) {
                             response(data);
                         }
                     });
                 },
                 minLength: 1 // Minimum characters before triggering autocomplete
             });

             $(`#regulatory_status_${medicineFieldCounter}`).autocomplete({
                 source: function(request, response) {
                     $.ajax({
                         url: "suggestion_regulatory_status.php", // PHP script to fetch medicine names
                         type: "POST",
                         dataType: "json",
                         data: {
                             term: request.term
                         },
                         success: function(data) {
                             response(data);
                         }
                     });
                 },
                 minLength: 1 // Minimum characters before triggering autocomplete
             });

             medicineFieldCounter++; // Increment the counter for the next field
         }
     </script>
     <script>
         $(`#medicine_name`).autocomplete({
             source: function(request, response) {
                 $.ajax({
                     url: "suggestion_medicine_name.php", // PHP script to fetch medicine names
                     type: "POST",
                     dataType: "json",
                     data: {
                         term: request.term
                     },
                     success: function(data) {
                         response(data);
                     }
                 });
             },
             minLength: 1 // Minimum characters before triggering autocomplete
         });

         medicineFieldCounter++; // Increment the counter for the next field
     </script>

     <script>
         $(`#manufacturer`).autocomplete({
             source: function(request, response) {
                 $.ajax({
                     url: "suggestion_manufacturer.php", // PHP script to fetch medicine names
                     type: "POST",
                     dataType: "json",
                     data: {
                         term: request.term
                     },
                     success: function(data) {
                         response(data);
                     }
                 });
             },
             minLength: 1 // Minimum characters before triggering autocomplete
         });

         medicineFieldCounter++; // Increment the counter for the next field
     </script>
     <script>
         $(`#medicine_type`).autocomplete({
             source: function(request, response) {
                 $.ajax({
                     url: "suggestion_medicine_type.php", // PHP script to fetch medicine names
                     type: "POST",
                     dataType: "json",
                     data: {
                         term: request.term
                     },
                     success: function(data) {
                         response(data);
                     }
                 });
             },
             minLength: 1 // Minimum characters before triggering autocomplete
         });

         medicineFieldCounter++; // Increment the counter for the next field
     </script>
     <script>
         $(`#dosage`).autocomplete({
             source: function(request, response) {
                 $.ajax({
                     url: "suggestion_dosage.php", // PHP script to fetch medicine names
                     type: "POST",
                     dataType: "json",
                     data: {
                         term: request.term
                     },
                     success: function(data) {
                         response(data);
                     }
                 });
             },
             minLength: 1 // Minimum characters before triggering autocomplete
         });

         medicineFieldCounter++; // Increment the counter for the next field
     </script>
     <script>
         $(`#regulatory_status`).autocomplete({
             source: function(request, response) {
                 $.ajax({
                     url: "suggestion_regulatory_status.php", // PHP script to fetch medicine names
                     type: "POST",
                     dataType: "json",
                     data: {
                         term: request.term
                     },
                     success: function(data) {
                         response(data);
                     }
                 });
             },
             minLength: 1 // Minimum characters before triggering autocomplete
         });

         medicineFieldCounter++; // Increment the counter for the next field
     </script>

     </div>
 </body>

 </html>