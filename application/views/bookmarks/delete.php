<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete a Bookmark</title>
</head>
<body>
        <form action="../delete_bookmark/<?= $id ?>">
            <p>Are you sure you want to delete?</p>
            <p><?= $folder_name ?>/<?= $bookmark_name ?> (<a href="<?= $url ?>"><?= $url ?>)</a></p>
            <a href="/">No</a>
            <input type="submit">
        </form>
</body>
</html>