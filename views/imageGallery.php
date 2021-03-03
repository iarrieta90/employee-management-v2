<?php
require("./libs/avatarsApi.php");
$counter = 1;
foreach ($result as $avatar) {
    $image =  urldecode($avatar['photo']) == 'assets/images/no-user.png' ? URL . urldecode($avatar['photo']) : urldecode($avatar['photo']);

    echo '<label class="label-avatar" for="avatar' . $counter . '">
              <input type="radio" id="avatar' . $counter . '" class="input_avatar" name="avatar" value="' . urldecode($avatar['photo']) . '" checked="false" >
              <img class="img_avatar" src="' . $image .'" alt="avatar' . $counter . '">
            </label>';
    $counter++;
}