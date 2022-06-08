@extends('layouts.app')

@section('content')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<div class="mx-auto  min-h-screen">
    <div class="p-[1rem] md:p-[5rem] lg:p-[5rem]">
        <table id="usersTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Annual Income</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Occupation</th>
                    <th>Family Type</th>
                    <th>Is Manglik</th>
                    <th>Expected Income Min</th>
                    <th>Expected Income Max</th>
                    <th>Expected Occupation</th>
                    <th>Expected Family Type</th>
                    <th>Expected Manglik</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<style>
    input {
        background-color: #d2e6ca;
        padding: 5px;
        border: 1px black solid !important;
        border-radius: 10px;
    }

    #usersTable {
        padding: 5px;
        border: 1px black solid !important;
    }
</style>

<script>
    $(document).ready(function() {
        $('#usersTable thead tr')
            .clone(true)
            .addClass('filters')
            .appendTo('#usersTable thead');

        var table = $('#usersTable').DataTable({
            orderCellsTop: true,
            fixedHeader: true,
            responsive: true,
            "ajax": {
                "type": "GET",
                "headers": {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                "url": "/user/all",
                "dataType": "json",
                "contentType": 'application/jsondt; charset=utf-8',
            },
            columns: [{
                data: 'first_name'
            }, {
                data: 'last_name'
            }, {
                data: 'email'
            }, {
                data: 'dob'
            }, {
                data: 'annual_income'
            }, {
                data: 'gender'
            }, {
                data: 'age'
            }, {
                data: 'occupation'
            }, {
                data: 'family_type'
            }, {
                data: 'is_manglik'
            }, {
                data: 'expected_income_low'
            }, {
                data: 'expected_income_high'
            }, {
                data: 'expected_occupation'
            }, {
                data: 'expected_family_type'
            }, {
                data: 'expected_is_manglik'
            }, ],
            initComplete: function() {
                var api = this.api();
                api
                    .columns()
                    .eq(0)
                    .each(function(colIdx) {
                        if ((colIdx != 0) && (colIdx != 1) && (colIdx != 2) && (colIdx != 3) && (colIdx != 10) && (colIdx != 11) && (colIdx != 12) && (colIdx != 13) && (colIdx != 14)) {
                            var cell = $('.filters th').eq(
                                $(api.column(colIdx).header()).index()
                            );
                            var title = $(cell).text();
                            $(cell).html('<input type="text" placeholder="' + title + '" />');
                            $(
                                    'input',
                                    $('.filters th').eq($(api.column(colIdx).header()).index())
                                )
                                .off('keyup change')
                                .on('change', function(e) {
                                    $(this).attr('title', $(this).val());
                                    var regexr = '({search})';

                                    var cursorPosition = this.selectionStart;
                                    api
                                        .column(colIdx)
                                        .search(
                                            this.value != '' ?
                                            regexr.replace('{search}', '(((' + this.value + ')))') :
                                            '',
                                            this.value != '',
                                            this.value == ''
                                        )
                                        .draw();
                                })
                                .on('keyup', function(e) {
                                    e.stopPropagation();

                                    $(this).trigger('change');
                                    $(this)
                                        .focus()[0]
                                        .setSelectionRange(cursorPosition, cursorPosition);
                                });

                        }else{

                            var cell = $('.filters th').eq(
                                $(api.column(colIdx).header()).index()
                            );
                            var title = $(cell).text();
                            $(cell).html('<p style="color:white;">_______________</p>');

                        }

                    });
            },
        });
    });
</script>
@endsection
