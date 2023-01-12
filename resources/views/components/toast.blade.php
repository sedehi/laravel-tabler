@push('js')
    @if(!isset($type))
        @php($type = 'success')
    @endif
    <script>
         Toast.fire({
            icon: '{{$type}}',
            title: '{{$message}}',
             showCloseButton: true,
             timer: 8000,
             position:'bottom-start'
         })
    </script>
@endpush
