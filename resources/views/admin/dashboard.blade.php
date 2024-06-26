@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-4 shadow-lg" data-aos="fade-up" data-aos-duration="1000">
                <div class="card-header">
                    My Camp
                </div>
                <div class="card-body">
                    @include('components.alert')
                    <table class="table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Camp</th>
                                <th>Price</th>
                                <th>Register Data</th>
                                <th>Paid Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($checkouts as $checkout)
                            <tr>
                                <td>{{ $checkout->User->name }}</td>
                                <td>{{ $checkout->User->title }}</td>
                                <td>
                                <strong>
                                   Rp. {{ $checkout->total }}
                                    @if($checkout->discount_id)
                                        <span class="badge bg-success">
                                            Disc {{ $checkout->discount_percentage }} %
                                        </span>
                                    @endif
                                </strong>
                                </td>
                                <td>{{ $checkout->User->created_at->format('M d Y') }}</td>
                                <td>
                                <strong>{{ $checkout->payment_status}} </strong> 
                            </td>
                             
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">No Camp Registered</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection