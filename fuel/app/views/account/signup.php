<h2>アカウント登録</h2>

<form action="<?php echo Uri::base(); ?>/account/register" method="post">
<input type="hidden" name="<?php echo \Config::get('security.csrf_token_key');?>" value="<?php echo \Security::fetch_token();?>" />



    <?php if (isset($errors) && count($errors) > 0): ?>
    <?php
        $data = array(
            'errors' => $errors,
        );
        echo View::forge('errors', $data);
    ?>
    <?php endif; ?>

    <?php
        $data = array(
            'user_name' => $user_name,
            'password' => $password,
        );
        echo View::forge('account/inputs', $data);
    ?>


    <p>
        <input type="submit" value="登録" />
    </p>
</form>
