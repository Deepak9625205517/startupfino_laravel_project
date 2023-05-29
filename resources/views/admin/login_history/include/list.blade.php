@foreach($records as $key => $log)
                    <tr>
                        <td>{{ $log->id }}</td>
                        <td>{{ $log->name }}</td>
                        <td>{{ $log->email }}</td>
                        <td>{{ $log->ip }}</td>
                        <td>{{ $log->agent }}</td>
                        <td>{{ date('d-m-Y h:i:s', strtotime($log->created_at)) }}</td>
                    </tr>
                    @endforeach

                    <tr>
                        <td colspan="6" align="center">
                            {!! $records->links('admin.login_history.include.custom') !!}
                        </td>
                    </tr>