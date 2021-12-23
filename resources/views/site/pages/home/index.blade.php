@extends('main')

@section('title', 'FETB Laravel 8')

@section('content')

{{-- O conteúdo começa aqui --}}

<div class="container text-center py-5">
    <h1>Em teoria isso deveria funcionar...</h1>

    <div class="mb-5" title="Temos o Font Awesome instalado o/">
        <i class="fas fa-cat fs-1"></i>
    </div>

    <div class="mb-5">
        <button class="btn-theme" data-bs-toggle="modal" data-bs-target="#meuModal">
            E isso deveria abrir um modal
        </button>

        {{-- Exemplo de componente de modal --}}
        @component('site.components.modals.modal', [
            'id' => 'meuModal', // O id é a única prop obrigatória! 
            'title' => 'Em teoria isso deveria ser um modal',
            'submit_text' => 'Sim', // Default: Ok
            'cancel_text' => 'Não', // Default: Cancelar
            'onsubmit' => "alert('CLICK!')"
            ])
            @slot('content')
                <h2>
                    Boilerplate by
                </h2>

                <ul>
                    <li>Angelo Ricardo</li>
                    <li>Camila Silva</li>
                    <li>Gustavo Barreto</li>
                    <li>Victor Ribeiro</li>
                </ul>
            @endslot
        @endcomponent
    </div>

    <div class="mb-5">
        <p>
            Você pode usar esses botões padrão...
        </p>

        <p>
            <button class="btn-theme">
                btn-theme
            </button>
        
            <button class="btn-flat">
                btn-flat
            </button>
        </p>
    </div>

    <div class="mb-5">
        <p>
            Usar os do <a href="https://getbootstrap.com/docs/5.1/components/buttons/" target="_blank" rel="noopener">Bootstrap</a>...
        </p>

        <p>
            <button class="btn btn-primary">
                btn btn-primary
            </button>

            <button class="btn btn-danger">
                btn btn-danger
            </button>

            <button class="btn btn-success">
                btn btn-success
            </button>

            <button class="btn btn-light">
                btn btn-light
            </button>
        </p>
    </div>

    <div class="mb-5">
        <p>
            Ou criar os seus próprios, assim como qualquer componente. :)
        </p>
    </div>

    <div class="mb-5">
        <p>
            Agora é só apagar isso tudo e fazer sua arte. Comece em:
        </p>

        <p>
            <code>
                /resources/views/site/pages/home/index.blade.php
            </code>
        </p>
    </div>
</div>


{{-- O conteúdo termina aqui --}}

@endsection
