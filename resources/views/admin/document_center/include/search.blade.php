<p><strong>Manage Document Center</strong></p>
            <table class="table table-hover">
                <thead>
                <tr>
                     <th>Category</th>
                     <th>Subcategory</th>
                     <th>Doc Name</th>
                     <th>Slug</th>
                     <th>Extension, Size & Pages</th>
                     <th>User Name</th>
                     <th>Action</th>
                  </tr>
                </thead>
                <tbody id="search_data">
                @if(!empty($records) && $records->count())
                @foreach($records as $key => $record)
                      
                            <tr>
                                <td>{{ $record->category ? $record->category->name : ''}}</td>
                                <td>{{ $record->subcategory ? $record->subcategory->name : ''}}</td>
                                <td>{{ $record->document_name}}</td>
                                <td>{{ $record->slug}}</td>
                                <td>{{ $record->file_extension}}, {!! $record->file_size ? $record->file_size.' kb' :'' !!}, {!! $record->page !!} </td>
                                
                                <td>{!! $record->user_name !!} </td>
                                <td>
                                    @can('document-center-edit')
                                    <a href="{{ route('document-centers.edit', [$record->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                    @endcan
                                    <form action="{{ route('document-centers.destroy', [$record->id]) }}" method="POST" style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        @can('document-center-delete')
                                        <button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this?');"><i class="fa fa-trash"></i></button>
                                        @endcan
                                    </form>
                                    @can('document-center-edit')
                                    @if($record->pdf)<a href="{{asset($record->pdf)}}" target="_blank" download class="btn btn-xs btn-warning"><i class="fa fa-download"></i></a>@endif
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                    @else
                        <tr>
                            <td colspan="10">There are no data.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div style="float:left;">
                Total = {!! $count !!} Entries
            </div>
            