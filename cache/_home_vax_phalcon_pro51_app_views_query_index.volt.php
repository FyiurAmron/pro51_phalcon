<?php if ($user) { ?>
<?= $this->tag->javascriptInclude('//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') ?>
<?= $this->tag->stylesheetLink('//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css') ?>

<p>
user: '<?= $user ?>' query: '<?= $q ?>' result:
</p>

<table id="query-results" class="display">
    <thead>
	<tr>
	    <th>Name</th>
	    <th>Adress</th>
	    <th>Rating</th>
	</tr>
    </thead>
</table>

<script>
var data = <?= $data ?>;

$(document).ready( function() {
    $('#query-results').DataTable( {
	data: data.results,
	columns: [
	    { data: "name" },
	    { data: "formatted_address" },
	    { data: "rating" },
	]
    } );
} );
</script>
<?php } else { ?>
not logged in yet
<?php } ?>


