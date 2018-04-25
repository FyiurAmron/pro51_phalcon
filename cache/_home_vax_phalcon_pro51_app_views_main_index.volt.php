<p>Credentials OK. Search form:</p>

<?= $this->tag->form(['query']) ?>
    <p>
        <label for="query">Query: </label>
        <?= $this->tag->textField(['query']) ?>
    </p>
    <p>
        <?= $this->tag->submitButton(['Search for places...']) ?>
    </p>
<?= $this->tag->endform() ?>


