<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php echo form_open('Gtb/login');?>
        <div>
            <label for="username">USERNAME</label>
            <input type="text" name="username" id="username">
        </div>
    <?php echo form_close();?>
</body>
</html>