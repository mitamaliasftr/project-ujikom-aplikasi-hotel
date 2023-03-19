@extends('base.layout')

@push('styles')

@endpush

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    function insertData(dataCucian) {
        const data = $('#form-cucian').serializeArray()
        // console.log(data)

        let newData = {}
        data.forEach(function (item, index) {
            let name = item['name']
            let value = name === 'id' ? Number(item['berat']) : item['value']
            newData[name] = value
        })
        console.log(newData)

        localStorage.setItem('dataCucian', J SON.stringify([...dataCucian, newData]))
        return newData
    }
    // event klik input data
    $('#btn-insert').on('click', function () {
        dataCucian.push(insertData(dataCucian))
        $('#data-cucian tbody').html(showData(dataCucian))
    })

    function showData(arr) {
        let row = ''
        if (arr.length == null) {
            return row = `<tr><td colspan="6">Belum ada data</td></tr>`
        }
        let jmlBerat = jmlDiskon = jmlTotal = jmlBonus = jmlPajak = 0
        arr.forEach(function (item, index) {
            let harga = item['JenisCucian'] == 'standar' ? 7500 : 10000
            let jmlHarga = harga * item['berat']
            let diskon = jmlHarga >= 50000 ? harga * 0.1 : 0
            let total = jmlHarga - diskon

            jmlBerat += item['berat']
            jmlDiskon += diskon
            jmlTotal += total


            row += `<tr>`
            row += `<td>${item['id']}</td>`
            row += `<td>${item['nama']}</td>`
            row += `<td>${item['nophone']}</td>`
            row += `<td>${item['tgl']}</td>`
            row += `<td>${item['jenisCucian']}</td>`
            row += `<td>${item['berat']}</td>`
            row += `<td>${diskon}</td>`
            row += `<td>${total}</td>`
            row += `</tr>`

        })
        row += `<tr style="font-weight:bold; background:#0F23DD;color:white;">`
        row += `<td colspan="5">Jumlah total</td>`
        row += `<td></td>`
        row += `<td>${jmlBerat}</td>`
        row += `<td>${jmlDiskon}</td>`
        row += `<td>${jmlTotal}</td>`
        row += `</tr>`
        return row
    }
</script>
@endpush