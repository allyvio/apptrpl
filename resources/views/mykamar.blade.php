@include('layouts._header')

<body>
    @include('layouts._navbar')


    <div class="contact-page-short-boxes">
        <div class="container">
            <div class="row">
                @foreach($data as $kmr)
                <div class="col-12 col-md-4 mt-5 mt-lg-0 mb-3">
                    <div class="opening-hours h-100">
                        <h2 class="d-flex align-items-center">Kamar</h2>

                        <ul class="p-0 m-0">
                            @php
                            $kamar = \DB::table('kamar')->where('id', $kmr->kamar_id)->value('nama_kamar')
                            @endphp
                            <li>Nama Kamar : <span>{{$kamar}}</span></li>
                            <li>Tanggal Order <span>{{ date('d M Y', $kmr->created_at->timestamp) }}</span></li>
                            <li>Tanggal masuk <span>{{ ($kmr->tanggal) }}</span></li>
                            @if($kmr->foto == null)
                            <li>Status <span>{{$kmr->status}}</span></li>
                            @endif
                            @if($kmr->foto != null)
                            <li>Lihat Skl <a href="{{url('pdf/'.$kmr->id)}}">Surat Keterangan Lahir</a></li>
                            @endif
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