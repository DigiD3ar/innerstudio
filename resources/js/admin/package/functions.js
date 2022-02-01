import * as custom_data_tables from '../custom_data_tables';

$(function () {
    let options = {
        serverSide: true,
        processing: true,
        pageLength: 50,
        ajax: _PATH+'admin/paquetes/array-data',
        columns: [
            {data: 'title', name: 'title'},
            {data: 'price', name: 'price', searchable: false},
            {data: 'no_class', name: 'no_class', searchable: false},
            {data: 'duration', name: 'duration', searchable: false},
            {data: 'actions', name: 'actions', orderable: false, searchable: false},
        ]
    };
    custom_data_tables.initDataTable(options);

});


$("input#global_filter").on("keyup", function(e) {
    custom_data_tables.filterGlobal();
});


$(document).on('click', '.do-delete', function(){
    deleteByModal($(this).data('id'));
});

$(document).on('click', '.do-change', function(){
    changeStatusByModal($(this).data('id'), $(this).data('status'));
});


function deleteByModal(id){
    $('input[name=id]').val(id);
    $('#modal-delete').modal('open');
}

function changeStatusByModal(id, status){
    $('input[name=id]').val(id);
    $('input[name=status]').val(status);
    $('#modal-change-status').modal('open');
}
