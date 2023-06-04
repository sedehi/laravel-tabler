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

let options = {
    selector: '.editor',
    height: 300,
    menubar: true,
    statusbar: false,
    directionality: $('html').attr('dir'),
    language: $('html').attr('lang'),
    font_family_formats: 'Arial=arial,helvetica,sans-serif; Tahoma=tahoma,monospace; Vazir=vazir',
    plugins: [
        'code',
        'fullscreen',
        'advlist',
        'autolink',
        'lists',
        'link',
        'image',
        'charmap',
        'preview',
        'anchor',
        'media',
        'table',
        'wordcount',
        'codesample',
    ],
    toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat',
}
tinyMCE.init(options);
