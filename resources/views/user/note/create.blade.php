@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Note</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('notes.create') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="note">Note</label>
                            <textarea class="form-control{{ $errors->has('note') ? ' is-invalid' : '' }}" id="note" name="note" rows="3">{{ old('note') }}</textarea>
                            @if ($errors->has('note'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('note') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
