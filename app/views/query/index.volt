{% if user %}
{{ javascript_include( '//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js' ) }}
{{ stylesheet_link( '//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' ) }}

<p>
user: '{{ user }}' query: '{{ q }}' result:
</p>

<table id="query-results" class="display">
    <thead>
	<tr>
	    <th>Name</th>
	    <th>Adress</th>
	    <!-- <th>Rating</th> -->
	</tr>
    </thead>
</table>

<script>
var data = {{ data }};

$(document).ready( function() {
    $('#query-results').DataTable( {
	data: data.results,
	columns: [
	    { data: "name" },
	    { data: "formatted_address" },
	    /* { data: "rating" }, */
	]
    } );
} );
</script>
{% else %}
not logged in yet
{% endif %}


