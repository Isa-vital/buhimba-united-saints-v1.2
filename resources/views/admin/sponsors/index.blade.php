@extends('layouts.admin')

@section('title', 'Manage Sponsors')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Sponsors</h1>
        <a href="{{ route('admin.sponsors.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Add Sponsor
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Club Sponsors</h6>
        </div>
        <div class="card-body">
            @if($sponsors->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Contract Period</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sponsors as $sponsor)
                                <tr>
                                    <td>
                                        @if($sponsor->logo)
                                            <img src="{{ asset('storage/' . $sponsor->logo) }}" alt="{{ $sponsor->name }}" 
                                                 class="img-fluid" style="max-width: 80px; max-height: 50px; object-fit: contain;">
                                        @else
                                            <div class="bg-light border rounded d-flex align-items-center justify-content-center" 
                                                 style="width: 80px; height: 50px;">
                                                <i class="fas fa-image text-muted"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <strong>{{ $sponsor->name }}</strong>
                                        @if($sponsor->website)
                                            <br><a href="{{ $sponsor->website }}" target="_blank" class="small text-muted">{{ $sponsor->website }}</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if($sponsor->email)
                                            <small>{{ $sponsor->email }}</small><br>
                                        @endif
                                        @if($sponsor->phone)
                                            <small>{{ $sponsor->phone }}</small>
                                        @endif
                                    </td>
                                    <td>
                                        @if($sponsor->contract_start && $sponsor->contract_end)
                                            <small>{{ $sponsor->contract_start->format('M Y') }} - {{ $sponsor->contract_end->format('M Y') }}</small>
                                        @else
                                            <small class="text-muted">Not specified</small>
                                        @endif
                                    </td>
                                    <td>
                                        @if($sponsor->sponsorship_amount)
                                            <strong>UGX {{ number_format($sponsor->sponsorship_amount) }}</strong>
                                        @else
                                            <small class="text-muted">Not specified</small>
                                        @endif
                                    </td>
                                    <td>
                                        @if($sponsor->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.sponsors.show', $sponsor) }}" class="btn btn-info btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.sponsors.edit', $sponsor) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.sponsors.destroy', $sponsor) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this sponsor?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center">
                    {{ $sponsors->links() }}
                </div>
            @else
                <div class="text-center py-4">
                    <i class="fas fa-handshake fa-3x text-muted mb-3"></i>
                    <h5 class="text-muted">No sponsors found</h5>
                    <p class="text-muted">Start by adding your first sponsor.</p>
                    <a href="{{ route('admin.sponsors.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Add Sponsor
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
