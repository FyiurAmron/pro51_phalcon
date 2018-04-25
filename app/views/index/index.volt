<div class="page-header">
    <h1>Login page</h1>
</div>

<p>Please input your credentials:</p>

{{ form('main') }}
    <p>
        <label for="login">Login: </label>
        {{ text_field('login') }}
    </p>
    <p>
        <label for="password">Pass: </label>
        {{ password_field('password') }}
    </p>
    <p>
        {{ submit_button('Login') }}
    </p>
{{ endForm() }}
