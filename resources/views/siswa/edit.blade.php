<!DOCTYPE html>
<html>

<head>
    <title>sangcahaya.id</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form role="form" method="post" action="{{ url('siswa/'.$siswa->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama_siswa"
                                value="{{$siswa->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nisn</label>
                            <input type="text" class="form-control" placeholder="Nisn" name="nisn"
                                value="{{$siswa->nisn}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No HP</label>
                            <input type="text" class="form-control" placeholder="No HP" name="no_hp"
                                value="{{$siswa->no_hp}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" placeholder="Email" name="email"
                                value="{{$siswa->email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="5">{{$siswa->alamat}}</textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>

</html>