@extends('template.main')

@section('title', 'Laravel Features')

@section('content')
        <h2 class="mb-4 mt-4 font-weight-bold">Laravel Features</h2>
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <th>ID</th>
                <th>Feature Name</th>
                <th>Description</th>
            </thead>
            <tbody>
                @foreach($features as $feature)
                    <tr>
                        <td>{{$feature->id}}</td>
                        <td>{{$feature->name}}</td>
                        <td>{{$feature->description}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection