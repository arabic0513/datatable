<div class="container">
    <table id="example" class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript">
        var columns = [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ];
</script>
<x-laravelDatatable dom="'Qlfrtip' + 'Bfrtip'" getData="{{ route('users.index') }}" tableTitle="{{ __('Users') }}"></x-laravelDatatable>

</html>
