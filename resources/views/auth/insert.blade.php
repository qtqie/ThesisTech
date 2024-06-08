@extends('layouts.app')

@section('content')
<div class="container align-items-center justify-content-center">
    <div class="row justify-content-center w-100">
        <div class="mb-3 text-center " style="margin-top: 20px;">
            <h1>{{ __('Register New User') }}</h1>
        </div>
        <div class="card px-2 shadow-sm border-0" style="width: 50%;">
            <div class="card-body">
                <form method="POST" action="{{ route('insert.user.data', ['userId' => $userId]) }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $userId }}">
                    @php
                        $user = App\Models\User::find($userId);
                    @endphp
                    @if ($user->role == 'platinum')
                        <div class="mb-3">
                            <label for="p_ic" class="form-label">{{ __('IC') }}</label>
                            <input id="p_ic" type="text" class="form-control" name="p_ic">
                        </div>
                        <div class="mb-3">
                            <label for="p_gender" class="form-label">{{ __('Gender') }}</label>
                            <select id="p_gender" class="form-control" name="p_gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="p_religion" class="form-label">{{ __('Religion') }}</label>
                            <input id="p_religion" type="text" class="form-control" name="p_religion">
                        </div>
                        <div class="mb-3">
                            <label for="p_race" class="form-label">{{ __('Race') }}</label>
                            <input id="p_race" type="text" class="form-control" name="p_race">
                        </div>
                        <div class="mb-3">
                            <label for="p_citizenship" class="form-label">{{ __('Citizenship') }}</label>
                            <input id="p_citizenship" type="text" class="form-control" name="p_citizenship">
                        </div>
                        <div class="mb-3">
                            <label for="p_address" class="form-label">{{ __('Address') }}</label>
                            <textarea id="p_address" class="form-control" name="p_address"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="p_hp_no" class="form-label">{{ __('HP No.') }}</label>
                            <input id="p_hp_no" type="text" class="form-control" name="p_hp_no">
                        </div>
                        <div class="mb-3">
                            <label for="p_fb_name" class="form-label">{{ __('FB Name') }}</label>
                            <input id="p_fb_name" type="text" class="form-control" name="p_fb_name">
                        </div>
                        <div class="mb-3">
                            <label for="p_edu_information" class="form-label">{{ __('Educational Information') }}</label>
                            <input id="p_edu_information" type="text" class="form-control" name="p_edu_information">
                        </div>
                        <div class="mb-3">
                            <label for="p_pakej" class="form-label">{{ __('Pakej') }}</label>
                            <input id="p_pakej" type="text" class="form-control" name="p_pakej">
                        </div>
                        <div class="mb-3">
                            <label for="p_batch_no" class="form-label">{{ __('Batch No.') }}</label>
                            <input id="p_batch_no" type="text" class="form-control" name="p_batch_no">
                        </div>
                        <div class="mb-3">
                            <label for="p_cluster_of_study" class="form-label">{{ __('Cluster of Study') }}</label>
                            <input id="p_cluster_of_study" type="text" class="form-control" name="p_cluster_of_study">
                        </div>
                    

                    @elseif ($user->role == 'staff')
                        <div class="mb-3">
                            <label for="s_ic" class="form-label">{{ __('IC') }}</label>
                            <input id="s_ic" type="text" class="form-control" name="s_ic">
                        </div>
                        <div class="mb-3">
                            <label for="p_gender" class="form-label">{{ __('Gender') }}</label>
                            <select id="p_gender" class="form-control" name="p_gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="s_religion" class="form-label">{{ __('Religion') }}</label>
                            <input id="s_religion" type="text" class="form-control" name="s_religion">
                        </div>
                        <div class="mb-3">
                            <label for="s_race" class="form-label">{{ __('Race') }}</label>
                            <input id="s_race" type="text" class="form-control" name="s_race">
                        </div>
                        <div class="mb-3">
                            <label for="s_citizenship" class="form-label">{{ __('Citizenship') }}</label>
                            <input id="s_citizenship" type="text" class="form-control" name="s_citizenship">
                        </div>
                        <div class="mb-3">
                            <label for="s_address" class="form-label">{{ __('Address') }}</label>
                            <textarea id="s_address" class="form-control" name="s_address"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="s_hp_no" class="form-label">{{ __('HP No.') }}</label>
                            <input id="s_hp_no" type="text" class="form-control" name="s_hp_no">
                        </div>
                        <div class="mb-3">
                            <label for="s_department" class="form-label">{{ __('Department') }}</label>
                            <input id="s_department" type="text" class="form-control" name="s_department">
                        </div>
                        <div class="mb-3">
                            <label for="s_position" class="form-label">{{ __('Position') }}</label>
                            <input id="s_position" type="text" class="form-control" name="s_position">
                        </div>
                    @endif
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
