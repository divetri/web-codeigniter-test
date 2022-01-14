dataDaftar();

function dataDaftar(){
    $.ajax({
        url: "https://reqres.in/api/users",
        data: {},
        beforeSend: function () {}
    })
    .done(function (response) {
        var daftarRow = new Array();
        $.each(response.data, function (i, row) {
            var nama = row.first_name+row.last_name;
            var email = row.email;
            daftarRow.push('<tr><td>' + nama + '</td><td>' + email + '</td><td><button data-toggle="modal" data-target="#signupModal" type="button" class= "btn btn-primary">Ubah</button> <button type="button" class="btn btn-danger" onclick="clickHandler(3000);">Hapus</button></td></tr>');
        });
        $('table#daftar-table tbody').append(daftarRow.join('\n'));
    });
}
function clickHandler(delay)
{
    setTimeout( function() { actualFunction(); }, delay );
}
function actualFunction()
{
    alert('Data Berhasil Dihapus');
    window.location=''
}