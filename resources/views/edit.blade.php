{{-- modal edit --}}
<div class="modal fade" id="edit{{ $users->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Users</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/update/{{ $users->id }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" id="nama" name="name"
                            value="{{ $users->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $users->email }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Level</label>
                        <select class="form-control" name="level" id="levelFormControlSelect1">
                            <option value="{{ $users->LevelUser->id }}">
                                {{ $users->LevelUser->name }}
                            </option>
                            @foreach ($dataoption->where('id', '!=', $users->level) as $option)
                                <option value="{{ $option->id }}">
                                    {{ $option->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type='submit' class="btn btn-primary">Update</button>

                </form>


            </div>
        </div>
    </div>
</div>
