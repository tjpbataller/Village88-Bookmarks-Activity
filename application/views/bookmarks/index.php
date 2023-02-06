<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmark</title>
</head>
<body>
    <h1>Add a Bookmark</h1>
    <form action="add" method="post">
        <label>Name: <input type="text" name="name"></label>
        <label>URL: <input type="text" name="url"></label>
        <select name="folder">
<?php
        foreach($folders as $folder){
?>
        <option value="<?= $folder["id"] ?>"><?= $folder["name"] ?></option>
<?php
        }
?>
        </select>
        <input type="submit" name="submit" value="Add">
    </form>
    <h1>Bookmarks</h1>
    <table>
        <thead>
            <tr>
                <th>Folder</th>
                <th>Name</th>
                <th>URL</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
<?php
        foreach($bookmarks as $bookmark){
?>
            <tr>
                <td><?= $bookmark['folder_name'] ?></td>
                <td><?= $bookmark['bookmark_name'] ?></td>
                <td><a href="<?= $bookmark['url']?>"><?= $bookmark['url'] ?></a></td>
                <td><a href="delete/<?= $bookmark['id'] ?>">delete</a></td>
            </tr>
<?php
        }
?>
        </tbody>
    </table>
</body>
</html>