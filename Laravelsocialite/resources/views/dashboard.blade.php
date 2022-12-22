<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <form action="{{route('store')}}" method="POST">
        @csrf
        <input type="text" name="nom_tache">
        <button type="submit">Ajouter</button>
    </form>
    <table>
       @foreach($mytachee as $value)
       <tr>
        <td>{{$value->nom_tache}}</td>
        <td>
            <form action="{{route('mytachedelete',$value->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Supprimer</button>
            </form>
        </td>
        <td><a href="{{route('mytacheupdateT',$value->id)}}">Modifier</a></td>
       </tr>
        
       @endforeach
    </table>
</x-app-layout>
