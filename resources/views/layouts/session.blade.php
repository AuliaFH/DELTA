@if($message = Session::get('success'))
<div class="alert alert-success rounded-0 alert-dismissible fade show hide ml-2" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if($message = Session::get('error'))
<div class="alert alert-warning rounded-0 alert-dismissible fade show ml-2" role="alert">
    <strong class="text-danger">{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if($message = Session::get('add-balance-error'))
<div class="alert alert-warning rounded-0 alert-dismissible fade show ml-2" role="alert">
    <strong class="text-danger">{{ $message }}</strong>
    <ul>
        <li>Apakah Anda mencoba untuk menarik jumlah lebih dari yang Anda miliki?</li>
        <li>Sudahkah Anda memeriksa kode atau markup?</li>
    </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif