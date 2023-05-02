@if ($data->isEmpty())
    <h1>No data</h1>
@endif
<div class="modal fade" id="detail{{ $users->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Users</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/createuser" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama" name="name" autofocus
                            value={{ $users->name }} @readonly(true)>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value={{ $users->email }} @readonly(true)>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Level</label>
                        <input type="text" class="form-control" id="level" name="level"
                            value={{ $users->Leveluser->name }} @readonly(true)>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
