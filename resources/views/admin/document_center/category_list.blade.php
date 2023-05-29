<select class="form-control" name="subcategory_id" id="subcategory_id">
  <option value="">Select Subcategory</option>    
    @foreach($records as $record)
        @if (old('subcategory_id') ==$record->id)
            <option value="{{$record->id }}" selected>{{ $record->name }}</option>
        @else
            <option value="{{$record->id }}">{{ $record->name }}</option>
        @endif
    @endforeach 
    
</select>    