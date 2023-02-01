<a href="/pengaduan">buat laporan</a>

{{ auth()->user()->nama }}


<br><br><br>
<table>
    @foreach ($reports as $report)
    <tr>
        <td>{{ $report['tgl_pengaduan'] }}</td>
        <td>{{ $report['isi_laporan']}}</td>
        <td>{{ $report['nik']}}</td>
    </tr>
    @endforeach
    
</table>