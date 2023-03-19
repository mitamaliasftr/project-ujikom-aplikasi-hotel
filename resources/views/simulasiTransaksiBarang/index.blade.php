@extends('base.layout')

@push('style')

@endpush

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="card mb-3">
            <div class="card-header">
                <h3>Form</h3>
            </div>
            <div class="card-body">
                <form id="formTransaksiBarang">
                    <div class="form-group row">
                        <label for="id" class="col-sm-4 col-form-label">ID</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="id" id="id" placeholder="ID" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaBarang" class="col-sm-4 col-form-label">Nama Barang</label>
                        <div class="col-sm-8">
                            <select name="namaBarang" id="namaBarang"required>
                                <option value="Detergen">Detergen</option>
                                <option value="Pewangi">Pewangi</option>
                                <option value="Detergen Sepatu">Detergen Sepatu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="qty" class="col-sm-4 col-form-label">Jumlah</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" id="qty" name="qty" min="0" step="1"
                                value="0" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="harga" class="col-sm-4 col-form-label">Harga Barang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl" class="col-sm-4 col-form-label">Tanggal Beli</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="tgl" name="tgl" placeholder="tgl"
                                required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenisPembayaran" class="col-sm-4 col-form-label"> Jenis Pembayaran </label>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" value="Cash" name="jenisPembayaran" id="jenisPembayaranCash">
                            <label class="form-check-label" for="jenisPembayaranCash">Cash</label>
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" value="E-Money" name="jenisPembayaran" id="jenisPembayaranElektronik">
                            <label class="form-check-label" for="jenisPembayaranElektronik">E-Money</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-fw" id="btn-insert" type="button">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Data</h3>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-success" id="btn-sorting">Urutkan</button>
                    </div>
                    <input type="search" class="form-control col-sm-2" id="teks-cari">
                    <button type="button" id="btn-search" class="btn btn-secondary">Cari</button>
                </div>
                <table class="table table-compact table-bordered table-hover" id="tblTransaksiBarang">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal Beli</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Diskon</th>
                            <th>Total Harga</th>
                            <th>Jenis Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8" align="center">Belum ada data</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script>
    function insertData() {
        const data = $('#formTransaksiBarang').serializeArray()
        // console.log(data)

        let newData = {}
        data.forEach(function (item, index) {
            let name = item['name']
            let value = name === 'id' || name === 'qty' || name === 'harga' ? Number(item['value']) : item['value']
            newData[name] = value
        })
        console.log(newData)

        localStorage.setItem('dataTransaksiBarang', JSON.stringify([...dataTransaksiBarang, newData]))
        return newData
    }

    let dataTransaksiBarang = JSON.parse(localStorage.getItem('dataTransaksiBarang')) || []
    $('#tblTransaksiBarang tbody').html(showData(dataTransaksiBarang))

    function showData(arr) {
        let row = ''

        if (arr.length == 0) {
            return row = `<tr><td colspan="8" align="center">Belum ada data</td></tr>`
        }

        let jmlHarga = jmlQty = jmlDiskon = jmlTotal = 0
        arr.forEach(function (item, index) {
            let jmlHarga = item['item'] * item['qty']
            let diskon = jmlHarga >= 50000 ? harga * 0.15 : 0
            let total = jmlHarga - diskon
            jmlQty += item['qty']
            jmlDiskon += diskon
            jmlTotal += total

            row += `<tr>`
            row += `<td>${item['id']}</td>`
            row += `<td>${item['tgl']}</td>`
            row += `<td>${item['namaBarang']}</td>`
            row += `<td>${item['harga']}</td>`
            row += `<td>${item['qty']}</td>`
            row += `<td>${diskon}</td>`
            row += `<td>${total}</td>`
            row += `<td>${item['jenisPembayaran']}</td>`
            row += `</tr>`
        })

        row += '<tr style="font-weight:bold;background:#fff;color:#000; text-align=right;">'
        row += `<td colspan="3">Total</td>`
        row += `<td>${jmlHarga}</td>`
        row += `<td>${jmlQty}</td>`
        row += `<td>${jmlDiskon}</td>`
        row += `<td>${jmlTotal}</td>`
        row += '</tr>'

        return row
    }

    // otomatisasi 
    // $('#namaBarang').on('change', function(){
    //     let namaBarang = $('#namaBarang').val()
    //     let harga = 0

    //     switch (namaBarang) {
    //         case "Detergen": harga = 15000;
    //             break;
    //         case "Pewangi": harga = 10000;
    //             break;
    //         case "Detergen Sepatu": harga = 25000;
    //             break;
    //         default: harga = 0;
    //             break;
    //     }
    //     $('#harga').val(harga);
    // })

    //event klik input data
    $('#btn-insert').on('click', function (e) {
        e.preventDefault()
        dataTransaksiBarang.push(insertData(dataTransaksiBarang))
        $('#tblTransaksiBarang tbody').html(showData(dataTransaksiBarang))
    })

    function sorting(arr, key) {
        let i, j, id, value;
        for (i = 1; i < arr.length; i++) {
            value = arr[i];
            id = arr[i][key]
            j = i - 1;
            while (j >= 0 && arr[j][key] > id) {
                arr[j + 1] = arr[j];
                j = j - 1;
            }
            arr[j + 1] = value;
        }
        return arr
    }

    //event klik sorting
    $('#btn-sorting').on('click', function () {
        dataTransaksiBarang = sorting(dataTransaksiBarang, 'id')
        localStorage.setItem('dataTransaksiBarang', JSON.stringify(dataTransaksiBarang))
        $('#tblTransaksiBarang tbody').html(showData(dataTransaksiBarang))
    })

    function searching(arr, key, teks) {
        for (let i = 0; i < arr.length; i++) {
            if (arr[i][key] == teks)
                return i
        }
        return -1
    }

    //event klik searching
    $('#btn-search').on('click', function () {
        let teksSearch = $('#teks-cari').val()
        let id = searching(dataTransaksiBarang, 'id','x' teksSearch)
        let data = []
        if (id >= 0)
            data.push(dataTransaksiBarang[id])
        console.log(id)
        console.log(data)
        $('#tblTransaksiBarang tbody').html(showData(data))
    })
</script>
@endpush