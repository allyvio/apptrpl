@include('layouts._header')

<body>
    @include('layouts._navbar')


    <div class="contact-form">
        <div class="container">
            <form action="{{url('book/bidan')}}" method="post">
                <div class="row">
                    @csrf
                    <div class="col-12">
                        <h2>Book Bidan</h2>
                    </div>
                    <input type="hidden" name="id" value="{{$data->id}}">

                    <div class="col-12  col-md-4">
                        <input type="text" name="kehamilan-ke" placeholder="Kehamilan ke -" class="@error('kehamilan-ke') is-invalid @enderror">
                        @error('kehamilan-ke') <span class="badge badge-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="col-12">
                        <textarea name="keterangan" class="@error('keterangan') is-invalid @enderror" rows="12" cols="80" placeholder="Message"></textarea>
                        @error('keterangan') <span class="badge badge-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="col-12">
                        <button type="sumnit" class="button gradient-bg">Kirim</button>
                        <!-- <a type="submit" name="keterangan" value="Kirim" class="button gradient-bg"> -->
                    </div>
                </div><!-- row -->
            </form>
        </div>
    </div>



    @include('layouts._footer')

    @include('layouts._script')
</body>

</html>