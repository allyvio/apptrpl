@include('layouts._header')

<body>
    @include('layouts._navbar')


    <div class="contact-page-short-boxes">
        <div class="container">
            <div class="row">
                @foreach($data as $control)
                <div class="col-12 col-md-4 mt-5 mt-lg-0 mb-3">
                    <div class="opening-hours h-100">
                        <h2 class="d-flex align-items-center">My Control</h2>

                        <ul class="p-0 m-0">
                            @php
                            $bidan = \DB::table('users')->where('id', $control->bidan_id)->value('name')
                            @endphp
                            <li>Nama Petugas <span>{{$bidan}}</span></li>
                            <li>Tanggal buat <span>{{ date('d M Y', $control->created_at->timestamp) }}</span></li>
                            <li>Kehamilan ke <span>{{$control->kehamilan}}</span></li>
                            <li>
                                <a href="{{url('detail/'.$control->id)}}">
                                    <span class="badge badge-primary">Detail</span>
                                </a>
                                <a href="{{url('ubah/'.$control->id)}}">
                                    <span class="badge badge-primary">Ubah bidan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>



    @include('layouts._footer')

    @include('layouts._script')
</body>

</html>