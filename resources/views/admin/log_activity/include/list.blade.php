@if($logs->count())
                    @foreach($logs as $key => $log)
                    <tr>
                        <td>{{ $log->id }}</td>
                        <td>{{ $log->subject }}</td>
                        <td class="text-success">{{ $log->url }}</td>
                        <td><label class="label label-info">{{ $log->method }}</label></td>
                        <td class="text-warning">{{ $log->ip }}</td>
                        <td class="text-danger">{{ $log->agent }}</td>
                        <td>{{ !empty($log->user) ? $log->user->name : "" }}</td>
                    </tr>
                    @endforeach
                @endif

                    <tr>
    <td colspan="6" align="center">
        {!! $logs->links('admin.login_history.include.custom') !!}
    </td>
</tr>