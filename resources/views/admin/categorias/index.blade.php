@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Categorias</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('categorias.create') }}" class="btn btn-primary">Novo</a>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

    <script>
        $(document).ready(function() {
            $('body').on('click', '.muda-status', function() {
                let checando = $(this).is(':checked');
                let id = $(this).data('id');

                $.ajax({
                    url: "{{ route('categorias.muda-status') }}",
                    method: 'PUT',
                    data: {
                        status: checando,
                        id: id
                    },
                    success: function(data) {
                        toastr.success(data.message);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                })
            })
        });
    </script>
@endpush
