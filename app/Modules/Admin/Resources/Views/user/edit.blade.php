@extends('admin::layouts.app')

@section('path')
    <li class="option disabled-option inline-block">Página Inicial</li>
    <li class="option-arrow white inline-block"><i class="fa fa-arrow-right"></i></li>
    <li class="option inline-block"><a class="milk text-decoration-none" href="{{ route('admin.user') }}">Lista de Usuários</a></li>
    <li class="option-arrow white inline-block"><i class="fa fa-arrow-right"></i></li>
    <li class="option disabled-option inline-block">{{ $client->nome }}</li>
@endsection

@section('content')
    <div class="block p-md m-t-md">
        <div class="inline-block align-middle">
            <img src="{{ asset('img/seo-marketing/png/083-address-book.png') }}" width="70px">
        </div>

        <div class="inline-block align-middle m-l-md">
            <h2 class="m-t-sm m-b-sm">Perfil - {{ $client->nome }}</h2>
            <p class="block m-b-sm">Modifique aqui todas as informações do <b>Usuário</b>.</p>
        </div>
    </div>

    <div class="p-md" style="margin-top:-10px;">
        <div class="card m-t-md" style="width:100%;">
            <div class="card-header background-weak-blue white">
                <h3 class="m-t-sm">
                    Editar o Usuário - {{ $client->nome }}

                    <i class="fa fa-user-circle right" style="margin-top:4px;"></i>
                </h3>
            </div>
            <div class="card-body text-center p-md">
                <div class="inline-block align-top p-sm m-l-md m-t-md">
                    <img src="{{ asset('img/blank-profile-picture.png') }}" width="135px">
                </div>

                <form method="post" class="inline-block text-left align-top p-md m-l-md" style="width:80%;padding-bottom:0;">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group" style="margin-top:-10px;">
                        <label for="nome" class="block form-label required-field">Nome Completo:</label>
                        <input type="text" name="nome" class="form-input" value="{{ old('nome', $client->nome) }}" id="nome">
                    </div>

                    <div class="form-group m-t-md">
                        <label for="email" class="block form-label required-field">E-mail:</label>
                        <input type="email" name="email" class="form-input" value="{{ old('email', $client->email) }}" id="email">
                    </div>

                    <div class="form-group m-t-md">
                        <label for="stusuario" class="block form-label required-field">Status:</label>
                        <select name="stusuario" class="form-input" id="stusuario">
                            <option value="">Selecione uma opção</option>
                            <option value="ati" {{ old('stusuario', $client->stusuario) === 'ati' ? 'selected' : '' }}>Ativo</option>
                            <option value="ina" {{ old('stusuario', $client->stusuario) === 'ina' ? 'selected' : '' }}>Inativo</option>
                        </select>
                    </div>

                    <div class="form-group m-t-md">
                        <label for="idpapel" class="block form-label required-field">Papel:</label>
                        <select name="idpapel" class="form-input" id="idpapel">
                            <option value="">Selecione uma opção</option>
                            @foreach($papers as $paper)
                                <option value="{{ $paper->id }}" {{ (old('idpapel', $client->idpapel) === $paper->id) ? 'selected' : '' }}>{{ $paper->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group m-t-md">
                        <span class="block">Registrado em: {{ (!empty($client->created_at)) ? (new \Carbon\Carbon($client->created_at))->format('d/m/Y H:i:s') : 'Não informado' }}</span>
                    </div>

                    <div class="form-group m-t-lg text-right">
                        <button type="submit" class="button button-success">
                            Salvar Alterações <i class="fa fa-save"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection