<?php include('../controllers/PostController.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jodit/3.19.5/jodit.min.css"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.19.5/jodit.min.js"></script>
</head>
<body>
    <div>
        <form action="" method="post">
            <h3>Add Post</h3>
            <?php echo $message ?>
            <label for="title">Title</label>
            <input type="text" name="titel" id="titel">
            <label for="text">Text</label>
            <div>
            <textarea name="text" id="text" cols="80" rows="10">
            </textarea>
            </div>
            <input type="submit" name="submit" id="submit" value="SUBMIT">
        </form>
    </div>
    <script>
	const editor = Jodit.make('#text');
</script>
</body>
</html>