<div class="mdc-select">
    <i class="mdc-select__dropdown-icon"></i>
    <select class="mdc-select__native-control" name="state">
        <option value="" disabled selected></option>
        @foreach ($lists as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
    <label class="mdc-floating-label">Select a state</label>
    <div class="mdc-line-ripple"></div>
</div>