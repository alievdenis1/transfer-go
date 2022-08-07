@extends('layouts.app')

@section('content')
    <div class="jHRPSkHspjmJmR8TqBjnQ">
        <div class="tgc-layouts-full-height-table tgc-recipients">
            <div class="tgc-layouts-full-height-table tgc-profile">
                <div class="page">
                    <div class="outer-container">
                        <div class="content">
                            <div class="tgc-details">
                                <div class="title">Personal details</div>
                                <form action="/settings" method="post" class="tgc-profile-details-form-minified">
                                    @csrf
                                    <div class="sender-personal-details">
                                        <div class="row">
                                            <div class="tgc-text-input-updated"><label>First name</label><input
                                                    name="originalFirstName" type="text"
                                                    data-qa="input-originalFirstName" maxlength="255" value="{{$user['name']}}">
                                            </div>
                                            <div class="tgc-text-input-updated original-last-name"><label>Last
                                                    name</label><input name="originalLastName" type="text"
                                                                       data-qa="input-originalLastName" maxlength="255"
                                                                       value="{{$user['last_name']}}"></div>
                                        </div>
                                        <div class="row dob-phone-row">
                                            <div class="tgc-dob-fields-minified"><label>Date of birth</label>
                                                <div class="dob-fields">
                                                    <div class="dob-input-day">
                                                        <div class="tgc-text-input-updated"><input name="day"
                                                                                                   placeholder="DD"
                                                                                                   type="text"
                                                                                                   data-qa="input-day"
                                                                                                   value="{{$user['day_birth']}}"></div>
                                                    </div>
                                                    <div class="dob-input-month">
                                                        <div class="tgc-text-input-updated"><input name="month"
                                                                                                   placeholder="MM"
                                                                                                   type="text"
                                                                                                   data-qa="input-month"
                                                                                                   value="{{$user['month_birth']}}"></div>
                                                    </div>
                                                    <div class="dob-input-year">
                                                        <div class="tgc-text-input-updated"><input name="year"
                                                                                                   placeholder="YYYY"
                                                                                                   type="text"
                                                                                                   data-qa="input-year"
                                                                                                   value="{{$user['year_birth']}}"></div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="input-wrapper">
                                                <div class="phone-input-label">Phone number</div>
                                                    <div class="tgc-text-input-updated">
                                                        <input name="phone_number"
                                                               placeholder="8951 999 99 99"
                                                               type="text"
                                                        value="{{$user['phone_number']}}">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-wrapper">
                                            <div class="tgc-text-input-updated"><label>E-mail</label><input name="email"
                                                                                                            type="text"
                                                                                                            data-qa="input-email"
                                                                                                            maxlength="255"
                                                                                                            value="{{$user['email']}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="horizontal-divider"></div>
                                    <div class="tgc-address-inputs">
                                        <div class="tgc-text-input-updated"><label>Country</label><input name="country"
                                                                                                         type="text"
                                                                                                         data-qa="input-street"
                                                                                                         maxlength="255"
                                                                                                         value="{{$user['country']}}">
                                        </div>
                                        <div class="tgc-text-input-updated"><label>Address</label><input name="address"
                                                                                                         type="text"
                                                                                                         data-qa="input-street"
                                                                                                         maxlength="255"
                                                                                                         value="{{$user['address']}}">
                                        </div>
                                        <div class="city-postcode-row">
                                            <div class="tgc-text-input-updated half-input"><label>City</label><input
                                                    name="city" type="text" data-qa="input-city" maxlength="255"
                                                    value="{{$user['city']}}"></div>
                                            <div class="tgc-text-input-updated half-input"><label>Postcode</label><input
                                                    name="postcode" type="text" data-qa="input-postcode" maxlength="255"
                                                    value="{{$user['postcode']}}"></div>
                                        </div>
                                    </div>
                                    <div class="details-footer">
                                        <div class="requirement-block">All fields are required</div>
                                        <div class="button-wrapper">
                                            <button class="tgc-button large blue block-mobile" type="submit"><span
                                                    class="button-content">Save changes</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
