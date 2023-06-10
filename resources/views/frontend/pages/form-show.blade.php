@extends('frontend.layouts.master')
@section('main-content')
    <div class="container" style="margin: 10px 69px;padding: 53px;">
        <form method="POST" action="#">
            @csrf
            @foreach($formFields as $field)
                <div class="form-group col-6">
                    <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
                    @if($field['type'] === 'text')
                        <input type="text" name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-control" value="{{ old($field['name']) }}">
                        @elseif($field['type'] === 'date')
                        <input type="date" name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-control" value="{{ old($field['name']) }}">
                        @elseif($field['type'] === 'textarea')
                        <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-control">{{ old($field['name']) }}</textarea>
                        @elseif($field['type'] === 'number')
                        <input type="text" name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-control" value="{{ old($field['name']) }}">
                        @elseif($field['type'] === 'select')
                        <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-control">
                            @if(isset($field['options']))
                            @foreach($field['options'] as $option)
                                <option value="{{ $option['value'] }}" {{ old($field['name']) === $option['value'] ? 'selected' : '' }}>{{ $option['label'] }}</option>
                            @endforeach
                            @endif
                        </select>
                    @endif
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@push('scripts')
<script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/js/contact.js') }}"></script>
@endpush
