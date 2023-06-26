@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Adicionar nova pizza</h1>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (isset($errors) && count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p> {{ $error }} </p>
                        @endforeach
                    </div>
                @endif


                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-2 mb-3">
                        <div class="form-floating col-md">
                            <input type="sabor" class="form-control" name="sabor" id="floatingInput"
                                placeholder="Portuguesa">
                            <label for="floatingInput">Sabor</label>
                        </div>
                        <div class="input-group col-md">
                            <span class="input-group-text">R$</span>
                            <input type="text" name="preco" class="form-control" aria-label="Preço da unidade">
                        </div>

                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="descricao" placeholder="Breve explicação dos ingredientes da pizza"
                            id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Descrição</label>
                    </div>

                    <div class="mb-3">
                        <div>
                            <input class="form-control" type="file" name="imagem" id="formFile" onchange="preview()">
                        </div>
                        <div class="col mx-auto text-center">
                            <img id="frame" src="" class="img-fluid mt-3"/>
                        </div>
                    </div>


                    <script>
                        function preview() {
                            frame.src = URL.createObjectURL(event.target.files[0]);
                        }

                        function clearImage() {
                            document.getElementById('formFile').value = null;
                            frame.src = "";
                        }
                    </script>

                    <div class="col mx-auto text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
