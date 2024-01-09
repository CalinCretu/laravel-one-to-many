@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" required name="name" id="name" placeholder="Project Name"
                        value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="text" class="form-control" required name="start_date" id="start_date"
                        placeholder="Project start date" value="{{ old('start_date') }}">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" required name="status" id="status"
                        placeholder="Project status" value="{{ old('status') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Project Description">{{ old('description') }}</textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Crea">
                </div>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </section>
@endsection
