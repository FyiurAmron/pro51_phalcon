<div class="page-header">
    <h1>Login page</h1>
</div>

<p>Please input your credentials:</p>

<?= $this->tag->form(['main']) ?>
    <p>
        <label for="login">Login: </label>
        <?= $this->tag->textField(['login']) ?>
    </p>
    <p>
        <label for="password">Pass: </label>
        <?= $this->tag->passwordField(['password']) ?>
    </p>
    <p>
        <?= $this->tag->submitButton(['Login']) ?>
    </p>
<?= $this->tag->endform() ?>
