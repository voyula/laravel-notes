@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Notes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($notes))
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Note</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notes as $note)
                                    <tr>
                                        <td>{{ $note->note }}</td>
                                        <td>
                                            <a href="{{ route('notes.edit', $note->id) }}">Edit</a> |
                                            <a href="{{ route('notes.delete', $note->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $notes->links() }}
                    @else
                        <div class="alert alert-warning" role="alert">
                            Not have note...
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
