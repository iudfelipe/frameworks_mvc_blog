<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                @include('dashboard.partials.validation-error')
                    <form action="{{ url('usuarios/'.$user->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-3 row">
                            <label for="name">Nombre:</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email">E-mail:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password">Password:</label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control" name="password" id="password" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="confirm-password">Confirmar Password:</label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control" name="confirm-password" id="confirm-password" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="role">Rol</label>
                            <div class="col-sm-5">
                                <select name="role" id="role">
                                    <option value="">Seleccionar un rol</option>
                                    @foreach($roles as $id=>$rol)
                                    <option value="{{ $id }}">{{ $rol }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row center">
                            <div class="col s6">
                                <button class="btn btn-success btn-sm create-role" type="submit">Guardar</button>
                                <a href="{{ url('usuarios') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
