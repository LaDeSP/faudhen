<div class="form-group row">
    <label for="{{ $nome }}" class="col-sm-4 col-form-label text-md-left">{{ $label }}</label>
    <div class=" col-md-8">
    <input value="{{ $value ?? '' }}" id="{{ $id }}" type="{{ $type ?? '' }}" name="{{ $nome }}" placeholder="{{ $placeholder ?? '' }}"  class="std-style form-control" {{ $readonly ?? ''}}>
    </div>
</div>