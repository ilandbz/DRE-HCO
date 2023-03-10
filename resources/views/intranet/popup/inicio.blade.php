<x-app-layout>
    <x-slot name="header">
        <h2><i class="far fa-clone"></i> POPUPS
    </x-slot>
    <form action="{{ route('popup.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mg-b-25">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="titulopopup">Titulo: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="titulopopup" id="titulopopup" :value="old('titulopopup')" placeholder="Nombre">
                    <x-input-error :messages="$errors->get('titulopopup')" class="mt-2" />
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="enlace_popup">Enlace:</label>
                    <input class="form-control" type="text" name="enlace_popup" id="enlace_popup" :value="old('enlace_popup')" placeholder="http://">
                    <x-input-error :messages="$errors->get('enlace_popup')" class="mt-2" />
                </div>
            </div>
        </div><!-- row -->

        <div class="row">
            <div class="col">
                <button class="btn btn-info">Guardar</button>
            </div>
        </div>
    </form><br>
    <div class="row">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="border border-slate-500">ID</th>
                        <th class="border border-slate-500" width="60%">Titulo</th>
                        <th class="border border-slate-500">Estado</th>
                        <th class="border border-slate-500">Fecha de Creacion</th>
                        <th class="border border-slate-500">Accion</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($popups as $item)
                <tr>
                    <td class="border border-slate-500">{{ $item->id }}</td>
                    <td class="border border-slate-500">{{ $item->titulopopup }}</td>
                    <td class="border border-slate-500">{{ $item->estado==1 ? 'ACTIVO' : 'INACTIVO' }}</td>
                    <td class="border border-slate-500">{{$item->created_at}}</td>
                    <td class="border border-slate-500">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('popup.destroy', $item->id) }}" class="btn btn-danger btn-sm eliminar" title="Eliminar"><i class="fas fa-trash"></i></a>
                            <a href="{{route('popup.edit', $item->id)}}" class="btn btn-warning btn-sm" title="Editar"><i class="icon ion-edit"></i></a>
                            <a href="{{$item->id}}" class="btn btn-primary btn-sm showpopup" title="Mostrar"><i class="fa fa-eye"></i></a>
                        </div>
                    </td>
                </tr>
                </tbody>
                @endforeach
            </table>
            {{ $popups->links() }}
        </div>
    </div>

<div id="popupcontent">

</div>

</x-app-layout>
