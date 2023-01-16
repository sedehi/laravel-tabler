$('.as-form').on('click',function(e){
    e.preventDefault();
    var form = document.createElement('form');
    var method = $(this).data('method').toLowerCase();
    if(method !== 'get'){
        method = 'POST';
    }
    $(form).css('style','none')
        .attr('action',$(this).data('action'))
        .attr('method',method)
    $(form).appendTo($('body'));
    formData =$($(this).data('form')).serializeArray();
    formData.forEach(function(input){
        $("<input type='hidden' name="+input.name+" value="+input.value+" />").appendTo(form);
    })
    $("<input type='hidden' name='_method' value="+$(this).data('method')+" />").appendTo(form);
    $("<input type='hidden' name='_token' value="+$('meta[name="csrf-token"]').attr('content')+" />").appendTo(form);
    $(form).submit();
});

$('.table-responsive').on('show.bs.dropdown', function () {
    $('.table-responsive').css( "overflow", "inherit" );
});
$('.table-responsive').on('hide.bs.dropdown', function () {
    $('.table-responsive').css( "overflow", "auto" );
})
const Toast = Swal.mixin({
    toast: true,
    position: 'top-right',
    iconColor: 'white',
    customClass: {
        popup: 'colored-toast'
    },
    showConfirmButton: false,
    timer: 1500,
    timerProgressBar: true
})
