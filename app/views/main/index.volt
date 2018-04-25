<p>Credentials OK. Search form:</p>

{{ form('query') }}
    <p>
        <label for="query">Query: </label>
        {{ text_field('query') }}
    </p>
    <p>
        {{ submit_button('Search for places...') }}
    </p>
{{ endForm() }}


