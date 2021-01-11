@extends('layout/main')
@section('title', 'Wallet')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <h1 class="mt-3">Wallet Ballance</h1>
            @if($balance < 0) <h5 class="mt-4 text-danger">Rp {{ number_format($balance) }}</h5>
                @else
                <h5 class="mt-4">Rp {{ number_format($balance) }}</h5>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover table-striped mt-2">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Spend</th>
                                <th>Save</th>
                                <th>Excuses</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($wallets as $wlt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ Date('d M Y', strtotime($wlt->wallet_time)) }}</td>
                                <td>Rp {{ number_format($wlt->wallet_spend) }}</td>
                                <td>Rp {{ number_format($wlt->wallet_save) }}</td>
                                @if(strlen($wlt->wallet_exc) > 30)
                                <td>{{ substr($wlt->wallet_exc, 0, 30).'...' }}</td>
                                @else
                                <td>{{ $wlt->wallet_exc }}</td>
                                @endif
                                <td>
                                    <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editWallet">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editWallet" tabindex="-1" aria-labelledby="editWalletLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editWalletLabel">Edit Transaction</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="wallet-date">Date</label>
                                <input type="text" class="form-control" name="wallet-date" id="wallet-date" autocomplete="off">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="wallet-spend">Spend</label>
                                <input type="text" class="form-control" name="wallet-spend" id="wallet-spend" autocomplete="off" readonly>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="wallet-save">Save</label>
                                <input type="text" class="form-control" name="wallet-save" id="wallet-save" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="wallet-exc">Save</label>
                                <textarea class="form-control" name="wallet-exc" id="wallet-exc" cols="30" rows="3" readonly></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#wallet-date").datepicker();
    });
</script>
@endsection