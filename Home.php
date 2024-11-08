<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home.php</title>
</head>
<body>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Age
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Password
                </th>
                <th scope="col" class="px-6 py-3">
                    Mobile
                </th>
                
            </tr>
        </thead>
        <tbody>
                <?php
                 include 'Connection.php';
                 $sql="SELECT * FROM p_info";
                 $result=$conn->query($sql);
                 if($result)
                 {
                    while($rows=$result->fetch_assoc())
                    {
                        echo
                        '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">'.
                    $rows['Id'].
                '</th>
                <td class="px-6 py-4">'.
                    $rows['Name'].'
                </td>
                <td class="px-6 py-4">'.
                   $rows['Age'].
                '</td>
                <td class="px-6 py-4">'.
                    $rows['Email'].
                '</td>
                <td class="px-6 py-4">'.
                    $rows['Password'].
                '</td>
                <td class="px-6 py-4">'.
                    $rows['Mobile'].
                '</td>
                <td class="px-6 py-4 text-right">
                    <a href="Update.php?updateid='.$rows['Id'].'" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="Delete.php?deleteid='.$rows['Id'].'" class="font-medium text-blue-600 dark:text-blue-500 hover:underline pl-5">Delete</a>
                </td>
            </tr>';

                    }
                 }
                ?>


            
        </tbody>
    </table>
</div>
<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a href="Form.php">Add User</a></button>
</body>
</html>