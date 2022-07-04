<?php
function smarty_function_createDOM($count, $image_src, $result)
{
?>
    <tr class="list-item">
        <td class="text-center"><b><?= $count ?></b></td>
        <td class="text-center">
            <div class="w-100">
                <img src="<?= $image_src ?>" alt="" class="rounded-circle" style="width: 45px;">
            </div>
        </td>
        <td class="text-center"><?= $result["name"] ?></td>
        <td class="text-center table-responsive"><?= $result["email"] ?></td>
        <td class="text-center table-responsive"><?= $result["phone"] ?></td>
        <td class="text-center">
            <a href="./pages/edit-contact/edit-contact.php?id=<?= $result["id"] ?>"><i class="far fa-edit p-2 btn btn-primary"></i></a>
            <a href="./pages/delete/delete.php?id=<?= $result["id"] ?>"><i class="far fa-trash p-2 btn btn-danger"></i></a>
        </td>
    </tr>
<?php
}
?>