<div class='btn-group'>
    <a href="{{ route('admin.members.show', $id) }}" class='btn btn-sm btn-primary'>
        View
    </a>
    <a href="{{ route('admin.members.edit', $id) }}" class='btn btn-sm btn-info'>
        Edit
    </a>
    <a href="{{route('admin.members.accept',$id)}}" onclick="return confirm('Are you sure to accept?')"
        class="btn btn-sm btn-warning">Accept</a>
    <a href="javascript:void(0)" data-toggle="tooltip" data-id="{{$id}}" data-original-title="Delete"
        class="btn btn-sm btn-danger delete">Delete</a>
</div>