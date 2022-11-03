$('.as-form').on('click',function(e){
    e.preventDefault();
    var form = document.createElement('form');
    $(form).css('style','none')
        .attr('action',$(this).data('action'))
        .attr('method',$(this).data('method'))
    $(form).appendTo($('body'));
    $($('meta[name="csrf-token"]').attr('content')).appendTo(form);
    formData =$($(this).data('form')).serializeArray();
    formData.forEach(function(input){
        $("<input type='hidden' name="+input.name+" value="+input.value+" />").appendTo(form);
    })
    $(form).submit();
});