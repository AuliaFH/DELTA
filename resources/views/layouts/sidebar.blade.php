<ul class="list-unstyled mt-2">
    <li class="list-item">
        <a href="{{ route('home') }}">{{ __('Beranda') }}</a>
    </li>
    <li class="list-item">
        <a href="{{ url('api/balances/index') }}">{{ __('Saldo Saat Ini') }}</a>
    </li>
    <li class="list-item">
        <a data-toggle="collapse" href="#budgetCollapse" role="button" aria-expanded="false"
            aria-controls="budgetCollapse">Anggaran</a>
        <ul class="list-unstyled collapse mt-2" id="budgetCollapse">
            <li>
                <a href="{{ url('api/budgets/current') }}">{{ __("Lihat") }}</a>
                <span class="badge badge-success badge-pill">Saat Ini</span>
            </li>
            <li>
                <a href="{{ url('api/budgets/create') }}">{{ __('Buat') }}</a>
            </li>
            <li>
                <a href="{{ url('api/budgets/index') }}">{{ __('Lihat Semua') }}</a>
            </li>
        </ul>
    </li>
    <li class="list-item">
        <a data-toggle="collapse" href="#categoryCollapse" role="button" aria-expanded="false"
            aria-controls="categoryCollapse">Kategori</a>
        <ul class="list-unstyled collapse mt-2" id="categoryCollapse">
            <li>
                <a href="{{ url('api/categories/index') }}">{{ __("Lihat") }}</a>
            </li>
            <li>
                <a href="{{ url('api/categories/create') }}">{{ __('Tambahkan') }}</a>
            </li>
        </ul>
    </li>
    <li class="list-item">
        <a data-toggle="collapse" href="#paymentModeCollapse" role="button" aria-expanded="false"
            aria-controls="paymentModeCollapse">Metode Pembayaran</a>
        <ul class="list-unstyled collapse mt-2" id="paymentModeCollapse">
            <li>
                <a href="{{ url('api/payment-modes/index') }}">{{ __("Lihat") }}</a>
            </li>
            <li>
                <a href="{{ url('api/payment-modes/create') }}">{{ __('Tambahkan') }}</a>
            </li>
        </ul>
    </li>
    <li class="list-item">
        <a data-toggle="collapse" href="#reminderCollapse" role="button" aria-expanded="false"
            aria-controls="reminderCollapse">Ingatkan</a>
        <ul class="list-unstyled collapse mt-2" id="reminderCollapse">
            <li>
                <a href="#">{{ __("Lihat") }}</a>
            </li>
            <li>
                <a href="#">{{ __('Tambahkan') }}</a>
            </li>
        </ul>
    </li>
    <li class="list-item">
        <a data-toggle="collapse" href="#transactionCollapse" role="button" aria-expanded="false"
            aria-controls="transactionCollapse">Transaksi</a>
        <ul class="list-unstyled collapse mt-2" id="transactionCollapse">
            <li>
                <a href="{{ url('api/transactions/index') }}">{{ __("Lihat") }}</a>
            </li>
            <li>
                <a href="{{ url('api/transactions/create') }}">{{ __('Buat') }}</a>
            </li>
        </ul>
    </li>
</ul>