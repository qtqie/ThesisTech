@extends('layouts.app')

@section('content')
<div class="container rounded bg-white mt-5 mb-5 shadow-sm">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="{{ $user->photo }}">
                <span class="font-weight-bold">{{ $user->name }}</span>
                @if($user->hasRole('platinum'))
                        <span class="font-weight-bold">{{ $user->platinum->p_gender }}</span>
                @elseif ($user->hasRole('staff'))
                        <span class="font-weight-bold">{{ $user->staff->s_gender }}</span>
                @elseif ($user->hasRole('mentor'))
                        <span class="font-weight-bold">{{ $user->mentor->m_gender }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                @if($user->hasRole('platinum'))
                <div class="row mt-2">
                        <div class="col-md-6">
                                <label class="labels">Name</label>
                                <input type="text" class="form-control" placeholder="Full name" value="{{ $user->name }}" disabled>
                        </div>
                        <div class="col-md-6">
                                <label class="labels">IC</label>
                                <input type="text" class="form-control" placeholder="IC" value="{{ $user->platinum->p_ic ?? '' }}" disabled>
                        </div>
                        <div class="col-md-12">
                                <label class="labels">Email ID</label>
                                <input type="text" class="form-control" placeholder="Email id" value="{{ $user->email }}" disabled>
                        </div>
                        <div class="col-md-12">
                                <label class="labels">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Phone number" value="{{ $user->platinum->p_hp_no ?? '' }}" disabled>
                        </div>
                        <div class="col-md-12">
                                <label class="labels">Address</label>
                                <input type="text" class="form-control" placeholder="Full address" value="{{ $user->platinum->p_address ?? '' }}" disabled>
                        </div>
                        <div class="col-md-6">
                                <label class="labels">Race</label>
                                <input type="text" class="form-control" placeholder="Race" value="{{ $user->platinum->p_race ?? '' }}" disabled>
                        </div>
                        <div class="col-md-6">
                                <label class="labels">Religion</label>
                                <input type="text" class="form-control" placeholder="Religion" value="{{ $user->platinum->p_religion ?? '' }}" disabled>
                        </div>
                        <div class="col-md-12">
                                <label class="labels">Facebook Name</label>
                                <input type="text" class="form-control" placeholder="Facebook name" value="{{ $user->platinum->p_fb_name ?? '' }}" disabled>
                        </div>
                </div>
                @elseif ($user->hasRole('staff'))
                <div class="row mt-2">
                        <div class="col-md-6">
                                <label class="labels">Name</label>
                                <input type="text" class="form-control" placeholder="Full name" value="{{ $user->name }}" disabled>
                        </div>
                        <div class="col-md-6">
                                <label class="labels">IC</label>
                                <input type="text" class="form-control" placeholder="IC" value="{{ $user->staff->s_ic ?? '' }}" disabled>
                        </div>
                        <div class="col-md-12">
                                <label class="labels">Email ID</label>
                                <input type="text" class="form-control" placeholder="Email id" value="{{ $user->email }}" disabled>
                        </div>
                        <div class="col-md-12">
                                <label class="labels">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Phone number" value="{{ $user->staff->s_hp_no ?? '' }}" disabled>
                        </div>
                        <div class="col-md-12">
                                <label class="labels">Address</label>
                                <input type="text" class="form-control" placeholder="Full address" value="{{ $user->staff->s_address ?? '' }}" disabled>
                        </div>
                        <div class="col-md-6">
                                <label class="labels">Race</label>
                                <input type="text" class="form-control" placeholder="Race" value="{{ $user->staff->s_race ?? '' }}" disabled>
                        </div>
                        <div class="col-md-6">
                                <label class="labels">Religion</label>
                                <input type="text" class="form-control" placeholder="Religion" value="{{ $user->staff->s_religion ?? '' }}" disabled>
                        </div>
                </div>
                @elseif ($user->hasRole('mentor'))
                <div class="row mt-2">
                        <div class="col-md-6">
                                <label class="labels">Name</label>
                                <input type="text" class="form-control" placeholder="Full name" value="{{ $user->name }}" disabled>
                        </div>
                        <div class="col-md-6">
                                <label class="labels">IC</label>
                                <input type="text" class="form-control" placeholder="IC" value="{{ $user->mentor->m_ic ?? '' }}" disabled>
                        </div>
                        <div class="col-md-12">
                                <label class="labels">Email ID</label>
                                <input type="text" class="form-control" placeholder="Email id" value="{{ $user->email }}" disabled>
                        </div>
                        <div class="col-md-12">
                                <label class="labels">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Phone number" value="{{ $user->mentor->m_hp_no ?? '' }}" disabled>
                        </div>
                        <div class="col-md-12">
                                <label class="labels">Address</label>
                                <input type="text" class="form-control" placeholder="Full address" value="{{ $user->mentor->m_address ?? '' }}" disabled>
                        </div>
                        <div class="col-md-6">
                                <label class="labels">Race</label>
                                <input type="text" class="form-control" placeholder="Race" value="{{ $user->mentor->m_race ?? '' }}" disabled>
                        </div>
                        <div class="col-md-6">
                                <label class="labels">Religion</label>
                                <input type="text" class="form-control" placeholder="Religion" value="{{ $user->mentor->m_religion ?? '' }}" disabled>
                        </div>
                </div>
                @endif

                @if(auth()->user()->id === $user->id)
                <div class="mt-5 text-center">
                        <a href="{{ route('profile.edit', ['user' => $user]) }}" class="btn btn-primary profile-button">Edit</a>
                </div>
                @endif

            </div>
        </div>
        @if($user->hasRole('platinum'))
        <div class="col-md-4">
                <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience">
                                <span>Education Information:</span>
                        </div>
                        <br>
                        <div class="col-md-12">
                                <label class="labels">Academic Background</label>
                                <input type="text" class="form-control" placeholder="academic background" value="{{ $user->platinum->p_edu_information ?? '' }}" disabled>
                        </div>
                        <br>
                        <div class="col-md-12">
                                <label class="labels">Pakej</label>
                                <input type="text" class="form-control" placeholder="pakej" value="{{ $user->platinum->p_pakej ?? '' }}" disabled>
                        </div>
                        <br>
                        <div class="col-md-12">
                                <label class="labels">Batch No</label>
                                <input type="text" class="form-control" placeholder="batch no" value="{{ $user->platinum->p_batch_no ?? '' }}" disabled>
                        </div>
                        <br>
                        <div class="col-md-12">
                                <label class="labels">Cluster of Study</label>
                                <input type="text" class="form-control" placeholder="cluster of study" value="{{ $user->platinum->p_cluster_of_study ?? '' }}" disabled>
                        </div>
                </div>
        </div>
        @elseif ($user->hasRole('staff'))
        <div class="col-md-4">
                <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience">
                                <span>More Information:</span>
                        </div>
                        <br>
                        <div class="col-md-12">
                                <label class="labels">Department</label>
                                <input type="text" class="form-control" placeholder="academic background" value="{{ $user->staff->s_department ?? '' }}" disabled>
                        </div>
                        <div class="col-md-12">
                                <label class="labels">Position</label>
                                <input type="text" class="form-control" placeholder="academic background" value="{{ $user->staff->s_position ?? '' }}" disabled>
                        </div>
                </div>
        @endif
    </div>
</div>
</div>
@endsection
