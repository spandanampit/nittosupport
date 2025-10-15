<?php

/** 
 * Template Name: Login Page 
 * Template Post Type: page 
 */
// get_header();
get_template_part('templates/parts/header');
?>

<div class="login-container">
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>
<?php
get_template_part('templates/parts/footer');
