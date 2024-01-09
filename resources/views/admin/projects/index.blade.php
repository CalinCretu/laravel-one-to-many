@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        {{-- <th>Start Date</th> --}}
                        {{-- <th>End Date</th> --}}
                        <th>Status</th>
                        <th></th>
                        <th>
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.projects.create') }}">New</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>
                                <a href="{{ route('admin.projects.show', $project) }}">
                                    {{ $project->name }}</a>
                            </td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->status }}</td>
                            <td>
                                <a href="{{ route('admin.projects.edit', $project) }}"><button
                                        class="btn btn-sm btn-warning">Edit</button></a>
                            </td>
                            <td>
                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td>Nessun post</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
