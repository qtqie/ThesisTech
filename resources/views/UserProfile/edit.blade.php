@extends('layouts.app')

@section('content')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <a href="{{ route('profile.edit.image', ['role' => $role, 'user' => $user]) }}" class="btn btn-primary">{{__('Update Profile Pic')}}</a>
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
                <form method="POST" action="{{ route('profile.update.profile', ['role' => $role, 'user' => $user]) }}">
                    @csrf
                    @method('PUT')
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
                                        <label class="labels">Email</label>
                                        <input type="text" class="form-control" placeholder="Email id" value="{{ $user->email }}" disabled>
                                </div>
                                <div class="col-md-12">
                                        <label class="labels">Mobile Number</label>
                                        <input type="text" class="form-control" name="p_hp_no" placeholder="Phone number" value="{{ $user->platinum->p_hp_no ?? '' }}" required>
                                </div>
                                <div class="col-md-12">
                                        <label class="labels">Address</label>
                                        <input type="text" class="form-control" name="p_address" placeholder="Full address" value="{{ $user->platinum->p_address ?? '' }}" required>
                                </div>
                                <div class="col-md-6">
                                        <label class="labels">Race</label>
                                        <input type="text" class="form-control" name="p_race" placeholder="Race" value="{{ $user->platinum->p_race ?? '' }}" required>
                                </div>
                                <div class="col-md-6">
                                        <label class="labels">Religion</label>
                                        <input type="text" class="form-control" name="p_religion" placeholder="Religion" value="{{ $user->platinum->p_religion ?? '' }}" required>
                                </div>
                                <div class="col-md-12">
                                        <label class="labels">Facebook Name</label>
                                        <input type="text" class="form-control" name="p_fb_name" placeholder="Facebook name" value="{{ $user->platinum->p_fb_name ?? '' }}" required>
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
                                        <label class="labels">Email</label>
                                        <input type="text" class="form-control" placeholder="Email id" value="{{ $user->email }}" disabled>
                                </div>
                                <div class="col-md-12">
                                        <label class="labels">Mobile Number</label>
                                        <input type="text" class="form-control" name="s_hp_no" placeholder="Phone number" value="{{ $user->staff->s_hp_no ?? '' }}" required>
                                </div>
                                <div class="col-md-12">
                                        <label class="labels">Address</label>
                                        <input type="text" class="form-control" name="s_address" placeholder="Full address" value="{{ $user->staff->s_address ?? '' }}" required>
                                </div>
                                <div class="col-md-6">
                                        <label class="labels">Race</label>
                                        <input type="text" class="form-control" name="s_race" placeholder="Race" value="{{ $user->staff->s_race ?? '' }}" required>
                                </div>
                                <div class="col-md-6">
                                        <label class="labels">Religion</label>
                                        <input type="text" class="form-control" name="s_religion" placeholder="Religion" value="{{ $user->staff->s_religion ?? '' }}" required>
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
                                        <label class="labels">Email</label>
                                        <input type="text" class="form-control" placeholder="Email id" value="{{ $user->email }}" disabled>
                                </div>
                                <div class="col-md-12">
                                        <label class="labels">Mobile Number</label>
                                        <input type="text" class="form-control" name="m_hp_no" placeholder="Phone number" value="{{ $user->mentor->m_hp_no ?? '' }}" required>
                                </div>
                                <div class="col-md-12">
                                        <label class="labels">Address</label>
                                        <input type="text" class="form-control" name="m_address" placeholder="Full address" value="{{ $user->mentor->m_address ?? '' }}" required>
                                </div>
                                <div class="col-md-6">
                                        <label class="labels">Race</label>
                                        <input type="text" class="form-control" name="m_race" placeholder="Race" value="{{ $user->mentor->m_race ?? '' }}" required>
                                </div>
                                <div class="col-md-6">
                                        <label class="labels">Religion</label>
                                        <input type="text" class="form-control" name="m_religion" placeholder="Religion" value="{{ $user->mentor->m_religion ?? '' }}" required>
                                </div>
                        </div>
                        @endif
                        <div class="mt-5 text-center">
                        <button type="submit" class="btn btn-primary profile-button">Update</button>
                        <a class="btn btn-danger" href="{{ route('profile.show', $user->id) }}">
                                {{ __('Cancel') }}
                        </a>
                        </div>
                </form>
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
@endsection
