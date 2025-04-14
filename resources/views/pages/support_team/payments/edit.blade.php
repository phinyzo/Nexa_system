@extends('layouts.master')
@section('page_title', 'Edit Payment')
@section('content')

<div class="card">
    <div class="card-header header-elements-inline bg-primary">
        <h6 class="card-title text-white">Edit Payment Record</h6>
        {!! Qs::getPanelOptions() !!}
    </div>

    <div class="card-body">
        <form class="ajax-update" method="post" action="{{ route('payments.update', $payment->id) }}">
            @csrf @method('PUT')
            
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label font-weight-semibold">Payment Title <span class="text-danger">*</span></label>
                        <div class="col-lg-8">
                            <input name="title" value="{{ old('title', $payment->title) }}" required 
                                   type="text" class="form-control" 
                                   placeholder="e.g. Term 1 Fees">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label font-weight-semibold">Class</label>
                        <div class="col-lg-8">
                            <input class="form-control" disabled 
                                   value="{{ $payment->my_class_id ? $payment->my_class->name : 'All Classes' }}">
                        </div>
                    </div>

                    <div class="form-group row">
    <label class="col-lg-3 col-form-label">Amount (KES)</label>
    <div class="col-lg-9">
        <div class="input-group">
            <span class="input-group-text">KSh</span>
            <input type="number" class="form-control" name="amount" 
                   value="{{ number_format($payment->amount, 2) }}" step="0.01">
        </div>
    </div>

                <!-- Right Column -->
                <div class="form-group row">
    <label class="col-lg-3 col-form-label">Payment Method</label>
    <div class="col-lg-9">
        <select class="form-control" name="method">
            @foreach(\App\Models\Payment::methods() as $key => $method)
                <option value="{{ $key }}" {{ $payment->method == $key ? 'selected' : '' }}>
                    {{ $method }}
                </option>
            @endforeach
        </select>
    </div>
</div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label font-weight-semibold">Description</label>
                        <div class="col-lg-8">
                            <textarea class="form-control" name="description" 
                                      rows="3" placeholder="Optional notes">{{ old('description', $payment->description) }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label font-weight-semibold">Status</label>
                        <div class="col-lg-8">
                            <select class="form-control" name="status">
                                <option value="active" {{ $payment->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="archived" {{ $payment->status == 'archived' ? 'selected' : '' }}>Archived</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-right mt-3">
                <button type="submit" class="btn btn-primary">
                    <i class="icon-checkmark2 mr-2"></i> Update Payment
                </button>
                <a href="{{ route('payments.index') }}" class="btn btn-light">
                    <i class="icon-arrow-left13 mr-2"></i> Cancel
                </a>
            </div>
        </form>
    </div>
</div>

@endsection