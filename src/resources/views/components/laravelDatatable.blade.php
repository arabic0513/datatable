
<script>
    $(document).ready(function() {
        $.fn.dataTable.moment('DD-MM-YYYY');

        $('#example').DataTable( {

            keys: {{$keys}},
            rowReorder: {{$rowReorder}},
            rowGroup: {{$rowGroup}},
            responsive: {{$responsive}},
            select: {{$select}},
            order: [[0, 'desc']],
            colReorder: {{$colReorder}},
            "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "{{ __('Все') }}"] ] ,
            "pagingType": "{{$pagingType}}",
            pageLength: {{$pageLength}},
            "language" : {!! $language !!},

            dom: "{{$dom}}",
            ajax: "{{$getData}}",
            {!! $buttonLanguage !!}

            columns: columns,

        });
        var divTitle = ''
            + '<div class="col-12 text-center text-md-left pt-4 pb-4 display-2" style="text-align: center !important;">'
            + '<h1 class="text-dark">' + '{{$tableTitle}}' + '</h1>'
            + '</div>';

        $("#fortext").append(divTitle);

    });
</script>
