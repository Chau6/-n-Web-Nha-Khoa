


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>LOGIN</h2>
    <form action="<?php echo e(route('postLogin')); ?>" method="POST">
      <?php echo csrf_field(); ?>
        <table>
            <tr>
                <td>UserName</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td><a href="<?php echo e(route('getRegister')); ?>">Register</a></td>
            </tr>
        </table>
    </form>
</body>
</html><?php /**PATH C:\Users\ACER\Desktop\Chau_folder\GitHub\-n-Web-Nha-Khoa\resources\views/login.blade.php ENDPATH**/ ?>