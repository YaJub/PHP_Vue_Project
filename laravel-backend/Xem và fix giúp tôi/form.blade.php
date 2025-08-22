@extends('layouts.app')

@section('content')
    <h2>{{ __('messages.submit_form') }}</h2>

    @if ($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/submit">
        @csrf
        <input type="text" name="name" placeholder="{{ __('messages.enter_name') }}">
        <button type="submit">{{ __('messages.submit') }}</button>
    </form>
@endsection
