@extends('layouts.main')
@section('content')

<section class="pt-20 p-2 lg:p-20 md:p-10">
    <div class="glass rounded-3xl px-4 py-16 sm:mx-6 lg:mx-8">
        <div class="max-w-2xl mx-auto">


            <div class="text-center">
                <h4 class="text-3xl text-white font-semibold mt-1 mb-12 pb-1">{{ config('app.name') }} | Onboarding</h4>
            </div>

            <form method="POST" action="{{ route('update') }}">
                @csrf

                <div class="text-center">
                    <h4 class="text-xl text-white font-semibold mt-12 mb-2 pb-1 italic">Please Fill Following Details to Continue</h4>
                </div>

                <div class="my-8">
                    <label class="label">
                        <p class="label-text text-white text-xl mb-2">First Name</p>
                        <p class="label-text-alt">Required</p>
                    </label>

                    <input placeholder="Enter First Name" id="first_name" type="text" class="form-control input-md  block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-red-600 focus:outline-none" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                    @error('first_name')
                    <span class="text-white italic" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                    @enderror
                </div>


                <div class="my-8">
                    <label class="label">
                        <p class="label-text text-white text-xl mb-2">Last Name</p>
                        <p class="label-text-alt">Required</p>
                    </label>

                    <input placeholder="Enter Last Name" id="last_name" type="text" class="form-control input-md block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-red-600 focus:outline-none" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                    @error('last_name')
                    <span class="text-white italic" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                    @enderror
                </div>

                <!-- Date  -->
                <div class="my-8">
                    <label class="label">
                        <p class="label-text text-white text-xl mb-2">Date of Birth</p>
                        <p class="label-text-alt">Required</p>
                    </label>

                    <input name="dob" placeholder="Date of Birth" type="text" id="datepicker" class="form-control input-md block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-red-600 focus:outline-none" required>

                    @error('dob')
                    <span class="text-white italic" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                    @enderror
                </div>


                <div class="my-8">
                    <label class="label">
                        <p class="label-text text-white text-xl mb-2">Gender</p>
                        <p class="label-text-alt">Required</p>
                    </label>

                    <label class="label cursor-pointer bg-white border p-3 rounded-md">
                        <span class="label-text text-slate-600">Male</span>
                        <input type="radio" value="male" name="gender" class="radio radio-accent" checked />

                        <span class="label-text text-slate-600">Female</span>
                        <input type="radio" value="female" name="gender" class="radio radio-accent" checked />
                    </label>

                    @error('gender')
                    <span class="text-white italic" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                    @enderror
                </div>


                <div class="my-8">
                    <label class="label">
                        <p class="label-text text-white text-xl mb-2">Annual Income</p>
                        <p class="label-text-alt">Required</p>
                    </label>

                    <input placeholder="Enter Annual Income" id="annual_income" type="number" class="form-control input-md block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-red-600 focus:outline-none" name="annual_income" value="{{ old('annual_income') }}" required autocomplete="annual_income" autofocus>

                    @error('annual_income')
                    <span class="text-white italic" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                    @enderror
                </div>

                <div class="my-8">
                    <label class="label">
                        <p class="label-text text-white text-xl mb-2">Occupation</p>
                        <p class="label-text-alt"></p>
                    </label>

                    <select required name="occupation" class="select select-error select-md w-full bg-slate-50 border border-gray-300">
                        <option disabled selected>Choose Occupation</option>
                        <option value="private">Private job</option>
                        <option value="government">Government Job</option>
                        <option value="business">Business</option>
                    </select>
                </div>


                <div class="my-8">
                    <label class="label">
                        <p class="label-text text-white text-xl mb-2">Family Type</p>
                        <p class="label-text-alt"></p>
                    </label>

                    <select required name="family_type" class="select select-error select-md w-full bg-slate-50 border border-gray-300">
                        <option disabled selected>Choose Family Type</option>
                        <option value="joint">Joint family</option>
                        <option value="nuclear">Nuclear family</option>
                    </select>
                </div>


                <div class="my-8">
                    <label class="label">
                        <p class="label-text text-white text-xl mb-2">Manglik</p>
                        <p class="label-text-alt"></p>
                    </label>

                    <select name="is_manglik" class="select select-error select-md w-full bg-slate-50 border border-gray-300">
                        <option disabled selected>Choose Manglik</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="text-center">
                    <h4 class="text-xl text-white font-semibold mt-12 mb-2 pb-1  italic">Partner Preference</h4>
                </div>


                <div class="my-8">
                    <label class="label">
                        <p class="label-text text-white text-xl  mb-2">Expected Income</p>
                        <p class="label-text-alt"></p>
                    </label>
                    <p id="inc_val" class="label-text text-slate-300 text-xl mb-2"></p>
                    <input type="text" id="amount" class="mb-2" readonly hidden>
                    <input name="expected_income_low" type="integer" readonly hidden>
                    <input name="expected_income_high" type="integer" readonly hidden>
                    <div id="ex_income"></div>
                </div>


                <div class="my-8">
                    <label class="label">
                        <p class="label-text text-white text-xl mb-2">Occupation</p>
                        <p class="label-text-alt"></p>
                    </label>

                    <select multiple name="expected_occupation[]" class="select select-error mx-auto" id="ex_occupation" multiple="multiple">
                        <option value="private">Private Job</option>
                        <option value="government">Government Job</option>
                        <option value="business">Business</option>
                    </select>
                </div>


                <div class="my-8">
                    <label class="label">
                        <p class="label-text text-white text-xl mb-2">Family Type</p>
                        <p class="label-text-alt"></p>
                    </label>

                    <select name="expected_family_type[]" class="select select-error" id="ex_family_type" multiple="multiple">
                        <option value="joint">Joint family</option>
                        <option value="nuclear">Nuclear family</option>
                    </select>
                </div>


                <div class="my-8">
                    <label class="label">
                        <p class="label-text text-white text-xl mb-2">Manglik</p>
                        <p class="label-text-alt"></p>
                    </label>

                    <select name="expected_is_manglik" class="select select-error select-md w-full bg-slate-50 border border-gray-300">
                        <option disabled selected>Choose Manglik</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                        <option value="both">Both</option>
                    </select>
                </div>


                <div class="text-center pt-1 mb-12 mt-10 pb-1">
                    <button type="submit" class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-400 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3 bg-gradient-to-r from-gray-900 via-green-400 to-green-700" type="button" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        {{ __('Update') }}
                    </button>
                </div>

            </form>



        </div>
    </div>
</section>

@endsection
