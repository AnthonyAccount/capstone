<?php
include '../php/accounts.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Accoutns</title>
    <link href="../../dist/output.css" rel="stylesheet">
    <link href="../../src/input.css" rel="stylesheet">
</head>

<body>
    <br><br>
    <div class="flex flex-wrap mt-8 space-x-0 space-y-2 ml-80 md:space-x-4 md:space-y-0">

        <div class="flex-1 p-4 bg-white rounded-lg shadow md:w-1/2">
            <h2 class="pb-1 text-lg font-semibold text-gray-500">Doctor</h2>
            <div class="my-1"></div>
            <div class="h-px mb-6 bg-gradient-to-r from-cyan-300 to-cyan-500"></div> <!-- Línea con gradiente -->
            <div class="chart-container" style="position: relative; height:500px; width:100%">
                <form method="POST" action="" class="space-y-4 bg-white rounded md:space-y-6">

                    <table class="w-full text-sm table-auto">
                        <thead class=" bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) : ?>
                                <tr class="text-center hover:bg-grey-lighter">
                                    <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light">
                                        <a class="font-bold"><?php echo $user["first_name"]; ?> <?php echo $user["last_name"]; ?></a><br>
                                        <a><?php echo $user["email"]; ?></a>
                                    </td>
                                    <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light">
                                        <a href="view_doctor.php?id=<?php echo $user["doctor_id"]; ?>" class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded type=" button">
                                            view
                                        </a>

                                    </td>
                                    <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light">

                                        <input type="hidden" name="doctor_id" value="<?php echo $user["doctor_id"]; ?>">
                                        <button type="submit" class="px-4 py-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600" name="verify_account">
                                            Verify Account
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>


        <div class="flex-1 p-4 bg-white rounded-lg shadow md:w-1/2">
            <h2 class="pb-1 text-lg font-semibold text-gray-500">Distributor</h2>
            <div class="my-1"></div>
            <div class="h-px mb-6 bg-gradient-to-r from-cyan-300 to-cyan-500"></div> <!-- Línea con gradiente -->
            <div class="chart-container" style="position: relative; height:150px; width:100%">
                <form method="POST" action="" class="space-y-4 bg-white rounded md:space-y-6">

                    <table class="w-full text-sm table-auto">
                        <thead class=" bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) : ?>
                                <tr class="text-center hover:bg-grey-lighter">
                                    <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light">
                                        <a class="font-bold"><?php echo $user["first_name"]; ?> <?php echo $user["last_name"]; ?></a><br>
                                        <a><?php echo $user["email"]; ?></a>
                                    </td>
                                    <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light">
                                        <a href="view_doctor.php?id=<?php echo $user["doctor_id"]; ?>" class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded type=" button">
                                            view
                                        </a>

                                    </td>
                                    <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light">
                                        <input type="hidden" name="doctor_id" value="<?php echo $user["doctor_id"]; ?>">
                                        <button type="submit" class="px-4 py-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600" name="verify_account">
                                            Verify Account
                                        </button>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
    });
</script>