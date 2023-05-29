@if(!empty($records) && $records->count())
                @foreach($records as $key => $record)
                      
                            <tr>
                                <td>{{ $record->id}}</td>
                                <td>{{ $record->category ? $record->category->name : ''}}</td>
                                <td>{{ $record->subcategory ? $record->subcategory->name : ''}}</td>
                                <td>{{ $record->document_name}}</td>
                                <td>{{ $record->slug}}</td>
                                <!-- <td>{{ $record->file_extension}}, {!! $record->file_size ? $record->file_size.' kb' :'' !!}, {!! $record->page !!} </td> -->
                                
                                <td>{!! $record->user_name !!} </td>
                                <td>
                                  
                                @if(Auth::user()->is_admin == 1)
                                    @if($record->status == 1)
                                     <a href="{{ route('document-centers.status', [$record->id]) }}" class="btn btn-success">Active</a>
                                    @else
                                    <a href="{{ route('document-centers.status', [$record->id]) }}" class="btn btn-danger">Inactive</a>
                                    @endif
                                 @else
                                    @if($record->status == 1)
                                     <a class="btn btn-success color-white">Active</a>
                                    @else
                                    <a class="btn btn-danger color-white">Inactive</a>
                                    @endif
                                 @endif
                                </td>
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

                    <tr>
                        <td colspan="9" align="center">
                            {!! $records->links('admin.login_history.include.custom') !!}
                        </td>
                    </tr>