@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="container">
                <h1>{{ $project->name }}</h1>
                <p>{{ $project->description }}</p>
                <p>{{ $project->start_date }}</p>
                <p>{{ $project->end_date }}</p>
                <p>{{ $project->status }}</p>
            </div>
            <div class="container mb-3">
                <div class="row">
                    <div class="col-auto">
                        <a class="btn btn-sm btn-warning" href="{{ route('admin.projects.edit', $project) }}">Modifica</a>
                    </div>
                    <div class="col-auto">
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            {!! $project->content !!}
        </div>
    </section>
@endsection
